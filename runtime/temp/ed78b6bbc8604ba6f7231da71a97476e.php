<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\bonus\bonus_list.html";i:1536972365;}*/ ?>
﻿<!-- $Id: bonus_type.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 红包类型 </title><base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/transport_2.js"></script><script type="text/javascript" src="static/js/common_2.js"></script>
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
var type_name_empty = "请输入红包类型名称!";
var type_money_empty = "请输入红包类型价格!";
var order_money_empty = "请输入订单金额!";
var type_money_isnumber = "类型金额必须为数字格式!";
var order_money_isnumber = "订单金额必须为数字格式!";
var bonus_sn_empty = "请输入红包的序列号!";
var bonus_sn_number = "红包的序列号必须是数字!";
var bonus_sum_empty = "请输入您要发放的红包数量!";
var bonus_sum_number = "红包的发放数量必须是一个整数!";
var bonus_type_empty = "请选择红包的类型金额!";
var user_rank_empty = "您没有指定会员等级!";
var user_name_empty = "您至少需要选择一个会员!";
var invalid_min_amount = "请输入订单下限（大于0的数字）";
var send_start_lt_end = "红包发放开始日期不能大于结束日期";
var use_start_lt_end = "红包使用开始日期不能大于结束日期";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2FECShop1%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
      <a class="btn btn-right" href="admin/Bonus/bonus_add">添加红包类型</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;红包类型 </span>
  <div style="clear:both"></div>
</h1><!-- <script type="text/javascript" src="static/js/utils_2.js"></script><script type="text/javascript" src="static/js/listtable_2.js"></script> --><!-- start bonus_type list -->
</h1><!-- start bonus_type list -->
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th><a href="javascript:listTable.sort('type_name'); ">类型名称</a></th>
      <th><a href="javascript:listTable.sort('send_type'); ">发放类型</a></th>
      <th><a href="javascript:listTable.sort('type_money'); ">红包金额</a></th>
      <th><a href="javascript:listTable.sort('min_amount'); ">订单下限</a></th>
      <th>发放数量</th>
      <th>使用数量</th>
      <th>操作</th>
    </tr>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <tr>
    <td class="first-cell" id="<?php echo $user['bonus_id']; ?>">
    <span class="bonus_name"><?php echo $user['bonus_name']; ?></span>
    </td>
    <td class="first-cell"><span><?php echo $user['bonus_type']; ?></span></td>
    <td><span>¥<?php echo $user['bonus_money']; ?>元</span></td>
    <td align="right"><span><?php echo $user['order_limit']; ?></span></td>
    <td align="right"><span><?php echo $user['quantity']; ?></span></td>
    <td><?php echo $user['use_num']; ?></td>
    <td><a href="admin/Bonus/details?id=<?php echo $user['bonus_id']; ?>">查看</a><br />
        <a href="admin/Bonus/delorder?id=<?php echo $user['bonus_id']; ?>">移除</a>
    </td>
    </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>


<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left;">
      <div>
        
        <input name="batch" type="hidden" value="1" />
        <input name="order_id" type="hidden" value="" />
      </div>
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
    <?php echo $data->render(); ?>
</div>
    </td>
  </tr>
</table>


</div>
</form>
<!-- end bonus_type list -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).on('click','.bonus_name',function(){
    var bonus_name = $(this).text();
    var obj = $(this);
    var input = $("<input type='text' class='newname' value='"+bonus_name+"' />");
    obj.html(input);
    input.click(function(){return false;});
    input.trigger('oucs');
  })
  $(document).on('blur','.bonus_name',function(){
    var bonus_name = $('.newname').val();
    var id = $(this).parent('td').attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('Bonus/bonus_change_name'); ?>",
      type:'GET',
      data:{bonus_name:bonus_name,id:id},
      dataType:"json",
      success:function(res){
        // console.log(res);
        if (res.status==0) {  
          var input = $("<span class='bonus_name' >"+bonus_name+"</span>");
          obj.html(input); 
        } else {
          alert(res.message);
        }
      }
    })
  })
</script>
<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = 0;
  listTable.pageCount = 1;

    listTable.filter.sort_by = 'type_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '0';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
     // 开始检查订单
     startCheckOrder();
  }
  
//-->
</script>
<div id="footer">
共执行 6 个查询，用时 0.006193 秒，Gzip 已禁用，内存占用 1.175 MB<br />
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