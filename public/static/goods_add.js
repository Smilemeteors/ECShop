$(document).on('change','#select',function(){
    var parent_id = $(this).val();
    var obj = $(this);
    $.ajax({
    url:"admin/goods/goods_add_do",
    data:{parent_id:parent_id},
    dataType:"json",
    success:function(res){return}
	})
})
$(document).on('click','#addCategory',function(){
    var cat = document.forms['theForm'].elements['addedCategoryName'];
    if(cat.value.replace(/^\s+|\s+$/g, '') == '')
      {
          alert(category_cat_not_null);
          return;
      }
    var cat_none = $('.cat_none').val();
    var cat_text = $('.cat_text').val();
    var cat_id = $(this).brother('option').val();
    alert(cat_none)
    alert(cat_text)
    alert(cat_id)
  })
