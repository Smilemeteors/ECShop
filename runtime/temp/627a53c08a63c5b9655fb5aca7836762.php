<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"E:\ECShop\public/../application/admin\view\logo\logo.html";i:1536626420;}*/ ?>
﻿<!-- $Id: ads_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 广告列表 </title>
<base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />

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
var posit_name_empty = "广告位名称不能为空!";
var ad_width_empty = "请输入广告位的宽度!";
var ad_height_empty = "请输入广告位的高度!";
var ad_width_number = "广告位的宽度必须是一个数字!";
var ad_height_number = "广告位的高度必须是一个数字!";
var no_outside_address = "建议您指定该广告所要投放的站点的名称，方便于该广告的来源统计!";
var width_value = "广告位的宽度值必须在1到1024之间!";
var height_value = "广告位的高度值必须在1到1024之间!";
var ad_name_empty = "请输入广告名称!";
var ad_link_empty = "请输入广告的链接URL!";
var ad_text_empty = "广告的内容不能为空!";
var ad_photo_empty = "广告的图片不能为空!";
var ad_flash_empty = "广告的flash不能为空!";
var ad_code_empty = "广告的代码不能为空!";
var empty_position_style = "广告位的模版不能为空!";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2Fwww.localhost.com%2F12%2FECShop%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
<h1>
      <a class="btn btn-right" href="admin/logo/addLogo">添加广告</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;广告列表 </span>
  <div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<!-- start ads list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th><a href="javascript:listTable.sort('ad_name'); ">广告名称</a><img src="static/picture/sort_desc.png"/></th>
    <th><a href="javascript:listTable.sort('position_id'); ">广告位置</a></th>
    <th><a href="javascript:listTable.sort('media_type'); ">媒介类型</a></th>
    <th><a href="javascript:listTable.sort('start_date'); ">开始日期</a></th>
    <th><a href="javascript:listTable.sort('end_date'); ">结束日期</a></th>
    <th><a href="javascript:listTable.sort('link_man'); ">广告联系人</a></th>
    <th><a href="javascript:listTable.sort('link_man'); ">联系人Email</a></th>
    <th><a href="javascript:listTable.sort('link_man'); ">联系电话</a></th>
    <th>操作</th>
  <?php foreach ($arr as $key => $val) { ?>
  <tr>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, 'edit_ad_name', 7)"><?php echo $val['ad_name'] ?></span>
    </td>
    <td align="left"><span><?php echo $val['position_id'] ?></span>
    </td>
    <td align="left"><span><?php echo $val['media_type'] ?></span></td>
    <td align="center"><span><?php echo $val['start_time'] ?></span></td>
    <td align="center"><span><?php echo $val['end_time'] ?></span></td>
    <td align="center"><span><?php echo $val['link_man'] ?></span></td>
    <td align="center"><span><?php echo $val['link_phone'] ?></span></td>
    <td align="center"><span><?php echo $val['link_email'] ?></span></td>
    <td align="right"><span>
      <a href="admin/Logo/upLogo?id=<?php echo $val['ad_id'] ?>" title="编辑">编辑</a>
      <a href="admin/Logo/delLogo?id=<?php echo $val['ad_id'] ?>" title="移除">移除</a></span>
    </td>
  </tr>
  <?php } ?>
  <!-- <tr><td class="no-records" colspan="10">您还没有添加广告</td></tr> -->
  <tr>
    <td align="right" nowrap="true" colspan="10"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
      <div id="turn-page">
      <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
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
      </span>
      </div>
    </td>
  </tr>
</table>

</div>
</form>
<div id="footer">
共执行 4 个查询，用时 0.011053 秒，Gzip 已禁用，内存占用 1.192 MB<br />
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
