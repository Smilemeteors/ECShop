<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\order\orders_query.html";i:1536226505;}*/ ?>
﻿<!-- $Id: order_query.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 订单查询 </title><base href="/" />
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
var remove_confirm = "删除订单将清除该订单的所有信息。您确定要这么做吗？";
var confirm_merge = "您确实要合并这两个订单吗？";
var input_price = "自定义价格";
var pls_search_user = "请搜索并选择会员";
var confirm_drop = "确认要删除该商品吗？";
var invalid_goods_number = "商品数量不正确";
var pls_search_goods = "请搜索并选择商品";
var pls_select_area = "请完整选择所在地区";
var pls_select_shipping = "请选择配送方式";
var pls_select_payment = "请选择支付方式";
var pls_select_pack = "请选择包装";
var pls_select_card = "请选择贺卡";
var pls_input_note = "请您填写备注！";
var pls_input_cancel = "请您填写取消原因！";
var pls_select_refund = "请选择退款方式！";
var pls_select_agency = "请选择办事处！";
var pls_select_other_agency = "该订单现在就属于这个办事处，请选择其他办事处！";
var loading = "加载中...";
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
      <a class="btn btn-right" href="order.php?act=list">订单列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;订单查询 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/calendar.js"></script>
<link href="static/css/calendar.css" rel="stylesheet" type="text/css" />
<div class="main-div">
<form action="order.php?act=list" method="post" enctype="multipart/form-data" name="searchForm">
  <div class="panel-hint panel-order-query">
    <div class="panel-hd">
      <span class="hd-title">ECshop管理中心 - 订单查询</span>
      <span class="hd-cross" onclick="btnClose(this);"></span>
    </div>
    <div class="panel-bd">
      <table cellspacing="1" cellpadding="3" width="100%">
        <tr>
          <td><div align="right"><strong>订单号：</strong></div></td>
          <td colspan="3"><input name="order_sn" type="text" id="order_sn" size="30"></td>
        </tr>
        <tr>
          <td><div align="right"><strong>电子邮件：</strong></div></td>
          <td colspan="3"><input name="email" type="text" id="email" size="40"></td>
        </tr>
        <tr>
          <td><div align="right"><strong>购货人：</strong></div></td>
          <td><input name="user_name" type="text" id="user_name" size="20"></td>
          <td><div align="right"><strong>收货人：</strong></div></td>
          <td><input name="consignee" type="text" id="consignee" size="20"></td>
        </tr>
        <tr>
          <td><div align="right"><strong>地址：</strong></div></td>
          <td><input name="address" type="text" id="address" size="20"></td>
          <td><div align="right"><strong>邮编：</strong></div></td>
          <td><input name="zipcode" type="text" id="zipcode" size="20"></td>
        </tr>
        <tr>
          <td><div align="right"><strong>电话：</strong></div></td>
          <td><input name="tel" type="text" id="tel" size="20"></td>
          <td><div align="right"><strong>手机：</strong></div></td>
          <td><input name="mobile" type="text" id="mobile" size="20"></td>
        </tr>
        <tr>
          <td><div align="right"><strong>所在地区：</strong></div></td>
          <td colspan="3"><select name="country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')">
            <option value="0">请选择...</option>
                        <option value="1">中国</option>
                      </select>
            <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
              <option value="0">请选择...</option>
            </select>
            <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')">
              <option value="0">请选择...</option>
            </select>
            <select name="district" id="selDistricts">
              <option value="0">请选择...</option>
            </select></td>
        </tr>
        <tr>
          <td><div align="right"><strong>配送方式：</strong></div></td>
          <td><select name="shipping_id" id="select4">
            <option value="0">请选择...</option>
                      </select></td>
          <td><div align="right"><strong>支付方式：</strong></div></td>
          <td><select name="pay_id" id="select5">
            <option value="0">请选择...</option>
                        <option value="1"><font color="#FF0000">天工收银</font></option>
                      </select></td>
        </tr>
        <tr>
          <td><div align="right"><strong>下单时间：</strong></div></td>
          <td>
            <input type="text" name="start_time" maxlength="60" size="20" readonly="readonly" id="start_time_id" /><button name="start_time_btn" type="button" id="start_time_btn" onclick="return showCalendar('start_time_id', '%Y-%m-%d %H:%M', '24', false, 'start_time_btn');" class="cal"><img src="static/picture/cal.png" alt=""></button>
            ~
            <input type="text" name="end_time" maxlength="60" size="20" readonly="readonly" id="end_time_id" /><button name="end_time_btn" type="button" id="end_time_btn" onclick="return showCalendar('end_time_id', '%Y-%m-%d %H:%M', '24', false, 'end_time_btn');" class="cal"><img src="static/picture/cal.png" alt=""></button>
          </td>
        </tr>
        <tr>
          <td><div align="right"><strong>订单状态：</strong></div></td>
          <td colspan="3">
            <select name="order_status" id="select9">
              <option value="-1">请选择...</option>
              <option value="0">未确认</option><option value="1">已确认</option><option value="2"><font color="red"> 取消</font></option><option value="3"><font color="red">无效</font></option><option value="4"><font color="red">退货</font></option><option value="5">已分单</option><option value="6">部分分单</option>            </select>
            <strong>付款状态：</strong>        <select name="pay_status" id="select11">
            <option value="-1">请选择...</option>
            <option value="0">未付款</option><option value="1">付款中</option><option value="2">已付款</option>          </select>
            <strong>发货状态：</strong>        <select name="shipping_status" id="select10">
            <option value="-1">请选择...</option>
            <option value="0">未发货</option><option value="3">配货中</option><option value="1">已发货</option><option value="2">收货确认</option><option value="4">已发货(部分商品)</option><option value="5">发货中</option>          </select></td>
        </tr>
      </table>
    </div>
    <div class="panel-ft">
      <tr>
        <td colspan="4"><div align="center">
        </div></td>
      </tr>
      <!--<button class="btn-act btn-confirm" data-role="true" onclick="goBind(this)">去绑定</button>-->
      <input class="btn" name="query" type="submit" class="button" id="query" value=" 搜索 " />
      <input class="btn btn-def" name="reset" type="reset" class='button' value=' 重置 ' />
      <!--<button class="btn-act btn-cancel" onclick="btnCancel(this);">知道了，不再提示</button>-->
    </div>
  </div>
</form>
</div>
<script type="text/javascript" src="static/js/region.js"></script>
<script language="JavaScript">
region.isAdmin = true;
onload = function() {
  // 开始检查订单
  startCheckOrder();

}
/*关闭按钮*/
function btnClose(item){
  var par  = item.parentElement.parentElement;
  console.dir(par);
  par.style.display = 'none';
}
</script>

<div id="footer">
共执行 5 个查询，用时 0.053493 秒，Gzip 已禁用，内存占用 2.607 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<script type="text/javascript" src="static/js/utils.js"></script><!-- 新订单提示信息 -->
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