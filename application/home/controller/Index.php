<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
use app\home\model\Category;
header("content-type:text/html;charset=utf-8");
class Index extends Controller
{
    public function index()
    {
          // 查询商品类型
        $category=new Category();
        // var_dump($category);die;
        $category_data=Db::name('classify')->select();
        // $xhan=Db::name('category')->where('parent_id=0')->select();
        // $xhan1=$category->createTreeBySon($xhan);
        // var_dump($category_data);die;
        $cate_list=$category->createTreeBySon($category_data);
        // var_dump($cate_list);die;
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
        $this->assign('cat_data',$cate_list);
        // $this->assign('xhan',$xhan1);

        return $this->fetch();
    }

     public function Category()
    {
         $id = Request::instance()->get('id');
         $arr = Db::table('goods')->where('goods_type',$id)->select();
         return $this->fetch('category',['arr'=>$arr]);
    }
////    移动电源的方法
//    public function Category2()
//    {
//        return $this->fetch();
//    }
////    数码时尚 的方法
//    public function Category3()
//    {
//        return $this->fetch();
//    }
////    家用电器的方法
//    public function Category4()
//    {
//        return $this->fetch();
//    }

    public function details()
    {
    	return $this->fetch();
    }

    public function fenlei()
    {
        return $this->fetch();
    }
    public function flow()
    {
    	return $this->fetch();
    }
    public function user()
    {
        return $this->fetch();
    }
    public function register()
    {
        return $this->fetch();
    }
}