<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\index\index_top.html";i:1537314115;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/static/css/main.css" rel="stylesheet" type="text/css">
</head>
<body style="margin:-10px;">
<div id="header-div">
   <marquee behavior="scroll" direction='right' onmouseover="this.stop();" onmouseout="this.start();">
    <p style="font-size:30px; margin-top:0px;">
      <?php if(in_array(($name), explode(',',""))): ?>
      非法登录
      <?php else: ?>
      当前登录用户【<?php echo $name; ?>】
      <?php endif; ?>
   </p>
   </marquee> 
  <div id="submenu-div">
    <ul>
      <!-- <li><a href="index.php?act=about_us" target="main-frame">关于 ECSHOP</a></li>
      <li><a href="javascript:web_address();">帮助</a></li>
      <li><a href="../" target="_blank">查看网店</a></li>
      <li><a href="message.php?act=list" target="main-frame">管理员留言</a></li>
      <li><a href="index.php">刷新</a></li>
      <li><a href="#" onclick="ShowToDoList()">记事本</a></li>
      <li style="border-left:none;"><a href="index.php?act=first" target="main-frame">开店向导</a></li> -->
    </ul>
   
  </div>
</div>
<div id="menu-div">
  <ul>
    <!-- <li class="fix-spacel">&nbsp;</li> -->
    <li><a href="admin/index/index_main" target="main-frame">起始页</a></li>
    <li><a href="admin/goods/category_list" target="main-frame">商品分类</a></li>
        <li><a href="admin/goods/goods_list" target="main-frame">商品列表</a></li>
        <li><a href="admin/order/orders_list" target="main-frame">订单列表</a></li>
        <li><a href="admin/goods/comment_manage_list" target="main-frame">用户评论</a></li>
        <!--授权按钮1-->
          <li class="btn-bind">
        <img src="static/picture/authorizegk.png">
        <span href="javascript:void(0);" onclick="yunqiLogin();">授权用户专享</span>
      </li>
        <!--授权按钮-->
  </ul>
  <br class="clear" />
</div>
</body>
</html>