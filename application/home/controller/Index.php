<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Model;
use think\Request;
use app\home\model\Category;
header("content-type:text/html;charset=utf-8");
class Index extends Controller
{
    public function index()
    {
          // 查询商品类型
        $category=new Category();
        // var_dump($category);die;
        $category_data=Db::name('category')->select();
        // var_dump($category_data);die;
        $cate_list=$category->createTreeBySon($category_data);
        // var_dump($cate_list);die;
        
        $goods_data=Db::name('goods g')
                    ->join('category c','g.cat_id=c.cat_id')
                    ->select();
        $this->assign('goods_data',$goods_data);
        $this->assign('cat_data',$cate_list);
       
    	return $this->fetch();
    }
     public function Category()
    {
        $cat_id=input('get.cat_id');

        $condtion='';
        //判断cat_id是否为空，如果不为空if判断
        if(!empty($cat_id))
        {
            //查询所有分类
            $category=new Category();
            $cat_data=Db::name('category')->select();
            //在查到的分类下在进行递归查询
            $chile_data=$category->createTreeBySon($cat_data,$cat_id);
           // var_dump($chile_data);die;
            //定义一个空数组，将查询到的所有分类cat_id遍历，放到空数组内
            $tmp=array();
            $tmp[]=$cat_id;
            foreach($chile_data as $key=>$value){
                $tmp[]=$chile_data[$key]['cat_id'];
            }
            //将查询到的cat_id
            $tmp=implode(',',$tmp);
//            var_dump($tmp);die;
            $condtion="cat_id in ($tmp)";

        }
        //接受搜索的词
        // $keyword=I('get.keyword');
        // //如果进行搜索执行if判断
        // if(!empty($keyword)){
        //     $condtion="goods_name like '%$keyword%'";
        //     $isHave=M('hot')->where("hot_name = '$keyword'")->find();
        //     if(empty($isHave))
        //      {  //如果热搜没有词，加1
        //         $isset=array(
        //             'hot_name'=>$keyword,
        //             'hot_num'=>1
        //         );
        //         M('hot')->add($isset);
        //      }
        //     else
        //      {//如果热搜有词，在原有的1基础上加1，+=1
        //         $isHave['hot_num']+=1;
        //          M('hot')->save($isHave);
        //      }
        // }
        // 执行查询列表
        $goods_data=Db::name('goods')->where($condtion)->select();
        //查询热搜词汇
        // $hot_data=Db('hot')->order('hot_num desc')->select();
        //展示热搜
        // $this->assign('hot_data',$hot_data);
        //展示列表
        $this->assign('goods_data',$goods_data);
       return $this->fetch();
    }

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