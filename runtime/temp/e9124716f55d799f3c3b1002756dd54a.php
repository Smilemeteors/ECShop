<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\ECShop\public/../application/admin\view\index\index_menu.html";i:1537176950;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/nav.css" rel="stylesheet" type="text/css" />
</head>
<body class="nav"><div class="menu">
  <div id="logo-div" style="margin-top:-5px; padding-top:10px;"><br />
    <b><span style="font-size:18px; padding:; color:#fff;">Smilemeteor<span/></b></a>
        <a href="javascript:;" class="noauthorize"><img src="/static/picture/noauthorize.png" class="icon" width="12"> 未授权用户</a>
      </div>
  <div id="license-div"></div>
  <div id="main-div">
    <div id="menu-list">
      <ul class="menu" id="menu-ul">
                  </li>
                          <li key="02_cat_and_goods" class="icon-goods" data-url="admin/goods/goods_list" data-key="01_goods_list" name="menu" onclick="showsub(this)">
          商品管理                    <div class="submenu">
            <div class="title">商品管理</div>
            <ul>
            <li id="sub-menu-01_goods_list" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/goods_list" target="main-frame">商品列表</a></li>
            <li id="sub-menu-02_goods_add" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/goods_add" target="main-frame">添加新商品</a></li>
            <li id="sub-menu-03_category_list" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/category_list" target="main-frame">商品分类</a></li>
            <li id="sub-menu-05_comment_manage" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/comment_manage_list" target="main-frame">用户评论</a></li>
            <li id="sub-menu-06_goods_brand_list" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/brand_list" target="main-frame">商品品牌</a></li>
            <li id="sub-menu-08_goods_type" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/goods_type_manage" target="main-frame">商品类型</a></li>
            <li id="sub-menu-11_goods_trash" class="menu-item" onclick="showact(this, event)"><a href="admin/goods/goods_trash" target="main-frame">商品回收站</a></li>
                        </ul>
          </div>
                  </li>
                          <li key="03_promotion" class="icon-promotion" data-url="admin/Bonus/bonus_list" data-key="04_bonustype_list" name="menu" onclick="showsub(this)">
          促销管理                    <div class="submenu">
            <div class="title">促销管理</div>
            <ul>
            <li id="sub-menu-04_bonustype_list" class="menu-item" onclick="showact(this, event)"><a href="admin/Bonus/bonus_list" target="main-frame">红包类型</a></li>
            <!-- <li id="sub-menu-06_pack_list" class="menu-item" onclick="showact(this, event)"><a href="pack.php?act=list" target="main-frame">商品包装</a></li>
            <li id="sub-menu-07_card_list" class="menu-item" onclick="showact(this, event)"><a href="card.php?act=list" target="main-frame">祝福贺卡</a></li>
            <li id="sub-menu-08_group_buy" class="menu-item" onclick="showact(this, event)"><a href="group_buy.php?act=list" target="main-frame">团购活动</a></li>
            <li id="sub-menu-09_topic" class="menu-item" onclick="showact(this, event)"><a href="topic.php?act=list" target="main-frame">专题管理</a></li>
            <li id="sub-menu-10_auction" class="menu-item" onclick="showact(this, event)"><a href="auction.php?act=list" target="main-frame">拍卖活动</a></li>
            <li id="sub-menu-12_favourable" class="menu-item" onclick="showact(this, event)"><a href="favourable.php?act=list" target="main-frame">优惠活动</a></li>
            <li id="sub-menu-13_wholesale" class="menu-item" onclick="showact(this, event)"><a href="wholesale.php?act=list" target="main-frame">批发管理</a></li>
            <li id="sub-menu-14_package_list" class="menu-item" onclick="showact(this, event)"><a href="package.php?act=list" target="main-frame">超值礼包</a></li>
            <li id="sub-menu-15_exchange_goods" class="menu-item" onclick="showact(this, event)"><a href="exchange_goods.php?act=list" target="main-frame">积分商城商品</a></li> -->
                        </ul>
          </div>
                  </li>
                          <li key="04_order" class="icon-order" data-url="admin/order/orders_list" data-key="02_order_list" name="menu" onclick="showsub(this)">
          订单管理                    <div class="submenu">
            <div class="title">订单管理</div>
            <ul>
            <li id="sub-menu-02_order_list" class="menu-item" onclick="showact(this, event)"><a href="admin/order/orders_list" target="main-frame">订单列表</a></li>
            <li id="sub-menu-03_order_query" class="menu-item" onclick="showact(this, event)"><a href="admin/order/orders_query" target="main-frame">订单查询</a></li>
            <li id="sub-menu-04_merge_order" class="menu-item" onclick="showact(this, event)"><a href="admin/order/merge_orders" target="main-frame">合并订单</a></li>
            <li id="sub-menu-05_edit_order_print" class="menu-item" onclick="showact(this, event)"><a href="admin/order/orders_printing" target="main-frame">订单打印</a></li>
            <li id="sub-menu-06_undispose_booking" class="menu-item" onclick="showact(this, event)"><a href="admin/order/shortage_registration" target="main-frame">缺货登记</a></li>
            <li id="sub-menu-08_add_order" class="menu-item" onclick="showact(this, event)"><a href="admin/order/add_order" target="main-frame">添加订单</a></li>
            <li id="sub-menu-09_delivery_order" class="menu-item" onclick="showact(this, event)"><a href="admin/order/list_invoice" target="main-frame">发货单列表</a></li>
            <li id="sub-menu-10_back_order" class="menu-item" onclick="showact(this, event)"><a href="admin/order/list_return" target="main-frame">退货单列表</a></li>
                        </ul>
          </div>
                  </li>
                          <li key="05_banner" class="icon-banner" data-url="admin/logo/logo" data-key="ad_list" name="menu" onclick="showsub(this)">
          广告管理                    <div class="submenu">
            <div class="title">广告管理</div>
            <ul>
            <li id="sub-menu-ad_list" class="menu-item" onclick="showact(this, event)"><a href="admin/logo/logo" target="main-frame">广告列表</a></li>
            <li id="sub-menu-ad_position" class="menu-item" onclick="showact(this, event)"><a href="admin/logo/position" target="main-frame">广告位置</a></li>
                        </ul>
          </div>
                  </li>
                          <li key="08_members" class="icon-members" data-url="admin/member/users" data-key="03_users_list" name="menu" onclick="showsub(this)">
          会员管理                    <div class="submenu">
            <div class="title">会员管理</div>
            <ul>
            <li id="sub-menu-03_users_list" class="menu-item" onclick="showact(this, event)"><a href="admin/member/users" target="main-frame">会员列表</a></li>
            <li id="sub-menu-04_users_add" class="menu-item" onclick="showact(this, event)"><a href="admin/member/user_add" target="main-frame">添加会员</a></li>
            <li id="sub-menu-05_user_rank_list" class="menu-item" onclick="showact(this, event)"><a href="admin/member/user_rank" target="main-frame">会员等级</a></li>
            <li id="sub-menu-08_unreply_msg" class="menu-item" onclick="showact(this, event)"><a href="admin/member/user_msg" target="main-frame">会员留言</a></li>
            <li id="sub-menu-09_user_account" class="menu-item" onclick="showact(this, event)"><a href="admin/member/user_account" target="main-frame">充值和提现申请</a></li>
            <li id="sub-menu-10_user_account_manage" class="menu-item" onclick="showact(this, event)"><a href="admin/member/user_account_manage" target="main-frame">资金管理</a></li>
                        </ul>
          </div>
                  </li>
                          <li key="10_priv_admin" class="icon-priv" data-url="admin/quanxi/privilege" data-key="admin_list" name="menu" onclick="showsub(this)">
          权限管理                    <div class="submenu">
            <div class="title">权限管理</div>
            <ul>
            <li id="sub-menu-admin_list" class="menu-item" onclick="showact(this, event)"><a href="admin/quanxi/privilege" target="main-frame">管理员列表</a></li>
            <li id="sub-menu-admin_logs" class="menu-item" onclick="showact(this, event)"><a href="admin/quanxi/admin_logs" target="main-frame">管理员日志</a></li>
            <li id="sub-menu-admin_role" class="menu-item" onclick="showact(this, event)"><a href="admin/quanxi/role" target="main-frame">角色管理</a></li>
            <li id="sub-menu-agency_list" class="menu-item" onclick="showact(this, event)"><a href="admin/quanxi/agency" target="main-frame">办事处列表</a></li>
            <li id="sub-menu-suppliers_list" class="menu-item" onclick="showact(this, event)"><a href="admin/quanxi/suppliers" target="main-frame">供货商列表</a></li>
                        </ul>
          </div>
                  </li>
          <li key="11_system" class="icon-system" data-url="admin/system/accuse_list" data-key="01_shop_config" name="menu" onclick="showsub(this)">
              投诉中心                    <div class="submenu">
              <div class="title">投诉中心</div>
              <ul>
                  <li id="sub-menu-01_shop_config" class="menu-item" onclick="showact(this, event)"><a href="admin/system/accuse_list"target="main-frame">投诉列表</a>
              </ul>
          </div>
          </li>
