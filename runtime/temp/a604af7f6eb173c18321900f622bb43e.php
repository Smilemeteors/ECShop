<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\login\login.html";i:1537358906;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>用户中心_ECSHOP演示站 - Is shop</title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="/static1/images/animated_favicon.gif" type="/static1/images/gif" />
<link href="/static1/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/user.js"></script><script type="text/javascript" src="/static1/js/transport.js"></script>
<body>

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
      <div class="top_menu1"> <script type="text/javascript" src="/static1/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
  <?php if (empty($_SESSION)) {?>
      欢迎光临本店<a href="<?php echo url('login/login'); ?>">请登录</a><strong></strong>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('login/register'); ?>">免费注册</a>
  <?php } else { ?>  
          您好,&nbsp;&nbsp;<strong><font color="#AE0000"><?php echo $_SESSION['username']; ?></font></strong>, 欢迎您回来！ <a href="<?php echo url('user/welcome'); ?>">用户中心</a>| <a href="<?php echo url('Login/back'); ?>">退出</a>
  <?php } ?>   </font> 
      </div>
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

    <div class="logo"><a href="<?php echo url('index/index'); ?>" name="top"><img src="/static1/images/logo.gif"></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul> 
        <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
          <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

              <li><a href="<?php echo url('index/fenlei'); ?>?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a></li>
     
          <?php endforeach; endif; else: echo "" ;endif; ?>
        <ul> 

      </div>
    </div>
    <div class="serach-box">
      <form method="get" action="<?php echo url('index/fenlei'); ?>">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr>
              <td width="135"><input name="keyword"  type="text"></td>
              <td><input  value="搜索"  type="submit"></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>

<div class="block box">
 <div id="ur_here">
  <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a> <code>&gt;</code> 用户中心</div></div>  </div>
</div>

<div class="blank"></div>

<div class="usBox clearfix">
  <div class="usBox_1 f_l">
  <div class="logtitle"></div>
  <image src="/static1/images/ur_log.gif" />
  <form name="formLogin" action="<?php echo url('login/login'); ?>" method="post" onSubmit="return userLogin()">
    <table width="100%" border="0" align="left" cellpadding="3" cellspacing="5">
      <tr>
        <td width="15%" align="right">用户名</td>
        <td width="85%"><input name="username" type="text" size="25" class="inputBg" placeholder="请输入用户名/手机号" /></td>
      </tr>
      <tr>
        <td align="right">密码</td>
        <td>
        <input name="password1" type="password" size="15"  class="inputBg" id="password" onblur="ck_pwd()" /><span id="info_pwd"></span>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember">请保存我这次的登录信息。</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="left">
        <!-- <input type="hidden" name="act" value="act_login" />
        <input type="hidden" name="back_act" value="user.html" /> -->
        <input type="image" value="登录" class="us_Submit" src="/static1/images/bnt_ur_log.gif" />
        
        </td>
      </tr>
      <tr>
        <td></td>
        <td class="f3">找回密码：（<a href="user.html?act=qpassword_name" class="f3">密码问题</a>&nbsp;<a href="user.html?act=get_password" class="f3">邮件</a>&nbsp;<a href="user.html?act=sms_get_password" class="f3">短信验证</a>）</td>
      </tr>
    </table>
  </form>
  </div>
  <div class="usTxt">
    <strong>如果您不是会员，请注册</strong>  <br />
    <strong class="f4">友情提示：</strong><br />
        不注册为会员也可在本店购买商品<br />
            但注册之后您可以：<br />
    1. 保存您的个人资料<br />
    2. 收藏您关注的商品<br />
    3. 享受会员积分制度<br />
    4. 订阅本店商品信息  <br />
    <a href="register.html"><img src="/static1/images/bnt_ur_reg.gif" /></a>
  </div>
</div>

<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="/static1/picture/bottom.jpg"></div>
  <div class="clear10"></div> 
     <div class="foot-help">
        <dl>
          <dt class="xs-1">新手上路 </dt>
            <dd><a href="article.html?id=9" target="_blank" title="售后流程">售后流程</a></dd>
          <dd><a href="article.html?id=10" target="_blank" title="购物流程">购物流程</a></dd>
          <dd><a href="article.html?id=11" target="_blank" title="订购方式">订购方式</a></dd>          
        </dl>
        <dl>
          <dt class="xs-2">手机常识 </dt>
          <dd><a href="article.html?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
          <dd><a href="article.html?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
          <dd><a href="article.html?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>           
        </dl> 
        <dl>
          <dt class="xs-3">配送与支付 </dt>
          <dd><a href="article.html?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
          <dd><a href="article.html?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
          <dd><a href="article.html?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>           
        </dl> 
        <dl>
          <dt class="xs-4">会员中心</dt>
          <dd><a href="article.html?id=18" target="_blank" title="资金管理">资金管理</a></dd>
          <dd><a href="article.html?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
          <dd><a href="article.html?id=20" target="_blank" title="我的订单">我的订单</a></dd>
           
        </dl>
        <div class="foot-weixin">
          <div class="weixin-txt">关注demo微信</div>
          <div class="weixin-pic">
            <img src="/static1/picture/weixin.jpg">
          </div>
        </div>
    </div>

  <div class="blank"></div>
  <!--版权 start
<div class="footer_info"> &copy; 2005-2018 ECSHOP 版权所有，并保留所有权利。       <br />
      <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.html?product=ecshop_b2c&url=http%3A%2F%2F127.0.0.1%2Fshixun%2FEC4%2Fsource%2Fecshop%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
            <div>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank"></a></div>
    </div>
  <div class="clear10"></div>-->
</div>

</body>
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

</script>
</html>
