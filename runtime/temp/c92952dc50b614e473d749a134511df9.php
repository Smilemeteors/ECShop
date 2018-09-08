<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\WWW\shixun\ECShop\public/../application/admin\view\index\index_top.html";i:1536378686;}*/ ?>
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
  <div id="submenu-div">
    <ul>
      <li><a href="index.php?act=about_us" target="main-frame">关于 ECSHOP</a></li>
      <li><a href="javascript:web_address();">帮助</a></li>
      <li><a href="../" target="_blank">查看网店</a></li>
      <li><a href="message.php?act=list" target="main-frame">管理员留言</a></li>
      <li><a href="index.php">刷新</a></li>
      <li><a href="#" onclick="ShowToDoList()">记事本</a></li>
      <li style="border-left:none;"><a href="index.php?act=first" target="main-frame">开店向导</a></li>
    </ul>
   
  </div>
</div>
<div id="menu-div">
  <ul>
    <!-- <li class="fix-spacel">&nbsp;</li> -->
    <li><a href="index.php?act=main" target="main-frame">起始页</a></li>
    <li><a href="privilege.php?act=modif" target="main-frame">设置导航栏</a></li>
        <li><a href="goods.php?act=list" target="main-frame">商品列表</a></li>
        <li><a href="order.php?act=list" target="main-frame">订单列表</a></li>
        <li><a href="comment_manage.php?act=list" target="main-frame">用户评论</a></li>
        <li><a href="users.php?act=list" target="main-frame">会员列表</a></li>
        <li><a href="shop_config.php?act=list_edit" target="main-frame">商店设置</a></li>
        <li><a href="lead.php?act=list" target="main-frame">店铺二维码</a></li>
        <li><a href="service_market.php" target="main-frame">服务市场</a></li>
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