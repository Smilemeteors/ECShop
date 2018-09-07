<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\ECShop\public/../application/admin\view\goods\brand_list.html";i:1536318410;}*/ ?>
<!-- $Id: brand_list.htm 15898 2009-05-04 07:25:41Z liuhui $ -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/" />
<title>ECSHOP 管理中心 - 商品品牌 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<style>
*{margin:0;padding:0;}
th{text-align:center;}
</style>
</head>
<body>
<h1>
    <a class="btn btn-right" href="admin/goods/brand_add">添加品牌</a>
  
    <span class="action-span1"><a href="index.php?act=main"><b>ECSHOP 管理中心</b></a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品品牌 </span>
  <div style="clear:both"></div>
</h1>
<!-- 品牌搜索 -->
<!-- $Id: brand_search.htm 2009-05-04 liuhui $ -->
<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
     <input type="text" name="brand_name" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>

<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
    <tr>
      <th>品牌名称</th>
      <th>品牌LOGO</th>
      <th>品牌网址</th>
      <th>品牌描述</th>
      <th>排序</th>
      <th>是否显示</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr>
      <td class="first-cell">
        <span style="float:right"></span>
        <span><?php echo $v['brand_name']; ?></span>
      </td>
      <td><img src="<?php echo $v['brand_logo']; ?>" width="100" alt=""></td>
      <td><?php echo $v['site_url']; ?></td>
      <td align="left"><?php echo $v['brand_desc']; ?></td>
      <td align="right"><span><?php echo $v['sort_order']; ?></span></td>
      <td align="center"><img src="../../../static/picture/yes.svg" width="20"/></td>
      <td align="center">
        <a href="brand.php?act=edit&id=1" title="编辑">编辑</a> |
        <a href="javascript:;" title="编辑">移除</a> 
      </td>
    </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  <td></td>
      <td align="right" nowrap="true" colspan="6">
      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div class="page" style="float:right;" >
  <?php echo $res->render(); ?>
</div>
      </td>
    </tr>
  </table>

<!-- end brand list -->
</div>
</form>

<div id="footer">
共执行 4 个查询，用时 0.014635 秒，Gzip 已禁用，内存占用 1.525 MB<br />
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
</html>