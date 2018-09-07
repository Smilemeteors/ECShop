<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_type_manage.html";i:1536303004;}*/ ?>
<!-- $Id: goods_type.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 商品类型 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
      <a class="btn btn-right" href="<?php echo url('goods_type_add'); ?>">新建商品类型</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品类型 </span>
  <div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
    <tr>
    <th>商品类型名称</th>
    <th>属性分组</th>
    <th>属性数</th>
    <th>状态</th>
    <th>操作</th>
  </tr>
     <?php foreach ($arr as $key => $v): ?>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 1)"><?php echo $v['type_name']; ?></span></td>
    <td><?php echo $v['attr_group']; ?></td>
    <td align="right"><?php echo $v['enabled']; ?></td>
    <td align="center">
      <?php if(in_array(($v['status']), explode(',',"1"))): ?>
      <img src="static/picture/yes.svg" class="status" id="<?php echo $v['cat_id']; ?>" value='<?php echo $v['status']; ?>' width="20"/>
      <?php else: ?>
      <img src="static/picture/no.svg" class="status" id="<?php echo $v['cat_id']; ?>" value='<?php echo $v['status']; ?>' width="20"/>
      <?php endif; ?>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=1" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=1" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(1, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
  <?php endforeach ?>
  <tr>
      <td align="right" nowrap="true" colspan="6">
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">9</span>
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
共执行 2 个查询，用时 0.005534 秒，Gzip 已禁用，内存占用 1.453 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
</body>
</html>