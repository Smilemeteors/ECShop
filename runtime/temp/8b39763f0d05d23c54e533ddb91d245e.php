<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\login\register.html";i:1537515998;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>用户中心_ECSHOP演示站 - Is shop</title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="/static1/images/gif" />
<link href="/static1/css/style.css" rel="stylesheet" type="text/css" />



<body>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1">
           <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 欢迎光临本店<a href="<?php echo url('login/login'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('login/register'); ?>">免费注册</a>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <?php if(empty($_SESSION)){ ?>
           <a href="<?php echo url('Login/login'); ?>" class="">用户中心</a>
          <?php }else{?>
         <a href="<?php echo url('user/welcome'); ?>" class="">用户中心</a>
          <?php }?>

      </div>

             <div class="cart" id="ECS_CARTINFO"> 
             <?php if(empty($_SESSION)){ ?>
            <a href="<?php echo url('Login/login'); ?>" title="查看购物车"><img src="/static1/images/cart.png" />&nbsp;购物车(0)</a>
          <?php }else{?>
         <a href="<?php echo url('shopcar/car'); ?>" title="查看购物车"><img src="/static1/images/cart.png" />&nbsp;购物车(0)</a>
          <?php }?> 
             </div>

    </div>
  </div>
</div>
<div class="nav-menu">
  <div class="wrap">
    <div class="logo"><a href="<?php echo url('index/index'); ?>" name="top"><img src="/static1/images/logo.gif" /></a></div>
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




            <div class="usBox">
  <div class="usBox_2 clearfix">
   <div class="regtitle"></div>
    <image src="/static1/images/ur_reg.gif" />
    <form action="<?php echo url('login/register'); ?>" method="post" name="formUser" onsubmit="return register();">
      <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
        <tr>
          <td width="13%" align="right">用户名</td>
          <td width="87%">
          <input name="username" type="text" size="25" id="username" onblur="ck_name()" class="inputBg"/>
          <!-- onblur="ck_name()" -->
            <span id="usernames"></span></span><font color="red">*</font>
          </td>
        </tr>
        <tr>
          <td align="right">email</td>
          <td>
          <input name="email" type="text" size="25" id="email" onblur="ck_email()"  class="inputBg"/>
            <span id="emails"></span></span><font color="red">*</font> 
          </td>
        </tr>
        <tr>
          <td align="right">密码</td>
          <td>
          <input name="password1" type="password" id="password1" onblur="ck_pwd1()" class="inputBg" style="width:179px;" />
            <span id="password1s"></span></span><font color="red">*</font> 
          </td>
        </tr>
        <tr>
          <td align="right">密码强度</td>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="1">
              <tr align="center">
                <td width="33%" id="pwd_lower">弱</td>
                <td width="33%" id="pwd_middle">中</td>
                <td width="33%" id="pwd_high">强</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right">确认密码</td>
          <td>
          <input name="password2" type="password" id="password2" onblur="ck_pwd2()"  class="inputBg" style="width:179px;"/>
            <span id="password2s"></span><font color="red">*</font> 
          </td>
        </tr>
                  <tr>
          <td align="right" >QQ          <td>
          <input name="qq" type="text" size="25" class="inputBg" /></td>
        </tr>
              <tr>
          <td align="right" >办公电话          <td>
          <input name="b_phone" type="text" size="25" class="inputBg" />          </td>
        </tr>
              <tr>
          <td align="right" >家庭电话          <td>
          <input name="f_phone" type="text" size="25" class="inputBg" />          </td>
        </tr>
              <tr>
          <td align="right" id="extend_field5i">手机          <td>
          <input name="tel" type="text" size="25" class="inputBg" id='tel' onblur="ck_tel()" /><span id="tels"> </span></span><font color="red">*</font> </td>
        </tr>
              <tr>
          <td align="right">密码提示问题</td>
          <td>
          <select name='sel_question'>
    <option value='0'>请选择密码提示问题</option>
    <option value="friend_birthday">我最好朋友的生日？</option><option value="old_address">我儿时居住地的地址？</option><option value="motto">我的座右铭是？</option><option value="favorite_movie">我最喜爱的电影？</option><option value="favorite_song">我最喜爱的歌曲？</option><option value="favorite_food">我最喜爱的食物？</option><option value="interest">我最大的爱好？</option><option value="favorite_novel">我最喜欢的小说？</option><option value="favorite_equipe">我最喜欢的运动队？</option>    </select>
          </td>
        </tr>
        <tr>
          <td align="right" >密码问题答案</td>
          <td>
    <input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/>          </td>
        </tr>  
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="agreement"  type="checkbox" value="1" />
            我已看过并接受《<a href="article.html?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left">
          <input type="image" value="注册" class="us_Submit_reg" src="/static1/images/bnt_ur_reg.gif" >
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="actionSub">
         <image src="/static1/images/fart.gif" /> <a href="<?php echo url('Login/login'); ?>"> 我已有账号，我要登录</a><br />
          <image src="/static1/images/fart.gif" /> <a href="user.html?act=get_password">您忘记密码了吗？</a>
          </td>
        </tr>
      </table>
    </form>
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
<script type="text/javascript" src='http://code.jquery.com/jquery-latest.js'>      
    </script>
    <script type="text/javascript">
      function ck_name()
         {
            var username = document.getElementById('username').value;
            var reg = /^\w{6,12}$/;
            if (reg.test(username)) {
              document.getElementById('usernames').innerHTML="<font color='red'>可以注册</font>";
              return true;
           } else{
              document.getElementById('usernames').innerHTML="<font color='red'>必须是6-12位</font>";
              return false;
            }
         }
      function ck_email()
         {
            var email = document.getElementById('email').value;
            var reg = /^\w{1,}@\w{1,}\.(com|cn)$/;
            if (reg.test(email)) {
              document.getElementById('emails').innerHTML="<font color='red'>可以注册</font>";
              return true;
           } else{
              document.getElementById('emails').innerHTML="<font color='red'>必须是x@x.(com/cn)</font>";
              return false;
            }
         }
      function ck_pwd1()
         {
            var password1 = document.getElementById('password1').value;
            var reg = /^\w{6,8}$/;
            if (reg.test(password1)) {
              document.getElementById('password1s').innerHTML="<font color='red'>可以注册</font>";
              return true;
           } else{
              document.getElementById('password1s').innerHTML="<font color='red'>密码必须是6-8位</font>";
              return false;
            }
         }
          function ck_pwd2()
         {
          var password1 = document.getElementById('password1').value;
            var password2 = document.getElementById('password2').value;
           
            if (password1==password2) {
              document.getElementById('password2s').innerHTML="<font color='red'>可以注册</font>";
              return true;
           } else{
              document.getElementById('password2s').innerHTML="<font color='red'>密码必须一致</font>";
              return false;
            }
         }
         function ck_tel()
         {
          var tel = document.getElementById('tel').value;
          if (tel=='') {
              document.getElementById('tels').innerHTML="<font color='red'>手机号不能为空</font>";
              return false;
           } else{
              
              document.getElementById('tels').innerHTML="<font color='red'>可以注册</font>";
              return true;
            }
         }
         function register()
         {
          if(ck_name()&&ck_email()&&ck_pwd1()&&ck_pwd2()&&ck_tel()){
            return true;
          }else{
            return false;
          }
         }
</script>
</html>
