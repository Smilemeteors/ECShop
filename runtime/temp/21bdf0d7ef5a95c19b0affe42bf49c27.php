<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\PHPTutorial\WWW\ECShop\public/../application/admin\view\goods\goods_trash.html";i:1536655702;}*/ ?>
<!-- $Id: goods_trash.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 商品回收站 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
      <a class="btn btn-right" href="goods.php?act=list">商品列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品回收站 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="../js/utils.js"></script><script type="text/javascript" src="js/listtable.js"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
        <!-- 关键字 -->
    &nbsp;&nbsp; 关键字 <input type="text" name="keyword" size="25" />
    <button type="submit" class="btn"> 搜索 </button>
  </form>
</div>


<script>
  function searchGoods() {


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
    <th>
      <input type="checkbox" />
    </th>
    <th><a href="javascript:listTable.sort('goods_name'); ">商品名称</a></th>
    <th><a href="javascript:listTable.sort('goods_sn'); ">货号</a></th>
    <th><a href="javascript:listTable.sort('shop_price'); ">价格</a></th>
    <th>操作</th>
  </tr>
    <?php foreach ($arr as $key => $v): ?>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="73" /><?php echo $v['goods_id']; ?></td>
    <td><?php echo $v['goods_name']; ?></td>
    <td><?php echo $v['goods_sn']; ?></td>
    <td><?php echo $v['shop_price']; ?></td>
    <td>
      <a href="<?php echo url('goods_trash_del'); ?>?id=<?php echo $v['goods_id']; ?>" class="btn btn-danger btn-sm shiny">
        <i class="fa fa-trash-o"></i> 删除</a>
    </td>
  </tr>
  <?php endforeach ?>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="72" />72</td>
    <td>智能相机</td>
    <td>ECS000072</td>
    <td align="right">149.00</td>
    <td align="center">
      <a href="javascript:;" onclick="listTable.remove(72, '您确实要把该商品还原吗？', 'restore_goods')">还原</a> |
      <a href="javascript:;" onclick="listTable.remove(72, '您确实要删除该商品吗？', 'drop_goods')">删除</a>
    </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="46" />46</td>
    <td>V领短袖T恤 女款</td>
    <td>ECS000046</td>
    <td align="right">39.00</td>
    <td align="center">
      <a href="javascript:;" onclick="listTable.remove(46, '您确实要把该商品还原吗？', 'restore_goods')">还原</a> |
      <a href="javascript:;" onclick="listTable.remove(46, '您确实要删除该商品吗？', 'drop_goods')">删除</a>
    </td>
  </tr>
  </table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td>
      <input type="hidden" name="act" value="batch" />
      <select name="type" id="selAction" onchange="changeAction()">
        <option value="">请选择...</option>
        <option value="restore">还原</option>
        <option value="drop">移除</option>
      </select>
      <select name="target_cat" style="display:none" onchange="checkIsLeaf(this)"><option value="0">请选择...</caption><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option><option value="16" >服装</option><option value="33" >qqq</option></select>
      <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">3</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option>    </select>
  </span>
</div>
    </td>
  </tr>
</table>
</div>


<h1>
      <a class="btn btn-right" href="goods.php?act=list">商品列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品回收站 </span>
  <div style="clear:both"></div>
</h1>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
        <!-- 关键字 -->
    &nbsp;&nbsp; 关键字 <input type="text" name="keyword" size="25" />
    <button type="submit" class="btn"> 搜索 </button>
  </form>
</div>

<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <td>编号</td>
    <td>商品名称</td>
    <td>货号</td>
    <td>价格</td>
    <td>操作</td>
  </tr>
  <?php foreach ($arr as $key => $v): ?>
  <tr>
    <td><?php echo $v['goods_id']; ?></td>
    <td><?php echo $v['goods_name']; ?></td>
    <td><?php echo $v['goods_sn']; ?></td>
    <td><?php echo $v['shop_price']; ?></td>
    <td>
      <a href="<?php echo url('goods_trash_del'); ?>?id=<?php echo $v['goods_id']; ?>" class="btn btn-danger btn-sm shiny">
        <i class="fa fa-trash-o"></i> 删除</a>
    </td>
  </tr>
  <?php endforeach ?>
  </table>

<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td>
      <input type="hidden" name="act" value="batch" />
      <select name="type" id="selAction">
        <option value="">请选择...</option>
        <option value="restore">还原</option>
        <option value="drop">移除</option>
      </select>
      <select name="target_cat" style="display:none"><option value="0">请选择...</caption><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
      <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">1</span>
  条记录
  <span id="page-link">
    <a href="javascript:listTable.gotoPageFirst()">第一页</a>
    <a href="javascript:listTable.gotoPagePrev()">上一页</a>
    <a href="javascript:listTable.gotoPageNext()">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage">
      <option value='1'>1</option>    </select>
  </span>
</div>
    </td>
  </tr>
</table>
</div>

</form>

<div id="footer">
共执行 8 个查询，用时 0.013052 秒，Gzip 已禁用，内存占用 1.984 MB<br />
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

</body>
</html>