<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\attribute_list.html";i:1536500153;}*/ ?>
﻿
<!-- $Id: attribute_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <base href="/">
<title>ECSHOP 管理中心 - 商品属性 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
      <a class="btn btn-right" href="<?php echo url('attribute_add'); ?>">添加属性</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品属性 </span>
  <div style="clear:both"></div>
</h1>
<div class="form-div">
  <form action="" name="searchForm">
    <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    按商品类型显示：
    <select name="goods_type" onChange="changelocation()">
      <option value="0">所有商品类型</option>
      <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <option id='type' value="<?php echo $v['type_id']; ?>" onChange="changelocation()" ><?php echo $v['type_name']; ?></option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tr>
      <input onclick='listTable.selectAll(this,"checkeboxes[]")' type="checkbox">
      <th>编号</th>
      <th>属性名称</th>
      <th>商品类型</th>
      <th>属性值的录入方式</th>
      <th>可选值列表</th>
      <th>排序</th>
      <th>操作</th>
    </tr>
    <?php foreach ($arr as $key => $v): ?>
        <tr>
      <td nowrap="true" valign="top"><?php echo $v['attr_id']; ?></td>
      <td class="first-cell" nowrap="true" valign="top"><?php echo $v['attr_name']; ?></td>
      <td nowrap="true" valign="top"><?php echo $v['type_id']; ?></td>
      <td nowrap="true" valign="top"><?php echo $v['attr_input_type']; ?></td>
      <td align="right" nowrap="true" valign="top"><?php echo $v['sort_order']; ?></td>
      <td align="center" nowrap="true" valign="top">
        <a href="//" title="编辑">编辑</a>
        <a href="<?php echo url('attribute_del'); ?>?id=<?php echo $v['attr_id']; ?>" onclick="removeRow(1)" title="移除">移除</a>
      </td>
    </tr>
    <?php endforeach ?>
      </table>
  <table cellpadding="4" cellspacing="0">
    <tr>
      <td><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true" /></td>
      <td align="right"><!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">12</span>
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

</form>
<div id="footer">
共执行 5 个查询，用时 0.014500 秒，Gzip 已禁用，内存占用 1.344 MB<br />
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
</body>
<script type="text/javascript">

</script>
</html>