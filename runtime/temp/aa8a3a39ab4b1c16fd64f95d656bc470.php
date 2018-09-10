<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\brand_upd.html";i:1536379306;}*/ ?>
<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="/" />
    <title>ECSHOP 管理中心 - 编辑品牌 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="static/css/general.css" rel="stylesheet" type="text/css" />
    <link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <a class="btn btn-right" href="/index/goods/brand_list">商品品牌</a>

    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;编辑品牌 </span>
    <div style="clear:both"></div>
</h1><div class="main-div">
    <form method="post" action="admin/goods/brand_upd_do" name="theForm" enctype="multipart/form-data">
        <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <input type="hidden" name="brand_id" value="<?php echo $v['brand_id']; ?>">
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">品牌名称</td>
                <td><input type="text" name="brand_name" maxlength="60" value="<?php echo $v['brand_name']; ?>" /><span class="require-field">*</span></td>
            </tr>
            <tr>
                <td class="label">品牌网址</td>
                <td><input type="text" name="site_url" maxlength="60" size="40" value="<?php echo $v['site_url']; ?>" /></td>
            </tr>
            <tr>
                <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="点击此处查看提示信息">
                    <img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>品牌LOGO</td>
                <td><input type="file" name="brand_logo" id="logo" size="45">    <br /><span class="notice-span" style="display:block"  id="warn_brandlogo">
        请上传图片，做为品牌的LOGO！        </span>
                </td>
            </tr>
            <tr>
                <td class="label">品牌描述</td>
                <td><textarea  name="brand_desc" cols="60" rows="4"  ></textarea></td>
            </tr>
            <tr>
                <td class="label">排序</td>
                <td><input type="text" name="sort_order" maxlength="40" size="15" value="50" /></td>
            </tr>
            <tr>
                <td class="label">是否显示</td>
                <td><input type="radio" name="is_show" value="1" checked="checked" /> 是        <input type="radio" name="is_show" value="0"  /> 否        (当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br />
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
    </form>
</div>
<div id="footer">
    共执行 2 个查询，用时 0.015498 秒，Gzip 已禁用，内存占用 1.409 MB<br />
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
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

</body>
</html>