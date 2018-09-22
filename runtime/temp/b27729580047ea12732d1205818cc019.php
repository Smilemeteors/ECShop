<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\category_edit.html";i:1537449777;}*/ ?>
﻿<!-- $Id: category_info.htm 16752 2009-10-20 09:59:38Z wangleisvn $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="/">
<title>ECSHOP 管理中心 - 编辑商品分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
      <a class="btn btn-right" href="category.php?act=list">商品分类</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;编辑商品分类 </span>
  <div style="clear:both"></div>
</h1><!-- start add new category form -->
<div class="main-div">
  <form action="category.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">分类名称:</td>
        <td>
          <input type='text' name='cat_name' maxlength="20" value='饮料' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">上级分类:</td>
        <td>
          <select name="parent_id">
            <option value="0">顶级分类</option>
            <option value="1" >饮料</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;学习</option><option value="3" >笔记本</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;学习</option>          </select>
        </td>
      </tr>

      <tr id="measure_unit">
        <td class="label">数量单位:</td>
        <td>
          <input type="text" name='measure_unit' value='' size="12" />
        </td>
      </tr>
      <tr>
        <td class="label">排序:</td>
        <td>
          <input type="text" name='sort_order' value='50' size="15" />
        </td>
      </tr>

      <tr>
        <td class="label">是否显示:</td>
        <td>
          <input type="radio" name="is_show" value="1"  checked="true"/> 是          <input type="radio" name="is_show" value="0"  /> 否        </td>
      </tr>
      <tr>
        <td class="label">是否显示在导航栏:</td>
        <td>
          <input type="radio" name="show_in_nav" value="1" /> 是          <input type="radio" name="show_in_nav" value="0"  checked="true" /> 否        </td>
      </tr>
      <tr>
        <td class="label">设置为首页推荐:</td>
        <td>
          <input type="checkbox" name="cat_recommend[]" value="1" /> 精品          <input type="checkbox" name="cat_recommend[]" value="2"  /> 最新          <input type="checkbox" name="cat_recommend[]" value="3"  /> 热门        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeFilterAttr');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="您可以为每一个商品分类指定一个样式表文件。例如文件存放在 themes 目录下则输入：themes/style.css"></a>筛选属性:</td>
        <td>
          <table width="100%" id="tbody-attr" align="center">
                        <tr>
              <td>
                   <a href="javascript:;" onclick="addFilterAttr(this)">[+]</a>
                   <select onChange="changeCat(this)"><option value="0">请选择商品类型</option><option value='1'>书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='4'>手机</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option></select>&nbsp;&nbsp;
                   <select name="filter_attr[]"><option value="0">请选择筛选属性</option></select><br />
              </td>
            </tr>

                      </table>

          <span class="notice-span" style="display:block"  id="noticeFilterAttr">筛选属性可在前分类页面筛选商品</span>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGrade');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="您可以为每一个商品分类指定一个样式表文件。例如文件存放在 themes 目录下则输入：themes/style.css"></a>价格区间个数:</td>
        <td>
          <input type="text" name="grade" value="0" size="40" /> <br />
          <span class="notice-span" style="display:block"  id="noticeGrade">该选项表示该分类下商品最低价与最高价之间的划分的等级个数，填0表示不做分级，最多不能超过10个。</span>
        </td>
      </tr>
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGoodsSN');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="您可以为每一个商品分类指定一个样式表文件。例如文件存放在 themes 目录下则输入：themes/style.css"></a>分类的样式表文件:</td>
        <td>
          <input type="text" name="style" value="" size="40" /> <br />
          <span class="notice-span" style="display:block"  id="noticeGoodsSN">您可以为每一个商品分类指定一个样式表文件。例如文件存放在 themes 目录下则输入：themes/style.css</span>
        </td>
      </tr>
      <tr>
        <td class="label">关键字:</td>
        <td><input type="text" name="keywords" value='' size="50">
        </td>
      </tr>

      <tr>
        <td class="label">分类描述:</td>
        <td>
          <textarea name='cat_desc' rows="6" cols="48"></textarea>
        </td>
      </tr>
      </table>
      <div class="button-div">
        <input type="submit" class="btn" value=" 确定 " />
        <input type="reset" class="btn btn-def" value=" 重置 " />
      </div>
    <input type="hidden" name="act" value="update" />
    <input type="hidden" name="old_cat_name" value="饮料" />
    <input type="hidden" name="cat_id" value="1" />
  </form>
</div>
<div id="footer">
共执行 6 个查询，用时 0.014000 秒，Gzip 已禁用，内存占用 1.471 MB<br />
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