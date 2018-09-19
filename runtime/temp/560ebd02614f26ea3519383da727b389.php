<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\phpStudy\WWW\ECShop\public/../application/home\view\index\details.html";i:1537349896;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)http://localhost/dayi/ecshopceshi/ecshop/goods.php?id=72 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v4.0.0">

<meta name="Keywords" content="">
<meta name="Description" content="">
<title>智能相机_数码时尚_配件_ECSHOP演示站 - Powered by ECShop</title>

<link rel="shortcut icon" href="http://www.ecshop4.0.com/home/index/favicon.ico">
<link rel="icon" href="http://www.ecshop4.0.com/home/index/animated_favicon.gif" type="/static1/images/gif">
<link href="/static1/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/static1/js/common.js"></script><script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body style="cursor: auto;">
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="top-bar">
  <div class="fd_top fd_top1">
    <div class="bar-left">
          <div class="top_menu1"> <!-- <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script> --> <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
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
    <div class="logo"><a href="http://localhost/dayi/ecshopceshi/ecshop/index.php" name="top"><img src="/static1/images/logo.gif"></a></div>
    <div id="mainNav" class="clearfix maxmenu">
      <div class="m_left">
      <ul>
        <li><a href="<?php echo url('index/index'); ?>" class="cur">首页</a></li>
          <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
              <li><a href="<?php echo url('index/index'); ?>?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a></li>
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
            <foreach name="hot_data" item="v">
               <a href="#"></a>
            </foreach>
        </span>
    </div>
  </div>
</div>
<div class="clear0 "></div>
<div class="goods-home">
  
