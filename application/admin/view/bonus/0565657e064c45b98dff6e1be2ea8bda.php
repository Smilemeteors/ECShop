<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\phpStudy\WWW\ECShop\public/../application/home\view\login\reg.html";i:1537168820;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0062)http://127.0.0.1/shixun/ECShop/user.php?act=register -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v4.0.0">

<meta name="Keywords" content="">
<meta name="Description" content="">
<title>用户中心_ECSHOP演示站 - Powered by ECShop</title>

<style>

</style>
<script src="js/jquery-3.2.1.js"></script>


<link rel="shortcut icon" href="http://127.0.0.1/shixun/ECShop/favicon.ico">
<link rel="icon" href="http://127.0.0.1/shixun/ECShop/animated_favicon.gif" type="image/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">

<!-- <script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/user.js"></script><script type="text/javascript" src="js/transport.js"></script> -->


</head><body>


<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> 
        
          <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
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
    <div class="logo"><a href="http://127.0.0.1/shixun/ECShop/index.php" name="top"><img src="./用户中心_ECSHOP演示站 - Powered by ECShop_files/logo.gif"></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="http://127.0.0.1/shixun/ECShop/index.php" class="cur">首页</a></li>
                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=16">服装</a></li>
                                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=22">移动电源</a></li>
                                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=25">数码时尚</a></li>
                                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=26">家用电器</a></li>
                                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=27">大家电</a></li>
                                        <li><a href="http://127.0.0.1/shixun/ECShop/category.php?id=25">数码时尚</a></li>
                              </ul>
      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="http://127.0.0.1/shixun/ECShop/search.php" onsubmit="return checkSearchForm()" class="f_r">
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
  <div class="path"><div>当前位置: <a href="http://127.0.0.1/shixun/ECShop/">首页</a> <code>&gt;</code> 用户中心</div></div>  </div>
</div>

<div class="blank"></div>




            <div class="usBox">
  <div class="usBox_2 clearfix">
   <div class="regtitle"></div>


    <form action="<?php echo url('Login/register'); ?>" method="post" name="formUser">
      <table width="100%" border="0" align="left" cellpadding="5" cellspacing="3">
        <tbody><tr>
          <td width="13%" align="right">用户名</td>
          <td width="87%">
          <input name="user_name" type="text" size="25" id="user_name" onblur="is_registered(this.value);" class="inputBg">
            <span id="username_notice" style="color:#FF0000"> </span>
          </td>
        </tr>
        <tr>
          <td align="right">email</td>
          <td>
          <input name="user_email" type="text" size="25" id="email" onblur="checkEmail(this.value);" class="inputBg">
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right">密码</td>
          <td>
           <input type="password" name="user_password" id="user_password" />
            <span id="passstrength" style="color:#FF0000"></span>
          </td>
        </tr>
        <tr>
          <td align="right">密码强度</td>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="1">
              <tbody><tr align="center">
                <td width="33%" id="pwd_lower">弱</td>
                <td width="33%" id="pwd_middle">中</td>
                <td width="33%" id="pwd_high">强</td>
              </tr>
            </tbody></table>
            <span id="passstrength"></span>
          </td>
        </tr>



        <tr>
          <td align="right">确认密码</td>
          <td>
          <input name="confirm_password" type="password" id="conform_password"  class="inputBg" style="width:179px;">
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
        	        <tr>
          <td align="right">QQ          </td><td>
          <input name="qq" type="text" size="25" class="inputBg" class='qq'>          </td>
        </tr>
			        <tr>
          <td align="right">办公电话          </td><td>
          <input name="office_phone" type="text" size="25" class="inputBg">          </td>
        </tr>
			        <tr>
          <td align="right">家庭电话          </td><td>
          <input name="home_phone" type="text" size="25" class="inputBg">          </td>
        </tr>
			        <tr>
          <td align="right" id="extend_field5i">手机          </td><td>
          <input name="phone" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
			       <!--  <tr>
          <td align="right">密码提示问题</td>
          <td>
          <select name="sel_question">
	  <option value="0">请选择密码提示问题</option>
	  <option value="friend_birthday">我最好朋友的生日？</option><option value="old_address">我儿时居住地的地址？</option><option value="motto">我的座右铭是？</option><option value="favorite_movie">我最喜爱的电影？</option><option value="favorite_song">我最喜爱的歌曲？</option><option value="favorite_food">我最喜爱的食物？</option><option value="interest">我最大的爱好？</option><option value="favorite_novel">我最喜欢的小说？</option><option value="favorite_equipe">我最喜欢的运动队？</option>	  </select>
          </td>
        </tr> -->
        <!-- <tr>
          <td align="right">密码问题答案</td>
          <td>
	  <input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt="20">          </td>
        </tr> -->
		     <!--  <tr id="vcode" style="display: none">
      <td align="right">验证码</td>
      <td><input id="vcode_input" type="text" size="8" name="captcha" class="inputBg" onchange="validate_vcode(this.value);">
      <img id="captcha" src="./用户中心_ECSHOP演示站 - Powered by ECShop_files/captcha.php" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src=&#39;captcha.php?&#39;+Math.random()">
        <span style="color:#FF0000;display: none" id="vcode_tip"></span>
      </td>
      </tr> -->
       <!--  <tr id="sms" style="display: none">
          <td align="right">短信验证码</td>
          <td>
            <input type="text" name="sms_code" value="" size="8" class="inputBg">
            <input id="get_sms" type="button" style="align-content: center;width:80px;height:22px;background:#d2d2d2;color:#fff;cursor:pointer" class="inputBg" onclick="send_sms()" value="获取验证码" disabled="disabled">
            <span style="color:#FF0000;display: none" id="sms_tip"></span>
          </td>
        </tr> -->
         
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="agreement" type="checkbox" value="1" checked="checked" id='agreement'>
            我已看过并接受《<a href="http://127.0.0.1/shixun/ECShop/article.php?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left">
        <!--   <input name="act" type="hidden" value="act_register">
          <input type="hidden" name="back_act" value=""> -->
          <input type="submit" value="注册" class="us_Submit_reg" id='btn'>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="actionSub">
          <a href="<?php echo url('login/login'); ?>">我已有账号，我要登录</a><br>
          <a href="http://127.0.0.1/shixun/ECShop/user.php?act=get_password">您忘记密码了吗？</a>
          </td>
        </tr>
      </tbody></table>
    </form>




  </div>
