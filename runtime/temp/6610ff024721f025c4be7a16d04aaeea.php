<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\ECShop\public/../application/admin\view\logo\addPosition.html";i:1536371816;}*/ ?>
﻿<!-- $Id: ad_position_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加广告位 </title>
<base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general_1.css" rel="stylesheet" type="text/css" />
<link href="static/css/main_1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
      <a class="btn btn-right" href="admin/logo/position">广告位置</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加广告位 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
  <form action="admin/logo/addPosition" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
    <table width="100%">
      <tr>
        <td class="label"><a href="javascript:showNotice('NameNotic');" title="点击此处查看提示信息">
        <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>广告位名称</td>
        <td><input type="text" name="position_name" value="" size="30" /></td>
      </tr>
      <tr>
        <td class="label">广告位宽度</td>
        <td><input type="text" name="position_width" value="" size="30" /> 像素</td>
      </tr>
      <tr>
        <td class="label">广告位高度</td>
        <td>
          <input type="text" name="position_height" value="" size="30" /> 像素</td>
      </tr>
      <tr>
        <td class="label">广告位描述</td>
        <td>
          <input type="text" name="position_desc" size="55" value="" />
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('AdCodeImg');" title="点击此处查看提示信息">
          <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>广告位模板</td>
        <td>
          <input type='file' name='position_style' size='35' />
        </td>
      </tr>
      <tr>
        <td class="label">&nbsp;</td>
        <td>
          <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </td>
      </tr>
     <tr>
       <td colspan="2">
         <!-- <input type="hidden" name="act" value="insert" /> -->
         <input type="hidden" name="position_id" value="" />
       </td>
     </tr>
    </table>
  </form>
</div>
<div id="footer">
共执行 2 个查询，用时 0.007338 秒，Gzip 已禁用，内存占用 1.097 MB<br />
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
</body>
</html>