<div class="block box">
  <div id="ur_here"> <div class="path"><div>当前位置: <a href="<?php echo url('index/index'); ?>">首页</a> <code>&gt;</code>
  <?php if(is_array($cat_name) || $cat_name instanceof \think\Collection || $cat_name instanceof \think\Paginator): $i = 0; $__LIST__ = $cat_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
   <a href="<?php echo url('index/fenlei'); ?>?cat_id=<?php echo $v['cat_id']; ?>"><?php echo $v['cat_name']; ?></a>
   <?php endforeach; endif; else: echo "" ;endif; ?>
  <code>&gt;</code>
  <?php if(is_array($goods_data) || $goods_data instanceof \think\Collection || $goods_data instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
   <a href="<?php echo url('index/details'); ?>?goods_id=<?php echo $v['goods_id']; ?>"><?php echo $v['goods_name']; ?></a>
   <?php endforeach; endif; else: echo "" ;endif; ?>
   </div></div> </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaR">
    
    <div id="goodsInfo" class="clearfix">
        <?php if(is_array($goods_data) || $goods_data instanceof \think\Collection || $goods_data instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <div class="imgInfo">
                <img src="/uploads/<?php echo $v['goods_img']; ?>" width="500px">
                <div class="blank5"></div>
        
                
        <div class="blank5"></div>
          </div>
      
      <div class="textInfo">
        <form action="<?php echo url('shopcar/car_add'); ?>" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">x
          <input type="hidden" name="goods_id" value="<?php echo $v['goods_id']; ?>" />
          <div class="goods_style_name"><?php echo $v['goods_name']; ?></div>
          <ul>
                        <li class="clearfix">
              <dd>
                                <strong>商品货号：</strong><?php echo $v['goods_sn']; ?>                              </dd>
              <dd class="ddR">
                                                <strong>商品库存：</strong> <?php echo $v['goods_number']; ?>                                               </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>商品品牌：</strong><a href="<?php echo $v['site_url']; ?>"><?php echo $v['brand_name']; ?></a>
                              </dd>
              <dd class="ddR">
                                <strong>商品重量：</strong><?php echo $v['goods_weight']; ?>克                              </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>上架时间：</strong><?php echo $v['add_time']; ?>                              </dd>
              <dd class="ddR">
                
                <strong>商品点击数：</strong><?php echo $v['click_count']; ?> </dd>
                <dd class="ddR">
       
       <strong>累计销量：</strong><?php echo $v['virtual_sales']; ?>      </dd>
            </li>
            <li class="clearfix">
              <dd>
                                <strong>市场价格：</strong><font class="market">￥<?php echo $v['market_price']; ?>元</font> </dd>
                            
              <dd><strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥<?php echo $v['shop_price']; ?>元</font> </dd>
                            <!-- <dd><strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥149元</font> </dd>
                            <dd><strong>vip：</strong><font class="shop" id="ECS_RANKPRICE_2">￥142元</font> </dd> -->
                          </li>
                                    <li class="clearfix">
              <dd> <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop">￥149元</font> </dd>
              <dd class="ddR">
                              </dd>
            </li>
                        <li class="clearfix">
              <dd> <strong>购买数量：</strong>
                <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; ">
              </dd>
              <dd class="ddR">
                                <strong>购买此商品可使用：</strong><font class="f4"><?php echo $v['integral']; ?> 积分</font>
                              </dd>
            </li>
                        
                        
            <li class="padd">
              <table border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                  <td class="td1"><a href="<?php echo url('shopcar/car_add'); ?>"><img src="/static1/images/buybtn1.png"></a></td>
                  <!-- <td class="td1"><input type="submit" value="立即购买" /></td> -->
                  <td class="td2"><a href="javascript:collect(72)"><img src="/static1/images/bnt_colles.gif"></a></td>
                                    <td class="td3"><a href="http://localhost/dayi/ecshopceshi/ecshop/user.php?act=affiliate&amp;goodsid=72"><img src="/static1/images/bnt_recommend.gif"></a> </td>
                                  </tr>
              </tbody></table>
            </li>
            
          </ul>
        
        </form>
      </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="blank"></div>
    
    
    <div class="box clearfix">
      <div class="box_1 goods-boxg">
        <div class="box_top">
          <div id="com_b" class="history clearfix">
            <h2 style="cursor: pointer;">商品描述：</h2>
            <h2 class="h2bg" style="cursor: pointer;">商品属性</h2>
                      </div>
        </div>
        <div id="com_v" class="boxCenterList RelaArticle"> 
        <p>&nbsp;<img src="./智能相机_数码时尚_配件_ECSHOP演示站 - Powered by ECShop_files/5984c3f800d7ef3c.jpg" alt=""></p>
         </div>
        <div id="com_h" class="none">
          <blockquote>
          <!-- 商品描述 -->
            <?php if(is_array($goods_data) || $goods_data instanceof \think\Collection || $goods_data instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><?php echo $v['goods_desc']; endforeach; endif; else: echo "" ;endif; ?>

          </blockquote>
          <blockquote>
          <!-- 商品属性 -->
          <table border="1">
            <tr>
              <!-- <td>商品类型</td> -->
              <td>属性名称</td>   
              <td>属性规格</td>           
            </tr>
            <?php if(is_array($attr) || $attr instanceof \think\Collection || $attr instanceof \think\Paginator): $i = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
              <!-- <td><?php echo $v['cat_name']; ?></td> -->

              <td><?php echo $v['attr_name']; ?></td>
              <td><?php echo $v['attr_values']; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
          </blockquote>
                  </div>
      </div>
    </div>

    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
    <div class="blank"></div>
    
     
     <div class="box">
     <div class="box_1">
      <h3><span class="text">商品标签</span></h3>
      <div class="boxCenterList clearfix ie6">
       <form name="tagForm" action="javascript:;" onsubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
                  </p>
        <p>
          <input type="text" name="tag" id="tag" class="inputBg" size="35">
          <input type="submit" value="添 加" class="bnt_blue" style="border:none;">
          <input type="hidden" name="goods_id" value="72">
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                // function submitTag(frm)
                // {
                //   try
                //   {
                //     var tag = frm.elements['tag'].value;
                //     var idx = frm.elements['goods_id'].value;
                //     if (tag.length > 0 && parseInt(idx) > 0)
                //     {
                //       Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                //     }
                //   }
                //   catch (e) {alert(e);}
                //   return false;
                // }
                // function submitTagResponse(result)
                // {
                //   var div = document.getElementById('ECS_TAGS');
                //   if (result.error > 0)
                //   {
                //     alert(result.message);
                //   }
                //   else
                //   {
                //     try
                //     {
                //       div.innerHTML = '';
                //       var tags = result.content;
                //       for (i = 0; i < tags.length; i++)
                //       {
                //         div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                //       }
                //     }
                //     catch (e) {alert(e);}
                //   }
                // }
                
                //]]>
                </script>
              </form>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
  <div id="ECS_BOUGHT"><div class="box">
     <div class="box_1">
      <h3><span class="text">购买记录</span>(近期成交数量<font class="f1">0</font>)</h3>
      <div class="boxCenterList">
               还没有人购买过此商品               
       <div id="buy_pagebar" class="f_r" style="margin-top:10px">
        <form name="selectPageForm" action="http://localhost/dayi/ecshopceshi/ecshop/goods.php" method="get">
                <div id="buy_pager">
          总计 0 个记录，共 1 页。 <span> <a href="javascript:gotoBuyPage(1,72)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
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
      </div>
      
      <div class="blank5"></div>
      </div>
     </div>
    </div>
    <div class="blank5"></div></div> <div id="ECS_COMMENT"> <div class="box">
     <div class="box_1">
      <h3><span class="text">用户评论</span>(共<font class="f1">0</font>条评论)</h3>
      <div class="boxCenterList clearfix" style="height:1%;">
       <ul class="comments">
               <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
               <li>用户:&nbsp;&nbsp;<?php echo $v['user_name']; ?> &nbsp;&nbsp;<?php echo $v['add_date']; ?>&nbsp;&nbsp;<?php echo $v['goods_name']; ?></li>
               <li>内容:&nbsp;&nbsp;<?php echo $v['content']; ?>  </li>
               <?php endforeach; endif; else: echo "" ;endif; ?>
               </ul>
       
       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="http://localhost/dayi/ecshopceshi/ecshop/goods.php" method="get">
                <div id="pager">
          总计 0 个记录，共 1 页。 <span> <a href="javascript:gotoPage(1,72,0)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
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
      </div>
      
      <div class="blank5"></div>
      
      <div class="commentsList">
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
       <table width="710" border="0" cellspacing="5" cellpadding="0">
        <tbody><tr>
          <td width="64" align="right">用户名：</td>
          <td width="631">匿名用户</td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <input type="text" name="email" id="email" maxlength="100" value="" class="inputBorder">
          </td>
        </tr>
        <tr>
          <td align="right">评价等级：</td>
          <td>
          <input name="comment_rank" type="radio" value="1" id="comment_rank1"> <img src="/static1/images/stars1.gif">
          <input name="comment_rank" type="radio" value="2" id="comment_rank2"> <img src="/static1/images/stars2.gif">
          <input name="comment_rank" type="radio" value="3" id="comment_rank3"> <img src="/static1/images/stars3.gif">
          <input name="comment_rank" type="radio" value="4" id="comment_rank4"> <img src="/static1/images/stars4.gif">
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5"> <img src="/static1/images/stars5.gif">
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
          <textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
          <input type="hidden" name="cmt_type" value="0">
          <input type="hidden" name="id" value="72">
          </td>
        </tr>
        <tr>
          <td colspan="2">
                    <div style="padding-left:15px; text-align:left; float:left;">
          验证码：<input type="text" name="captcha" class="inputBorder" style="width:50px; margin-left:5px;">
          <img src="captcha.php" alt="captcha" onclick="this.src=&#39;captcha.php?&#39;+Math.random()" class="captcha">
          </div>
                    <input name="" type="submit" value="" class="f_r" style="border:none; background:url(themes/default/images/commentsBnt.gif); width:75px; height:21px; margin-right:8px;">
          </td>
        </tr>
      </tbody></table>
      </form>
      </div>
      
      </div>
     </div>
    </div>
    <div class="blank5"></div>
</div>
  </div>
  
</div>
<div class="blank5"></div>
<div class="blank"></div>
</div>
<div class="foot-body">
  <div class="bads"><img src="./智能相机_数码时尚_配件_ECSHOP演示站 - Powered by ECShop_files/bottom.jpg"></div>
  <div class="clear10"></div>
  
     <div class="foot-help">
                      <dl>
          <dt class="xs-1">新手上路 </dt>
                      <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=9" target="_blank" title="售后流程">售后流程</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=10" target="_blank" title="购物流程">购物流程</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=11" target="_blank" title="订购方式">订购方式</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-2">手机常识 </dt>
                      <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-3">配送与支付 </dt>
                      <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></dd>
           
        </dl>
         
                        <dl>
          <dt class="xs-4">会员中心</dt>
                      <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=18" target="_blank" title="资金管理">资金管理</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></dd>
                    <dd><a href="http://localhost/dayi/ecshopceshi/ecshop/article.php?id=20" target="_blank" title="我的订单">我的订单</a></dd>
           
        </dl>
         
                 
                 
         
        <div class="foot-weixin">
          <div class="weixin-txt">关注demo微信</div>
          <div class="weixin-pic">
            <img src="./智能相机_数码时尚_配件_ECSHOP演示站 - Powered by ECShop_files/weixin.jpg">
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

</body></html>