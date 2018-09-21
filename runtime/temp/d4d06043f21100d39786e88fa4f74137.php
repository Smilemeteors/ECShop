<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\logo\position.html";i:1537314115;}*/ ?>
﻿<!-- $Id: ad_position_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 广告位置 </title>
<base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general_1.css" rel="stylesheet" type="text/css" />
<link href="static/css/main_1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
      <a class="btn btn-right" href="admin/logo/addPosition">添加广告位</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;广告位置 </span>
  <div style="clear:both"></div>
</h1>
<form method="post" action="admin/Logo/addPosition" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th><center>广告位名称</center></th>
    <th><center>位置宽度</center></th>
    <th><center>位置高度</center></th>
    <th><center>广告位描述</center></th>
    <th><center>操作</center></th>
  </tr>
  <?php foreach ($re as $key => $val) { ?>
  <tr>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, 'edit_ad_name', 7)"><?php echo $val['position_name'] ?></span>
    </td>
    <td align="left"><span><?php echo $val['position_width'] ?></span>
    </td>
    <td align="left"><span><?php echo $val['position_height'] ?></span></td>
    <td align="center"><span><?php echo $val['position_desc'] ?></span></td>
    <td align="right"><span>
      <a href="admin/Logo/detail?id=<?php echo $val['position_id'] ?>" title="查看">查看</a>
      <a href="admin/Logo/upPosition?id=<?php echo $val['position_id'] ?>" title="编辑">编辑</a>
      <a href="admin/Logo/delPosition?id=<?php echo $val['position_id'] ?>" title="移除">移除</a></span>
    </td>
  </tr>
  <?php } ?> 
  <tr><td align="right" nowrap="true" colspan="5"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
 <!--  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">0</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option>    
    </select>
  </span> -->
  <?php echo $re->render(); ?>
</div>
</td></tr>
</table>

</div>
<!-- end ad_position list -->
</form>

<div id="footer">
共执行 4 个查询，用时 0.008329 秒，Gzip 已禁用，内存占用 1.080 MB<br />
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