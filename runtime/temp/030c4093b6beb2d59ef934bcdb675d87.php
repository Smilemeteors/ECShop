<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\phpStudy\WWW\ECShop Tp5\public/../application/admin\view\goods\category_list.html";i:1536137583;}*/ ?>
<!-- $Id: category_list.htm 17019 2010-01-29 10:10:34Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 商品分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general_3.css" rel="stylesheet" type="text/css" />
<link href="static/css/main_3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/transport_3.js"></script><script type="text/javascript" src="static/js/common_2.js"></script>
<style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 0%;
  }
</style>


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
      <a class="btn btn-right" href="category.php?act=add">添加分类</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品分类 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils_3.js"></script><script type="text/javascript" src="static/js/listtable_1.js"></script>
<form method="post" action="" name="listForm">
<!-- start ad position list -->
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>分类名称</th>
    <th>商品数量</th>
    <th>数量单位</th>
    <th>导航栏</th>
    <th>是否显示</th>
    <th>价格分级</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
    <tr align="center" class="0" id="0_26">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_26" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=26">家用电器</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 26)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 26)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 26)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 26)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 26)">1</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=26">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=26">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(26, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_27">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_27" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=27">大家电</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 27)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 27)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 27)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 27)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 27)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=27">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=27">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(27, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="2" id="2_29">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_2_29" width="9" height="9" border="0" style="margin-left:2em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=29">家用空调</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 29)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 29)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 29)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 29)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 29)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=29">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=29">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(29, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="2" id="2_30">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_2_30" width="9" height="9" border="0" style="margin-left:2em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=30">家电配件</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 30)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 30)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 30)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 30)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 30)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=30">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=30">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(30, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="2" id="2_31">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_2_31" width="9" height="9" border="0" style="margin-left:2em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=31">洗衣机</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 31)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 31)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 31)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 31)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 31)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=31">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=31">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(31, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="2" id="2_28">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_2_28" width="9" height="9" border="0" style="margin-left:2em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=28">平板电脑</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 28)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 28)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 28)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 28)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 28)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=28">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=28">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(28, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="2" id="2_32">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_2_32" width="9" height="9" border="0" style="margin-left:2em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=32">冰箱</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 32)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 32)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 32)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 32)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 32)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=32">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=32">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(32, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_25">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_25" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=25">数码时尚</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 25)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 25)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 25)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 25)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 25)">2</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=25">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=25">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(25, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_18">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_18" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=18">智能硬件</a></span>
        </td>
    <td width="10%">1</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 18)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 18)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 18)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 18)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 18)">3</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=18">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=18">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(18, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_22">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_22" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=22">移动电源</a></span>
        </td>
    <td width="10%">1</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 22)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 22)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 22)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 22)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 22)">6</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=22">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=22">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(22, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_16">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_16" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=16">服装</a></span>
        </td>
    <td width="10%">5</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 16)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 16)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 16)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 16)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 16)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=16">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=16">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(16, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_12">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_12" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=12">充值卡</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 12)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 12)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 12)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 12)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 12)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=12">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=12">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(12, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_1">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=1">手机类型</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 1)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 1)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 1)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 1)">5</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 1)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=1">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=1">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(1, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_3">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_3" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=3">小型手机</a></span>
        </td>
    <td width="10%">3</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 3)"><!--  -->臺<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 3)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 3)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 3)">4</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 3)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=3">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=3">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(3, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_4">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_4" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=4">3G手机</a></span>
        </td>
    <td width="10%">2</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 4)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 4)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 4)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 4)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 4)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=4">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=4">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(4, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_6">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_6" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=6">手机</a></span>
        </td>
    <td width="10%">3</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 6)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 6)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 6)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 6)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 6)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=6">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=6">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(6, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_8">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_8" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=8">耳机</a></span>
        </td>
    <td width="10%">3</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 8)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 8)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 8)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 8)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 8)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=8">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=8">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(8, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_9">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_9" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=9">电池</a></span>
        </td>
    <td width="10%">0</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 9)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 9)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 9)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 9)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 9)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=9">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=9">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(9, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="0" id="0_19">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_0_19" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=19">配件</a></span>
        </td>
    <td width="10%">10</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 19)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 19)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 19)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 19)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 19)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=19">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=19">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(19, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_24">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_24" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=24">数码时尚</a></span>
        </td>
    <td width="10%">8</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 24)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 24)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 24)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 24)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 24)">7</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=24">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=24">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(24, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
    <tr align="center" class="1" id="1_20">
    <td align="left" class="first-cell" >
            <img src="static/picture/menu_minus.gif" id="icon_1_20" width="9" height="9" border="0" style="margin-left:1em" onclick="rowClicked(this)" />
            <span><a href="goods.php?act=list&cat_id=20">保护壳</a></span>
        </td>
    <td width="10%">1</td>
    <td width="10%"><span onclick="listTable.edit(this, 'edit_measure_unit', 20)"><!--  -->&nbsp;&nbsp;&nbsp;&nbsp;<!--  --></span></td>
    <td width="10%"><img src="static/picture/no.svg" width="20" onclick="listTable.toggle(this, 'toggle_show_in_nav', 20)" /></td>
    <td width="10%"><img src="static/picture/yes.svg" width="20" onclick="listTable.toggle(this, 'toggle_is_show', 20)" /></td>
    <td><span onclick="listTable.edit(this, 'edit_grade', 20)">0</span></td>
    <td width="10%" align="right"><span onclick="listTable.edit(this, 'edit_sort_order', 20)">50</span></td>
    <td width="24%" align="center">
      <a href="category.php?act=move&cat_id=20">转移商品</a> |
      <a href="category.php?act=edit&amp;cat_id=20">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(20, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
  </table>
</div>
</form>


<script language="JavaScript">
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

var imgPlus = new Image();
imgPlus.src = "images/menu_plus.gif";

/**
 * 折叠分类列表
 */
function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : (Browser.isIE) ? 'block' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != 'images/menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? 'images/menu_minus.gif' : imgPlus.src;
      }
  }
}
//-->
</script>


<div id="footer">
共执行 2 个查询，用时 0.006522 秒，Gzip 已禁用，内存占用 1.548 MB<br />
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
<embed src="static/flash/online_2.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
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