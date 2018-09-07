<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Model;
use think\Paginator;
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
    //商品列表及点击该
    public function goods_change_put()
    {
        $goods_id = input('get.goods_id');
        $enabled = input('get.enabled');

        if($enabled==1){

            $res = Db("goods")->where("goods_id",$goods_id)->update(["enabled"=>'0']);
        }else{

            $res = Db("goods")->where("goods_id",$goods_id)->update(["enabled"=>'1']);
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

    public function goods_add()
    {
        return view('goods_add');
    }
    public function comment_manage_add()
    {
        return view('comment_manage_add');
    }
    public function comment_manage_list()
    {
        return view('comment_manage_list');
    }
    public function goods_trash()
    {
        return view('goods_trash');
    }
    
    public function category_list()
    {
        return view('category_list');
    }
    public function brand_list(){
        $res = $this->goods->brand_show();
        return view('brand_list',['res'=>$res]);
    }
    public function brand_add(){
        return view('brand_add');
    }
    public function brand_add_do(){
        echo "brand_add_do";
    }
     //类型
    public function goods_type_manage()
    {
        $arr = Db::table('goods_type')->select();
        return view('goods_type_manage',['arr'=>$arr]);
    }

//    public function good_type_add()
//    {
//        $data = [
//            ['foo' => 'bar', 'bar' => 'foo'],
//            ['foo' => 'bar1', 'bar' => 'foo1'],
//            ['foo' => 'bar2', 'bar' => 'foo2']
//        ];
//        $about = Db::name('goods_type')->insertAll($data);
//    }
//    public function good_type_upd()
//    {
//        $about = Db::table('goods_type')->where('id', 1)->update(['name' => 'thinkphp']);
//    }
//    public function good_type_del(){}

}
