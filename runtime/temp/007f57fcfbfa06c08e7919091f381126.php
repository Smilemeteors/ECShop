<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\ECShop\public/../application/admin\view\goods\goods_type_manage.html";i:1536239912;}*/ ?>
<!-- $Id: goods_type.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 商品类型 </title>
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
var lang_enabled = "启用";
var lang_remove = "移除";
var attribute = "属性";
var remove_confirm = "删除商品类型将会清除该类型下的所有属性。\
您确定要删除选定的商品类型吗？";
var type_name_empty = "商品类型名称不能为空！";
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
      <a class="btn btn-right" href="goods_type.php?act=add">新建商品类型</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;商品类型 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/listtable.js"></script>
<form method="post" action="" name="listForm">
<!-- start goods type list -->
<div class="list-div" id="listDiv">

<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
  <tr>
    <td>类型ID</td>
    <td>商品类型名称</td>
    <td>属性分组</td>
    <td>属性数</td>
    <td>操作</td>
  </tr>
     <?php foreach ($arr as $key => $v): ?>
  <tr>
    <td><?php echo $v['cat_id']; ?></td>
    <td><?php echo $v['type_name']; ?></td>
    <td><?php echo $v['attr_group']; ?></td>
    <td><?php echo $v['enabled']; ?></td>
    <td>
      <a href="attribute.php?act=list&goods_type=1" title="属性列表">属性列表</a> |
      <a href="<?php echo url('del'); ?>?id=<?php echo $v['cat_id']; ?>" class="btn btn-danger btn-sm shiny" onclick="listTable.remove(1, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')>
        <i class="fa fa-trash-o"></i> 删除</a>
      <a href="<?php echo url('upd'); ?>?id=<?php echo $v['cat_id']; ?>" class="btn btn-danger btn-sm shiny">
        <i class="fa fa-trash-o"></i> 修改</a>
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