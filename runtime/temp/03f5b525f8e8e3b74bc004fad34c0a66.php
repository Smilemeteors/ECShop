<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\phpStudy\WWW\ECShop Tp5\public/../application/admin\view\goods\goods_list.html";i:1536137583;}*/ ?>
<!-- $Id: goods_list.htm 17126 2010-04-23 10:30:26Z liuhui $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title>ECSHOP 管理中心 - 商品列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/transport.js"></script><script type="text/javascript" src="static/js/common.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>

<script>
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var goods_name_not_null = "商品名称不能为空。";
var goods_cat_not_null = "商品分类必须选择。";
var category_cat_not_null = "分类名称不能为空";
var brand_cat_not_null = "品牌名称不能为空";
var goods_cat_not_leaf = "您选择的商品分类不是底级分类，请选择底级分类。";
var shop_price_not_null = "本店售价不能为空。";
var shop_price_not_number = "本店售价不是数值。";
var select_please = "请选择...";
var button_add = "添加";
var button_del = "删除";
var spec_value_not_null = "规格不能为空";
var spec_price_not_number = "加价不是数字";
var market_price_not_number = "市场价格不是数字";
var goods_number_not_int = "商品库存不是整数";
var warn_number_not_int = "库存警告不是整数";
var promote_not_lt = "促销开始日期不能大于结束日期";
var promote_start_not_null = "促销开始时间不能为空";
var promote_end_not_null = "促销结束时间不能为空";
var drop_img_confirm = "您确实要删除该图片吗？";
var batch_no_on_sale = "您确实要将选定的商品下架吗？";
var batch_trash_confirm = "您确实要把选中的商品放入回收站吗？";
var go_category_page = "本页数据将丢失，确认要去商品分类页添加分类吗？";
var go_brand_page = "本页数据将丢失，确认要去商品品牌页添加品牌吗？";
var volume_num_not_null = "请输入优惠数量";
var volume_num_not_number = "优惠数量不是数字";
var volume_price_not_null = "请输入优惠价格";
var volume_price_not_number = "优惠价格不是数字";
var cancel_color = "无样式";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2FECShop%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
	    }
	}

	/*关闭按钮*/
	function btnCancel(item){
	  var par  = item.offsetParent;
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  par.style.display = 'none';
	  if(mask){mask.style.display = 'none';}
	  frame.src = '';
	}
</script>
</head>
<body>
<!--云起激活系统面板-->
<div class="panel-hint panel-icloud" id="panelCloud">
  <div class="panel-cross"><span onclick="btnCancel(this)">Ｘ</span></div>
  <div class="panel-title">
    <span class="tit">您需要激活系统</span>
    <p>用云起账号激活您的系统，享受物流查询，天工收银，手机短信等更多应用和服务</p>
  </div>
  <div class="panel-left">
    <span>没有云起账号吗？</span>
    <p>点击下列按钮一步完成注册激活！</p>
    <a href="https://account.shopex.cn/reg?refer=yunqi_ecshop" target="_blank" class="btn btn-yellow">免费注册云起账号</a>
  </div>
  <div class="panel-right">
    <h5 class="logo">云起</h5>
    <p>正在激活中</p>
    <iframe src="" frameborder="0" id="CFrame"></iframe>
    <div class="cloud-passw">
      <a target="_blank" href="https://account.shopex.cn/forget?">忘记密码？</a>
    </div>
  </div>
</div>
<!--云起激活系统面板-->
<!--遮罩-->
<div class="mask-black" id="CMask"></div>
<!--遮罩-->
<h1>
      <a href="goods.php?act=add" class="btn btn-right btn-add-goods">添加新商品</a>
  <a class="btn btn-right" href="http://yunqi.shopex.cn/products/huodiantong" target="_blank">快速录入商品</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品列表 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/listtable.js"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
        <!-- 分类 -->
    商品分类
    <select name="cat_id"><option value="0">所有分类</option><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
    <!-- 品牌 -->
    品牌
    <select name="brand_id"><option value="0">所有品牌</option><option value="4">飞利浦</option><option value="5">夏新</option><option value="15">仓品</option></select>
    <!-- 推荐 -->
    推荐类别
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
        
    <!-- 供货商 -->
    供货商
    <select name="suppliers_id"><option value="0">全部</option><option value="1">北京供货商</option><option value="2">上海供货商</option></select>
        <!-- 上架 -->
    上架状态
    <input type="radio" name="is_on_sale" id="" value="1"> 上架    <input type="radio" name="is_on_sale" id="" value="0"> 下架        <!-- 关键字 -->
    &nbsp;&nbsp; 关键字 <input type="text" name="keyword" size="25" />
    <button type="submit" class="btn"> 搜索 </button>
  </form>
