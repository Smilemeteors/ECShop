<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\order\orders_list.html";i:1536312260;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
<h1>
    
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"></span>
  <div style="clear:both"></div>
</h1><!--<script type="text/javascript" src="static/js/dialog.js"></script>-->
<!-- 订单搜索 -->
<link href="static/css/calendar.css" rel="stylesheet" type="text/css" />
<div class="form-div">
  <form action="javascript:searchOrder()" name="searchForm">
    <!-- <img src="static/picture/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" /> -->
    订单号<input name="order_sn" type="text" id="order_sn" size="15">
    收货人<input name="consignee" type="text" id="consignee" size="15">
    订单状态    <select name="status" id="status">
      <option value="-1">请选择...</option>
      <option value="0" selected>待确认</option><option value="100">待付款</option><option value="101">待发货</option><option value="102">已完成</option><option value="1">付款中</option><option value="2">取消</option><option value="3">无效</option><option value="4">退货</option><option value="6">部分发货</option>    </select>
    <input type="submit" value=" 搜索 " class="button" />
    <span class="btn-search cl-link" style="padding-left: 20px" onclick="detailSearch()">高级搜索</span>
    <!--ERP link-->

            <!--<a href="" class="btn-ERP">进入<i class="cl-red">ERP</i>处理订单</a>
      <a href="" class="btn-ERP">授权绑定<i class="cl-red">ERP</i></a>
      <a href="" class="btn-ERP">了解详情开通<i class="cl-red">ERP</i></a>-->



    <!--ERP link-->
    <!--<a href="order.php?act=list&composite_status=0">待确认</a>-->
    <!--<a href="order.php?act=list&composite_status=100">待付款</a>-->
    <!--<a href="order.php?act=list&composite_status=101">待发货</a>-->

  </form>
</div>

<!-- 订单列表 -->
<form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
  <div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="javascript:listTable.sort('order_sn', 'DESC'); ">订单号</a>    </th>
    <th><a href="javascript:listTable.sort('add_time', 'DESC'); ">下单时间</a><img src="static/picture/sort_desc.png"></th>
    <th><a href="javascript:listTable.sort('consignee', 'DESC'); ">收货人</a></th>
    <th><a href="javascript:listTable.sort('total_fee', 'DESC'); ">总金额</a></th>
    <th><a href="javascript:listTable.sort('order_amount', 'DESC'); ">应付金额</a></th>
    <th>订单状态</th>
    <th>操作</th>
  <tr>
  </table>


<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left;">
      <div>
        <button class="btn" type="submit" name="confirm" id="btnSubmit" disabled="true" onclick="this.form.target = '_self'">确认</button>
        <button name="invalid" type="submit" id="btnSubmit1" class="btn" disabled="true" onclick="this.form.target = '_self'">无效</button>
        <button name="cancel" type="submit" id="btnSubmit2" class="btn" disabled="true" onclick="this.form.target = '_self'">取消</button>
        <button name="remove" type="submit" id="btnSubmit3" class="btn" disabled="true" onclick="this.form.target = '_self'">移除</button>
        <button name="print" type="submit" id="btnSubmit4" class="btn" disabled="true" onclick="this.form.target = '_blank'">打印订单</button>
        <input name="batch" type="hidden" value="1" />
        <input name="order_id" type="hidden" value="" />
      </div>
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">0</span>
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

<!--两个温馨提示-->
<!-- start upload template -->
  </div>
</form>

<div class="main-div">
  <form action="order.php?act=list" method="post" enctype="multipart/form-data" name="searchForm">
    <div class="panel-hint panel-order-query" id="panelQuery" style="display:none">
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
            <td colspan="3"><input name="email" type="text" id="email" size="30"></td>
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
              <input type="text" name="start_time" maxlength="60" size="20" readonly="readonly" id="start_time_id" />
              <button name="start_time_btn" type="button" id="start_time_btn" onclick="return showCalendar('start_time_id', '%Y-%m-%d %H:%M', '24', false, 'start_time_btn');" class="cal"><img src="static/picture/cal.png" alt=""></button>
              ~
              <input type="text" name="end_time" maxlength="60" size="20" readonly="readonly" id="end_time_id" />
              <button name="end_time_btn" type="button" id="end_time_btn" onclick="return showCalendar('end_time_id', '%Y-%m-%d %H:%M', '24', false, 'end_time_btn');" class="cal"><img src="static/picture/cal.png" alt=""></button>
            </td>
          </tr>
          <tr>
            <td><div align="right"><strong>订单状态：</strong></div></td>
            <td colspan="3">
              <select name="order_status" id="select9">
                <option value="-1">请选择...</option>
                <option value="0">未确认</option><option value="1">已确认</option><option value="2"><font color="red"> 取消</font></option><option value="3"><font color="red">无效</font></option><option value="4"><font color="red">退货</font></option><option value="5">已分单</option><option value="6">部分分单</option>              </select>
              <strong>付款状态：</strong>        <select name="pay_status" id="select11">
              <option value="-1">请选择...</option>
              <option value="0">未付款</option><option value="1">付款中</option><option value="2">已付款</option>            </select>
              <strong>发货状态：</strong>        <select name="shipping_status" id="select10">
              <option value="-1">请选择...</option>
              <option value="0">未发货</option><option value="3">配货中</option><option value="1">已发货</option><option value="2">收货确认</option><option value="4">已发货(部分商品)</option><option value="5">发货中</option>            </select></td>
          </tr>
        </table>
      </div>
      <div class="panel-ft">
        <tr>
          <td colspan="4"><div align="center">
          </div></td>
        </tr>
        <!--<button class="btn-act btn-confirm" data-role="true" onclick="goBind(this)">去绑定</button>-->
        <input class="btn-act btn-confirm" name="query" type="submit" class="button" id="query" value=" 搜索 " />
        <input class="btn-act btn-cancel" name="reset" type="reset" class='button' value=' 重置 ' />
        <!--<button class="btn-act btn-cancel" onclick="btnCancel(this);">知道了，不再提示</button>-->
      </div>
    </div>
  </form>
</div>
<div id="footer">
共执行 11 个查询，用时 0.053965 秒，Gzip 已禁用，内存占用 2.615 MB<br />
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