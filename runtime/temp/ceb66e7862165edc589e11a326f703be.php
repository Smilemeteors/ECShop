<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\phpStudy\WWW\ECShop\public/../application/home\view\index\category.html";i:1537362220;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>服装_ECSHOP演示站 - Is shop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="/static1/images/animated_favicon.gif" type="/static1/images/gif" />
<link href="/static1/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript" src="/static1/js/global.js"></script><script type="text/javascript" src="/static1/js/compare.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <script type="text/javascript" src="/static1/js/transport.js"></script><script type="text/javascript" src="/static1/js/utils.js"></script> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
 欢迎光临本店<a href="<?php echo url('login/login'); ?>">请登录 <strong></strong></a>&nbsp;|&nbsp;&nbsp;<a href="<?php echo url('login/register'); ?>">免费注册</a>  </font> </div>
    </div>
    <div class="bar-cart">
      <div class="fl cart-yh">
        <a href="http://www.ecshop4.0.com/home/index/user.html" class="">用户中心</a>
      </div>
             <div class="cart" id="ECS_CARTINFO"> <a href="http://www.ecshop4.0.com/home/index/flow.html" title="查看购物车">购物车(0)</a> </div>
    </div>
  </div>
</div>
<div class="nav-menu">
  <div class="wrap">
    <div class="logo"><a href="http://www.ecshop4.0.com/home/index/index.html" name="top"><img src="/static1/images/logo.gif" /></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="http://www.ecshop4.0.com/home/index/index.html">首页</a></li>
                                        <li><a href="<?php echo url('home/index/category'); ?>?id=1"
        
                    >服装</a></li>
                                        <li><a href="<?php echo url('home/index/category'); ?>?id=2"
        
                    >移动电源</a></li>
                                        <li><a href="<?php echo url('home/index/category'); ?>?id=3"
        
                    >数码时尚</a></li>
                                        <li><a href="<?php echo url('home/index/category'); ?>?id=4"
        
                    >家用电器</a></li>

      </div>
    </div>
    <div class="serach-box">
      <form id="searchForm" name="searchForm" method="get" action="search.html" onSubmit="return checkSearchForm()" class="f_r">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="135"><input name="keywords" type="text" id="keyword" value="" class="B_input"  /></td>
            <td><input name="imageField" type="submit" value="搜索" class="go" style="cursor:pointer;" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<div class="clear0 "></div>
 <div class="category-body">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href="index.html">首页</a> <code>&gt;</code> <a href="category.html?id=16">服装</a></div></div> </div>
 
<div class="block clearfix">
  
  <div class="Area">
    
        
    
<div class="prclist">
  <div class="displaylist">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="tdl"><span></span>相关商品<b>6</b>个 </td>
        <td><a name='goods_list'></a></td>
        <td class="tdr"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td>排序：</td>
              <td><form method="GET" class="sort list-paixu" name="listform">
                    <a href="category.html?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="/static1/picture/goods_id_desc.gif" alt="按上架时间排序"></a> <a href="category.html?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="/static1/picture/shop_price_default.gif" alt="按价格排序"></a> <a href="category.html?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="/static1/picture/last_update_default.gif" alt="按更新时间排序"></a>
                  <input type="hidden" name="category" value="16" />
                  <input type="hidden" name="display" value="grid" id="display" />
                  <input type="hidden" name="brand" value="0" />
                  <input type="hidden" name="price_min" value="0" />
                  <input type="hidden" name="price_max" value="0" />
                  <input type="hidden" name="filter_attr" value="0" />
                  <input type="hidden" name="page" value="1" />
                  <input type="hidden" name="sort" value="goods_id" />
                  <input type="hidden" name="order" value="DESC" />
                </form></td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
  <div class="blank5"></div>
    <form name="compareForm" action="compare.html" method="post" onSubmit="return compareGoods(this);">
            <div class="centerPadd">
      <div class="clearfix goodsBox" style="border:none;">
          <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <div class="goodsItem"> <a href="goods.html?id=48" class="img-box">
                            <img src="/uploads/<?php echo $v['goods_img']; ?>" alt="" class="goodsimg" /></a>
        <div class="goods-info">
            <div class="goods-title"><a href="" title=""><?php echo $v['goods_name']; ?></a></div>
            <div class="goods-ms">
                          </div>
            <div class="clearfix price-box">
              <div class="shop_s"><?php echo $v['goods_price']; ?></a></div>
              <a class="price-btn" href="goods.html?id=48">立即购买</a>
            </div>
        </div>
        </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
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
<form name="selectPageForm" action="/shixun/EC4/source/ecshop/category.html" method="get">
    
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
