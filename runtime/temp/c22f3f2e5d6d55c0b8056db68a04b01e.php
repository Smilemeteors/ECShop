<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\phpStudy\WWW\ECShop\public/../application/home\view\index\index.html";i:1537530421;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Is shop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="/static1/images/animated_favicon.gif" type="image/gif" />
<link href="/static1/css/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Is shop" href="feed.html" />
<link rel="stylesheet" type="text/css" href="/static1/css/swiper.min.css">
<script language='javascript' src='/static1/js/swiper.min.js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/index.js"></script></head>
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
  <?php } ?>    

  </font> </div>
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
    <div class="logo"><a href="./index.html" name="top"><img src="/static1/images/logo.gif" /></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="index.html" class="cur">首页</a></li>
        <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
              <li><a href="http://www.ecshop4.0.com/home/index/fenlei?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a></li>
           <?php endforeach; endif; else: echo "" ;endif; ?> 
        <ul> 
      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="search.html" onSubmit="return checkSearchForm()" class="f_r">
       <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td width="135"><input name="keyword"  type="text"></td>
            <td><input  value="搜索"  type="submit"></td>
          </tr>
        </tbody></table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>
<script>
if (Object.prototype.toJSONString){
      var oldToJSONString = Object.toJSONString;
      Object.prototype.toJSONString = function(){
        if (arguments.length > 0){
          return false;
        }else{
          return oldToJSONString.apply(this, arguments);
        }
}}
</script>
<div class="indexpage clearfix">
  <div class="index-cat">
    
<div class="category_info">
  <div id="category_tree">

  <!-- 无限极分类 start-->
  <?php foreach ($cat_data as $key => $value) { ?>
        <div class="cat-box">
          <div class="cat1">
            <a href="http://www.ecshop4.0.com/home/index/fenlei?cat_id=<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
          </div>
                   
        <div class="cat2-box">
      <?php foreach ($value['son'] as $key => $val) { ?>
          <div class="cat2 clearfix">
                  <a class="cat2-link" href="http://www.ecshop4.0.com/home/index/fenlei?cat_id=<?php echo $val['cat_id']; ?>"><?php echo $val['cat_name']; ?></a>
            <div class="cat3-block">            
            </div>
          <div class="cat3-box">      
          <?php foreach ($val['son'] as $key => $v) { ?>     
                          <a href="http://www.ecshop4.0.com/home/index/fenlei?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a>&nbsp;&nbsp;
          <?php } ?>
                      
            </div>
            
          </div>
          <?php } ?>  
      </div>
         
    </div>
      <?php } ?> 
        
  </div>
  <div class="clear0"></div>
</div>
 
 
  </div>
  <div class="index-banner"> 
 <style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
<div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="" / width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="/static1/images/2.jpg" alt="" / width="100%" height="100%"></div>
            <div class="swiper-slide"><img src="/static1/images/3.jpg" alt="" / width="100%" height="100%"></div>
        </div>
        
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<script>
       var swiper = new Swiper('.swiper1', {
           pagination: '.swiper-pagination',
           nextButton: '.swiper-button-next',
           prevButton: '.swiper-button-prev',
           paginationClickable: true,
           spaceBetween: 0,
           centeredSlides: true,
           autoplay: 4000,
           loop:true,
           autoplayDisableOnInteraction: false
       });
</script> </div>
</div>
<div class="indexpage clearfix index-ad">
  <div class="ad-tg">
    

  </div>
  <div class="ad-lb">
     
 <style>
    .swiper-container.swiper2 {
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
        overflow:hidden;
    }
    .swiper2 .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: 200px;
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
<div class="swiper-container swiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/static1/images/4.jpg" alt="" / width="160px" height="160px"></div>
            <div class="swiper-slide"><img src="/static1/images/5.jpg" alt="" / width="160px" height="160px"></div>
            <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="" / width="160px" height="160px"></div>
            <div class="swiper-slide"><img src="/static1/images/2.jpg" alt="" / width="160px" height="160px"></div>
        </div>
        
        <div class="swiper-pagination"></div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<script>
    var swiper = new Swiper('.swiper2', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        loop:true
    });
</script>  </div>
</div>
<div class="index-body">
  <div class="indexpage">

    <div class="body-goods">
      <div class="goods-title"><ol style='margin-left:-10px;'><li>1F 烟锁重楼</li></ol></div>
      <div class="clearfix goods-wrap">
        <div class="goods-leftad">
           <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="此处是广告" / width="240px" height="560px"></div>
        </div>
        <div class="goods-right">