</div>



    

    

    




<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="./用户中心_ECSHOP演示站 - Powered by ECShop_files/bottom.jpg"></div>
  <div class="clear10"></div>
  
     <div class="foot-help">
                      <dl>
          <dt class="xs-1">新手上路 </dt>
                      <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=9" target="_blank" title="售后流程">售后流程</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=10" target="_blank" title="购物流程">购物流程</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=11" target="_blank" title="订购方式">订购方式</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-2">手机常识 </dt>
                      <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-3">配送与支付 </dt>
                      <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-4">会员中心</dt>
                      <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=18" target="_blank" title="资金管理">资金管理</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
                    <dd><a href="http://127.0.0.1/shixun/ECShop/article.php?id=20" target="_blank" title="我的订单">我的订单</a></dd>
           
        </dl>
         
                 
                 
         
        <div class="foot-weixin">
          <div class="weixin-txt">关注demo微信</div>
          <div class="weixin-pic">
            <img src="./用户中心_ECSHOP演示站 - Powered by ECShop_files/weixin.jpg">
          </div>
        </div>
    </div>
     
    
   
  
  <div class="blank"></div>
  
<div class="footer_info"> © 2005-2018 ECSHOP 版权所有，并保留所有权利。       <br>
      <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&amp;url=http%3A%2F%2Flocalhost%2Fdayi%2Fecshopceshi%2Fecshop%2F" target="_blank">&nbsp;&nbsp;Licensed</a><br>
            <div>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank"></a></div>
    </div>
  <div class="clear10"></div>
</div>
</body>
  <script>
    $(document).on('click','#btn',function(){
        var password1=$('[name="user_password"]').val();
        var names=$('[name="user_name"]').val();
        if(password1 == '')
         {
            $('#passstrength').html('密码不能为空');
            return false;
         }
         if(names == '')
         {
            $('#username_notice').html('用户名不能为空');
            return false;
         }
      if($('#agreement').is(':checked')) {
          return true;
            }else{
          return false;
          }
    })


  // 判断密码  
      $(document).on('blur','#conform_password',function(){
        var password1=$('[name="user_password"]').val();
        var password2=$('[name="confirm_password"]').val();
         if(password1 == '')
         {
            $('#passstrength').html('密码不能为空');
            return false;
         }
        if(password1 != password2)
        {
          alert('两次密码不一致')
          return false;
        }
      })


// 密码强度
$('#user_password').keyup(function(e) {
 var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
 var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
 var enoughRegex = new RegExp("(?=.{6,}).*", "g");
 if (false == enoughRegex.test($(this).val())) {
 $('#passstrength').html('至少6位');
 } else if (strongRegex.test($(this).val())) {
 $('#passstrength').className = 'ok';
 $('#pwd_high').html("<font color='red'>强</font>");
 } else if (mediumRegex.test($(this).val())) {
 $('#passstrength').className = 'alert';
 $('#pwd_middle').html("<font color='red'>中</font>");
 } else {
 $('#passstrength').className = 'error';
 $('#pwd_lower').html("<font color='red'>弱</font>");
 }
 return true;
});

 

  </script>

</html>