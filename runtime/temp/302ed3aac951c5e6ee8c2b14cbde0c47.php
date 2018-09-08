<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\goods\goods_add.html";i:1536313190;}*/ ?>
<!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="/" />
<title>ECSHOP 管理中心 - 添加新商品 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
      <a class="btn btn-right" href="goods.php?act=list">商品列表</a>
  <script type="text/javascript" src="static/js/utils.js"></script>
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;添加新商品 </span>
  <div style="clear:both"></div>
</h1><script type="text/javascript" src="static/js/utils.js"></script>
<link href="static/css/calendar.css" rel="stylesheet" type="text/css" />


<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span><span
        class="tab-back" id="detail-tab">详细描述</span><span
        class="tab-back" id="mix-tab">其他信息</span><span
        class="tab-back" id="properties-tab">商品属性</span><!-- <span
        class="tab-back" id="gallery-tab">商品相册</span><span
        class="tab-back" id="linkgoods-tab">关联商品</span><span
        class="tab-back" id="groupgoods-tab">配件</span><span
        class="tab-back" id="article-tab">关联文章</span> -->
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" name="theForm" >
        <!-- 鏈€澶ф枃浠堕檺鍒 -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
        <!-- 閫氱敤淇℃伅 -->
        <table width="90%" id="general-table" align="center" class="gk-table">
          <tr>
            <td class="label">商品名称：</td>
            <td><input type="text" name="goods_name" value="" style="float:left;color:;" size="30" /><div style="background-color:;float:left;margin-left:2px;" id="font_color" onclick="ColorSelecter.Show(this);"><img src="static/picture/color_selecter.gif" style="margin-top:-1px;" /></div><input type="hidden" id="goods_name_color" name="goods_name_color" value="" />&nbsp;
            <select name="goods_name_style">
              <option value="">字体样式</option>
              <option value="strong">加粗</option><option value="em">斜体</option><option value="u">下划线</option><option value="strike">删除线</option>            </select>
            <span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">
            <a href="javascript:showNotice('noticeGoodsSN');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品货号： </td>
            <td><input type="text" name="goods_sn" value="" size="20" onblur="checkGoodsSn(this.value,'0')" /><span id="goods_sn_notice"></span><br />
            <span class="notice-span" style="display:block"  id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
          </tr>
          <tr>
            <td class="label">商品分类：</td>
            <td><select name="cat_id" onchange="hideCatDiv()"><option value="0">请选择...</option><option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
                            <button type="button" class="btn btn-def " onclick="rapidCatAdd()">添加分类</button>
              <span id="category_add" style="display:none;">
              <input type="text" class="text" size="10" name="addedCategoryName" />
               <button type="button" class="btn btn-def " onclick="addCategory()" title=" 确定 "> 确定 </button>
               <button type="button" class="btn btn-def " onclick="return goCatPage()" title="分类管理">分类管理</button>
               <button type="button" class="btn btn-def " onclick="hideCatDiv()" title="隐藏"><<</button>
               </span>
                              <span class="require-field">*</span>            </td>
          </tr>
          <tr>
            <td class="label">扩展分类：</td>
            <td>
              <input type="button" value="添加" onclick="addOtherCat(this.parentNode)" class="button btn-def" />
                          </td>
          </tr>
          <tr>
            <td class="label">商品品牌：</td>
            <td><select name="brand_id" onchange="hideBrandDiv()" ><option value="0">请选择...<option value="4">飞利浦</option><option value="5">夏新</option><option value="15">仓品</option></select>
                            <button type="button" class="btn btn-def " onclick="rapidBrandAdd()">添加品牌</button>
              <span id="brand_add" style="display:none;">
              <input type="text" class="text" size="15" name="addedBrandName" />
               <button type="button" class="btn btn-def " onclick="addBrand()" title=" 确定 "> 确定 </button>
               <button type="button" class="btn btn-def " onclick="return goBrandPage()" title="品牌管理">品牌管理</button>
               <button type="button" class="btn btn-def " onclick="hideBrandDiv()" title="隐藏"><<</button>
               </span>
                           </td>
          </tr>
                   <tr>
            <td class="label">选择供货商：</td>
            <td><select name="suppliers_id" id="suppliers_id">
        <option value="0">不指定供货商属于本店商品</option>
        <option value="1">北京供货商</option><option value="2">上海供货商</option>      </select></td>
          </tr>
                   <tr>
            <td class="label">本店售价：</td>
            <td><input type="text" name="shop_price" value="0" size="20" onblur="priceSetted()"/>
            <input type="button" class="btn btn-def" value="按市场价计算" onclick="marketPriceSetted()" />
            <span class="require-field">*</span></td>
          </tr>
                    <tr>
            <td class="label"><a href="javascript:showNotice('noticeUserPrice');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>会员价格：</td>
            <td>
                            注册用户<span id="nrank_1"></span><input type="text" id="rank_1" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)<-1){this.value='-1';};set_price_note(1)" size="8" />
              <input type="hidden" name="user_rank[]" value="1" />
                            代销用户<span id="nrank_3"></span><input type="text" id="rank_3" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)<-1){this.value='-1';};set_price_note(3)" size="8" />
              <input type="hidden" name="user_rank[]" value="3" />
                            vip<span id="nrank_2"></span><input type="text" id="rank_2" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)<-1){this.value='-1';};set_price_note(2)" size="8" />
              <input type="hidden" name="user_rank[]" value="2" />
                            <br />
              <span class="notice-span" style="display:block"  id="noticeUserPrice">会员价格为-1时表示会员价格按会员等级折扣率计算。你也可以为每个等级指定一个固定价格</span>
            </td>
          </tr>
          
          <!--鍟嗗搧浼樻儬浠锋牸-->
          <tr>
            <td class="label"><a href="javascript:showNotice('volumePrice');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>商品优惠价格：</td>
            <td>
              <table width="100%" id="tbody-volume" align="center">
                                <tr>
                  <td>
                                            <a href="javascript:;">[+]</a>
                                          优惠数量 <input type="text" name="volume_number[]" size="8" value=""/>
                     优惠价格 <input type="text" name="volume_price[]" size="8" value=""/>
                  </td>
                </tr>
                              </table>
              <span class="notice-span" style="display:block"  id="volumePrice">购买数量达到优惠数量时享受的优惠价格</span>
            </td>
          </tr>
          <!--鍟嗗搧浼樻儬浠锋牸 end -->

          <tr>
            <td class="label">市场售价：</td>
            <td><input type="text" name="market_price" value="0" size="20" />
              <input type="button" class="btn btn-def" value="取整数" onclick="integral_market_price()" />
            </td>
          </tr>
          <tr>
            <td class="label">虚拟销量：</td>
            <td><input type="text" name="virtual_sales" value="0" size="20" />
            </td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice('giveIntegral');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 赠送消费积分数：</td>
            <td><input type="text" name="give_integral" value="-1" size="20" />
            <br /><span class="notice-span" style="display:block"  id="giveIntegral">购买该商品时赠送消费积分数,-1表示按商品价格赠送</span></td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice('rankIntegral');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 赠送等级积分数：</td>
            <td><input type="text" name="rank_integral" value="-1" size="20" />
            <br /><span class="notice-span" style="display:block"  id="rankIntegral">购买该商品时赠送等级积分数,-1表示按商品价格赠送</span></td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice('noticPoints');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 积分购买金额：</td>
            <td><input type="text" name="integral" value="0" size="20" onblur="parseint_integral()";/>
              <br /><span class="notice-span" style="display:block"  id="noticPoints">(此处需填写金额)购买该商品时最多可以使用积分的金额</span>
            </td>
          </tr>
          <tr>
            <td class="label"><label for="is_promote"><input type="checkbox" id="is_promote" name="is_promote" value="1"  onclick="handlePromote(this.checked);" /> 促销价：</label></td>
            <td id="promote_3"><input type="text" id="promote_1" name="promote_price" value="0" size="20" /></td>
          </tr>
          <tr id="promote_4">
            <td class="label" id="promote_5">促销日期：</td>
            <td id="promote_6" class="cal-group">
              <input name="promote_start_date" type="text" id="promote_start_date" size="12" value='2018-09-05' readonly="readonly"><button type="button" class="cal" name="selbtn1" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');"><img src="static/picture/cal.png" alt=""></button> - <input name="promote_end_date" type="text" id="promote_end_date" size="12" value='2018-10-05' readonly="readonly" /><button type="button" class="cal" name="selbtn2" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');"><img src="static/picture/cal.png" alt=""></button>
            </td>
          </tr>
          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="goods_img" size="35" />
                              <img src="static/picture/no.svg" width="16">
                            <br /><input type="text" size="40" value="商品图片外部URL" style="color:#aaa;" onfocus="if (this.value == '商品图片外部URL'){this.value='http://';this.style.color='#000';}" name="goods_img_url"/>
            </td>
          </tr>
          <tr id="auto_thumb_1">
            <td class="label"> 上传商品缩略图：</td>
            <td id="auto_thumb_3">
              <input type="file" name="goods_thumb" size="35" />
                              <img src="static/picture/no.svg" width="16">
                            <br /><input type="text" size="40" value="商品缩略图外部URL" style="color:#aaa;" onfocus="if (this.value == '商品缩略图外部URL'){this.value='http://';this.style.color='#000';}" name="goods_thumb_url"/>
                            <br /><label for="auto_thumb"><input type="checkbox" id="auto_thumb" name="auto_thumb" checked="true" value="1" onclick="handleAutoThumb(this.checked)" />自动生成商品缩略图</label>            </td>
          </tr>
        </table>
        <!-- 璇︾粏鎻忚堪 -->
        <table width="90%" id="detail-table" style="display:none">
          <tr>
            <td><input type="hidden" id="goods_desc" name="goods_desc" value="" style="display:none" /><input type="hidden" id="goods_desc___Config" value="" style="display:none" /></td>
          </tr>
        </table>

        <!-- 鍏朵粬淇℃伅 -->
        <table width="90%" id="mix-table" style="display:none" align="center">
                    <tr>
            <td class="label">商品重量：</td>
            <td><input type="text" name="goods_weight" value="" size="20" /> <select name="weight_unit"><option value="1" selected>千克</option><option value="0.001">克</option></select></td>
          </tr>
                              <tr>
            <td class="label"><a href="javascript:showNotice('noticeStorage');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>
