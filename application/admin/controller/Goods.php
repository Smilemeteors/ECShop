<?php
namespace app\admin\controller;
use think\Controller;
use think\Model;
class Goods extends Controller
{
    public $goods;
    public function _initialize(){
        $this->goods = model('Goods');
    }
    //商品列表
    public function goods_list()
    {
        // $res = $this->goods->getShow()
        // return view('goods_list',['res'=>$res]);
        return view('goods_list');
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
    public function goods_type_manage()
    {
        return view('goods_type_manage');
    }
    public function category_list()
    {
        return view('category_list');
    }
    public function brand_list()
    {
        return view('brand_list');
    }
}