</div>


<script>
  function searchGoods() {

    listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
    listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
    listTable.filter['intro_type'] = document.forms['searchForm'].elements['intro_type'].value;
      listTable.filter['suppliers_id'] = document.forms['searchForm'].elements['suppliers_id'].value;
      listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;

    listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['page'] = 1;

    listTable.loadList();
  }
</script>
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th class="checks"><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox"></th>
    <th><a href="javascript:listTable.sort('goods_id'); ">编号</a><img src="static/picture/sort_desc.png"/></th>
    <th><a href="javascript:listTable.sort('goods_name'); ">商品名称</a></th>
    <th><a href="javascript:listTable.sort('goods_sn'); ">货号</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">价格</a></th>
    <th><a href="javascript:listTable.sort('is_on_sale'); ">上架</a></th>
    <th><a href="javascript:listTable.sort('is_best'); ">精品</a></th>
    <th><a href="javascript:listTable.sort('is_new'); ">新品</a></th>
    <th><a href="javascript:listTable.sort('is_hot'); ">热销</a></th>
    <th><a href="javascript:listTable.sort('sort_order'); ">推荐排序</a></th>
        <th><a href="javascript:listTable.sort('goods_number'); ">库存</a></th>
        <th><a href="javascript:listTable.sort('virtual_sales'); ">虚拟销量</a></th>
    <th>操作</th>
  <tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="72"></td>
    <td>72</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 72)">智能相机</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 72)">ECS000072</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 72)">149.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 72)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 72)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 72)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 72)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 72)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 72)">20</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 72)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=72" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=72&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=72&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(72, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="70"></td>
    <td>70</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 70)">炫彩翻页保护套</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 70)">ECS000070</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 70)">39.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 70)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 70)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 70)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 70)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 70)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 70)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 70)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=70" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=70&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=70&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(70, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="69"></td>
    <td>69</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 69)">平衡车</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 69)">ECS000069</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 69)">1999.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 69)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 69)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 69)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 69)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 69)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 69)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 69)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=69" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=69&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=69&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(69, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="68"></td>
    <td>68</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 68)">透明超薄软胶保护套</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 68)">ECS000068</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 68)">19.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 68)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 68)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 68)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 68)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 68)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 68)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 68)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=68" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=68&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=68&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(68, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="64"></td>
    <td>64</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 64)">运动相机</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 64)">ECS000064</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 64)">399.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 64)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 64)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 64)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 64)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 64)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 64)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 64)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=64" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=64&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=64&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(64, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="63"></td>
    <td>63</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 63)">自拍杆</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 63)">ECS000063</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 63)">49.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 63)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 63)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 63)" /></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 63)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 63)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 63)">0</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 63)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=63" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=63&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=63&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(63, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="62"></td>
    <td>62</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 62)">随身风扇</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 62)">ECS000062</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 62)">19.90</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 62)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 62)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 62)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 62)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 62)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 62)">20</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 62)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=62" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=62&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=62&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(62, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="61"></td>
    <td>61</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 61)">视频</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 61)">ECS000061</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 61)">20.20</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 61)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 61)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 61)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 61)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 61)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 61)">20</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 61)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=61" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=61&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=61&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(61, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="60"></td>
    <td>60</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 60)">指环式防滑手机支架</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 60)">ECS000060</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 60)">12.50</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 60)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 60)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 60)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 60)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 60)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 60)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 60)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=60" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=60&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=60&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(60, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="59"></td>
    <td>59</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 59)"> 标准高透贴膜(2片装) </span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 59)">ECS000059</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 59)">19.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 59)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 59)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 59)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 59)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 59)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 59)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 59)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=59" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=59&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=59&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(59, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="58"></td>
    <td>58</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 58)">手机3高配版 超薄钢化玻璃膜(0.22mm) </span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 58)">ECS000058</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 58)">29.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 58)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 58)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 58)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 58)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 58)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 58)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 58)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=58" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=58&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=58&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(58, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="55"></td>
    <td>55</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 55)">移动电源10000mAh</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 55)">ECS000055</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 55)">69.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 55)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 55)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 55)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 55)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 55)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 55)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 55)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=55" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=55&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=55&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(55, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="54"></td>
    <td>54</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 54)">插线板</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 54)">ECS000054</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 54)">49.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 54)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 54)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 54)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 54)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 54)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 54)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 54)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=54" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=54&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=54&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(54, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="53"></td>
    <td>53</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 53)">活塞耳机 标准版</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 53)">ECS000053</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 53)">29.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 53)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 53)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 53)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 53)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 53)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 53)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 53)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=53" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=53&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=53&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(53, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="52"></td>
    <td>52</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, 'edit_goods_name', 52)">活塞耳机 三大升级 全新听歌神器</span></td>
    <td><span onclick="listTable.edit(this, 'edit_goods_sn', 52)">ECS000052</span></td>
    <td align="right"><span onclick="listTable.edit(this, 'edit_goods_price', 52)">69.00</span></td>
    <td align="center"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_on_sale', 52)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_best', 52)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_new', 52)" /></td>
    <td align="center"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_hot', 52)" /></td>
    <td align="center"><span onclick="listTable.edit(this, 'edit_sort_order', 52)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, 'edit_goods_number', 52)">1</span></td>
        <td align="center"><span onclick="listTable.edit(this, 'edit_virtual_sales', 52)">0</span></td>
    <td align="center">
      <a href="../goods.php?id=52" target="_blank" title="查看">查看</a>
      <a href="goods.php?act=edit&goods_id=52&extension_code=" title="编辑">编辑</a>
      <a href="goods.php?act=copy&goods_id=52&extension_code=" title="复制">复制</a>
      <a href="javascript:;" onclick="listTable.remove(52, '您确实要把该商品放入回收站吗？')" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
  </table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left">
      <input type="hidden" name="act" value="batch" />
      <select name="type" id="selAction" onchange="changeAction()">
        <option value="">请选择...</option>
        <option value="trash">回收站</option>
        <option value="on_sale">上架</option>
        <option value="not_on_sale">下架</option>
        <option value="best">精品</option>
        <option value="not_best">取消精品</option>
        <option value="new">新品</option>
        <option value="not_new">取消新品</option>
        <option value="hot">热销</option>
        <option value="not_hot">取消热销</option>
        <option value="move_to">转移到分类</option>
              <option value="suppliers_move_to">转移到供货商</option>
          
      </select>
      <select name="target_cat" style="display:none">
        <option value="0">请选择...</option><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option>      </select>
            <!--二级主菜单：转移供货商-->
      <select name="suppliers_id" style="display:none">
        <option value="-1">请选择...</option>
        <option value="0">转移到网店</option>
                  <option value="1">北京供货商</option>
                  <option value="2">上海供货商</option>
              </select>
      <!--end!-->
        
            <input type="hidden" name="extension_code" value="" />
            <button class="btn" type="submit" id="btnSubmit" disabled="true"> 确定 </button>
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">3</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">37</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option>    </select>
  </span>
</div>
    </td>
  </tr>
</table>

</div>

</form>

<script type="text/javascript">
  listTable.recordCount = 37;
  listTable.pageCount = 3;

    listTable.filter.cat_id = '0';
    listTable.filter.intro_type = '';
    listTable.filter.is_promote = '0';
    listTable.filter.stock_warning = '0';
    listTable.filter.brand_id = '0';
    listTable.filter.keyword = '';
    listTable.filter.suppliers_id = '';
    listTable.filter.is_on_sale = '';
    listTable.filter.sort_by = 'goods_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.extension_code = '';
    listTable.filter.is_delete = '0';
    listTable.filter.real_goods = '1';
    listTable.filter.record_count = '37';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '3';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
    startCheckOrder(); // 开始检查订单
    document.forms['listForm'].reset();
  }

  /**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }

  function changeAction()
  {
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';
			
			      frm.elements['suppliers_id'].style.display = frm.elements['type'].value == 'suppliers_move_to' ? '' : 'none';
			
      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

</script>
<div id="footer">
共执行 8 个查询，用时 0.014465 秒，Gzip 已禁用，内存占用 2.002 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="static/picture/msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>

<!--
<embed src="static/flash/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background-color: #eee;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>
</body>
</html>