<<<<<<< HEAD
<!--                          <li key="11_system" class="icon-system" data-url="shop_config.php?act=list_edit" data-key="01_shop_config" name="menu" onclick="showsub(this)">
=======
                          <li key="11_system" class="icon-system" data-url="shop_config.php?act=list_edit" data-key="01_shop_config" name="menu" onclick="showsub(this)">
>>>>>>> 48b94c85455ad47fb089bd7e615b932c05b51dce
          系统设置                    <div class="submenu">
            <div class="title">系统设置</div>
            <ul>
            <li id="sub-menu-01_shop_config" class="menu-item" onclick="showact(this, event)"><a href="shop_config.php?act=list_edit"target="main-frame">商店设置</a></li>
            <li id="sub-menu-021_reg_fields" class="menu-item" onclick="showact(this, event)"><a href="reg_fields.php?act=list" target="main-frame">会员注册项设置</a></li>
            <li id="sub-menu-02_payment_list" class="menu-item" onclick="showact(this, event)"><a href="payment.php?act=list" target="main-frame">支付方式</a></li>
            <li id="sub-menu-03_shipping_list" class="menu-item" onclick="showact(this, event)"><a href="shipping.php?act=list" target="main-frame">配送方式</a></li>
            <li id="sub-menu-04_mail_settings" class="menu-item" onclick="showact(this, event)"><a href="shop_config.php?act=mail_settings" target="main-frame">邮件服务器设置</a></li>
            <li id="sub-menu-05_area_list" class="menu-item" onclick="showact(this, event)"><a href="area_manage.php?act=list" target="main-frame">地区列表</a></li>
            <li id="sub-menu-07_cron_schcron" class="menu-item" onclick="showact(this, event)"><a href="cron.php?act=list" target="main-frame">计划任务</a></li>
            <li id="sub-menu-08_friendlink_list" class="menu-item" onclick="showact(this, event)"><a href="friend_link.php?act=list" target="main-frame">友情链接</a></li>
            <li id="sub-menu-captcha_manage" class="menu-item" onclick="showact(this, event)"><a href="captcha_manage.php?act=main" target="main-frame">验证码管理</a></li>
            <li id="sub-menu-check_file_priv" class="menu-item" onclick="showact(this, event)"><a href="check_file_priv.php?act=check" target="main-frame">文件权限检测</a></li>
            <li id="sub-menu-file_check" class="menu-item" onclick="showact(this, event)"><a href="filecheck.php" target="main-frame">文件校验</a></li>
            <li id="sub-menu-navigator" class="menu-item" onclick="showact(this, event)"><a href="navigator.php?act=list" target="main-frame">自定义导航栏</a></li>
            <li id="sub-menu-sitemap" class="menu-item" onclick="showact(this, event)"><a href="sitemap.php" target="main-frame">站点地图</a></li>
                        </ul>

          </div>
                  </li> -->
                        </ul>
          </div>
                  </li>
                  </ul>
    </div>
    <div id="help-div" style="display:none">
      <h1 id="help-title"></h1>
      <div id="help-content"></div>
    </div>
  </div>
  <div id="foot-div" onmouseover="showBar(this)" onmouseout="hideBar(this)">
    <a href="privilege.php?act=modif" target="main-frame">admin</a>
    <div class="panel-hint">
      <ul>
        <!--<li>-->
          <!--<a href="index.php?act=clear_cache" target="main-frame" class="fix-submenu">清除缓存</a>-->
        <!--</li>-->
        <li class="btn-exit">
          <a href="<?php echo url('login/logout'); ?>" target="_top" class="fix-submenu">退出</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<script language="JavaScript">
