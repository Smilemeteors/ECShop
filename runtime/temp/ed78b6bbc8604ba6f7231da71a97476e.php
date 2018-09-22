<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\bonus\bonus_list.html";i:1537449777;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 红包类型 </title><base href="/" />
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/general.css" rel="stylesheet" type="text/css" />
<link href="static/css/main.css" rel="stylesheet" type="text/css" />
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
      <a class="btn btn-right" href="admin/Bonus/bonus_add">添加红包类型</a>
  
    <span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1">&nbsp;&nbsp;>&nbsp;&nbsp;红包类型 </span>
  <div style="clear:both"></div>
</h1><!-- <script type="text/javascript" src="static/js/utils_2.js"></script><script type="text/javascript" src="static/js/listtable_2.js"></script> --><!-- start bonus_type list -->
</h1><!-- start bonus_type list -->
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th><a href="javascript:listTable.sort('type_name'); ">类型名称</a></th>
      <th><a href="javascript:listTable.sort('send_type'); ">发放类型</a></th>
      <th><a href="javascript:listTable.sort('type_money'); ">红包金额</a></th>
      <th><a href="javascript:listTable.sort('min_amount'); ">订单下限</a></th>
      <th>发放数量</th>
      <th>使用数量</th>
      <th>操作</th>
    </tr>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <tr>
    <td class="first-cell" id="<?php echo $user['bonus_id']; ?>">
    <span class="bonus_name"><?php echo $user['bonus_name']; ?></span>
    </td>
    <td class="first-cell"><span><?php echo $user['bonus_type']; ?></span></td>
    <td><span>¥<?php echo $user['bonus_money']; ?>元</span></td>
    <td align="right"><span><?php echo $user['order_limit']; ?></span></td>
    <td align="right"><span><?php echo $user['quantity']; ?></span></td>
    <td><?php echo $user['use_num']; ?></td>
    <td><a href="admin/Bonus/details?id=<?php echo $user['bonus_id']; ?>">查看</a><br />
        <a href="admin/Bonus/delorder?id=<?php echo $user['bonus_id']; ?>">移除</a>
    </td>
    </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>


<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td style="text-align: left;">
      <div>
        
        <input name="batch" type="hidden" value="1" />
        <input name="order_id" type="hidden" value="" />
      </div>
    </td>
    <td align="right" nowrap="true">
    <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<div id="turn-page">
    <?php echo $data->render(); ?>
</div>
    </td>
  </tr>
</table>


</div>
</form>
<!-- end bonus_type list -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).on('click','.bonus_name',function(){
    var bonus_name = $(this).text();
    var obj = $(this);
    var input = $("<input type='text' class='newname' value='"+bonus_name+"' />");
    obj.html(input);
    input.click(function(){return false;});
    input.trigger('oucs');
  })
  $(document).on('blur','.bonus_name',function(){
    var bonus_name = $('.newname').val();
    var id = $(this).parent('td').attr('id');
    var obj = $(this);
    $.ajax({
      url:"<?php echo url('Bonus/bonus_change_name'); ?>",
      type:'GET',
      data:{bonus_name:bonus_name,id:id},
      dataType:"json",
      success:function(res){
        // console.log(res);
        if (res.status==0) {  
          var input = $("<span class='bonus_name' >"+bonus_name+"</span>");
          obj.html(input); 
        } else {
          alert(res.message);
        }
      }
    })
  })
</script>
<div id="footer">
共执行 6 个查询，用时 0.006193 秒，Gzip 已禁用，内存占用 1.175 MB<br />
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