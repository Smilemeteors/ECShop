<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\ECShop\public/../application/admin\view\system\accuse_details.html";i:1536913415;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0078)http://127.0.0.1/ECShop1/source/ecshop/admin/comment_manage.php?act=reply&id=6 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 投诉详情 </title>
<meta name="robots" content="noindex, nofollow">
  <base href="/">
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span1"><a href="http://127.0.0.1/ECShop1/source/ecshop/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;&gt;&nbsp;&nbsp;投诉详情 </span>
  <div style="clear:both"></div>
</h1><!-- comment content list -->
<form method="POST" action="<?php echo url('system/accuse_details'); ?>" name="listForm" onsubmit="return confirm_bath()">
<div class="main-div">
  <table width="100%">
    <tbody>
    <?php foreach ($arr as $key => $v): ?>
    <tr>
      <td>
        <a href=""><?php echo $v['user_name']; ?></a>&nbsp;于     <?php echo $v['accuse_time']; ?> &nbsp;&nbsp;对
        <b><?php echo $v['goods_name']; ?></b>&nbsp;&nbsp;进行投诉
      </td>
    </tr>
    <?php endforeach ?>
    <tr>
      <td><hr color="#dadada" size="1"></td>
    </tr>
    <tr>
      <td>
        <div style="overflow:hidden; word-break:break-all;">
          <table width="100%">
            <tr>
              <td><textarea name="reply_content" cols="190" rows="4" wrap="VIRTUAL"><?php echo $v['accuse_content']; ?></textarea></td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
    <!--<tr>-->
      <!--<td align="center">-->
                <!--<input type="button" onclick="location.href=&#39;comment_manage.php?act=check&amp;check=forbid&amp;id=6&#39;" value="禁止显示" class="button">-->
            <!--</td>-->
    <!--</tr>-->
  </tbody></table>
</div>
</form>

<div class="main-div">
<form method="post" action="<?php echo url('system/accuse_attach'); ?>" name="theForm" onsubmit="return validate()">
<table border="0" align="center">
  <tbody><tr><th colspan="2">
  <strong>回复用户</strong>
  </th></tr>
  <tr>
    <td>用户名:</td>
    <td><input name="user_name" type="text" value="<?php echo $v['user_name']; ?>" size="30"></td>
  </tr>
  <tr>
    <td>商品名称:</td>
    <td><input name="goods_name" type="text" value="<?php echo $v['goods_name']; ?>" size="30"></td>
  </tr>
  <tr>
    <td>商品类型:</td>
    <td><input name="goods_type" type="text" value="<?php echo $v['goods_type']; ?>" size="30"></td>
  </tr>
  <tr>
    <td>投诉内容:</td>
    <td><input name="accuse_content" type="text" value="<?php echo $v['accuse_content']; ?>" size="30"></td>
  </tr>
  <tr>
    <td>投诉时间:</td>
    <td><input name="accuse_time" type="text" value="<?php echo $v['accuse_time']; ?>" size="30"></td>
  </tr>
  <tr>
    <td>回复内容:</td>
    <td><textarea name="attach_content" cols="50" rows="4" wrap="VIRTUAL"></textarea></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>提示: 此条评论已有回复, 如果继续回复将更新原来回复的内容!</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input name="" type="submit" value=" 确定 " class="button" >
      &nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button">
    </td>
  </tr>
</tbody></table>
</form>
</div>
<div id="footer">
共执行 6 个查询，用时 0.016226 秒，Gzip 已禁用，内存占用 1.467 MB<br>
版权所有 © 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tbody>
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="http://127.0.0.1/ECShop1/source/ecshop/admin/order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </tbody></table>
</div>
</body>
</html>