<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\shopcar\checkout.html";i:1537517624;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="Generator" content="ECSHOP v4.0.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>购物流程_ECSHOP演示站 - Powered by ECShop</title>

<link rel="shortcut icon" href="http://www.ecshop4.0.com/home/index/favicon.ico">
<link rel="icon" href="http://www.ecshop4.0.com/home/index/animated_favicon.gif" type="image/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">

<!-- <script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/shopping_flow.js"></script> --></head>
<body>

<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="/static1/js/transport.js"></script><script type="text/javascript" src="/static1/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 <font> 您好，<font class="f4_b">ecshop</font>, 欢迎您回来！ <a href="<?php echo url('index/user'); ?>">用户中心</a>| <a href="<?php echo url('index/user'); ?>?act=logout">退出</a> </font>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <a href="<?php echo url('index/user'); ?>" class="">用户中心</a>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="<?php echo url('shopcar/car'); ?>" title="查看购物车">购物车(1)</a> </div>
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
      <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()" class="f_r">
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
 <div id="ur_here">
  <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a> <code>&gt;</code> 购物流程</div></div> </div>
</div>

<div class="blank"></div>
<div class="block">
  
  
  

        
                <form action="<?php echo url('shopcar/order_add'); ?>" method="post" name="theForm" id="theForm" >
        <script type="text/javascript">
        var flow_no_payment = "您必须选定一个支付方式。";
        var flow_no_shipping = "您必须选定一个配送方式。";
        </script>
        <div class="flowBox">
        <h6><span>商品列表</span><a href="<?php echo url('shopcar/car'); ?>" class="f6">修改</a></h6>
        <table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th bgcolor="#ffffff">商品名称</th>
              <th bgcolor="#ffffff">属性</th>
                            <th bgcolor="#ffffff">市场价</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
            </tr>
            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <tr>
              <td bgcolor="#ffffff">
                        <a href="http://www.ecshop4.0.com/home/index/goods.php?id=72" target="_blank" class="f6"><?php echo $v['goods_name']; ?></a>
                                                  </td>
              <td bgcolor="#ffffff"></td>
                            <td bgcolor="#ffffff" align="right">￥<?php echo $v['goods_price']; ?>元</td>
                            <td bgcolor="#ffffff" align="right">￥<?php echo $v['market_price']; ?>元</td>
              <td bgcolor="#ffffff" align="right"><?php echo $v['goods_number']; ?></td>
              <td bgcolor="#ffffff" align="right">￥<?php echo $v['goods_number']*$v['market_price']; ?>元</td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <tr>
              <td colspan="7" bgcolor="#ffffff">
                            购物金额小计 ￥<?php echo $count; ?>元，比市场价 ￥<?php echo $goods_count; ?>元 节省了 ￥-<?php echo $save_price; ?>元             </td>
            </tr>
                      </tbody></table>
      </div>
      <div class="blank"></div>
      <div class="flowBox">
      <h6><span>收货人信息</span><a href="<?php echo url('shopcar/car'); ?>?step=consignee" class="f6">修改</a></h6>
      <table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <input type="hidden" name="recipient_id" value="<?php echo $data['0']['order_id']; ?>"/>
              <td bgcolor="#ffffff">收货人姓名:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['consignee']; ?></td>
              <td bgcolor="#ffffff">电子邮件地址:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['email']; ?></td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff">详细地址:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['address']; ?></td>
              <td bgcolor="#ffffff">邮政编码:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['zipcode']; ?></td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff">电话:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['tel']; ?></td>
              <td bgcolor="#ffffff">手机:</td>
              <td bgcolor="#ffffff"><?php echo $data['0']['mobile']; ?></td>
            </tr>
          </tbody></table>
      </div>
     <div class="blank"></div>
        <div class="flowBox">
    <h6><span>配送方式</span></h6>
    <table id="shippingTable" width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th width="25%" bgcolor="#ffffff">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th width="15%" bgcolor="#ffffff">费用</th>
              <th width="15%" bgcolor="#ffffff">免费额度</th>
              <th width="15%" bgcolor="#ffffff">保价费用</th>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="shipping" value="0" class="shipping" checked="checked" supportcod="0" insure="0"  type="radio">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>申通快递</strong></td>
              <td valign="top" bgcolor="#ffffff">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥<span id="sto">15</span>.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥0.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">不支持保价</td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="shipping" value="1" class="shipping" supportcod="0" insure="0"  type="radio">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>邮局平邮</strong></td>
              <td valign="top" bgcolor="#ffffff">邮局平邮的描述内容。</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥<span id="postoffice">3.5</span>0元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥50000.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">不支持保价</td>
            </tr>
                        <tr>
              <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" onclick="selectInsure(this.checked)" value="1" disabled="true" type="checkbox">
                配送是否需要保价 </label></td>
            </tr>
          </tbody></table>
    </div>
    <div class="blank"></div>
                <div class="flowBox">
    <h6><span>支付方式</span></h6>
    <table id="paymentTable" width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th width="20%" bgcolor="#ffffff">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th width="15%" bgcolor="#ffffff">手续费</th>
            </tr>
                        
                        <tr>
              <td rowspan="2" valign="middle" bgcolor="#ffffff">
                <input id="yunqi_payment" name="payment" value="4" iscod="0" onclick="selectPayment(this)" type="radio"></td>
              <td class="list-tit" valign="top" bgcolor="#ffffff">
                <strong><font color="#FF0000">天工收银</font> <i style="display:inline-block;width: 70px ;text-align: center" id="payMethod">（支付宝）</i></strong>
                
              </td>
              <td valign="top" bgcolor="#ffffff"><font color="#FF0000">天工收银是上海商派2015年正式推出的专业集成支付平台，致力于为各类用户提供融合、便捷、安全的场景支付服务。</font></td>
              <td valign="top" bgcolor="#ffffff" align="right">￥0.00元</td>
            </tr>
            <tr>
              <td colspan="3" valign="top" bgcolor="#ffffff" align="left">

                  <span class="item">
                    <input id="alipay" name="yunqi_paymethod" value="alipay" checked="checked" onclick="checkIpt(this);" type="radio">
                    <label for="paybal" class="alipay-image"></label>
                  </span>
                  <span class="item">
                    <input id="wxpay" name="yunqi_paymethod" value="wxpay" onclick="checkIpt(this);" type="radio">
                    <label for="wechat" class="wechat-image"></label>
                  </span>
              </td>
            </tr>
                                    
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="payment" value="1" iscod="0" onclick="selectPayment(this)" type="radio"></td>
              <td valign="top" bgcolor="#ffffff"><strong>余额支付</strong></td>
              <td valign="top" bgcolor="#ffffff">使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥0.00元</td>
            </tr>
                                    
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="payment" value="2" checked="checked" iscod="0" onclick="selectPayment(this)" type="radio"></td>
              <td valign="top" bgcolor="#ffffff"><strong>银行汇款/转帐</strong></td>
              <td valign="top" bgcolor="#ffffff">银行名称
