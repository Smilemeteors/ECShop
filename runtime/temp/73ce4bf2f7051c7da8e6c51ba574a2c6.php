<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy\WWW\shixun\ECShop\public/../application/admin\view\member\users_edit.html";i:1536653457;}*/ ?>
﻿<!-- $Id: user_info.htm 16854 2009-12-07 06:20:09Z sxc_shop $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 编辑会员账号 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/js/transport.js"></script><script type="text/javascript" src="/static/js/common.js"></script>
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
var no_username = "没有输入用户名。";
var invalid_email = "没有输入邮件地址或者输入了一个无效的邮件地址。";
var no_password = "没有输入密码。";
var less_password = "输入的密码不能少于六位。";
var passwd_balnk = "密码中不能包含空格";
var no_confirm_password = "没有输入确认密码。";
var password_not_same = "输入的密码和确认密码不一致。";
var invalid_pay_points = "消费积分数不是一个整数。";
var invalid_rank_points = "等级积分数不是一个整数。";
var password_len_err = "新密码和确认密码的长度不能小于6";
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
      <a class="btn btn-right" href="users.html">会员列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;编辑会员账号 </span>
  <div style="clear:both"></div>
</h1><div class="main-div">
<form method="post" action="" name="theForm" onsubmit="return validate()">

<?php foreach ($list as $key => $v) { ?>
  <table width="100%" >
  <tr>
    <td class="label">会员名称:</td>
    <td><?=$v['user_name']?><input type="hidden" name="user_name" value="<?=$v['user_name']?>" /></td>
  </tr>
    <tr>
    <td class="label">可用资金:</td>
    <td>￥<?=$v['user_money']?>元 <a href="account_log_list.html?user_id=<?=$v['user_id']?>&account_type=user_money">[ 查看明细 ]</a> </td>
  </tr>
  <tr>
    <td class="label">冻结资金:</td>
    <td>￥<?=$v['frozen_money']?>元 <a href="account_log_list.html?user_id=<?=$v['user_id']?>&account_type=frozen_money">[ 查看明细 ]</a> </td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticeRankPoints');" title="点击此处查看提示信息"><img src="/static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 等级积分:</td>
    <td><?=$v['rank_points']?><a href="account_log_list.html?user_id=<?=$v['user_id']?>&account_type=rank_points">[ 查看明细 ]</a> <br /><span class="notice-span" style="display:block"  id="noticeRankPoints">等级积分是一种累计的积分，系统根据该积分来判定用户的会员等级。</span></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('noticePayPoints');" title="点击此处查看提示信息"><img src="/static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息" /></a> 消费积分:</td>
    <td><?=$v['pay_points']?><a href="account_log_list.html?user_id=<?=$v['user_id']?>&account_type=pay_points">[ 查看明细 ]</a> <br />
        <span class="notice-span" style="display:block"  id="noticePayPoints">消费积分是一种站内货币，允许用户在购物时支付一定比例的积分。</span></td>
  </tr>
    <tr>
    <td class="label">邮件地址:</td>
    <td><input type="text" name="email" maxlength="60" size="40" value="<?=$v['email']?>" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">新密码:</td>
    <td><input type="password" name="password" maxlength="20" size="20" /></td>
  </tr>
  <tr>
    <td class="label">确认密码:</td>
    <td><input type="password" name="confirm_password" maxlength="20" size="20" /></td>
  </tr>
    <tr>
    <td class="label">会员等级:</td>
    <td><select name="user_rank">
      <option value="0">非特殊等级</option>
      <option value="3">代销用户</option>    </select></td>
  </tr>
  <tr>
    <td class="label">性别:</td>
    <td><input type="radio" name="sex" value="0" checked>&nbsp;保密&nbsp;<input type="radio" name="sex" value="1">&nbsp;男&nbsp;<input type="radio" name="sex" value="2">&nbsp;女&nbsp;</td>
  </tr>
  <tr>
    <td class="label">出生日期:</td>
    <td><select name="birthday"><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option></select>&nbsp;<select name="birthdayMonth"><option value="1" selected>01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;<select name="birthdayDay"><option value="1" selected>01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></td>
  </tr>
  <tr>
    <td class="label">信用额度:</td>
    <td><input name="credit_line" type="text" id="credit_line" value="<?=$v['credit_line']?>" size="10" /></td>
  </tr>
    <tr>
    <td class="label">QQ:</td>
    <td>
    <input name="qq" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">办公电话:</td>
    <td>
    <input name="office_phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">家庭电话:</td>
    <td>
    <input name="home_phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">手机:</td>
    <td>
    <input name="phone" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
        <tr>
    <td colspan="2" align="center">
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
      <input type="hidden" name="act" value="update" />
      <input type="hidden" name="id" value="2" />    </td>
  </tr>
</table>
<?php } ?>

</form>
</div>
<script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/validator.js"></script>
<script language="JavaScript">
<!--

if (document.forms['theForm'].elements['act'].value == "insert")
{
  document.forms['theForm'].elements['username'].focus();
}
else
{
  document.forms['theForm'].elements['email'].focus();
}

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
    validator.isEmail("email", invalid_email, true);

    if (document.forms['theForm'].elements['act'].value == "insert")
    {
        validator.required("username",  no_username);
        validator.required("password", no_password);
        validator.required("confirm_password", no_confirm_password);
        validator.eqaul("password", "confirm_password", password_not_same);

        var password_value = document.forms['theForm'].elements['password'].value;
        if (password_value.length < 6)
        {
          validator.addErrorMsg(less_password);
        }
        if (/ /.test(password_value) == true)
        {
          validator.addErrorMsg(passwd_balnk);
        }
    }
    else if (document.forms['theForm'].elements['act'].value == "update")
    {
        var newpass = document.forms['theForm'].elements['password'];
        var confirm_password = document.forms['theForm'].elements['confirm_password'];
        if(newpass.value.length > 0 || confirm_password.value.length)
        {
          if(newpass.value.length >= 6 || confirm_password.value.length >= 6)
          {
            validator.eqaul("password", "confirm_password", password_not_same);
          }
          else
          {
            validator.addErrorMsg(password_len_err);
          }
        }
    }

    return validator.passed();
}
//-->
</script>

<div id="footer">
共执行 8 个查询，用时 0.024572 秒，Gzip 已禁用，内存占用 1.269 MB<br />
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