<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpstudy\WWW\shixun\ECShop\public/../application/admin\view\quanxi\privilege.html";i:1536325216;}*/ ?>
﻿privi<!-- $Id: privilege_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 管理员列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/css/general_2.css" rel="stylesheet" type="text/css" />
<link href="/static/css/main_2.css" rel="stylesheet" type="text/css" />

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
      <a class="btn btn-right" href="privilege_add.html">添加管理员</a>
  
    <span class="action-span1"><a href="../Index/index_main.html">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;管理员列表 </span>
  <div style="clear:both"></div>
</h1>
<div class="list-div" id="listDiv">

<table cellspacing='1' cellpadding='3' id='list-table'>
  <tr>
    <th>用户名</th>
    <th>Email地址</th>
    <th>加入时间</th>
    <!-- <th>最后登录时间</th> -->
    <th>操作</th>
  </tr>
  <?php foreach ($list as $key => $v) { ?>
    <tr>
      <td class="first-cell" ><?=$v['admin_name'];?></td>
      <td align="left"><?=$v['admin_email'];?></td>
      <td align="center"><?=$v['date_time'];?></td>
      <!-- <td align="center">2018-08-31 14:29:20</td> -->
      <td align="center">
        <a href="role_edit.html?id=<?=$v['admin_id'];?>" title="分派权限">分派权限</a>&nbsp;
        <a href="admin_logs.html?id=<?=$v['admin_id'];?>" title="查看日志">查看日志</a>&nbsp;
        <a href="privilege_edit.html?id=<?=$v['admin_id'];?>" title="编辑">编辑</a>&nbsp;
        <a href="javascript:;" onclick="listTable.remove(2, '您确认要删除这条记录吗?')" title="移除">移除</a></td>
    </tr>
  <?php } ?>
    
    
    <!-- <tr>
    <td class="first-cell" >admin</td>
    <td align="left"></td>
    <td align="center">2018-08-30 19:05:43</td>
    <td align="center">2018-09-05 10:02:50</td>
    <td align="center">
      <a href="privilege.php?act=allot&id=1&user=admin" title="分派权限">分派权限</a>&nbsp;
      <a href="admin_logs.php?act=list&id=1" title="查看日志">查看日志</a>&nbsp;
      <a href="privilege.php?act=edit&id=1" title="编辑">编辑</a>&nbsp;
      <a href="javascript:;" onclick="listTable.remove(1, '您确认要删除这条记录吗?')" title="移除">移除</a></td>
  </tr> -->
  </table>

</div>

<div id="footer">
共执行 3 个查询，用时 0.012679 秒，Gzip 已禁用，内存占用 1.157 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="/static/picture/msgclose.jpg"> --></td>
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