<?php
namespace app\home\controller;
use think\Controller;
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
        // $xhan=Db::name('classify')->where('parent_id=0')->select();
        // $xhan1=$category->createTreeBySon($xhan);
        // var_dump($category_data);die;
        $cate_list=$category->createTreeBySon($category_data);
        // var_dump($cate_list);die;
        
        $goods_data=Db::name('goods g')
                    ->join('classify c','g.cat_id=c.cat_id')
                    ->select();
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
        $this->assign('goods_data',$goods_data);
        $this->assign('cat_data',$cate_list);
        // $this->assign('xhan',$xhan1);

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
            $cat_data=Db::name('classify')->select();
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
        
        // 执行查询列表
        $goods_data=Db::name('goods')->where($condtion)->select();
        //展示列表
        $this->assign('goods_data',$goods_data);
       return $this->fetch();
    }

    public function fenlei()
    {
        $cat_id=input('get.cat_id');

        $condtion='';
        //判断cat_id是否为空，如果不为空if判断
        if(!empty($cat_id))
        {
            //查询所有分类
            $category=new Category();
            $cat_data=Db::name('classify')->select();
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
        // 接受搜索的词
        $keyword=input('get.keyword');
        // var_dump($keyword);die;
        //如果进行搜索执行if判断
        if(!empty($keyword)){
            $condtion="goods_name like '%$keyword%'";
            // $isHave=M('hot')->where("hot_name = '$keyword'")->find();
            $isHave=Db::name('hot')->where("hot_name = '$keyword'")->find();
            if(empty($isHave))
             {  //如果热搜没有词，加1
                $isset=array(
                    'hot_name'=>$keyword,
                    'hot_num'=>1
                );
                // M('hot')->add($isset);
                Db::name('hot')->insert($isset);
             }
            else
             {//如果热搜有词，在原有的1基础上加1，+=1
                $isHave['hot_num']+=1;
                 // M('hot')->save($isHave);
                Db::name('hot')->setField($isHave);
             }
        }
    
        //查询热搜词汇
        $hot_data=Db('hot')->order('hot_num desc')->select();
        // var_dump($hot_data);die;
// 导航栏
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
// 分类名字
        $cat_name=Db::query("select * from classify where cat_id='$cat_id'");
 // 执行查询列表
        $goods_data=Db::name('goods')->where($condtion)->select();
        $count=count($goods_data);

        //展示热搜
        $this->assign('hot_data',$hot_data);
        //展示列表
        $this->assign('cat_name',$cat_name);
        $this->assign('nav',$nav);
        $this->assign('count',$count);
        $this->assign('goods_data',$goods_data);
        return $this->fetch();
    }
    public function paixue()
    {
        $cat_id=input('get.cat_id');
        $goods_data=Db::query("select * from goods inner join category on goods.cat_id=category.cat_id where goods.cat_id='$cat_id' order by shop_price desc");
        $count=count($goods_data);
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();

        $cat_name=Db::query("select cat_name from classify where cat_id='$cat_id'");
        // var_dump($goods_data);die;
        $this->assign('cat_name',$cat_name);
        $this->assign('nav',$nav);
        $this->assign('count',$count);
        $this->assign('goods_data',$goods_data);
        return $this->fetch('index/fenlei');

    }

    public function details()
    {   
        $goods_id=input('get.goods_id');
        if(empty($goods_id))
        {
            die('访问错误');
        }

        $goods_data=Db::name('goods g')
                   ->join('brand b','g.brand_id=b.brand_id')
                   ->where(['goods_id'=>$goods_id])
                   ->select();
            // var_dump($goods_data);die;
       
        $cat_name=Db::name('goods g')
                  ->join('classify c','g.cat_id=c.cat_id')
                  ->where(['goods_id'=>$goods_id])
                  ->select();
        // var_dump($cat_name);die;
        // $cat_id=input('get.cat_id');
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
        //商品属性
        // $attr=Db::name('goods g')
        //     ->join('goods_attr ga','g.goods_id=ga.goods_id')
        //     ->join('attribute a','ga.attr_id=a.attr_id')
        //     ->where('g.goods_id','=',$goods_id) 
        //     ->select();
        $attr=Db::query("SELECT * FROM `goods_attr` INNER JOIN goods ON goods_attr.goods_id=goods.goods_id INNER JOIN attribute ON goods_attr.attr_id=attribute.attr_id INNER JOIN goods_type ON attribute.cat_id=goods_type.cat_id where goods.goods_id='$goods_id'");
            // var_dump($attr);die;
        $comment=Db::query("SELECT * from goods_attr inner join goods on goods_attr.goods_id=goods.goods_id where goods.goods_id='$goods_id'");
        // var_dump($comment);die;
        $this->assign('comment',$comment);
        $this->assign('attr',$attr);
        $this->assign('cat_name',$cat_name);
        $this->assign('goods_data',$goods_data);
        $this->assign('nav',$nav);
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