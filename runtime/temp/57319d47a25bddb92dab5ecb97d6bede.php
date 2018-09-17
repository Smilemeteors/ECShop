<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\member\user_rank.html";i:1536819264;}*/ ?>
﻿<!-- $Id: user_rank.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员等级 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/js/transport.js"></script><script type="text/javascript" src="/static/js/common.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>

<script>
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var remove_confirm = "您确定要删除选定的会员等级吗？";
var rank_name_empty = "您没有输入会员等级名称。";
var integral_min_invalid = "您没有输入积分下限或者积分下限不是一个整数。";
var integral_max_invalid = "您没有输入积分上限或者积分上限不是一个整数。";
var discount_invalid = "您没有输入折扣率或者折扣率无效。";
var integral_max_small = "积分上限必须大于积分下限。";
var lang_remove = "移除";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2Fshixun%2FEC4%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
	    }
	}

	/*关闭按钮*/
	function btnCancel(item){
	  var par  = item.offsetParent;
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  par.style.display = 'none';
	  if(mask){mask.style.display = 'none';}
	  frame.src = '';
	}
</script>
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
      <a class="btn btn-right" href="user_rank_add.html">添加会员等级</a>
  
    <span class="action-span1"><a href="admin/Index/index_main.html">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;会员等级 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/listtable.js"></script>
<form method="post" action="" name="listForm">
<!-- start ads list -->
<div class="list-div" id="listDiv">

<table cellspacing='1' id="list-table">
  <tr>
    <th>会员等级名称</th>
    <th>积分下限</th>
    <th>积分上限</th>
    <th>初始折扣率(%)</th>
    <th>特殊会员组</th>
    <th>显示价格</th>
    <th>操作</th>
  </tr>
  <?php foreach ($list as $k => $v) { ?>
      <tr>
      <td class="first-cell" ><span onclick="listTable.edit(this,'edit_name', <?=$v['rank_id']?>)"><?=$v['rank_name']?></span></td>
      <td align="right"><span  onclick="listTable.edit(this, 'edit_min_points', <?=$v['rank_id']?>)"  ><?=$v['min_points']?></span></td>
      <td align="right"><span  onclick="listTable.edit(this, 'edit_max_points', <?=$v['rank_id']?>)"  ><?=$v['max_points']?></span></td>
      <td align="right"><span onclick="listTable.edit(this, 'edit_discount', <?=$v['rank_id']?>)"><?=$v['discount']?></span></td>
      <td align="center">
          <?php if(in_array(($v['special_rank']), explode(',',"1"))): ?>
          <img src="/static/picture/yes.svg" class="special_rank" id="<?php echo $v['rank_id']; ?>"  value='<?php echo $v['special_rank']; ?>' width="20"/>
          <?php else: ?>
          <img src="/static/picture/no.svg" class="special_rank" id="<?php echo $v['rank_id']; ?>"  value='<?php echo $v['special_rank']; ?>' width="20"/>
          <?php endif; ?>
      </td>
      <td align="center">
          <?php if(in_array(($v['show_price']), explode(',',"1"))): ?>
          <img src="/static/picture/yes.svg" class="show_price" id="<?php echo $v['rank_id']; ?>"  value='<?php echo $v['show_price']; ?>' width="20"/>
          <?php else: ?>
          <img src="/static/picture/no.svg" class="show_price" id="<?php echo $v['rank_id']; ?>"  value='<?php echo $v['show_price']; ?>' width="20"/>
          <?php endif; ?>
        </td>
      <td align="center">
      <a href="<?php echo url('user_rank_del'); ?>?id=<?=$v['rank_id']?>" title="移除">移除</a></td>
    </tr>
  <?php } ?>
    
    <!-- <tr>
    <td class="first-cell" ><span onclick="listTable.edit(this,'edit_name', 2)">vip</span></td>
    <td align="right"><span  onclick="listTable.edit(this, 'edit_min_points', 2)"  >10000</span></td>
    <td align="right"><span  onclick="listTable.edit(this, 'edit_max_points', 2)"  >10000000</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_discount', 2)">95</span></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_special', 2)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_showprice', 2)" /></td>
    <td align="center">
    <a href="javascript:;" onclick="listTable.remove(2, '您确认要删除这条记录吗?')" title="移除"><img src="static/picture/icon_drop.svg" border="0" height="16" width="16"></a></td>
  </tr>
    <tr>
    <td class="first-cell" ><span onclick="listTable.edit(this,'edit_name', 3)">代销用户</span></td>
    <td align="right"><span  >0</span></td>
    <td align="right"><span  >0</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_discount', 3)">90</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_special', 3)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_showprice', 3)" /></td>
    <td align="center">
    <a href="javascript:;" onclick="listTable.remove(3, '您确认要删除这条记录吗?')" title="移除"><img src="static/picture/icon_drop.svg" border="0" height="16" width="16"></a></td>
  </tr> -->
    </table>

</div>
<!-- end user ranks list -->
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="Text/Javascript" language="JavaScript">
<!--
$(document).on('click','.special_rank',function(){
    var status = $(this).attr('value');
    var rank_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('user_rank_put'); ?>",
      data:{status:status,rank_id:rank_id},
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
$(document).on('click','.show_price',function(){
    var status = $(this).attr('value');
    var rank_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('user_rank_put1'); ?>",
      data:{status:status,rank_id:rank_id},
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
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>
<div id="footer">
共执行 3 个查询，用时 0.018365 秒，Gzip 已禁用，内存占用 1.083 MB<br />
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
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
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
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
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