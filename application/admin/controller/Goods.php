<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Model;
use think\Paginator;
use think\Request;
use think\File;
class Goods extends Controller
{
    public function user()
    {
        $res2=Db::name('user')->select();
        return view('comment_mange_details',['res2'=>$res2]);
    }
    //model调用
    public $goods;
    public function _initialize(){
        $this->goods = model('Goods');
    }
    //商品添加
    //
    //
    public function goods_add()
    {
        $goods_type=$this->goods->goods_type();
        $brand = $this->goods->getBrandList();
        $cate = $this->goods->getPathList("cat_id");
        $goods_type=Db::name('goods_type')->select();
        // print_r($goods_type);die;
        $this->assign('goods_type',$goods_type);  
        return view('goods_add',['cate'=>$cate,'brand'=>$brand,'goods_type'=>$goods_type]);
    }

    public function goods_add_do()
    {
        $data=input('post.');
        // echo "<pre/>";
        // var_dump($data);die;
        if(empty($data['goods_sn']))
        {
            $data['goods_sn']=$this->createSn();
        }
        if(empty($data['cat_id']))
        {
             // $this->success('商品分类必须填写');die;
             $this->error('商品分类必须填写','goods/goods_add');
        }
        if(empty($data['brand_id']))
        {
            // $this->success('商品品牌必须填写');die;
             $this->error('商品品牌必须填写','goods/goods_add');
        }
        if(empty($data['suppliers_id']))
        {
             $this->error('供货商必须填写','goods/goods_add');
        }
        $file=request()->file('goods_img');
        // print_r($file);die;
        if(empty($file))
        {
             $this->error('图片必须选择','goods/goods_add');
        }

        $info=$file->move(ROOT_PATH.'public'.DS.'uploads');
     
        $filename=$info->getSaveName();
        $data['goods_img']=$filename;
        $result=Db('goods')->insert($data);
        if($result)
        {
            $this->success('添加商品成功','goods/goods_list');
        }
        else
        {
            $this->error('添加商品失败','goods/goods_add');
        }
      
    }

    //随机生成货号
     public function createSn()
    {
        return 'Art.No'.time().rand(1000,9999);
    }

