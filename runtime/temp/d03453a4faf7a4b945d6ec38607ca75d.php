<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\indexs\show.html";i:1536717259;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
所属学院
<select name="" id="cc">
    <option value="">请选择</option>
    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <option value="<?php echo $v['c_id']; ?>"><?php echo $v['xx']; ?></option>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</select>
课程名称
<input type="text" id="sel">
<button class="sel">搜索</button>
<table border="1">
    <thead>
    <tr>
        <td>请选择</td>
        <td>编号</td>
        <td>封面</td>
        <td>课程名称</td>
        <td>所属学院</td>
        <td>专业负责人</td>
        <td>时间</td>
        <td>操作</td>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr id="<?php echo $v['id']; ?>">
        <td><input type="checkbox" name="box" value="<?php echo $v['id']; ?>"></td>
        <td><?php echo $v['id']; ?></td>
        <td><img src="" style="width: 100px;height: 70px;"></td>
        <td><?php echo $v['name']; ?></td>
        <td><?php echo $v['xx']; ?></td>
        <td><?php echo $v['man']; ?></td>
        <td><?php echo $v['time']; ?></td>
        <td><a href="javascript:void(0)" class="del">删除</a></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<input type="hidden" value="1" id="page">
  <span id="page-link">
    <a href="javascript:;">第一页</a>
    <a href="javascript:;" class="p">上一页</a>
    <a href="javascript:;" class="p">下一页</a>
    <a href="javascript:listTable.gotoPageLast()">最末页</a>
    <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
      <option value='1'>1</option>    </select>
  </span>
<button class="p">上一页</button>
<button class="p">下一页</button>
<button class="dels">批删</button>
<button class="box1">全选</button>
<button class="box2">取消</button>
<button class="box3">反选</button>
</body>
</html>
 
 
 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    //全选
    $('.box1').click(function(){
        $("[name=box]:checkbox").prop("checked",true);
    });
    //取消
    $('.box2').click(function(){
        $("[name=box]:checkbox").prop("checked",false);
    });
    //反选
    $('.box3').click(function(){
        $("[name=box]:checkbox").each(function(){
            $(this).prop("checked",!$(this).prop("checked"));
        });
    });
    //分页
    $('.p').click(function(){
        var txt =$(this).text();
         //搜索的值
        var sel =$("#sel").val();
         //搜索下拉框里的值
        var cc =$("#cc").val();
        var page =$("#page").val();
        if(txt=='上一页')
        {
            page = parseInt(page)-1;
        }
        else
        {
            page = parseInt(page)+1;
        }
        $.ajax({
            type: "GET",
            url: "<?php echo url('indexs/fenye'); ?>",
            data: {
                     page:page,
                     sel:sel,
                     cc:cc
            },
            success: function(msg){
                if(msg==false)
                {
                    return false;
                }
                var json = jQuery.parseJSON(msg);
                $('tbody').html('');
                $("#page").val(page);
                $(json).each(function(key,val){
                    var str='<tr id='+val.id+'>';
                    str+='<td><input type="checkbox" name="box" value="'+val.id+'" ></td>';
                    str+='<td>'+val.id+'</td>';
                    str+="<td><img src='' style='width: 100px;height: 70px;'></td>";
                    str+='<td>'+val.name+'</td>';
                    str+='<td>'+val.xx+'</td>';
                    str+='<td>'+val.man+'</td>';
                    str+='<td>'+val.time+'</td>';
                    str+="<td><a href='javascript:void(0)' class='del'>删除</a></td>";
                    str+='</tr>';
                    $('tbody').append(str);
                });
            }
        });
    });
    //搜索
    $('.sel').click(function(){
        var sel =$("#sel").val();
        var cc =$("#cc").val();
        var page =$("#page").val();
        page=1;
        $.ajax({
            type: "GET",
            url: "<?php echo url('indexs/fenye'); ?>",
            data: {
                page:page,
                sel:sel,
                cc:cc
            },
            success: function(msg){
                if(msg=='')
                {
                    alert('没由搜索到您想要的数据');
                }
                if(msg==false)
                {
                    return false;
                }
                var json = jQuery.parseJSON(msg);
                $('tbody').html('');
                $(json).each(function(key,val){
                    var str='<tr id='+val.id+'>';
                    str+='<td><input type="checkbox" name="box" value="'+val.id+'"></td>';
                    str+='<td>'+val.id+'</td>';
                    str+="<td><img src='' style='width: 100px;height: 70px;'></td>";
                    str+='<td>'+val.name+'</td>';
                    str+='<td>'+val.xx+'</td>';
                    str+='<td>'+val.man+'</td>';
                    str+='<td>'+val.time+'</td>';
                    str+="<td><a href='javascript:void(0)' class='del'>删除</a></td>";
                    str+='</tr>';
                    $('tbody').append(str);
                });
            }
        });
    });
    //批删
    $('.dels').click(function(){
        var sel =$("#sel").val();
        var cc =$("#cc").val();
        var page =$("#page").val();
        var str='';
        $(":checkbox").each(function(){
            if($(this).prop("checked"))
            {
                str+=','+$(this).val();
            }
 
        });
        var ids = str.substr(1);
        $.ajax({
            type: "GET",
            url: "<?php echo url('indexs/dels'); ?>",
            data: {
                page:page,
                sel:sel,
                cc:cc,
                ids:ids
            },
            success: function(msg){
                if(msg==false)
                {
                    return false;
                }
                var json = jQuery.parseJSON(msg);
                $('tbody').html('');
                $("#page").val(page);
                $(json).each(function(key,val){
                    var str='<tr id='+val.id+'>';
                    str+='<td><input type="checkbox" name="box" value="'+val.id+'" ></td>';
                    str+='<td>'+val.id+'</td>';
                    str+="<td><img src='' style='width: 100px;height: 70px;'></td>";
                    str+='<td>'+val.name+'</td>';
                    str+='<td>'+val.xx+'</td>';
                    str+='<td>'+val.man+'</td>';
                    str+='<td>'+val.time+'</td>';
                    str+="<td><a href='javascript:void(0)' class='del'>删除</a></td>";
                    str+='</tr>';
                    $('tbody').append(str);
                });
            }
        });
    });
    //单删
    $(document).on('click','.del',function(){
        var sel =$("#sel").val();
        var cc =$("#cc").val();
        var page =$("#page").val();
        var ids = $(this).parents('tr').attr('id');
        $.ajax({
            type: "GET",
            url: "<?php echo url('indexs/dels'); ?>",
            data: {
                page:page,
                sel:sel,
                cc:cc,
                ids:ids
            },
            success: function(msg){
                if(msg==false)
                {
                    return false;
                }
                var json = jQuery.parseJSON(msg);
                $('tbody').html('');
                $("#page").val(page);
                $(json).each(function(key,val){
                    var str='<tr id='+val.id+'>';
                    str+='<td><input type="checkbox" name="box" value="'+val.id+'" ></td>';
                    str+='<td>'+val.id+'</td>';
                    str+="<td><img src='' style='width: 100px;height: 70px;'></td>";
                    str+='<td>'+val.name+'</td>';
                    str+='<td>'+val.xx+'</td>';
                    str+='<td>'+val.man+'</td>';
                    str+='<td>'+val.time+'</td>';
                    str+="<td><a href='javascript:void(0)' class='del'>删除</a></td>";
                    str+='</tr>';
                    $('tbody').append(str);
                });
            }
        });
    });
</script>
