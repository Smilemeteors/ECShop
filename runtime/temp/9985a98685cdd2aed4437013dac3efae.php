<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\brand_list.html";i:1536671983;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title>ECSHOP 管理中心 - 商品品牌 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
<a class="btn btn-right" href="brand.php?act=add">添加品牌</a>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品品牌 </span>
  <div style="clear:both"></div>
</h1>
<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="static/images/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
     <input type="text" name="brand_name" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
  <table cellpadding="3" cellspacing="1">
    <tr>
      <th>品牌名称</th>
      <th>品牌网址</th>
      <th>品牌描述</th>
      <th>排序</th>
      <th>是否显示</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr>
      <td id="<?php echo $v['brand_id']; ?>" class="first-cell">
        <span style="float:right"><a href="uploads/<?php echo $v['brand_logo']; ?>" target="_brank"><img src="static/images/image.svg" width="16" height="16" border="0" alt=品牌LOGO /></a></span>
        <span class="change_name">
        <?php echo $v['brand_name']; ?></span>
      </td>
      <td><a href="<?php echo $v['site_url']; ?>" target="_brank"><?php echo $v['site_url']; ?></a></td>
      <td align="left"><?php echo $v['brand_describe']; ?></td>
      <td align="right"><span><?php echo $v['sort_order']; ?></span></td>
      <td align="center">
        <?php if(in_array(($v['is_show']), explode(',',"1"))): ?>
        <img src="static/picture/yes.svg" class="is_show" id="<?php echo $v['brand_id']; ?>" value='<?php echo $v['is_show']; ?>' width="20"/>
        <?php else: ?>
        <img src="static/picture/no.svg" class="is_show" id="<?php echo $v['brand_id']; ?>" value='<?php echo $v['is_show']; ?>' width="20"/>
        <?php endif; ?>
      </td>
      <td align="center">
        <a href="<?php echo url('brand_upd'); ?>?id=<?php echo $v['brand_id']; ?>" title="编辑">编辑</a> |
        <a href="<?php echo url('brand_del'); ?>?id=<?php echo $v['brand_id']; ?>" title="移除">移除</a>
      </td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td align="right" nowrap="true" colspan="6">
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

<!-- end brand list -->
</div>
</form>
<div id="footer">
共执行 4 个查询，用时 0.007393 秒，Gzip 已禁用，内存占用 1.521 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
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
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).on('click','.is_show',function(){
    var status = $(this).attr('value');
    var brand_id = $(this).attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('goods/brand_change_status'); ?>",
      data:{status:status,brand_id:brand_id},
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
$(document).on('click','.change_name',function(){
  var brand_name = $(this).text();
  var obj = $(this);
  var input = $("<span class='changes_name'><input class='name' type='text' value='"+brand_name+"' /></span>");
  obj.html(input);
  input.click(function(){return false;});
  input.trigger("ocus");
})
$(document).on('blur','.changes_name',function(){
  var brand_name = $('.name').val();
  var id = $(this).parents('td').attr('id');
  var obj = $(this);
  $.ajax({
    url:"<?php echo url('goods/brand_change_name'); ?>",
    data:{brand_name:brand_name,id:id},
    dataType:"json",
    success:function(res){
      if (status==0) {
      var input = $("<span class='changes_name'>"+brand_name+"</span>");
      obj.html(input);    
    }}
  })
})
</script>
<!-- $(document).on('click','.change_name',function(){
  var brand_name = $(this).html();
  var obj = $(this);
  var input = $("<input class='name' type='text' value='"+brand_name+"' />");
  obj.html(input);
  $(".name").focus();
  $(":text").select();
   // input.click(function(){return false;});
   // input.trigger("ocus");
})
$(document).on('blur','.name',function(){
  var brand_name = $(this).val();
  var id = $(this).parents('td').attr('id');
  $(this).parent('.change_name').html(brand_name);
  $.ajax({
    url:"<?php echo url('goods/brand_change_name'); ?>",
    data:{brand_name:brand_name,id:id},
    dataType:"json",
    success:function(res){
      if (res.status==0) {

    }}
  })
}) -->
</html>