    //商品列表
    // public function goods_list()
    // {   
    //     //分类
    //     $arr =$this->goods->shows();
    //     //属性
    //     $cate=$this->goods->getPathList("cat_id");
    //     //类型
    //     $pages = 5;
    //     $keyword = input('post.keyword');
    //     $res = $this->goods->goods_Show($keyword,$pages);
    //     return view('goods_list',['res'=>$res,'key'=>$keyword]);
    // }
        // 商品列表页面
    public function goods_list()
    {

        $where=[];
       
         $cat_id=input('get.classify');
        if(!empty($cat_id))
                
        {
            $where['g.cat_id']=$cat_id;
        }

        $brand_id=input('get.brand');
        if(!empty($brand_id))
        {
            $where['g.brand_id']=$brand_id;
        }

        $provider_id=input('get.provider');
        if(!empty($provider_id))
        {
            $where['g.provider_id']=$provider_id;
        }

        $con=input('get.con');
        if(!empty($con))
        {
            $where['g.goods_name']=array('like',"%$con%");
        }
//        var_dump($keyword);
        $page=input('get.page',1);
//        var_dump($page);
        $limit=5;
        $off=($page-1)*$limit;

        $top=$page-1<1?1:$page-1;

        $list=Db::name('goods')->select();
        $num=count($list);
        $last=ceil($num/$limit);
        $down=$page+1>$last?$last:$page+1;

        $arr=[ 'top'=>$top, 'down'=>$down, 'page'=>$page,'last'=>$last ,'num'=>$num,'limit'=>$limit];
        // 查询商品表
        $list = Db::name('goods')->where($where)
         ->alias('g')
         // ->join('category c','g.cat_id = c.cat_id')
         ->join('brand b','g.brand_id = b.brand_id')
         // ->join('provider p','g.provider_id=p.provider_id')
         ->limit($off,$limit)->select();

       //  查询品牌
        $brand_list=Db::name('brand')->select();
        // 查询商品类型
        $category_data=Db::name('category')->select();
        $cate_list=$this->goods->createTree($category_data);
        // 查询供货商的信息
         $provider =Db::table('provider')
            ->alias('g')
            ->join('provider p','g.provider_id = p.provider_id','LEFT')
            ->select(); 
        
        $arr=['arr'=>$arr,'list'=>$list];
       // var_dump($arr);die;
        $this->assign('count',count($list));
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            echo json_encode($arr);
        }else{

            $this->assign('provider',$provider);
            $this->assign('cate_list',$cate_list);
            $this->assign('brand_list',$brand_list);
            $this->assign('arr',$arr);
            $pages = 5;
            $keyword = input('post.keyword');
            $res = $this->goods->goods_Show($keyword,$pages);
            return view('goods_list',['res'=>$res,'key'=>$keyword]);
        }

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
        $brand_id = input('get.brand_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("brand")->where("brand_id",$brand_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("brand")->where("brand_id",$brand_id)->update(["is_show"=>'1']);
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
    // 以上 即点即改
    // 
    // 
    // 
    // 
    //品牌部分
    public function brand_list(){
        $pages = 5;
        $find = input('post.find');
        $res = $this->goods->brand_show($find,$pages);
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
        if($res){
            $this->success('上传成功','goods/brand_list');
        }else{
            $this->error('上传失败','goods/brand_add');
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
         //类型名称的及点击该
    public function brand_change_name()
    {
        $id = input('get.id');
        $brand_name = input('get.brand_name');
        $res = Db("brand")->where("brand_id",$id)->update(["brand_name"=>$brand_name]);
        if(empty($res)){
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
    public function brand_sort_order()
    {
        $id = input('get.id');
        $sort_order = input('get.sort_order');
        $res = Db("brand")->where("brand_id",$id)->update(["sort_order"=>$sort_order]);
        if(empty($res)){
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
    public function goods_type_manage()
    {
        $arr = Db::table('goods_type')->select();
        return view('goods_type_manage',['arr'=>$arr]);
    }
    public function type_change_name()
    {
        $id = input('get.id');
        $type_name = input('get.type_name');
        $res = Db("goods_type")->where("type_id",$id)->update(["type_name"=>$type_name]);
        if(empty($res)){
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
    public function type_change_status()
    {
        $type_id = input('get.type_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("goods_type")->where("type_id",$type_id)->update(["status"=>'0']);
        }else{
            $res = Db("goods_type")->where("type_id",$type_id)->update(["status"=>'1']);
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
        $arr = Db::table('goods_type')->where('type_id',$id)->select();
        return view('goods_type_upd',['arr'=>$arr]);
    }
    //类型表的修改
    public function goods_type_upd_do(){
        $data = Request::instance()->post();
        $arr = Db::table('goods_type')->where('type_id', $data['type_id'])->update($data);
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
        $arr = Db::table('goods_type')->where('type_id',$id)->delete();
        if($arr){
            $this->success('删除成功','goods/goods_type_manage');
        }else{
            $this->error('删除失败','goods/goods_type_manage');
        }
    }
    
    //分类
    //分类添加
    //
//    public function category_add()
//    {
//        return view('category_add');
//    }
    public function cat_add_do()
    {
        $data = Request::instance()->post();
        $arr = Db::name('cat')->insert($data);
        if ($arr) {
            $this->success('添加成功', 'goods/category_list');
        } else {
            $this->error('添加失败', 'goods/cat_add');
        }
    }
    //
    //分类添加
    //
    //添加商品分类
    public function category_add(){
            if(request()->isPost()){
                $data['cat_name'] = input('post.cat_name');
                $data['parent_id'] = input('post.parent_id');
                $data['is_show'] = input('post.is_show');
                $data['is_nav'] = input('post.is_nav');
                $data['cat_desc'] = input('post.cat_desc');
                $data['path'] = input('post.path');
                $data['sort'] = input('post.sort');
                $data['measure_unit'] = input('post.measure_unit');
                $re = $this->goods->addData($data);
                if($re){
                    $this->redirect('goods/category_list');
                }else{
                    $this->error('添加失败');
                }
            }else{
                $cate = $this->goods->getPathList("cat_id");
                return $this->fetch('category_add',['cate'=>$cate]);
            }
        }

        public function cate_del(){
            $cat_id=input("get.id");
            //查询是否有子集
            $res=Db("classify")->where('parent_id',$cat_id)->select();
            if (!empty($res)){
                $arr=[
                    'code' => 0,
                    'msg' => '有子集,无法删除'
                ];

            }else{
                $result=Db("classify")->where('cat_id',$cat_id)->delete();
                $arr=[
                    'code' => 0,
                    'msg' => '删除成功'
                ];
            }
            echo json_encode($arr);
        }
    //分类展示
    public function category_list(){
        $arr =$this->goods->shows();
//        var_dump($arr);die; 
        $cate=$this->goods->getPathList("cat_id");
        return $this->fetch('category_list',['arr' => $arr,'arr'=>$cate]);
    }
    //分类即点即改
    public function category_shows(){
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_nav"=>'0']);
        }else{
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_nav"=>'1']);
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
    public function category_lists(){
        $cat_id = input('get.cat_id');
        $status = input('get.status');
        //放入回收站后变为0
        if($status==1){
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("classify")->where("cat_id",$cat_id)->update(["is_show"=>'1']);
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
    //转移商品
    public function category_move(){
        $cat_id = input('get.id');
        $cate = $this->goods->getCatList($cat_id);
        $list = $this->goods->cat();
        return view('category_move',['cate'=>$cate,'list'=>$list]);
    }
    public function category_move_do(){
        $data = Request::instance()->post();
        $cat_id = input('post.cat_id');
        $this->success('功能维护中','goods/category_list');
        // $arr = Db::table('classify')->where('cat_id',$cat_id)->update($data);
        // if($arr){
        //     $this->success('修改成功','goods/category_list');
        // }else{
        //     $this->error('修改失败','goods/category_list');
        // }
    }
    //编辑商品分类
    public function category_edit(){
        $id=$_GET['id'];
        $arr = $this->goods->find($id);
        return $this->fetch('category_edit',['arr' => $arr]);
    }

    //商品分类删除
    public function category_del(){
        $cat_id=$_GET['id'];
//        var_dump($cat_id);die;
        $res=$this->goods->del($cat_id);
        if($res){
            echo "<script>alert('删除成功');location.href='category_list'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='category_list'</script>";
        }
    }


    // 评论部分
    public function comment_change_status()
    {
        $brand_id = input('get.brand_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("brand")->where("brand_id",$brand_id)->update(["is_show"=>'0']);
        }else{
            $res = Db("brand")->where("brand_id",$brand_id)->update(["is_show"=>'1']);
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
    //评论详情
    public function comment_manage_details()
    {
        $res2=Db::name('user')->select();
        $arr = Db::table('comment_manage')->select();
        return view('comment_manage_details',['arr'=>$arr,'arr2'=>$res2]);
    }
    //评论回复
    public function comment_manage_add(){
        $data = Request::instance()->post();
        $arr = Db::table('reply')->insert($data);
        if($arr){
            $this->success('回复成功','goods/comment_manage_list');
        }else{
            $this->error('回复失败','goods/comment_manage_details');
        }
    }
    //评论展示
    public function comment_manage_list()
    {
        $type_id = input('get.type_id');
        $arr = Db::table('comment_manage')->select();
        return view('comment_manage_list',['arr'=>$arr]);
    }

    //属性展示
    public function attribute_list()
    {
        $res = Db::table('goods_type')->select();
        $arrs = Db::table('attribute')->paginate(3);
        return view('attribute_list',['arr'=>$arrs,'res'=>$res]);
    }
    public function attribute_list_do()
    {
        $type_id = input('get.id');
        // print_r($type_id);die;name('comment')->paginate(5)
        $res = Db::table('goods_type')->select();
        $arr = Db::table('attribute')->where("type_id=$type_id")->paginate();
        return view('attribute_list',['arr'=>$arr,'res'=>$res]);
    }

    public function attribute_add(){
        $res = Db::table('goods_type')->select();
        return view('attribute_add',['res'=>$res]);
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
    //批删
    public function goods_pishan(){
        $goods_id = input('get.goods_id');
        $res = Db::table('goods')->where("goods_id in($goods_id)")->update(["is_delete" => '0']);
       if($res){
            $arr['msg'] = 1;
            $arr['data'] = "$goods_id";
        }else{
            $arr['msg'] = 0;
            $arr['data'] = "$goods_id";
        }
            echo json_encode($arr);
    }
    
    //货号修该
    public function goods_sn_upd(){
        $id=$_POST['id'];  
        $val=$_POST['val'];        
        $arr=DB::table('goods')->where('goods_id',$id)->update(['goods_sn' => $val]);  
         if($arr){  
               echo 1;  
         }  
    }

    //价格修改
    public function goods_price_upd(){
        $id=$_POST['id'];  
        $val=$_POST['val'];        
        $arr=DB::table('goods')->where('goods_id',$id)->update(['goods_price' => $val]);  
         if($arr){  
               echo 1;  
         }  
    }
    //排序修改
    // public function sort_order_upd(){
    //     $id=$_POST['id'];  
    //     $val=$_POST['val'];        
    //     $arr=DB::table('goods')->where('goods_id',$id)->update(['sort_order' => $val]);  
    //      if($arr){  
    //            echo 1;  
    //      }  
    // }

    //库存修改
    public function goods_number_upd(){
        $id=$_POST['id'];  
        $val=$_POST['val'];        
        $arr=DB::table('goods')->where('goods_id',$id)->update(['goods_number' => $val]);  
         if($arr){  
               echo 1;  
         }  
    }

      //商品的回收站
    public function goods_trash()
    {   
        $keyword = input('get.keyword');
        if(!empty($keyword)){
            $data = Db::name('goods')->where('is_delete=0')->where("goods_name like '%{$keyword}%'")->paginate(10,false,['query' => request()->param()]);
            $key = [];
            $key['keyword'] = $keyword;
            $this->assign('key',$key);
            $this->assign('arr',$data);
        }else{
        $data = Db::name('goods')->where('is_delete=0')->paginate(10);
        $key = [];
        $key['keyword'] = $keyword;
        $this->assign('key',$key);
        $this->assign('arr',$data);
        }
        return $this->fetch('goods_trash');
    }
     //回收站返回展示
    public function goods_trash_del(){
            $goods_id = input('get.goods_id');
            $status   = input('get.status');
            if($status==0){
                $res = Db::table('goods')->where("goods_id", $goods_id)->update(["is_delete" => '1']);
            }else{
                $res = 1;
            }
           if($res){
                 $arr['status'] = 0;
            }else{
                 $arr['status'] = 1;
            }
             echo json_encode($arr);
    }
    //回收站真实删除数据
    public function goods_trash_del_do(){
        $goods_id = input('get.goods_id');
        $res = Db::table('goods')->where('goods_id',$goods_id)->delete();
        if($res){
                 $arr['status'] = 0;
            }else{
                 $arr['status'] = 1;
            }
             echo json_encode($arr);
    }


}