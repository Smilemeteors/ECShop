<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\attribute_add.html";i:1536363559;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="/">
    <title>ECSHOP 管理中心 - 添加属性 </title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="static/css/general.css" rel="stylesheet" type="text/css" />
    <link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <a class="btn btn-right" href="<?php echo url('/admin/goods/goods_type_manage'); ?>">商品属性</a>

    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加属性 </span>
    <div style="clear:both"></div>
</h1><div class="main-div">
    <form action="<?php echo url('attribute_add_do'); ?>"  method="post" name="theForm" onsubmit="return validate();">
        <table width="100%" id="general-table">
            <tr>
                <td class="label">属性名称：</td>
                <td>
                    <input type='text' name='attr_name' value="" size='30' />
                    <span class="require-field">*</span>        </td>
            </tr>
            <tr>
                <td class="label">所属商品类型：</td>
                <td>
                    <select name="cat_id" onchange="onChangeGoodsType(this.value)">
                        <option value="0">请选择...</option>
                        <option value='1' selected="true">书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='4'>手机</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option>          </select> <span class="require-field">*</span>        </td>
            </tr>
            <tr id="attrGroups" style="display:none">
                <td class="label">属性分组：</td>
                <td>
                    <select name="attr_group">
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label"><a href="javascript:showNotice('noticeindex');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>能否进行检索：</td>
                <td>
                    <input type="radio" name="" value="0"  checked="true"  />
                    不需要检索          <input type="radio" name="attr_index" value="1"  />
                    关键字检索          <input type="radio" name="attr_index" value="2"  />
                    范围检索          <br /><span class="notice-span" style="display:block"  id="noticeindex">不需要该属性成为检索商品条件的情况请选择不需要检索，需要该属性进行关键字检索商品时选择关键字检索，如果该属性检索时希望是指定某个范围时，选择范围检索。</span>
                </td>
            </tr>
            <tr>
                <td class="label">相同属性值的商品是否关联？</td>
                <td>
                    <input type="radio" name="" value="0"  checked="true"  /> 否          <input type="radio" name="" value="1"  /> 是        </td>
            </tr>
            <tr>
                <td class="label"><a href="javascript:showNotice('noticeAttrType');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>属性是否可选</td>
                <td>
                    <input type="radio" name="" value="0"  checked="true"  /> 唯一属性          <input type="radio" name="" value="1"  /> 单选属性          <input type="radio" name="attr_type" value="2"  /> 复选属性          <br /><span class="notice-span" style="display:block"  id="noticeAttrType">选择"单选/复选属性"时，可以对商品该属性设置多个值，同时还能对不同属性值指定不同的价格加价，用户购买商品时需要选定具体的属性值。选择"唯一属性"时，商品的该属性值只能设置一个值，用户只能查看该值。</span>
                </td>
            </tr>
            <tr>
                <td class="label">该属性值的录入方式：</td>
                <td>
                    <input type="radio" name="attr_input_type" value="0"  checked="true"  onclick="radioClicked(0)"/>
                    手工录入          <input type="radio" name="attr_input_type" value="1"  onclick="radioClicked(1)"/>
                    从下面的列表中选择（一行代表一个可选值）          <input type="radio" name="attr_input_type" value="2"  onclick="radioClicked(0)"/>
                    多行文本框        </td>
            </tr>
            <tr>
                <td class="label">可选值列表：</td>
                <td>
                    <textarea name="" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="button-div">
                        <input type="submit" value=" 确定 " class="button"/>
                        <input type="reset" value=" 重置 " class="button" />
                    </div>
                </td>
            </tr>
        </table>
        <input type="hidden" name="" value="update" />
        <input type="hidden" name="attr_id" value="1" />
    </form>
</div>
</body>
</html>