<div class="all_ms">
<?php if(is_array($floor_goods) || $floor_goods instanceof \think\Collection || $floor_goods instanceof \think\Paginator): $i = 0; $__LIST__ = $floor_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <a class="goodsItem" href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>"> <div  style="padding-top:20px;" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_img']; ?>" class="goodsimg" /></div>
  <div class="goods-brief"></div>
    <div class="gos-title"><?php echo $v['goods_name']; ?></div> 
  <div class="prices">
          <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?></b></font>
      </div>
  </a>
<?php endforeach; endif; else: echo "" ;endif; ?> 
    <div class="clear0"></div>
</div>
        </div>
      </div>
      <div class="body-goods">
      <div class="goods-title"><ol style='margin-left:-10px;'><li>2F 夜阑听雪</li></ol></div>
      <div class="clearfix goods-wrap">
        <div class="goods-leftad">
           <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="此处是广告" / width="240px" height="560px"></div>
        </div>
        <div class="goods-right">
<div class="all_ms">
<?php if(is_array($floor_goods) || $floor_goods instanceof \think\Collection || $floor_goods instanceof \think\Paginator): $i = 0; $__LIST__ = $floor_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <a class="goodsItem"  href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>"> <div  style="padding-top:20px;" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_img']; ?>" class="goodsimg" /></div>
  <div class="goods-brief"></div>
    <div class="gos-title"><?php echo $v['goods_name']; ?></div> 
  <div class="prices">
          <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?></b></font>
      </div>
   
  </a>
<?php endforeach; endif; else: echo "" ;endif; ?> 
    <div class="clear0"></div>
</div>
        </div>
      </div>
            <div class="body-goods">
      <div class="goods-title"><ol style='margin-left:-10px;'><li>3F 沧海易蒙</li></ol></div>
      <div class="clearfix goods-wrap">
        <div class="goods-leftad">
           <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="此处是广告" / width="240px" height="560px"></div>
        </div>
        <div class="goods-right">
<div class="all_ms">
<?php if(is_array($floor_goods2) || $floor_goods2 instanceof \think\Collection || $floor_goods2 instanceof \think\Paginator): $i = 0; $__LIST__ = $floor_goods2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <a class="goodsItem"  href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>"> <div  style="padding-top:20px;" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_img']; ?>" class="goodsimg" /></div>
  <div class="goods-brief"></div>
    <div class="gos-title"><?php echo $v['goods_name']; ?></div> 
  <div class="prices">
          <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?></b></font>
      </div>
   
  </a>
<?php endforeach; endif; else: echo "" ;endif; ?> 
    <div class="clear0"></div>
</div>
        </div>
      </div>
            <div class="body-goods">
      <div class="goods-title"><ol style='margin-left:-10px;'><li>4F 醉枫染墨</li></ol></div>
      <div class="clearfix goods-wrap">
        <div class="goods-leftad">
           <div class="swiper-slide"><img src="/static1/images/1.jpg" alt="此处是广告" / width="240px" height="560px"></div>
        </div>
        <div class="goods-right">
<div class="all_ms">
<?php if(is_array($floor_goods3) || $floor_goods3 instanceof \think\Collection || $floor_goods3 instanceof \think\Paginator): $i = 0; $__LIST__ = $floor_goods3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <a class="goodsItem"  href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>"> <div  style="padding-top:20px;" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_img']; ?>" class="goodsimg" /></div>
  <div class="goods-brief"></div>
    <div class="gos-title"><?php echo $v['goods_name']; ?></div> 
  <div class="prices">
          <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?></b></font>
      </div>
   
  </a>
<?php endforeach; endif; else: echo "" ;endif; ?> 
    <div class="clear0"></div>
</div>
        </div>
      </div>
      <div class="goods-title">热门商品推荐</div>
      <div class="clearfix goods-wrap hot-goods">
            
<div id="show_hot_area" class="clearfix goodsBox all_mid all_ms">
<?php if(is_array($is_hot_shop) || $is_hot_shop instanceof \think\Collection || $is_hot_shop instanceof \think\Paginator): $i = 0; $__LIST__ = $is_hot_shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
     <a class="goodsItem" href="goods.html?id=70"> <div  style="padding-top:20px;" class="img-box"><img src="/uploads/<?php echo $v['goods_img']; ?>" alt="<?php echo $v['goods_name']; ?>" class="goodsimg" /></div>
  <div class="goods-brief"></div>
    <div class="gos-title"><?php echo $v['goods_name']; ?></div> 
  <div class="prices">
          <font class="shop_s"><b>￥<?php echo $v['goods_price']; ?>元</b></font>
      </div>
   
  </a>
<?php endforeach; endif; else: echo "" ;endif; ?> 

      <div class="clear0"></div>
</div> <div class="clear10"></div>
      </div>
    </div>
  </div>
</div>
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
</html>