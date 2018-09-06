<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_type_manage.html";i:1536192909;}*/ ?>
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
    <th>商品类型名称</th>
    <th>属性分组</th>
    <th>属性数</th>
    <th>状态</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 1)">书</span></td>
    <td></td>
    <td align="right">12</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=1" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=1" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(1, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 2)">音乐</span></td>
    <td></td>
    <td align="right">19</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=2" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=2" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(2, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 3)">电影</span></td>
    <td></td>
    <td align="right">24</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=3" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=3" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(3, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 4)">手机</span></td>
    <td></td>
    <td align="right">26</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=4" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=4" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(4, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 5)">笔记本电脑</span></td>
    <td></td>
    <td align="right">19</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=5" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=5" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(5, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 6)">数码相机</span></td>
    <td></td>
    <td align="right">41</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=6" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=6" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(6, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 7)">数码摄像机</span></td>
    <td></td>
    <td align="right">23</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=7" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=7" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(7, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 8)">化妆品</span></td>
    <td></td>
    <td align="right">7</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=8" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=8" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(8, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
    <tr>
    <td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 9)">精品手机</span></td>
    <td></td>
    <td align="right">39</td>
    <td align="center"><img src="static/picture/yes.gif" ></td>
    <td align="center">
      <a href="attribute.php?act=list&goods_type=9" title="属性列表">属性列表</a> |
      <a href="goods_type.php?act=edit&cat_id=9" title="编辑">编辑</a> |
      <a href="javascript:;" onclick="listTable.remove(9, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
    </td>
  </tr>
      <tr>
      <td align="right" nowrap="true" colspan="6">
      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
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
<!-- end goods type list -->
</form>

<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = 9;
  listTable.pageCount = 1;

    listTable.filter.record_count = '9';
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
共执行 2 个查询，用时 0.005534 秒，Gzip 已禁用，内存占用 1.453 MB<br />
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