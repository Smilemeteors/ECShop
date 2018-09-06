<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\quanxi\admin_logs.html";i:1536194187;}*/ ?>
﻿<!-- $Id: admin_logs.htm 15477 2008-12-22 03:44:50Z sunxiaodong $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 管理员日志 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general_2.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main_2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/js/transport_2.js"></script><script type="text/javascript" src="/static/js/common_2.js"></script>
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
var select_date_value = "如果您要清除日志,请选择清除的日期";
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
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;管理员日志 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils_2.js"></script><script type="text/javascript" src="static/js/listtable_2.js"></script>
<div class="form-div">
<table>
    <tr>
      <td width="50%">
      <form name="theForm" method="POST" action="admin_logs.php">
      按IP地址查看      <select name="ip">
      <option value='0'>选择IP地址...</option>
      <option value="0.0.0.0">0.0.0.0</option><option value="127.0.0.1">127.0.0.1</option>      </select>
      <input type="submit" value="确定" class="button" />
      </form>
      </td>
      <td>
      <form name="Form2" action="admin_logs.php?act=batch_drop" method="POST">
      清除日志      <select name="log_date">
        <option value='0'>选择清除的日期...</option>
        <option value='1'>一周之前</option>
        <option value='2'>一个月之前</option>
        <option value='3'>三个月之前</option>
        <option value='4'>半年之前</option>
        <option value='5'>一年之前</option>
      </select>
      <input name="drop_type_date" type="submit" value="确定" class="button" />
      </form>
      </td>
    </tr>
</table>
</div>

<form method="POST" action="admin_logs.php?act=batch_drop" name="listForm">
<!-- start admin_logs list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
    <a href="javascript:listTable.sort('log_id'); ">编号</a><img src="static/picture/sort_desc_1.png"/></th>
    <th><a href="javascript:listTable.sort('user_id'); ">操作者</a></th>
    <th><a href="javascript:listTable.sort('log_time'); ">操作日期</a></th>
    <th><a href="javascript:listTable.sort('ip_address'); ">IP地址</a></th>
    <th>操作记录</th>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="470" />470</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-09-05 14:16:49</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>编辑会员账号: vip</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="469" />469</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-09-05 10:12:44</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>编辑会员账号: vip</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="468" />468</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-08-31 10:09:52</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>添加订单: 2018083161519</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="467" />467</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-08-31 10:07:53</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>添加订单: 2018083167782</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="466" />466</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-08-31 09:36:35</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>编辑商品类型: 音乐</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="465" />465</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-08-31 09:36:34</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>编辑商品类型: 书</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="464" />464</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2018-08-31 09:36:32</span></td>
    <td width="15%" align="left"><span>127.0.0.1</span></td>
    <td width="40%" align="left"><span>编辑商品类型: 手机</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="463" />463</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:26:51</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>还原数据库备份: 备份时间2009-06-17 07:23:51</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="462" />462</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:23:07</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="461" />461</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:22:20</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="460" />460</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:18:48</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑商品分类: GSM手机</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="459" />459</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:17:23</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑商品分类: 手机类型</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="458" />458</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:16:18</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑商店设置: </span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="457" />457</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:13:52</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑商品: KD876</span></td>
  </tr>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="456" />456</span></td>
    <td width="15%" class="first-cell"><span>admin</span></td>
    <td width="20%" align="center"><span>2009-06-17 15:10:58</span></td>
    <td width="15%" align="left"><span>0.0.0.0</span></td>
    <td width="40%" align="left"><span>编辑商品: 飞利浦9@9v</span></td>
  </tr>
    <tr>
    <td colspan="2"><input name="drop_type_id" type="submit" id="btnSubmit" value="清除日志" disabled="true" class="button" /></td>
    <td align="right" nowrap="true" colspan="10"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">32</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">469</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='32'>32</option>    </select>
  </span>
</div>
</td>
  </tr>
</table>

</div>
<!-- end ad_position list -->

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = 469;
  listTable.pageCount = 32;

    listTable.filter.sort_by = 'al.log_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '469';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '32';
    listTable.filter.start = '0';
    
  onload = function()
  {
    // &#65533;&#65533;&#700;&#65533;&#65533;鹜&#65533;&#65533;
    startCheckOrder();
  }
  
</script>
<div id="footer">
共执行 5 个查询，用时 0.026873 秒，Gzip 已禁用，内存占用 1.098 MB<br />
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
<embed src="static/flash/online_2.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
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