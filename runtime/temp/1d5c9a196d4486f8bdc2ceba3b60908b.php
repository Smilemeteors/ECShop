<<<<<<< HEAD:runtime/temp/1d5c9a196d4486f8bdc2ceba3b60908b.php
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\PHPTutorial\WWW\ECShop\public/../application/admin\view\goods\goods_list.html";i:1536368900;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_list.html";i:1536367561;}*/ ?>
>>>>>>> bf7b50e7c004410b6e2960cf3808a3393a152e70:runtime/temp/c4257b24790a06946fc4d4937c8806b3.php
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title>ECSHOP 管理中心 - 商品列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<style>
*{margin:0;padding:0;}
th{text-align:center;}
</style>
</head>
<script src="static/color.js"></script>
<body id="div_c" onload="changeColor()">
<div>
<h1>
      <a href="admin/goods/goods_add" class="btn btn-right btn-add-goods">添加新商品</a>
  <a class="btn btn-right" href="http://yunqi.shopex.cn/products/huodiantong" target="_blank">快速录入商品</a>
  
    <span class="action-span1"><a href="/admin"><b>ECSHOP 管理中心</b></a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品列表 </span>
  <div style="clear:both"></div>
</h1>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
        <!-- 分类 -->
    商品分类
    <select name="cat_id"><option value="0">所有分类</option><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
    <!-- 品牌 -->
    品牌
    <select name="brand_id">
    {volist name='res' id='v'}
    <option value="0">所有品牌</option>
    <option value="0">所有品牌</option>
    </select>
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
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
<div class="list-div">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th class="checks"><input type="checkbox"></th>
    <th><a href="javascript:;">编号</a><img src="static/picture/sort_desc.png"/></th>
    <th><a href="javascript:;">商品名称</a></th>
    <th><a href="javascript:;">货号</a></th>
    <th><a href="javascript:;">价格</a></th>
    <th><a href="javascript:;">上架</a></th>
    <th><a href="javascript:; ">精品</a></th>
    <th><a href="javascript:;">新品</a></th>
    <th><a href="javascript:;">热销</a></th>
    <th><a href="javascript:;">推荐排序</a></th>
        <th><a href="javascript:; ">库存</a></th>
        <th><a href="javascript:; ">虚拟销量</a></th>
    <th>操作</th>
  </tr>

  <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="<?php echo $v['goods_id']; ?>"></td>
    <td><?php echo $v['goods_id']; ?></td>
    <td class="first-cell"><span><?php echo $v['goods_name']; ?></span></td>
    <td><span><?php echo $v['goods_sn']; ?></span></td>
    <td align="right"><span><?php echo $v['goods_price']; ?></span></td>
     <td>
      <?php if(in_array(($v['is_put']), explode(',',"1"))): ?>
      <img src="static/picture/yes.svg" class="is_put" id="<?php echo $v['goods_id']; ?>" value='<?php echo $v['is_put']; ?>' width="20"/>
      <?php else: ?>
      <img src="static/picture/no.svg" class="is_put" id="<?php echo $v['goods_id']; ?>" value='<?php echo $v['is_put']; ?>' width="20"/>
      <?php endif; ?>
    </td>
    <td>
      <?php if(in_array(($v['is_best']), explode(',',"1"))): ?>
      <img src="static/picture/yes.svg" class="is_best" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_best']; ?>' width="20"/>
      <?php else: ?>
      <img src="static/picture/no.svg" class="is_best" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_best']; ?>' width="20"/>
      <?php endif; ?>
    </td>
    <td>
      <?php if(in_array(($v['is_new']), explode(',',"1"))): ?>
      <img src="static/picture/yes.svg" class="is_new" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_new']; ?>' width="20" />
      <?php else: ?>
      <img src="static/picture/no.svg" class="is_new" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_new']; ?>' width="20" />
      <?php endif; ?>
    </td>
    <td>
      <?php if(in_array(($v['is_hot']), explode(',',"1"))): ?>
      <img src="static/picture/yes.svg" class="is_hot" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_hot']; ?>' width="20"/>
      <?php else: ?>
      <img src="static/picture/no.svg" class="is_hot" id="<?php echo $v['goods_id']; ?>"  value='<?php echo $v['is_hot']; ?>' width="20"/>
      <?php endif; ?>
    </td>
    <td align="center"><span>100</span></td>
        <td align="right"><span>1</span></td>
        <td align="center"><span>0</span></td>
    <td align="center">
      <a href="admin/error/error_1" target="_blank" title="查看">查看</a>
      <a href="admin/goods/goods_add" title="编辑">编辑</a>
      <a href="admin/goods/goods_add" title="复制">复制</a>
      <a href="javascript:;" id='<?php echo $v['goods_id']; ?>' class="hsz" value="<?php echo $v['is_delete']; ?>" title="回收站">回收站</a>
      <img src="static/picture/empty.gif" width="16" height="16" border="0">        </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  $(document).on('click','.hsz',function()
  {
    var r=confirm("你确定要放入回收站吗？");
    if(!r){return};
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/trash_do'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){
          alert(res.msg);
          return false;
        }else{
          if(status==1){
            alert('放入回收站成功')
            obj.parent().parent().remove();
          }else{
            alert('放入回收站失败')
          }
        }
      }
    })
  })
  //上架
  $(document).on('click','.is_put',function(){
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/goods_change_put'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){

          alert(res.msg);
          return false;
        }else{

          if(status==1){

            obj.prop("src","static/picture/no.svg");
            obj.attr("value",0)
          }else{

            obj.prop("src","static/picture/yes.svg");
            obj.attr("value",1)
          }
        }
      }
    })
  })

  //精品
  $(document).on('click','.is_best',function(){
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/goods_change_best'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){

          alert(res.msg);
          return false;
        }else{

          if(status==1){

            obj.prop("src","static/picture/no.svg");
            obj.attr("value",0)
          }else{

            obj.prop("src","static/picture/yes.svg");
            obj.attr("value",1)
          }
        }
      }
    })
  })
  //新品
  $(document).on('click','.is_new',function(){
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/goods_change_new'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){

          alert(res.msg);
          return false;
        }else{

          if(status==1){

            obj.prop("src","static/picture/no.svg");
            obj.attr("value",0)
          }else{

            obj.prop("src","static/picture/yes.svg");
            obj.attr("value",1)
          }
        }
      }
    })
  })
   //热销
  $(document).on('click','.is_hot',function(){
    var status = $(this).attr('value');
    var goods_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/goods_change_hot'); ?>",
      data:{status:status,goods_id:goods_id},
      dataType:"json",
      success:function(res){
        if(res.status==1){

          alert(res.msg);
          return false;
        }else{

          if(status==1){

            obj.prop("src","static/picture/no.svg");
            obj.attr("value",0)
          }else{

            obj.prop("src","static/picture/yes.svg");
            obj.attr("value",1)
          }
        }
      }
    })
  })
</script>

</table>
<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left">
      <input type="hidden" name="act" value="batch" />
      <select name="type" id="selAction">
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
<div class="page" style="float:right;" >
  <?php echo $res->render(); ?>
</div>
    </td>
  </tr>
</table>

</div>

</form>
<div id="footer" style="margin:0px 0px;">
共执行 8 个查询，用时 0.014465 秒，Gzip 已禁用，内存占用 2.002 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg" >
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
</div>
</html>