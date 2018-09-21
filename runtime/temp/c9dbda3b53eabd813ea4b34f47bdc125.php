<<<<<<< HEAD:runtime/temp/c9dbda3b53eabd813ea4b34f47bdc125.php
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy\WWW\shixun\ECShop\public/../application/admin\view\goods\goods_trash.html";i:1537355450;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_trash.html";i:1537347922;}*/ ?>
>>>>>>> 66a1c652c5fc66ff32dd50e970c4a579057b3c81:runtime/temp/d58c151bfb36c6c3a41add4b07cc93e9.php
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
</h1>
<!-- 商品搜索 -->
<div class="form-div">
  <form action="<?php echo url('goods_trash'); ?>" method="get" name="searchForm">
    <!-- 关键字 -->
    &nbsp;&nbsp; 关键字 
    <input type="text" name="keyword" size="25" value="<?=$key['keyword']?>"/>
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
      <a href="javascript:;" id='<?php echo $v['goods_id']; ?>' class="hsz" value="<?php echo $v['is_delete']; ?>" title="回收站">返回展示</a>
      <!-- goods_trash_del --> | 
      <a href="javascript:;" id='<?php echo $v['goods_id']; ?>' class="shanchu" >彻底删除</a>
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
      <select name="type" id="selAction" onchange="changeAction()">
        <option value="">请选择...</option>
        <option value="restore">还原</option>
        <option value="drop">移除</option>
      </select>
      
      <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
    </td>
    <td align="right" nowrap="true">
      <div id="turn-page">
          <span id="page-link">
                    <?php echo $arr->render(); ?>
                    <style type="text/css">
                    .pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}
                    .pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}
                    .pagination .active{background-color: #dd1a20;color: #fff;}
                    .pagination .disabled{color:#aaa;}
                    </style> 
          </span>
      </div>
    </td>
  </tr>
</table>
</div>
</body>
</html>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
 //数据恢复
  $(document).on('click','.hsz',function(){
    var r=confirm("你确定要放入回收站吗？");
    if(!r){return};
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods_trash_del'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
          if(res.status==0){
                obj.parent().parent().remove();
              }else{
                alert('放入回收站失败');
              } 
      }
    })
  })
  //彻底删除
  $(document).on('click','.shanchu',function(){
    var r=confirm("你确定要放入删除吗？");
    if(!r){return};
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods_trash_del_do'); ?>",
      data:{goods_id:goods_id},
      dataType:"json",
      success:function(res){
          if(res.status==0){
                obj.parent().parent().remove();
              }else{
                alert('删除失败');
          } 
      }
    })
  })
  </script>
