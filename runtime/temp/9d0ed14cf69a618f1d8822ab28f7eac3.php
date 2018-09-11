<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_type_upd.html";i:1536635300;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="/">
    <title>ECSHOP 管理中心 - 新建商品类型 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="static/css/general.css" rel="stylesheet" type="text/css" />
    <link href="static/css/main.css" rel="stylesheet" type="text/css" />
<h1>
    <a class="btn btn-right" href="/index/goods/goods_type_manage">商品类型列表</a>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;新建商品类型 </span>
    <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script><script type="text/javascript" src="static/js/validator.js"></script>
<div class="main-div">
</div>
<form action="<?php echo url('goods/goods_type_upd_do'); ?>" method="post" name="theForm" onsubmit="return validate();">
    <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <input type="hidden" name="type_id" value="<?php echo $v['type_id']; ?>">
    <table cellspacing="1" cellpadding="3" width="100%">
        <tr>
            <td class="label">商品类型名称:</td>
            <td><input type="text" name="type_name" value="<?php echo $v['type_name']; ?>" size="40" />
                <span class="require-field">*</span></td>
        </tr>
        <tr>
            <td class="label">
                <a href="javascript:showNotice('noticeAttrGroups');" title="点击此处查看提示信息">
                <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息">
                </a> 属性分组:
            </td>
            <td>
                <textarea name="attr_group" rows="5" cols="40"><?php echo $v['attr_group']; ?></textarea><br />
                <span class="notice-span" style="display:block"  id="noticeAttrGroups">每行一个商品属性组。排序也将按照自然顺序排序。</span>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value=" 确定 " class="button" />
                <input type="reset" value=" 重置 " class="button" />
            </td>
        </tr>
    </table>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</form>
<div id="footer">
    共执行 2 个查询，用时 0.016500 秒，Gzip 已禁用，内存占用 1.331 MB<br />
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