<!--            <td><input type="text" name="goods_number" value="1" size="20"  /><br />-->
            <td><input type="text" name="goods_number" value="1" size="20" /><br />
            <span class="notice-span" style="display:block"  id="noticeStorage">库存在商品为虚货或商品存在货品时为不可编辑状态，库存数值取决于其虚货数量或货品数量</span></td>
          </tr>
          <tr>
            <td class="label">库存警告数量：</td>
            <td><input type="text" name="warn_number" value="1" size="20" /></td>
          </tr>
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="is_best" value="1"  />精品 <input type="checkbox" name="is_new" value="1"  />新品 <input type="checkbox" name="is_hot" value="1"  />热销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="is_on_sale" value="1" checked="checked" /> 打勾表示允许销售，否则不允许销售。</td>
          </tr>
          <tr>
            <td class="label">能作为普通商品销售：</td>
            <td><input type="checkbox" name="is_alone_sale" value="1" checked="checked" /> 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。</td>
          </tr>
          <tr>
            <td class="label">是否为免运费商品</td>
            <td><input type="checkbox" name="is_shipping" value="1"  /> 打勾表示此商品不会产生运费花销，否则按照正常运费计算。</td>
          </tr>
          <tr>
            <td class="label">商品关键词：</td>
            <td><input type="text" name="keywords" value="" size="40" /> 用空格分隔</td>
          </tr>
          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="goods_brief" cols="40" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="label">
            <a href="javascript:showNotice('noticeSellerNote');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商家备注： </td>
            <td><textarea name="seller_note" cols="40" rows="3"></textarea><br />
            <span class="notice-span" style="display:block"  id="noticeSellerNote">仅供商家自己看的信息</span></td>
          </tr>
        </table>

        <!-- 灞炴€т笌瑙勬牸 -->
                <table width="90%" id="properties-table" style="display:none" align="center">
          <tr>
              <td class="label"><a href="javascript:showNotice('noticeGoodsType');" title="点击此处查看提示信息"><img src="static/picture/notice.svg" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>商品类型：</td>
              <td>
                <select name="goods_type" onchange="getAttrList(0)">
                  <option value="0">请选择商品类型</option>
                  <option value='1'>书</option><option value='2'>音乐</option><option value='3'>电影</option><option value='4'>手机</option><option value='5'>笔记本电脑</option><option value='6'>数码相机</option><option value='7'>数码摄像机</option><option value='8'>化妆品</option><option value='9'>精品手机</option>                </select><br />
              <span class="notice-span" style="display:block"  id="noticeGoodsType">请选择商品的所属类型，进而完善此商品的属性</span></td>
          </tr>
          <tr>
            <td id="tbody-goodsAttr" colspan="2" style="padding:0"><table width="100%" id="attrTable"></table></td>
          </tr>
        </table>
        
        <!-- 鍟嗗搧鐩稿唽 -->
        <table width="90%" id="gallery-table" style="display:none" align="center">
          <!-- 鍥剧墖鍒楄〃 -->
          <tr>
            <td>
                          </td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
              <a href="javascript:;" onclick="addImg(this)">[+]</a>
              图片描述 <input type="text" name="img_desc[]" size="20" />
              上传文件 <input type="file" name="img_url[]" />
              <input type="text" size="40" value="或者输入外部图片链接地址" style="color:#aaa;" onfocus="if (this.value == '或者输入外部图片链接地址'){this.value='http://';this.style.color='#000';}" name="img_file[]"/>
            </td>
          </tr>
        </table>

        <!-- 鍏宠仈鍟嗗搧 -->
        <table width="90%" id="linkgoods-table" style="display:none" align="center">
          <!-- 鍟嗗搧鎼滅储 -->
          <tr>
            <td colspan="3">
              <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
              <select name="cat_id1"><option value="0">所有分类<option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
              <select name="brand_id1"><option value="0">所有品牌<option value="4">飞利浦</option><option value="5">夏新</option><option value="15">仓品</option></select>
              <input type="text" name="keyword1" />
              <input type="button" value=" 搜索 "  class="button"
                onclick="searchGoods(sz1, 'cat_id1','brand_id1','keyword1')" />
            </td>
          </tr>
          <!-- 鍟嗗搧鍒楄〃 -->
          <tr>
            <th>可选商品</th>
            <th>操作</th>
            <th>跟该商品关联的商品</th>
          </tr>
          <tr>
            <td width="42%">
              <select name="source_select1" size="20" style="width:100%" ondblclick="sz1.addItem(false, 'add_link_goods', goodsId, this.form.elements['is_single'][0].checked)" multiple="true">
              </select>
            </td>
            <td align="center">
              <p><input name="is_single" type="radio" value="1" checked="checked" />单向关联<br /><input name="is_single" type="radio" value="0" />双向关联</p>
              <p><input type="button" value=">>" onclick="sz1.addItem(true, 'add_link_goods', goodsId, this.form.elements['is_single'][0].checked)" class="button" /></p>
              <p><input type="button" value=">" onclick="sz1.addItem(false, 'add_link_goods', goodsId, this.form.elements['is_single'][0].checked)" class="button" /></p>
              <p><input type="button" value="<" onclick="sz1.dropItem(false, 'drop_link_goods', goodsId, elements['is_single'][0].checked)" class="button" /></p>
              <p><input type="button" value="<<" onclick="sz1.dropItem(true, 'drop_link_goods', goodsId, elements['is_single'][0].checked)" class="button" /></p>
            </td>
            <td width="42%">
              <select name="target_select1" size="20" style="width:100%" multiple ondblclick="sz1.dropItem(false, 'drop_link_goods', goodsId, elements['is_single'][0].checked)">
                              </select>
            </td>
          </tr>
        </table>

        <!-- 閰嶄欢 -->
        <table width="90%" id="groupgoods-table" style="display:none" align="center">
          <!-- 鍟嗗搧鎼滅储 -->
          <tr>
            <td colspan="3">
              <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
              <select name="cat_id2"><option value="0">所有分类<option value="26" >家用电器</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;大家电</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家用空调</option><option value="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家电配件</option><option value="31" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洗衣机</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平板电脑</option><option value="32" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;冰箱</option><option value="25" >数码时尚</option><option value="18" >智能硬件</option><option value="22" >移动电源</option><option value="16" >服装</option><option value="12" >充值卡</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;小型手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="6" >手机</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="19" >配件</option><option value="24" >&nbsp;&nbsp;&nbsp;&nbsp;数码时尚</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;保护壳</option></select>
              <select name="brand_id2"><option value="0">所有品牌<option value="4">飞利浦</option><option value="5">夏新</option><option value="15">仓品</option></select>
              <input type="text" name="keyword2" />
              <input type="button" value=" 搜索 " onclick="searchGoods(sz2, 'cat_id2', 'brand_id2', 'keyword2')" class="button" />
            </td>
          </tr>
          <!-- 鍟嗗搧鍒楄〃 -->
          <tr>
            <th>可选商品</th>
            <th>操作</th>
            <th>该商品的配件</th>
          </tr>
          <tr>
            <td width="42%">
              <select name="source_select2" size="20" multiple style="width:100%" onchange="sz2.priceObj.value = this.options[this.selectedIndex].id" ondblclick="sz2.addItem(false, 'add_group_goods', goodsId, this.form.elements['price2'].value)">
              </select>
            </td>
            <td align="center">
              <p>价格<br /><input name="price2" type="text" size="6" /></p>
              <p><input type="button" value=">" onclick="sz2.addItem(false, 'add_group_goods', goodsId, this.form.elements['price2'].value)" class="button" /></p>
              <p><input type="button" value="<" onclick="sz2.dropItem(false, 'drop_group_goods', goodsId, elements['is_single'][0].checked)" class="button" /></p>
              <p><input type="button" value="<<" onclick="sz2.dropItem(true, 'drop_group_goods', goodsId, elements['is_single'][0].checked)" class="button" /></p>
            </td>
            <td width="42%">
              <select name="target_select2" size="20" style="width:100%" multiple ondblclick="sz2.dropItem(false, 'drop_group_goods', goodsId, elements['is_single'][0].checked)">
                              </select>
            </td>
          </tr>
        </table>

        <!-- 鍏宠仈鏂囩珷 -->
        <table width="90%" id="article-table" style="display:none" align="center">
          <!-- 鏂囩珷鎼滅储 -->
          <tr>
            <td colspan="3">
              <img src="static/picture/icon_search.svg" width="26" height="22" border="0" alt="SEARCH" />
              文章标题 <input type="text" name="article_title" />
              <input type="button" value=" 搜索 " onclick="searchArticle()" class="button" />
            </td>
          </tr>
          <!-- 鏂囩珷鍒楄〃 -->
          <tr>
            <th>可选文章</th>
            <th>操作</th>
            <th>跟该商品关联的文章</th>
          </tr>
          <tr>
            <td width="45%">
              <select name="source_select3" size="20" style="width:100%" multiple ondblclick="sz3.addItem(false, 'add_goods_article', goodsId, this.form.elements['price2'].value)">
              </select>
            </td>
            <td align="center">
              <p><input type="button" value=">>" onclick="sz3.addItem(true, 'add_goods_article', goodsId, this.form.elements['price2'].value)" class="button" /></p>
              <p><input type="button" value=">" onclick="sz3.addItem(false, 'add_goods_article', goodsId, this.form.elements['price2'].value)" class="button" /></p>
              <p><input type="button" value="<" onclick="sz3.dropItem(false, 'drop_goods_article', goodsId, elements['is_single'][0].checked)" class="button" /></p>
              <p><input type="button" value="<<" onclick="sz3.dropItem(true, 'drop_goods_article', goodsId, elements['is_single'][0].checked)" class="button" /></p>
            </td>
            <td width="45%">
              <select name="target_select3" size="20" style="width:100%" multiple ondblclick="sz3.dropItem(false, 'drop_goods_article', goodsId, elements['is_single'][0].checked)">
                              </select>
            </td>
          </tr>
        </table>

        <div class="button-div">
          <input type="hidden" name="goods_id" value="0" />
                    <input type="button" value=" 确定 " class="button" onclick="validate('0')" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
        <input type="hidden" name="act" value="insert" />
      </form>
    </div>
</div>
<!-- end goods form -->
<script type="text/javascript" src="static/js/validator.js"></script><script type="text/javascript" src="static/js/tab.js"></script>
<div id="footer">
共执行 10 个查询，用时 0.029139 秒，Gzip 已禁用，内存占用 1.998 MB<br />
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