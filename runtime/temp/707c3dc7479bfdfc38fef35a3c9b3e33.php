<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\phpstudy\WWW\shixun\ECShop\public/../application/admin\view\member\user_account_add.html";i:1536838185;}*/ ?>
﻿<!-- $Id: user_account_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加申请 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general_1.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main_1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/js/transport_1.js"></script><script type="text/javascript" src="/static/js/common_1.js"></script>
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
var user_id_empty = "会员名称不能为空！";
var deposit_amount_empty = "请输入充值的金额！";
var pay_code_empty = "请选择支付方式";
var deposit_amount_error = "请按正确的格式输入充值的金额！";
var deposit_type_empty = "请填写类型！";
var deposit_notic_empty = "请填写管理员备注！";
var deposit_desc_empty = "请填写会员描述！";
//-->
/*关闭按钮*/
  function get_certificate(){
	  var panel = document.getElementById('panelCloud');
	  var mask  = document.getElementById('CMask')||null;
	  var frame = document.getElementById('CFrame');
	  if(panel&&CMask&&frame){
	      panel.style.display = 'block';
	      mask.style.display = 'block';
	      frame.src = 'https://openapi.shopex.cn/oauth/authorize?response_type=code&client_id=yogfss4l&redirect_uri=http%3A%2F%2F127.0.0.1%2Fshixun%2FEC4%2Fsource%2Fecshop%2Fadmin%2Fcertificate.php%3Fact%3Dget_certificate%26type%3Dindex&view=auth_ecshop';
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
      <a class="btn btn-right" href="user_account.html">充值和提现申请</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加申请 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
  <form action="" method="post" name="theForm" onsubmit="return validate()">
    <table width="100%">
      <tr>
        <td class="label">会员名称：</td>
        <td>
          <input type="text" name="user_id" value="" size="20"
          />
        </td>
      </tr>
      <tr>
        <td class="label">金额：</td>
        <td>
          <input type="text" name="amount" value="" size="20"
          />
        </td>
      </tr>
      <tr>
        <td class="label">支付方式：</td>
        <td>
          <select name="payment" >
          <option value="">请选择...</option>
          <option value="余额支付">余额支付</option><option value="银行汇款/转帐">银行汇款/转帐</option><option value="<font color="#FF0000">天工收银</font>"><font color="#FF0000">天工收银</font></option>          </select>
        </td>
        </td>
      </tr>
      <tr>
        <td class="label">类型：</td>
        <td>
          <input type="radio" name="process_type" value="0"
           checked="true"   />充值          <input type="radio" name="process_type" value="1"
            />提现                  </td>
      </tr>
      <tr>
        <td class="label">管理员备注：</td>
        <td>
          <textarea name="admin_note" cols="55" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td class="label">会员描述：</td>
        <td>
          <textarea name="user_note" cols="55" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td class="label">到款状态：</td>
        <td>
          <input type="radio" name="is_paid" value="0"
           checked="true" />未确认          <input type="radio" name="is_paid" value="1"
           />已完成          <input type="radio" name="is_paid" value="2"
           />取消        </td>
      </tr>
      <tr>
        <td class="label">&nbsp;</td>
        <td>
          <input type="hidden" name="id" value="" />
          <input type="hidden" name="act" value="insert" />
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
                  </td>
      </tr>
    </table>
  </form>
</div>

<script language="JavaScript">
<!--

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");

    validator.required("user_id",   user_id_empty);
    validator.required("amount",    deposit_amount_empty);
    validator.isNumber("amount",    deposit_amount_error, true);

    var deposit_amount = document['theForm'].elements['amount'].value;
    if (deposit_amount.length > 0)
    {
        if (deposit_amount == 0 || deposit_amount < 0)
        {
            alert(deposit_amount_error);
            return false;
        }
    }

    return validator.passed();
}

//-->

</script>
<div id="footer">
共执行 3 个查询，用时 0.013993 秒，Gzip 已禁用，内存占用 1.130 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<script type="text/javascript" src="static/js/utils_1.js"></script><!-- 新订单提示信息 -->
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
<embed src="static/flash/online_1.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
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