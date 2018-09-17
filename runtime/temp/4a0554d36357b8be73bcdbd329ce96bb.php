<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\member\user_msg.html";i:1536917084;}*/ ?>
﻿<!-- $Id: msg_list.htm 15616 2009-02-18 05:16:22Z sunxiaodong $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员留言 </title>
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;会员留言 </span>
  <div style="clear:both"></div>
</h1></script><div class="form-div">
  <form action="" name="searchForm">
    <img src="/static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    类型:
    <select name="msg_type">
      <option value="-1">请选择...</option>
      <option value="0">留言</option>
      <option value="1">投诉</option>
      <option value="2">询问</option>
      <option value="3">售后</option>
      <option value="4">求购</option>
	  <option value="5">商家留言</option>
    </select>
    留言标题: <input type="text" name="keyword" /> <input type="submit" class="button" value=" 搜索 " />
  </form>
</div>
<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">
<!-- start article list -->
<div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('msg_id'); ">编号</a><img src="/static/picture/sort_desc.png">    </th>
    <th><a href="javascript:listTable.sort('user_name'); ">用户名</a></th>
    <th><a href="javascript:listTable.sort('msg_title'); ">留言标题</a></th>
    <th><a href="javascript:listTable.sort('msg_type'); ">类型</a></th>
    <th><a href="javascript:listTable.sort('msg_time'); ">留言时间</a></th>
    <th><a href="javascript:listTable.sort('msg_status'); ">状态</a></th>
    <th><a href="javascript:listTable.sort('reply'); ">回复</a></th>
    <th>操作</th>
  </tr>
  <?php foreach ($list as $key => $v) { ?>
      <tr>
      <td><input type="checkbox" name="checkboxes[]" value="1" /><?=$v['msg_id']?></td>
      <td align="center"><?=$v['user_name']?></td>
      <td align="left"><?=$v['msg_title']?></td>
      <td align="center"><?=$v['msg_type']?></a></td>
      <td align="center"  nowrap="nowrap"><?=$v['msg_time']?></td>
          <td align="center"><?=$v['msg_status']?></td>
          <td align="center">回复</td>
      <td align="center">
        <a href="user_msg_view.html?id=<?=$v['msg_id']?>" title="查看详情">
          查看详情
        </a>
        <a href="<?php echo url('user_msg_del'); ?>?id=<?=$v['msg_id']?>" onclick="listTable.remove(<?=$v['msg_id']?>, '您确认要删除这条记录吗?')"  title="移除">
          移除
        </a>
      </td>
    </tr>
  <?php } ?>

<tr>
  <td colspan="3" ></td>
      <!-- <input type="hidden" name="act" value="batch_remove" /> -->
    <td align="right" nowrap="true">
  <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
    <div id="turn-page" align="center">
      
      <?php echo $page; ?>
    </div>
  </td>
</tr>
</table>
</div>
<!-- end article list -->
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" language="JavaScript">
listTable.recordCount = 1;
listTable.pageCount = 1;
cfm = new Object();
cfm['allow'] = '你确定要允许显示所选评论吗？';
cfm['remove'] = '你确定要删除所选评论吗？';
cfm['deny'] = '你确定要禁止显示所选评论吗？';
listTable.filter.keywords = '';
listTable.filter.msg_type = '-1';
listTable.filter.sort_by = 'f.msg_id';
listTable.filter.sort_order = 'DESC';
listTable.filter.record_count = '1';
listTable.filter.page_size = '15';
listTable.filter.page = '1';
listTable.filter.page_count = '1';
listTable.filter.start = '0';

<!--
onload = function()
{
    document.forms['searchForm'].elements['keyword'].focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 搜索标题
 */
function searchMsg()
{
    var keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    var msgType = document.forms['searchForm'].elements['msg_type'].value;

    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['msg_type'] = document.forms['searchForm'].elements['msg_type'].value;
    listTable.filter['page'] = 1;
    listTable.loadList();
}

function confirm_bath()
{
    var action = document.forms['listForm'].elements['sel_action'].value;
    if (action == 'allow'||action == 'remove'||action == 'deny')
      {
          return confirm(cfm[action]);
      }
}
//-->
</script>

<div id="footer">
共执行 2 个查询，用时 0.016423 秒，Gzip 已禁用，内存占用 1.114 MB<br />
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
    var global = $import("../js/global.js","js");
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