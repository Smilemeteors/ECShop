<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Model;
use think\Paginator;
use think\Request;
class Goods extends Controller
{
    //model调用
    public $goods;
    public function _initialize(){
        $this->goods = model('Goods');
    }
    //商品列表
    public function goods_list()
    {
        $res = $this->goods->goods_Show();
        return view('goods_list',['res'=>$res]);
    }
    //商品列表的回收站
    public function trash_do()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_delete"=>'0']);
        }else{
            $res = 0;
        }
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }
    //分类状态修改
    public function cat_change_parent()
    {
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("cat")->where("cat_id",$cat_id)->update(["parent_id"=>'0']);
        }else{
            $res = Db("cat")->where("cat_id",$cat_id)->update(["parent_id"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }
    public function cat_change_show()
    {
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("cat")->where("cat_id",$cat_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("cat")->where("cat_id",$cat_id)->update(["is_show"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }
    //品牌状态修改
    public function brand_change_status()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_put"=>'0']);
        }else{
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_put"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }

    //商品列表及点击该
    public function goods_change_put()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_put"=>'0']);
        }else{
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_put"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }

    public function goods_change_new()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_new"=>'0']);
        }else{
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_new"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }

    public function goods_change_best()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_best"=>'0']);
        }else{
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_best"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }

    public function goods_change_hot()
    {
        $goods_id = input('get.goods_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_hot"=>'0']);
        }else{
            $res = Db("goods")->where("goods_id",$goods_id)->update(["is_hot"=>'1']);
        }
        
        if($res){
            $arr['status'] = 0;
            $arr['data'] = '';
            $arr['msg'] = '成功';
        }else{
            $arr['status'] = 1;
            $arr['data'] = '';
            $arr['msg'] = '失败';
        }
        echo json_encode($arr);
    }
    //
    //
    //
    // 以上 及点击该
    // 
    // 
    // 
    // 
    public function goods_add()
    {
        return view('goods_add');
    }
    
    //品牌部分
    public function brand_list(){
        $res = $this->goods->brand_show();
        return view('brand_list',['res'=>$res]);
    }
    //品牌修改
    public function brand_upd(){
        $id = Request::instance()->get('id');
        $arr = Db::table('brand')->where('brand_id',$id)->select();
        return view('brand_upd',['arr'=>$arr]);
    }
    public function brand_upd_do(){
        $data = Request::instance()->post();
        $arr = Db::table('brand')->where('brand_id', $data['brand_id'])->update($data);
        if($arr){
            $this->success('修改成功','goods/brand_list');
        }else{
            $this->error('修改失败','goods/brand_upd');
        }
    }
    //品牌删除
    public function brand_del(){
        $id = Request::instance()->get('id');
        $arr = Db::table('brand')->where('brand_id',$id)->delete();
        if($arr){
            $this->success('删除成功','goods/brand_list');
        }else{
            $this->error('删除失败','goods/brand_list');
        }
    }

    //品牌添加
    public function brand_add(){
        return view('brand_add');
    }

    public function brand_add_do(){
        $request = Request::instance()->post();
        $request['brand_logo']=$this->brand_upload();
        $res=$this->goods->inserts($request);
        if($res) {
            echo "<script>alert('上传成功');location.href='brand_list'</script>";
        }else{
            echo "<script>alert('上传失败');location.href='brand_add'</script>";
        }
    }
    //文件上传
    public function brand_upload(){
       // 获取表单上传文件 例如上传了001.jpg
       $file = request()->file('brand_logo');
       // 移动到框架应用根目录/public/uploads/ 目录下
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       if($info){
        // 成功上传后 获取上传信息
        // 输出 jpg
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
         return $info->getSaveName();
        // 输出 42a79759f284b767dfcb2a0197904287.jpg
        }else{
        // 上传失败获取错误信息
           return $file->getError();
        }
    }

         //类型
    public function goods_type_manage()
    {
        $arr = Db::table('goods_type')->select();
        return view('goods_type_manage',['arr'=>$arr]);
    }

    public function goods_type_add()
    {
        return view('goods_type_add');
    }
    //类型表的添加
    public function goods_type_add_do(){
        $data = Request::instance()->post();
        $arr = Db::name('goods_type')->insert($data);
        if($arr){
            $this->success('添加成功','goods/goods_type_manage');
        }else{
            $this->error('添加失败','goods/goods_type_add');
        }
    }
    //类型表的修改
    public function goods_type_upd()
    {
        $id = Request::instance()->get('id');
        $arr = Db::table('goods_type')->where('cat_id',$id)->select();
        return view('goods_type_upd',['arr'=>$arr]);
    }
    //类型表的修改
    public function goods_type_upd_do(){
        $data = Request::instance()->post();
        $arr = Db::table('goods_type')->where('cat_id', $data['cat_id'])->update($data);
        if($arr){
            $this->success('修改成功','goods/goods_type_manage');
        }else{
            $this->error('修改失败','goods/goods_type_upd');
        }
    }
    public function goods_type_del()
    {
        $id = Request::instance()->get('id');
//        print_r($id);die;
        $arr = Db::table('goods_type')->where('cat_id',$id)->delete();
        if($arr){
            $this->success('删除成功','goods/goods_type_manage');
        }else{
            $this->error('删除失败','goods/goods_type_manage');
        }
    }
    //商品的回收站
    public function goods_trash()
    {
        $arr = Db::table('goods')->where('is_delete',0)->select();
        return view('goods_trash',['arr'=>$arr]);
    }

    //分类
    //
    //分类添加
    //
    public function category_add()
    {
        return view('category_add');
    }
    public function cat_add_do()
    {
        $data = Request::instance()->post();
        $arr = Db::name('cat')->insert($data);
        if($arr){
            $this->success('添加成功','goods/category_list');
        }else{
            $this->error('添加失败','goods/cat_add_do');
        }
    }
    //分类展示
     public function category_list()
     {
        $arr =$this->goods->shows();
        return $this->fetch('category_list',['arr' => $arr]);
    }
    //分类删除
    //
    public function category_del(){
        $cat_id=$_GET['id'];
        $res =$this->goods->del($cat_id);
        if($res){
            echo "<script>alert('删除成功');location.href='category_list'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='category_list'</script>";
        }
    }





    //评论部分
    //评论添加
    public function comment_manage_add()
    {
        return view('comment_manage_add');
    }
    //评论展示
    public function comment_manage_list()
    {
        $res = $this->goods->comment_show();
        return view('comment_manage_list',['res'=>$res]);
    }
    //属性展示
    public function attribute_list()
    {
        $res = Db::table('goods_type')->select();
        $arr = Db::table('attribute')->select();
        return view('attribute_list',['arr'=>$arr,'res'=>$res]);
    }
    public function attribute_add(){
        return view('attribute_add');
    }
    public function attribute_add_do(){
        $data = Request::instance()->post();
        $arr = Db::table('attribute')->insert($data);
        if($arr){
            $this->success('添加成功','goods/attribute_list');
        }else{
            $this->error('添加失败','goods/attribute_add');
        }
    }
    public function attribute_upd()
    {
        $id = Request::instance()->get('id');
        $arr = Db::table('attribute')->where('attr_id',$id)->select();
        return view('attribute_upd',['arr'=>$arr]);
    }
    //属性的修改
    public function attribute_upd_do(){
        $data = Request::instance()->post();
        $arr = Db::table('attribute')->where('attr_id', $data['attr_id'])->update($data);
        if($arr){
            $this->success('修改成功','goods/attribute_list');
        }else{
            $this->error('修改失败','goods/attribute_upd');
        }
    }
    public function attribute_del()
    {
        $id = Request::instance()->get('id');
//        print_r($id);die;
        $arr = Db::table('attribute')->where('attr_id',$id)->delete();
        if($arr){
            $this->success('删除成功','goods/attribute_list');
        }else{
            $this->error('删除失败','goods/attribute_list');
        }
    }
}