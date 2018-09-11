<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\category_add.html";i:1536580931;}*/ ?>

<!-- $Id: category_info.htm 16752 2009-10-20 09:59:38Z wangleisvn $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="/static/" />
<title>ECSHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/general.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<h1>
      <a class="btn btn-right" href="category.php?act=list">商品分类</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加分类 </span>
  <div style="clear:both"></div>
</h1><!-- start add new category form -->
<div class="main-div">
  <form action="<?php echo url('goods/cat_add_do'); ?>" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">分类名称:</td>
        <td>
          <input type='text' name='cat_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">上级分类:</td>
        <td>
          <select name="parent_id">
            <option value="0">顶级分类</option>
            <option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option>          </select>
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
          <input type="text" name='sort_order'  value="50" size="15" />
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
        <td class="label">筛选属性:</td>
        <td>
          <table width="100%" id="tbody-attr" align="center">
                        <tr>
              <td>   
                   <a href="javascript:;">[+]</a> 
                   <select><option value="0">请选择商品类型</option><option value='1'>书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option></select>&nbsp;&nbsp;
                   <select name="filter_attr[]"><option value="0">请选择筛选属性</option></select><br />                   
              </td>
            </tr> 
                       
                      </table>

          <span class="notice-span" style="display:block"  id="noticeFilterAttr">筛选属性可在前分类页面筛选商品</span>
        </td>
      </tr>
      <tr>
        <td class="label">价格区间个数:</td>
        <td>
          <input type="text" name="grade" value="0" size="40" /> <br />
          <span class="notice-span" style="display:block"  id="noticeGrade">该选项表示该分类下商品最低价与最高价之间的划分的等级个数，填0表示不做分级，最多不能超过10个。</span>
        </td>
      </tr>
      <tr>
        <td class="label">分类的样式表文件:</td>
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
  </form>
</div>
</body>
</html>