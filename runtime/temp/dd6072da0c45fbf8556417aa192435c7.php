<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\member\users.html";i:1537314115;}*/ ?>
﻿<!-- $Id: users_list.htm 17053 2010-03-15 06:50:26Z sxc_shop $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main.css" rel="stylesheet" type="text/css" />
<style>
/*分页*/
.pagination {}
.pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
.pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
.pagination li a {display: block;text-align: center;}
</style>
</head>
<body>
<!--云起激活系统面板-->
<div class="panel-hint panel-icloud" id="panelCloud">
  <div class="panel-cross"><span onclick="btnCancel(this)">Ｘ</span></div>
  <div class="panel-title">
    <span class="tit">您需要激活系统</span>
    <p>用云起账号激活您的系统，享受物流查询，天工收银，手机短信等更多应用和服务</p>
  </div>
  <div class="panel-left">
    <span>没有云起账号吗？</span>
    <p>点击下列按钮一步完成注册激活！</p>
    <a href="https://account.shopex.cn/reg?refer=yunqi_ecshop" target="_blank" class="btn btn-yellow">免费注册云起账号</a>
  </div>
  <div class="panel-right">
    <h5 class="logo">云起</h5>
    <p>正在激活中</p>
    <iframe src="" frameborder="0" id="CFrame"></iframe>
    <div class="cloud-passw">
      <a target="_blank" href="https://account.shopex.cn/forget?">忘记密码？</a>
    </div>
  </div>
</div>
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
    <a class="btn btn-right action-span6" href="http://yunqi.shopex.cn/products/crm" target="_blank">开通会员高级管理</a>
      <a class="btn btn-right" href="user_add.html">添加会员</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;会员列表 </span>
  <div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:searchUser()" name="searchForm">
    <!-- <img src="/static/picture/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" /> -->
    &nbsp;会员等级 <select name="user_rank">
    <option value="0">所有等级</option>
    <?php foreach ($to as $key => $va){ ?>          
    <option value="<?=$va['rank_id']?>" id="<?=$va['rank_id']?>"><?=$va['rank_name']?></option>
    <?php } ?>
   </select>
    &nbsp;会员积分大于&nbsp;<input type="text" name="pay_points_gt" size="8" />&nbsp;会员积分小于&nbsp;<input type="text" name="pay_points_lt" size="10" />
    &nbsp;会员名称 &nbsp;<input type="text" name="keyword" /> 
    <input type="submit" class="button" value=" 搜索 ">
  </form>
</div>

<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">