收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。
注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥0.00元</td>
            </tr>
                                    
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="payment" value="3" iscod="1" type="radio" checked ></td>
              <td valign="top" bgcolor="#ffffff"><strong>货到付款</strong></td>
              <td valign="top" bgcolor="#ffffff">开通城市：×××
货到付款区域：×××</td>
              <td valign="top" bgcolor="#ffffff" align="right"><span id="ECS_CODFEE">￥0.00元</span></td>
            </tr>
                                  </tbody></table>
    </div>
        <div class="blank"></div>
                    <div class="flowBox">
          <h6><span>商品包装</span></h6>
          <table id="packTable" width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th scope="col" width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th scope="col" width="35%" bgcolor="#ffffff">名称</th>
              <th scope="col" width="22%" bgcolor="#ffffff">价格</th>
              <th scope="col" width="22%" bgcolor="#ffffff">免费额度</th>
              <th scope="col" bgcolor="#ffffff">图片</th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input name="pack" value="0" class="pack" type="radio" checked></td>
              <td valign="top" bgcolor="#ffffff"><strong>不要包装</strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="pack" value="1" class="pack" type="radio">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>精品包装</strong></td>
              <td valign="top" bgcolor="#ffffff" align="right">￥<span id="pack_fine">5</span>.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥800.00元</td>
              <td valign="top" bgcolor="#ffffff" align="center">
                                    <a href="/static1/images/1242108360911825791.jpg" target="_blank" class="f6">查看</a>
                                 </td>
            </tr>
                      </tbody></table>
       </div>
             <div class="blank"></div>
          
                    <div class="flowBox">
          <h6><span>祝福贺卡</span></h6>
          <table id="cardTable" width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
            <tbody><tr>
              <th scope="col" width="5%" bgcolor="#ffffff">&nbsp;</th>
              <th scope="col" width="35%" bgcolor="#ffffff">名称</th>
              <th scope="col" width="22%" bgcolor="#ffffff">价格</th>
              <th scope="col" width="22%" bgcolor="#ffffff">免费额度</th>
              <th scope="col" bgcolor="#ffffff">图片</th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input name="card" class="card" value="0" checked="checked"  type="radio"></td>
              <td valign="top" bgcolor="#ffffff"><strong>不要贺卡</strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input name="card" value="1" class="card"  type="radio">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>祝福贺卡</strong></td>
              <td valign="top" bgcolor="#ffffff" align="right">￥<span id="cards">5</span>.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥1000.00元</td>
              <td valign="top" bgcolor="#ffffff" align="center">
                                    <a href="/static1/images/1242108754847457261.jpg" target="_blank" class="f6">查看</a>
                                  </td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff"></td>
              <td valign="top" bgcolor="#ffffff"><strong>祝福语:</strong></td>
              <td colspan="3" bgcolor="#ffffff"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"></textarea></td>
            </tr>
          </tbody></table>
        </div>
                <div class="blank"></div>
        
      <div class="flowBox">
    <h6><span>其它信息</span></h6>
      <table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
                                                <tbody><tr>
              <td bgcolor="#ffffff"><strong>使用红包:</strong></td>
              <td bgcolor="#ffffff">
                选择已有红包                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" selected="selected">请选择</option>
                                  </select>

                或者输入红包序列号                <input name="bonus_sn" class="inputBg" size="15" type="text">
                <input name="validate_bonus" class="bnt_blue_1" value="验证红包" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" type="button">
              </td>
            </tr>
                                    <tr>
              <td bgcolor="#ffffff"><strong>开发票:</strong>
                <input name="need_inv" class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" type="checkbox">
              </td>
              <td bgcolor="#ffffff">
                                发票类型                <select name="inv_type" id="ECS_INVTYPE" disabled="true" onchange="changeNeedInv()" style="border:1px solid #ccc;">
                <option value="1" selected="selected">1 [1%]</option><option value="2">2 [1.5%]</option></select>
                                发票抬头                <input name="inv_payee" class="input" id="ECS_INVPAYEE" size="20" disabled="true" onblur="changeNeedInv()" type="text">
                发票内容              <select name="inv_content" id="ECS_INVCONTENT" disabled="true" onchange="changeNeedInv()" style="border:1px solid #ccc;">

                <option value="demo" selected="selected">demo</option>
                </select></td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><strong>订单附言:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea></td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff"><strong>缺货处理:</strong></td>
              <td bgcolor="#ffffff">                <label>
                <input name="how_oos" value="0" checked="checked" onclick="changeOOS(this)" type="radio">
                等待所有商品备齐后再发</label>
                                <label>
                <input name="how_oos" value="1" onclick="changeOOS(this)" type="radio">
                取消订单</label>
                                <label>
                <input name="how_oos" value="2" onclick="changeOOS(this)" type="radio">
                与店主协商</label>
                              </td>
            </tr>
                      </tbody></table>
    </div>
    <div class="blank"></div>
    <div class="flowBox">
    <h6><span>费用总计</span></h6>
          <div id="ECS_ORDERTOTAL">
