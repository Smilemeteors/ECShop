<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\category_move.html";i:1537449777;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0076)http://127.0.0.1/ECShop1/source/ecshop/admin/category.php?act=move&cat_id=26 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 转移商品 </title>
<meta name="robots" content="noindex, nofollow">
<base href="/" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body style="cursor: auto;">
<h1>
      <a class="btn btn-right" href="http://127.0.0.1/ECShop1/source/ecshop/admin/category.php?act=list">商品分类</a>
  
    <span class="action-span1"><a href="http://127.0.0.1/ECShop1/source/ecshop/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;&gt;&nbsp;&nbsp;转移商品 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
<form action="<?php echo url('category_move_do'); ?>" method="post" name="theForm" enctype="multipart/form-data">
<table width="100%">
  <tbody><tr>
    <td>
      <div style="font-weight:bold"><img src="./ECSHOP 管理中心 - 转移商品_files/notice.svg" width="16" height="16" border="0"> 什么是转移商品分类?</div>
       <ul>
         <li>在添加商品或者在商品管理中,如果需要对商品的分类进行变更,那么你可以通过此功能,正确管理你的商品分类。</li>
       </ul>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <strong>从此分类</strong>&nbsp;&nbsp;
      <select>
       <option value="0">请选择...</option>
  		<?php foreach($cate as $k=>$v): ?>
       		<option value="<?php echo $v['cat_id']; ?>" selected="ture"><?php echo $v['cat_name']; ?></option>
		<?php endforeach; ?>
      </select>&nbsp;&nbsp;
      <strong>转移到</strong>
      <select name="parent_id">
       <option value="0">请选择...</option>
       <?php foreach($list as $k=>$v): ?>
       		<option value="<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></option>
		<?php endforeach; ?>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" value="开始转移" class="button">
      <input type="reset" value=" 重置 " class="button">
      <!-- <input type="hidden" name="act" value="move_cat"> -->
    </td>
  </tr>
</tbody></table>
</form>
</div>

<script type="text/javascript" src="./ECSHOP 管理中心 - 转移商品_files/utils.js.下载"></script><script type="text/javascript" src="./ECSHOP 管理中心 - 转移商品_files/validator.js.下载"></script>
<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>

<div id="footer">
共执行 2 个查询，用时 0.006518 秒，Gzip 已禁用，内存占用 1.546 MB<br>
版权所有 © 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tbody><tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="http://127.0.0.1/ECShop1/source/ecshop/admin/order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </tbody></table>
</div>
</body></html>