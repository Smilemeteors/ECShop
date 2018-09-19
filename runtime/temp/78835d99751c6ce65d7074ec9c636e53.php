<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\user\welcome.html";i:1537355450;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v4.0.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">

<title>用户中心_ECSHOP演示站 - Powered by ECShop</title>

<link rel="shortcut icon" href="http://localhost/dayi/ecshopceshi/ecshop/favicon.ico">
<link rel="icon" href="http://localhost/dayi/ecshopceshi/ecshop/animated_favicon.gif" type="image/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/user.js"></script></head>

<body>

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">

          <div class="top_menu1"> <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
   <?php if (empty($_SESSION)) {?>
      欢迎光临本店<a href="<?php echo url('login/login'); ?>">请登录</a><strong></strong>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('login/register'); ?>">免费注册</a> 
  <?php } else { ?>  
         您好,&nbsp;&nbsp;<strong><font color="#AE0000"><?php echo $_SESSION['username']; ?></font></strong>, 欢迎您回来！ <a href="<?php echo url('user/welcome'); ?>">用户中心</a>| <a href="<?php echo url('login/back'); ?>">退出</a>
  <?php } ?>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <?php if(empty($_SESSION)){ ?>
           <a href="<?php echo url('Login/login'); ?>" class="">用户中心</a>
          <?php }else{?>
         <a href="<?php echo url('user/welcome'); ?>" class="">用户中心</a>
          <?php }?>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="<?php echo url('shopcar/car'); ?>" title="查看购物车">购物车(0)</a> </div>
    </div>
  </div>
</div>
<div class="nav-menu">
  <div class="wrap">

    <div class="logo"><a href="http://localhost/dayi/ecshopceshi/ecshop/index.php" name="top"><img src="/static1/images/logo.gif"></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="<?php echo url('index/index'); ?>" class="cur">首页</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=16">服装</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=22">移动电源</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=25">数码时尚</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=26">家用电器</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=27">大家电</a></li>
        <li><a href="http://localhost/dayi/ecshopceshi/ecshop/category.php?id=25">数码时尚</a></li>
      </ul>
      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="search.html" onsubmit="return checkSearchForm()" class="f_r">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td width="135"><input name="keywords" id="keyword" class="B_input" type="text"></td>
            <td><input name="imageField" value="搜索" class="go" style="cursor:pointer;" type="submit"></td>
          </tr>
        </tbody></table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>

<div class="block box">

  <div id="ur_here"> <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a> <code>&gt;</code> 用户中心</div></div> </div>
</div>

<div class="blank"></div>
<div class="block clearfix userpage">
  
  <div class="AreaL">
    <div class="box">
      <div class="box_1">
        <div class="userCenterBox"> <div class="userMenu">
<a href="<?php echo url('user/welcome'); ?>" class="curs"><img src="/static1/images/u1.gif"> 欢迎页</a>
<a href="<?php echo url('user/userinfo'); ?>"><img src="/static1/images/u2.gif"> 用户信息</a>
<a href="<?php echo url('user/dingdan'); ?>"><img src="/static1/images/u3.gif"> 我的订单</a>
<a href="<?php echo url('user/shouhuo'); ?>"><img src="/static1/images/u4.gif"> 收货地址</a>
<a href="<?php echo url('user/shoucang'); ?>"><img src="/static1/images/u5.gif"> 我的收藏</a>
<a href="<?php echo url('user/liuyan'); ?>"><img src="/static1/images/u6.gif"> 我的留言</a>
<a href="<?php echo url('user/biaoqian'); ?>"><img src="/static1/images/u7.gif"> 我的标签</a>
<a href="<?php echo url('usertwo/quehuo'); ?>"><img src="/static1/images/u8.gif"> 缺货登记</a>
<a href="<?php echo url('usertwo/hongbao'); ?>"><img src="/static1/images/u9.gif"> 我的红包</a>
<a href="<?php echo url('usertwo/tuijian'); ?>"><img src="/static1/images/u10.gif"> 我的推荐</a>
<a href="<?php echo url('usertwo/pinglun'); ?>"><img src="/static1/images/u11.gif"> 我的评论</a>

<!--<a href="usertwo.php?act=group_buy">我的团购</a>-->
<a href="<?php echo url('usertwo/genzong'); ?>"><img src="/static1/images/u12.gif"> 跟踪包裹</a>
<a href="<?php echo url('usertwo/money'); ?>"><img src="/static1/images/u13.gif"> 资金管理</a>
<a href="<?php echo url('login/back'); ?>" style="background:none; text-align:right; margin-right:10px;"><img src="/static1/images/bnt_sign.gif"></a>
</div> </div>
      </div>
    </div>
  </div>
  
  
  <div class="AreaR">
    <div class="box">
      <div class="box_1">
        <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">       
        <?php if(empty($_SESSION)){?>   
          <font class="f5"><b class="f4"></b>欢迎您回到 ECSHOP！</font><br>
          <?php }else{?>
          <font class="f5"><b class="f4"><?php echo $_SESSION['username'];?></b>欢迎您回到 ECSHOP！</font><br>
          
          <?php }?>
          <div class="blank"></div>
          您的上一次登录时间: 2016-05-11 14:56:04<br>
          <div class="blank5"></div>
           <br>
          <div class="blank5"></div>
                    您还没有通过邮件认证 <a href="javascript:sendHashMail()" style="color:#006bd0;">点此发送认证邮件</a><br>
                    <div style="margin:5px 0; border:1px solid #a1675a;padding:10px 20px; background-color:#e8d1c9;"> <img src="/static1/picture/note.gif" alt="note">&nbsp;用户中心公告！ </div>
          <br>
          <br>
          <div class="f_l" style="width:350px;">
            <h5><span>您的账户</span></h5>
            <div class="blank"></div>
            余额:<a href="http://www.ecshop4.0.com/home/index/user.html?act=account_log" style="color:#006bd0;">￥0.00元</a><br>
                        红包:<a href="http://www.ecshop4.0.com/home/index/user.html?act=bonus" style="color:#006bd0;">共计 8 个,价值 ￥160.00元</a><br>
            积分:0积分<br>
          </div>
          <div class="f_r" style="width:350px;">
            <h5><span>用户提醒</span></h5>
            <div class="blank"></div>
                        您最近30天内提交了0个订单<br>
                      </div> 
          
                    <div class="blank5"></div>            
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="/static1/picture/bottom.jpg"></div>
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
            <img src="/static1/picture/weixin.jpg">
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
var msg_title_empty = "留言标题为空";
var msg_content_empty = "留言内容为空";
var msg_title_limit = "留言标题不能超过200个字";
</script>

</body></html>