<table width="99%" cellspacing="1" cellpadding="5" border="0" bgcolor="#dddddd" align="center">
    <tbody><tr>
    <td bgcolor="#ffffff" align="right">
    该订单完成后，您将获得 
            <font class="f4_b">149</font> 积分            ，以及价值               <font class="f4_b">￥0.00元</font>的红包。
          </td>
  </tr>
    <tr>
    <td bgcolor="#ffffff" align="right">
      商品总价: <font class="f4_b" id="price_count">￥<?php echo $count; ?>.00元</font>
                        <!-- + 配送费用: <font class="f4_b">￥15.00元</font> -->
                                  </td>
  </tr>
    <tr>
    <td bgcolor="#ffffff" align="right"> 应付款金额: <font class="f4_b" id="pay_price">￥<span id="count"><?php echo $count; ?></span>元</font>
      </td>
  </tr>
</tbody></table>
</div>           <div style="margin:8px auto;" align="center">
            <input src="/static1/images/bnt_subOrder.gif" type="image">
            </div>
    </div>
    </form>
        
                



</div>
<div class="blank5"></div>


<div class="blank"></div>
<div class="foot-body">
  <div class="bads"><img src="/static1/images/bottom.jpg"></div>
  <div class="clear10"></div>
  
     <div class="foot-help">
                      <dl>
          <dt class="xs-1">新手上路 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=9" target="_blank" title="售后流程">售后流程</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=10" target="_blank" title="购物流程">购物流程</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=11" target="_blank" title="订购方式">订购方式</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-2">手机常识 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-3">配送与支付 </dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-4">会员中心</dt>
                      <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=18" target="_blank" title="资金管理">资金管理</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
                    <dd><a href="http://www.ecshop4.0.com/home/index/article.php?id=20" target="_blank" title="我的订单">我的订单</a></dd>
           
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
      <a href="http://xyunqi.com/products/ecshop?from=nav" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v4.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&amp;url=http%3A%2F%2Flocalhost%2Fdayi%2Fecshopceshi%2Fecshop%2F" target="_blank">&nbsp;&nbsp;Licensed</a><br>
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
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).on('click','.pack',function(){
  var pack=$(this).val();
  // alert(pack)
  var count=$('#count').html();
  var pack_fine=$('#pack_fine').text();
  if (pack==1) {
    $('#price_count').after('+ 包装费用: <font class="f4_b">￥5.00元</font>')
    pack_count=parseInt(count)+parseInt(pack_fine);
    $('#count').html(pack_count);
  }
})
$(document).on('click','.card',function(){
  var card=$(this).val();
  // alert(pack)
  var count=$('#count').html();
  var cards=$('#cards').text();
  if (card==1) {
    $('#price_count').after('+ 贺卡费用: <font class="f4_b">￥5.00元</font>')
    card_count=parseInt(count)+parseInt(cards);
    $('#count').html(card_count);
  }
})
$(document).on('click','.shipping',function(){
  var shipping=$(this).val();
  var count=$('#count').html();
  // alert(pack)
  var sto=$('#sto').text();
  var postoffice=$('#postoffice').text();
  if (shipping==5) {
    $('#price_count').after('+ 配送费用: <font class="f4_b">￥15.00元</font>')
    sto_count=parseInt(count)+parseInt(sto);
    $('#count').html(sto_count);
  }
  if (shipping==6) {
    $('#price_count').after('+ 配送费用: <font class="f4_b">￥3.50元</font>')
    postoffice_count=parseInt(count)+parseInt(postoffice);
    $('#count').html(postoffice_count);
  }
})
</script>