<!-- start users list -->
<div class="list-div" id="listDiv">
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a href="javascript:listTable.sort('user_id'); ">编号</a><img src="/static/picture/sort_desc.png">    </th>
    <th><a href="javascript:listTable.sort('user_name'); ">会员名称</a></th>
    <th><a href="javascript:listTable.sort('email'); ">邮件地址</a></th>
    <th><a href="javascript:listTable.sort('is_validated'); ">是否已验证</a></th>
    <th>可用资金</th>
    <th>冻结资金</th>
    <th>等级积分</th>
    <th>消费积分</th>
    <th><a href="javascript:listTable.sort('reg_time'); ">注册日期</a></th>
    <th>操作</th>
  <tr>
    <?php foreach ($list as $key => $v) { ?>
      <tr>
        <td><input type="checkbox" name="checkboxes[]" value="1" notice="0"/><?=$v['user_id']?></td>
        <td class="first-cell"><?=$v['user_name']?></td>
        <td><span onclick="listTable.edit(this, 'edit_email', <?=$v['user_id']?>)"><?=$v['email']?></span></td>
        

          <?php if(in_array(($v['is_validated']), explode(',',"1"))): ?>
          <td align="center">
            <img src="/static/picture/yes.svg" class="is_validated" id="<?php echo $v['user_id']; ?>"  value='<?php echo $v['is_validated']; ?>' width="20"/>
          </td>
          <td><?=$v['user_money']?></td>
          <td><?=$v['frozen_money']?></td>
          <td><?=$v['pay_points']?></td>
          <td><?=$v['rank_points']?></td>
          <?php else: ?>
          <td align="center">
            <img src="/static/picture/no.svg" class="is_validated" id="<?php echo $v['user_id']; ?>"  value='<?php echo $v['is_validated']; ?>' width="20"/>
          </td>
          <td>0.00</td>
          <td>0.00</td>
          <td>0</td>
          <td>0</td>
          <?php endif; ?>                
        <td align="center"><?=$v['reg_time'];?></td>
        <td align="center">
          <a href="<?php echo url('users_edit'); ?>?id=<?=$v['user_id']?>" title="编辑">编辑</a>
          <a href="user_address_list.html?id=<?=$v['user_id']?>" title="收货地址">收货地址</a>
          <a href="<?php echo url('orders_list'); ?>?user_id=<?=$v['user_id']?>" title="查看订单">查看订单</a>
          <a href="account_log_list.html?id=<?=$v['user_id']?>" title="查看账目明细">查看账目明细</a>
          <a href="<?php echo url('users_del'); ?>?id=<?=$v['user_id']?>" title="移除">移除</a>
        </td>
      </tr>
    <?php } ?>
  <!--   <tr>
    <td><input type="checkbox" name="checkboxes[]" value="1" notice="0"/>1</td>
    <td class="first-cell">ecshop</td>
    <td><span onclick="listTable.edit(this, 'edit_email', 1)">ecshop@ecshop.com</span></td>
    <td align="center"> <img src="static/picture/no.svg" width="20"> </td>
    <td>0.00</td>
    <td>0.00</td>
    <td>0</td>
    <td>0</td>
    <td align="center">2017-09-13</td>
    <td align="center">
      <a href="users.php?act=edit&id=1" title="编辑">编辑</a>
      <a href="users.php?act=address_list&id=1" title="收货地址">收货地址</a>
      <a href="order.php?act=list&user_id=1" title="查看订单">查看订单</a>
      <a href="account_log.php?act=list&user_id=1" title="查看账目明细">查看账目明细</a>
      <a href="javascript:confirm_redirect('您确定要删除该会员账号吗？', 'users.php?act=remove&id=1')" title="移除">移除</a>
    </td>
  </tr> -->
    <tr>
      <td colspan="3">
      <input type="hidden" name="act" value="batch_remove" />
      <!-- <input type="submit" id="btnSubmit" value="删除会员" disabled="true" class="button" /></td> -->
      <td align="right" nowrap="true" colspan="8">
      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page" align="center">
      
      <?php echo $page; ?>
    </div>
      </td>
  </tr>
</table>

</div>
<!-- end users list -->
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" language="JavaScript">
<!--
$(document).on('click','.is_validated',function(){
    var status = $(this).attr('value');
    var user_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('user_put'); ?>",
      data:{status:status,user_id:user_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){
          alert(res.msg);
          return false;
        }else{

          if(status==1){

            obj.prop("src","/static/picture/no.svg");
            obj.attr("value",0)
          }else{

            obj.prop("src","/static/picture/yes.svg");
            obj.attr("value",1)
          }
        }
      }
    })
  })
// $(document).on('click',".button",function(){
//     var user_id = $(this).attr('.<?php echo $va['rank_id']; ?>');
//     alert(user_id)
// })
listTable.recordCount = 2;
listTable.pageCount = 1;

listTable.filter.keywords = '';
listTable.filter.rank = '0';
listTable.filter.pay_points_gt = '0';
listTable.filter.pay_points_lt = '0';
listTable.filter.sort_by = 'user_id';
listTable.filter.sort_order = 'DESC';
listTable.filter.record_count = '2';
listTable.filter.page_size = '15';
listTable.filter.page = '1';
listTable.filter.page_count = '1';
listTable.filter.start = '0';


onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 搜索用户
 */
function searchUser()
{
    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['rank'] = document.forms['searchForm'].elements['user_rank'].value;
    listTable.filter['pay_points_gt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_gt'].value);
    listTable.filter['pay_points_lt'] = Utils.trim(document.forms['searchForm'].elements['pay_points_lt'].value);
    listTable.filter['page'] = 1;
    listTable.loadList();
}

function confirm_bath()
{
  userItems = document.getElementsByName('checkboxes[]');

  cfm = '您确定要删除所有选中的会员账号吗？';

  for (i=0; userItems[i]; i++)
  {
    if (userItems[i].checked && userItems[i].notice == 1)
    {
      cfm = '选中的会员账户中仍有余额或欠款\n' + '您确定要删除所有选中的会员账号吗？';
      break;
    }
  }

  return confirm(cfm);
}
//-->
</script>

<div id="footer">
共执行 6 个查询，用时 0.016915 秒，Gzip 已禁用，内存占用 1.171 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="static/picture/msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

<!--
<embed src="static/flash/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="/static/images/online.swf">
  <param name="quality" value="high">
  <embed src="/static/images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background-color: #eee;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("/static//js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("/static/js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("/static/js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>
</body>
</html>