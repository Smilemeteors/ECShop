<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\ECShop\public/../application/admin\view\quanxi\agency_edit.html";i:1536325150;}*/ ?>
﻿<!-- $Id: agency_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 编辑办事处 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general_1.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main_1.css" rel="stylesheet" type="text/css" />

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
      <a class="btn btn-right" href="agency.html">办事处列表</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;编辑办事处 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/validator.js"></script><script type="text/javascript" src="static/js/region.js"></script><div class="main-div">
<form method="post" action="" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<?php foreach ($list as $key => $v) { ?>

<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label">办事处名称：</td>
    <td><input type="text" name="agency_name" maxlength="60" value="<?=$v['agency_name']?>" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">办事处描述：</td>
    <td><textarea  name="agency_desc" cols="60" rows="4"  ><?=$v['agency_desc']?></textarea></td>
  </tr>
  <tr>
    <td class="label">
    <a href="javascript:showNotice('noticeAdmins');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>负责该办事处的管理员：</td>
    <td>      <input type="checkbox" name="admins[]" value="1" checked="checked" />
      admin&nbsp;&nbsp;
          <input type="checkbox" name="admins[]" value="2"  />
      88180801933570&nbsp;&nbsp;
    <br />
    <span class="notice-span" style="display:block"  id="noticeAdmins">用星号(*)标注的管理员表示已经负责其他的办事处了</span></td>
  </tr>
  <tr>
    <td class="label">该办事处管辖的地区：</td>
    <td id="regionCell">        <input type="checkbox" name="regions[]" value="410" checked="true" />
        海淀区&nbsp;&nbsp;
       </td>
  </tr>
</table>
<hr>
<table cellspacing="1" cellpadding="3" width="100%">
  <caption><strong>从下面的列表中选择地区，点加号按钮添加到该办事处管辖的地区</strong></caption>
  <tr>
    <td width="10%">&nbsp;</td>
    <td>一级地区：</td>
    <td>二级地区：</td>
    <td>三级地区：</td>
    <td>四级地区：</td>
    <td width="10">&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select name="country" id="selCountries" onChange="region.changed(this, 1, 'selProvinces')" size="10">
              <option value="1" selected>中国</option>
          </select></td>
    <td><select name="province" id="selProvinces" onChange="region.changed(this, 2, 'selCities')" size="10">
      <option value="">请选择...</option>
    </select></td>
    <td><select name="city" id="selCities" onChange="region.changed(this, 3, 'selDistricts')" size="10">
      <option value="">请选择...</option>
    </select></td>
    <td><select name="district" id="selDistricts" size="10">
      <option value="">请选择...</option>
    </select></td>
    <td><input type="button" value="+" class="button" onclick="addRegion()" /></td>
    <td>&nbsp;</td>
  </tr>
</table>

<table align="center">
  <tr>
    <td colspan="2" align="center">
      <input type="submit" class="button" value=" 确定 " />
      <input type="reset" class="button" value=" 重置 " />
      <input type="hidden" name="act" value="update" />
      <input type="hidden" name="id" value="<?=$v['agency_id']?>" />
    </td>
  </tr>
</table>
<?php } ?>
</form>
</div>
<script type="text/javascript" src="/static/js/utils_1.js"></script>
<script language="JavaScript">
<!--
region.isAdmin = true;
document.forms['theForm'].elements['agency_name'].focus();
onload = function()
{
    var selCountry = document.forms['theForm'].elements['country'];
    if (selCountry.selectedIndex >= 0)
    {
        region.loadProvinces(selCountry.options[selCountry.selectedIndex].value);
    }
    // 开始检查订单
    startCheckOrder();
}
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required("agency_name",  no_agencyname);
    return validator.passed();
}

/**
 * 添加一个区域
 */
function addRegion()
{
    var selCountry  = document.forms['theForm'].elements['country'];
    var selProvince = document.forms['theForm'].elements['province'];
    var selCity     = document.forms['theForm'].elements['city'];
    var selDistrict = document.forms['theForm'].elements['district'];
    var regionCell  = document.getElementById("regionCell");

    if (selDistrict.selectedIndex > 0)
    {
        regionId = selDistrict.options[selDistrict.selectedIndex].value;
        regionName = selDistrict.options[selDistrict.selectedIndex].text;
    }
    else
    {
        if (selCity.selectedIndex > 0)
        {
            regionId = selCity.options[selCity.selectedIndex].value;
            regionName = selCity.options[selCity.selectedIndex].text;
        }
        else
        {
            if (selProvince.selectedIndex > 0)
            {
                regionId = selProvince.options[selProvince.selectedIndex].value;
                regionName = selProvince.options[selProvince.selectedIndex].text;
            }
            else
            {
                if (selCountry.selectedIndex >= 0)
                {
                    regionId = selCountry.options[selCountry.selectedIndex].value;
                    regionName = selCountry.options[selCountry.selectedIndex].text;
                }
                else
                {
                    return;
                }
            }
        }
    }

    // 检查该地区是否已经存在
    exists = false;
    for (i = 0; i < document.forms['theForm'].elements.length; i++)
    {
      if (document.forms['theForm'].elements[i].type=="checkbox" && document.forms['theForm'].elements[i].name.substr(0, 6) == 'region')
      {
        if (document.forms['theForm'].elements[i].value == regionId)
        {
          exists = true;
          alert(region_exists);
          break;
        }
      }
    }

    // 创建checkbox
    if (!exists)
    {
      regionCell.innerHTML += "<input type='checkbox' name='regions[]' value='" + regionId + "' checked='true' /> " + regionName + "&nbsp;&nbsp;";
    }
}
//-->
</script>

<div id="footer">
共执行 6 个查询，用时 0.018102 秒，Gzip 已禁用，内存占用 1.091 MB<br />
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