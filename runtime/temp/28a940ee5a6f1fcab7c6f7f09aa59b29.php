<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\shopcar\car.html";i:1537350057;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0059)http://www.ecshop4.0.com/home/index/<?php echo url('shopcar/car'); ?>?step=cart -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v4.0.0">

<meta name="Keywords" content="">
<meta name="Description" content="">
<title>购物流程_ECSHOP演示站 - Powered by ECShop</title>

<link rel="shortcut icon" href="http://www.ecshop4.0.com/home/index/favicon.ico">
<link rel="icon" href="http://www.ecshop4.0.com/home/index/animated_favicon.gif" type="/static1/images/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/shopping_flow.js"></script></head>
<body>

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="/static1/js/transport.js"></script><script type="text/javascript" src="/static1/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 欢迎光临本店<a href="<?php echo url('Login/login'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('Login/reg'); ?>">免费注册</a>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <a href="<?php echo url('user/welcome'); ?>" class="">用户中心</a>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="<?php echo url('shopcar/car'); ?>" title="查看购物车">购物车(0)</a> </div>
    </div>
  </div>
</div>
<div class="nav-menu">
  <div class="wrap">
    <div class="logo"><a href="<?php echo url('index/index'); ?>" name="top"><img src="/static1/images/logo.gif"></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul> 
        <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
          <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

              <li><a href="<?php echo url('index/fenlei'); ?>?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a></li>
           <?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>
      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="http://www.ecshop4.0.com/home/index/search.html" onsubmit="return checkSearchForm()" class="f_r">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="135"><input name="keywords" type="text" id="keyword" value="" class="B_input"></td>
            <td><input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;"></td>
          </tr>
        </tbody></table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>

<div class="block box">
 <div id="ur_here">
  <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a> <code>&gt;</code> 购物流程</div></div> </div>
</div>

<div class="blank"></div>
<div class="block">
    
  
  <script type="text/javascript" src="/static1/images/showdiv.js.下载"></script>  <script type="text/javascript">
      var user_name_empty = "请输入您的用户名！";
      var email_address_empty = "请输入您的电子邮件地址！";
      var email_address_error = "您输入的电子邮件地址格式不正确！";
      var new_password_empty = "请输入您的新密码！";
      var confirm_password_empty = "请输入您的确认密码！";
      var both_password_error = "您两次输入的密码不一致！";
      var show_div_text = "请点击更新购物车按钮";
      var show_div_exit = "关闭";
    </script>
  <div class="flowBox">
    <h6><span>商品列表</span></h6>
        <form id="formCart" name="formCart" method="post" action="<?php echo url('shopcar/car'); ?>">
           <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody>
            <tr>
              <th bgcolor="#ffffff">商品名称</th>
                    <th bgcolor="#ffffff">属性</th>
                                          <th bgcolor="#ffffff">市场价</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
              <th bgcolor="#ffffff">操作</th>
            </tr>
            <?php foreach ($data as $key => $v) { ?>
                 <tr>
                    <td bgcolor="#ffffff" align="center">
                        <a href="<?php echo url('index/details'); ?>?id=72" target="_blank"><img src="/uploads/<?php echo $v['goods_img']; ?>" border="0" title="<?php echo $v['goods_name']; ?>"></a><br>
                        <a href="<?php echo url('index/details'); ?>?id=72" target="_blank" class="f6"><?=$v['goods_name']?></a>
                    </td>
                    <td bgcolor="#ffffff"></td>
                    <td align="right" bgcolor="#ffffff">￥<?=$v['market_price']?>元</td>
                    <td align="right" bgcolor="#ffffff">￥<?=$v['goods_price']?>元</td>
                    <td align="right" bgcolor="#ffffff">
                        <input type="text" name="goods_number[44]" id="goods_number_44" value="1" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)">
                    </td>
                    <td align="right" bgcolor="#ffffff">￥<?=$v['goods_price']?>元</td>
                    <td align="center" bgcolor="#ffffff">
                      <a href="javascript:if (confirm(&#39;您确实要把该商品移出购物车吗？&#39;)) location.href=&#39;<?php echo url('shopcar/car'); ?>?step=drop_goods&amp;id=44&#39;; " class="f6">删除</a>
                    </td>
              </tr>
            <?php } ?>
                       
                      </tbody></table>

          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody><tr>
              <td bgcolor="#ffffff">

                            购物金额小计 ￥元，比市场价 ￥178.79元 节省了 ￥29.79元 (17%)              </td>
              <td align="right" bgcolor="#ffffff">
                <input type="button" value="清空购物车" class="bnt_blue_1" onclick="location.href=&#39;<?php echo url('shopcar/car'); ?>?step=clear&#39;">
                <input name="submit" type="submit" class="bnt_blue_1" value="更新购物车">
              </td>
            </tr>
          </tbody></table>
          <input type="hidden" name="step" value="update_cart">
        </form>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
          <tbody><tr>
            <td bgcolor="#ffffff"><a href="http://www.ecshop4.0.com/home/index/"><img src="/static1/images/continue.gif" alt="continue"></a></td>
            <td bgcolor="#ffffff" align="right"><a href="<?php echo url('shopcar/checkout'); ?>"><img src="/static1/picture/checkout.gif" alt="checkout"></a></td>
          </tr>
        </tbody></table>
       
    </div>
    <div class="blank5"></div>

