<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\logo\upLogo.html";i:1536889320;}*/ ?>
<!-- $Id: ads_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 修改广告 </title>
<base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="static/js/transport_2.js"></script><script type="text/javascript" src="static/js/common_2.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>
</head>
<body>
<h1>
    <a class="btn btn-right" href="admin/logo/logo">广告列表</a>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;修改广告 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/calendar.js"></script>
<link href="static/css/calendar.css" rel="stylesheet" type="text/css" />
<div class="main-div">
<form action="admin/logo/updateLogo" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
  <table width="100%" id="general-table">
    <tr>
      <td  class="label">
        <a href="javascript:showNotice('NameNotic');" title="点击此处查看提示信息">
        <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>广告名称</td>
      <td>
        <input type="text" name="ad_name" value="<?php echo $arr['ad_name']; ?>" size="35" />
        <br /><span class="notice-span" style="display:block"  id="NameNotic">广告名称只是作为辨别多个广告条目之用，并不显示在广告中</span>
      </td>
    </tr>
    <tr>
      <td class="label">媒介类型</td>
      <td>
       <select name="media_type" onchange="showMedia(this.value)">
          <option value='图片'>图片</option>
          <option value='Flash'>Flash</option>
          <option value='代码'>代码</option>
          <option value='文字'>文字</option>
       </select>
      </td>
    </tr>
	  <tr>
      <td  class="label">广告位置</td>
      <td>
        <select name="position_id" value="<?php echo $arr['position_id'] ?>">
          <?php foreach ($re as $key => $val) { ?>
            <option value='<?php echo $val['position_id'] ?>'><?php echo $val['position_name'] ?></option>
          <?php } ?>          
        </select>
      </td>
    </tr>
    <tr>
      <td  class="label">开始日期</td>
      <td>
        <input type="text" name="start_time" id="start_time" size="22" value='<?php echo $arr['start_time'] ?>' readonly="readonly" /><button name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d', false, false, 'selbtn1');" class="cal"><img src="static/picture/cal.png" alt=""></button>
      </td>
    </tr>
    <tr>
      <td class="label">结束日期</td>
      <td>
        <input type="text" name="end_time" id="end_time" size="22" value='<?php echo $arr['end_time'] ?>' readonly="readonly"><button name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d', false, false, 'selbtn2');" class="cal"><img src="static/picture/cal.png" alt=""></button>
      </td>
    </tr>
      <tbody id="0">
    <tr>
      <td  class="label">
        <a href="javascript:showNotice('AdCodeImg');" title="点击此处查看提示信息">
        <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>上传广告图片</td>
      <td>
        <input type='file' name='ad_img' size='35' />
        <br /><span class="notice-span" style="display:block"  id="AdCodeImg">上传该广告的图片文件,或者你也可以指定一个远程URL地址为广告的图片</span>
      </td>
    </tr>
    <tr>
      <td  class="label">是否开启</td>
      <td>
        <input type="radio" name="enabled" value="1"  checked="true"  />开启        <input type="radio" name="enabled" value="0"  />关闭      </td>
    </tr>
    <tr>
      <td  class="label">广告联系人</td>
      <td>
        <input type="text" name="link_man" value="<?php echo $arr['link_man'] ?>" size="35" />
      </td>
    </tr>
    <tr>
      <td  class="label">联系人Email</td>
      <td>
        <input type="text" name="link_email" value="<?php echo $arr['link_email'] ?>" size="35" />
      </td>
    </tr>
    <tr>
      <td  class="label">联系电话</td>
      <td>
        <input type="text" name="link_phone" value="<?php echo $arr['link_phone'] ?>" size="35" />
      </td>
    </tr>
    <tr>
       <td class="label">&nbsp;</td>
       <td>
        <input type="submit" value=" 确定 " class="button" />
        <input type="reset" value=" 重置 " class="button" />
      </td>
    </tr>
    <input type="hidden" name="ad_id" value="<?php echo $arr['ad_id'] ?>" />
 </table>

</form>
</div>
<div id="footer">
共执行 3 个查询，用时 0.009382 秒，Gzip 已禁用，内存占用 1.189 MB<br />
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