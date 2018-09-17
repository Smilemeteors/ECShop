<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\comment_manage_list.html";i:1537168819;}*/ ?>
<!-- $Id: comment_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 用户评论 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;用户评论 </span>
  <div style="clear:both"></div>
</h1><div class="form-div">
  <form action="javascript:searchComment()" name="searchForm">
    <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
    输入评论内容 <input type="text" name="keyword" /> <input type="submit" class="btn" value=" 搜索 " />
  </form>
</div>

<form method="POST" action="comment_manage.php?act=batch_drop" name="listForm" onsubmit="return confirm_bath()">

<!-- start comment list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a>编号</a> </th>
    <th><a>用户名</a></th>
    <th><a>邮箱</a></th>
    <th><a>评论内容</a></th>
    <th><a>类型</a></th>
    <th><a>评论对象</a></th>
    <th><a>IP地址</a></th>
    <th><a>评论时间</a><img src="static/picture/sort_desc.png"/></th>
    <th>状态</th>
    <th>操作</th>
  </tr>
  <?php foreach ($arr as $key => $v): ?>
  <tr>
    <td><input value="4" name="checkboxes[]" type="checkbox"><?php echo $v['comment_id']; ?></td>
    <td><?php echo $v['user_name']; ?></td>
    <td><?php echo $v['email']; ?></td>
    <td><?php echo $v['reply_content']; ?></td>
    <td><?php echo $v['comment_type']; ?></td>
    <td><?php echo $v['id_value']; ?></td>
    <td></td>
    <td><?php echo $v['add_time']; ?></td>
    <td></td>
    <td align="center">
      <a href="<?php echo url('comment_manage_details'); ?>">查看详情</a> |
      <a href="<?php echo url('comment_manage_del'); ?>?id=<?php echo $v['comment_id']; ?>" onclick="listTable.remove(4, '您确认要删除这条记录吗?')" title="移除">移除</a>
    </td>
  </tr>
  <?php endforeach ?>
      </table>

  <!-- <table cellpadding="4" cellspacing="0">
    <tr>
      <td>
      <div>
      <select name="sel_action">
        <option value="remove">删除评论</option>
        <option value="allow">允许显示</option>
        <option value="deny">禁止显示</option>
      </select>
      <input type="hidden" name="act" value="batch" />
      <input type="submit" name="drop" id="btnSubmit" value=" 确定 " class="button" disabled="true" /></div></td>
      <td align="right">
<div id="turn-page">
  <span id="pageCurrent">1</span> / <span id="totalPages">1</span>
  页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)">
  条记录，总共 <span id="totalRecords">3</span>
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
  </table> -->

</div>
<!-- end comment list -->

</form>
<div id="footer">
共执行 7 个查询，用时 0.007914 秒，Gzip 已禁用，内存占用 1.475 MB<br />
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