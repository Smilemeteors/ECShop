<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy\WWW\shixun\ECShop\public/../application/home\view\index\fenlei.html";i:1537515254;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0059)http://www.ecshop4.0.com/home/index/category.html?id=16 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v4.0.0">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>服装_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="http://www.ecshop4.0.com/home/index/favicon.ico">
<link rel="icon" href="http://www.ecshop4.0.com/home/index/animated_favicon.gif" type="image/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/global.js"></script><script type="text/javascript" src="/static1/js/compare.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="/static1/js/transport.js"></script><script type="text/javascript" src="/static1/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 <?php if (empty($_SESSION)) {?>
       欢迎光临本店<a href="<?php echo url('login/login'); ?>">请登录</a><strong></strong>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('login/register'); ?>">免费注册</a>
  <?php } else { ?>  
         您好,&nbsp;&nbsp;<strong><font color="#AE0000"><?php echo $_SESSION['username']; ?></font></strong>, 欢迎您回来！ <a href="<?php echo url('user/welcome'); ?>">用户中心</a>| <a href="<?php echo url('Login/back'); ?>">退出</a>
  <?php } ?> </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <?php if(empty($_SESSION)){ ?>
           <a href="<?php echo url('Login/login'); ?>" class="">用户中心</a>
          <?php }else{?>
         <a href="<?php echo url('user/welcome'); ?>" class="">用户中心</a>
          <?php }?>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <?php if(empty($_SESSION)){ ?>
            <a href="<?php echo url('Login/login'); ?>" title="查看购物车"><img src="/static1/images/cart.png" />&nbsp;购物车(0)</a>
          <?php }else{?>
         <a href="<?php echo url('shopcar/car'); ?>" title="查看购物车"><img src="/static1/images/cart.png" />&nbsp;购物车(0)</a>
          <?php }?> </div>
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
     <form method="get" action="<?php echo url('index/fenlei'); ?>">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td width="135"><input name="keyword"  type="text"></td>
            <td><input  value="搜索"  type="submit"></td>
          </tr>
        </tbody></table>
      </form>
       <span class="fl">
            <?php if(is_array($hot_data) || $hot_data instanceof \think\Collection || $hot_data instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
               <a href="#"><?php echo $v['hot_name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </span>
    </div>
  </div>
</div>
<div class="clear0 "></div>
 <div class="category-body">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a>><?php if(is_array($cat_name) || $cat_name instanceof \think\Collection || $cat_name instanceof \think\Paginator): $i = 0; $__LIST__ = $cat_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?> <a href="<?php echo url('index/fenlei'); ?>?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div> </div>
<div class="block clearfix">
  
 <div class="Area">
            
<div class="prclist">
  <div class="displaylist">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td class="tdl"><span></span>相关商品<b><?php echo $count; ?></b>个 </td>
        <td><a name="goods_list"></a></td>
        <td class="tdr"><table border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
            <td>排序：</td>
              <td><form method="GET" class="sort list-paixu" name="listform">
                    <!-- <a href="http://www.ecshop4.0.com/home/index/category.html?category=16&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=goods_id&amp;order=ASC#goods_list"><img src="/static1/images/goods_id_DESC.gif" alt="按上架时间排序"></a>  -->
                    <a href="<?php echo url('index/paiixue'); ?>?cat_id=14">按价格排序</a> 
                  <!--   <a href="http://www.ecshop4.0.com/home/index/category.html?category=16&amp;display=grid&amp;brand=0&amp;price_min=0&amp;price_max=0&amp;filter_attr=0&amp;page=1&amp;sort=last_update&amp;order=DESC#goods_list"><img src="./服装_ECSHOP演示站 - Powered by ECShop_files/last_update_default.gif" alt="按更新时间排序"></a> -->
                  <input type="hidden" name="category" value="16">
                  <input type="hidden" name="display" value="grid" id="display">
                  <input type="hidden" name="brand" value="0">
                  <input type="hidden" name="price_min" value="0">
                  <input type="hidden" name="price_max" value="0">
                  <input type="hidden" name="filter_attr" value="0">
                  <input type="hidden" name="page" value="1">
                  <input type="hidden" name="sort" value="goods_id">
                  <input type="hidden" name="order" value="DESC">
                </form></td>
            </tr>
          </tbody></table></td>
      </tr>
    </tbody></table>
  </div>
  <div class="blank5"></div>
    <form name="compareForm" action="http://www.ecshop4.0.com/home/index/compare.html" method="post" onsubmit="return compareGoods(this);">
            <div class="centerPadd">
      <div class="clearfix goodsBox" style="border:none;">


      <?php if(is_array($goods_data) || $goods_data instanceof \think\Collection || $goods_data instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <div class="goodsItem"> <a href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" class="goods_img"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>" ><?php echo $v['goods_name']; ?></a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥<?php echo $v['shop_price']; ?>元</div>
              <a class="price-btn" href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>">立即购买</a>
            </div>
            
        </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!-- <div class="goodsItem"> <a href="http://www.ecshop4.0.com/home/index/goods.html?id=47" class="img-box"><img src="/static1/images/47_thumb_G_1462852887996.jpg" alt="极简都市双肩包" class="goodsimg"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="http://www.ecshop4.0.com/home/index/goods.html?id=47" title="极简都市双肩包">极简都市双肩包</a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥149元</div>
              <a class="price-btn" href="http://www.ecshop4.0.com/home/index/goods.html?id=47">立即购买</a>
            </div>
            
        </div>
        </div>
                                <div class="goodsItem"> <a href="http://www.ecshop4.0.com/home/index/goods.html?id=46" class="img-box"><img src="/static1/images/46_thumb_G_1462852854005.jpg" alt="V领短袖T恤 ..." class="goodsimg"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="http://www.ecshop4.0.com/home/index/goods.html?id=46" title="V领短袖T恤 女款">V领短袖T恤 ...</a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥39元</div>
              <a class="price-btn" href="http://www.ecshop4.0.com/home/index/goods.html?id=46">立即购买</a>
            </div>
            
        </div>
        </div>
                                <div class="goodsItem"> <a href="http://www.ecshop4.0.com/home/index/goods.html?id=44" class="img-box"><img src="/static1/images/44_thumb_G_1462854145205.jpg" alt="短袖POLO衫..." class="goodsimg"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="http://www.ecshop4.0.com/home/index/goods.html?id=44" title="短袖POLO衫 女款">短袖POLO衫...</a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥59元</div>
              <a class="price-btn" href="http://www.ecshop4.0.com/home/index/goods.html?id=44">立即购买</a>
            </div>
            
        </div>
        </div>
                                <div class="goodsItem"> <a href="http://www.ecshop4.0.com/home/index/goods.html?id=43" class="img-box"><img src="/static1/images/43_thumb_G_1462852740405.jpg" alt="短袖T恤 摇滚..." class="goodsimg"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="http://www.ecshop4.0.com/home/index/goods.html?id=43" title="短袖T恤 摇滚星球">短袖T恤 摇滚...</a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥39元</div>
              <a class="price-btn" href="http://www.ecshop4.0.com/home/index/goods.html?id=43">立即购买</a>
            </div>
            
        </div>
        </div>
                                <div class="goodsItem"> <a href="http://www.ecshop4.0.com/home/index/goods.html?id=42" class="img-box"><img src="/static1/images/42_thumb_G_1462852622356.jpg" alt="短袖T恤 米兔..." class="goodsimg"></a>
        <div class="goods-info">
            <div class="goods-title"><a href="http://www.ecshop4.0.com/home/index/goods.html?id=42" title="短袖T恤 米兔大游行">短袖T恤 米兔...</a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s">￥39元</div>
              <a class="price-btn" href="http://www.ecshop4.0.com/home/index/goods.html?id=42">立即购买</a>
            </div>
            
        </div>
        </div> -->
                      </div>
    </div>
          </form>
  </div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
 <div class="page-form clearfix">
<form name="selectPageForm" action="http://www.ecshop4.0.com/home/index/category.html" method="get">
    
  <div id="pager" class="pagebar">
                          </div>
  
  </form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
</div> </div>
  
</div>
</div>
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
 
 


<div id="compareBox" align="center" style="display: none; top: 200px;"><ul id="compareList"></ul><input type="button" value=""></div></body></html>