window.setInterval(crontab,30000);
function crontab(){
  Ajax.call('cloud.php?is_ajax=1&act=load_crontab','','', 'GET', 'JSON');
}
function showBar(item){
  var silb = item.lastElementChild;
  silb.style.display = "block";
}
function hideBar(item){
  var silb = item.lastElementChild;
  silb.style.display = "none";
}
function showsub(el) {
  var act = el.parentNode.getElementsByClassName('active');
  var url = el.getAttribute('data-url') || '';
  var key = el.getAttribute('data-key') || '';

  if (act.length) {
    Array.prototype.slice.call(act).forEach(function(el) {
      el.className = el.className.replace(/\sactive\b/i, '');
    });
  }
  el.className = el.className + ' active';
  top.document.getElementById('frame-body').cols = '240,*';
  if (url) {
    top.document.getElementById('main-frame').src=url;
    document.getElementById('sub-menu-'+key).className = 'menu-item active';
  }
}
function showact(el, e) {
  e.stopPropagation();
  var act = el.parentNode.getElementsByClassName('active');
  if (act.length) {
    Array.prototype.slice.call(act).forEach(function(el) {
      el.className = el.className.replace(/\sactive\b/i, '');
    });
  }
  el.className = el.className + ' active';
}


/**
 * 创建XML对象
 */
function createDocument()
{
  var xmlDoc;

  // create a DOM object
  if (window.ActiveXObject)
  {
    try
    {
      xmlDoc = new ActiveXObject("Msxml2.DOMDocument.6.0");
    }
    catch (e)
    {
      try
      {
        xmlDoc = new ActiveXObject("Msxml2.DOMDocument.5.0");
      }
      catch (e)
      {
        try
        {
          xmlDoc = new ActiveXObject("Msxml2.DOMDocument.4.0");
        }
        catch (e)
        {
          try
          {
            xmlDoc = new ActiveXObject("Msxml2.DOMDocument.3.0");
          }
          catch (e)
          {
            alert(e.message);
          }
        }
      }
    }
  }
  else
  {
    if (document.implementation && document.implementation.createDocument)
    {
      xmlDoc = document.implementation.createDocument("","doc",null);
    }
    else
    {
      alert("Create XML object is failed.");
    }
  }
  xmlDoc.async = false;

  return xmlDoc;
}


</script>

</body>
</html>