</div>
<div class="blank5"></div>
<p>$rows = $GLOBALS['db']->getRow("select goods_brief,shop_price,goods_name,goods_thumb from ".$GLOBALS['ecs']->table('goods')." where goods_id=".$goods->goods_id);</p>
<p>$result['shop_price'] = price_format($rows['shop_price']);</p>
<p>$result['goods_name'] = $rows['goods_name'];</p>
<p>$result['goods_thumb'] = $rows['goods_thumb'];</p>
<p>$result['goods_brief'] = $rows['goods_brief'];</p>
<p>$result['goods_id'] = $goods->goods_id;</p>
<p>$sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .</p>
<p>' FROM ' . $GLOBALS['ecs']->table('cart') .</p>
<p>" WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";</p>
<p>$rowss = $GLOBALS['db']->GetRow($sql);</p>
<p>$result['goods_price'] = price_format($rowss['amount']);</p>
<p>$result['goods_number'] = $rowss['number'];</p>

<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="/static1/images/bottom.jpg"></div>
  <div class="clear10"></div>
  
     <div class="foot-help">
                      <dl>
          <dt class="xs-1">新手上路 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=9" target="_blank" title="售后流程">售后流程</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=10" target="_blank" title="购物流程">购物流程</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=11" target="_blank" title="订购方式">订购方式</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-2">手机常识 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-3">配送与支付 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-4">会员中心</dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=18" target="_blank" title="资金管理">资金管理</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.html?id=20" target="_blank" title="我的订单">我的订单</a></dd>
           
        </dl>
         
                 
                 
         
        <div class="foot-weixin">
          <div class="weixin-txt">关注demo微信</div>
          <div class="weixin-pic">
            <img src="/static1/images/weixin.jpg">
          </div>
        </div>
    </div>
     
    
   
  
  <div class="blank"></div>
  
<div class="footer_info"> © 2005-2018 ECSHOP 版权所有，并保留所有权利。       <br>
      <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.html?product=ecshop_b2c&amp;url=http%3A%2F%2Flocalhost%2Fdayi%2Fecshopceshi%2Fecshop%2F" target="_blank">&nbsp;&nbsp;Licensed</a><br>
            <div>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank"></a></div>
    </div>
  <div class="clear10"></div>
</div>
 

 


<script type="text/javascript">
var process_request = "正在处理您的请求...";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "* 用户名不能为空";
var msg_un_length = "* 用户名最长不得超过7个汉字";
var msg_un_format = "* 用户名含有非法字符";
var msg_un_registered = "* 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "* 邮件地址不能为空";
var msg_email_registered = "* 邮箱已存在,请重新输入";
var msg_email_format = "* 邮件地址不合法";
var msg_blank = "不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "- 密码中不能包含空格";
var username_exist = "用户名 %s 已经存在";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";

function checkIpt(item){
  var val = item.value;
  var method = document.getElementById('payMethod');
  if(val == 'wxpay'){
    method.innerHTML = '微&nbsp;&nbsp;&nbsp;信';
  }else{
    method.innerHTML = '支付宝';
  }
  document.getElementById('yunqi_payment').click();
}
</script>

</body></html>