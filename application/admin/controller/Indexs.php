<?php
namespace app\admin\controller;
use think\Model;
use app\admin\model\Collage;
use app\admin\model\Username;
use app\admin\model\Major;
use think\Controller;
use think\Request;
 
class Indexs extends Controller
{
    //展示
    public function show()
    {
        $user = new Collage();
        $school = new Major();
        $limit=4;
        $start=0;
        $data=$user->sel();
        $res = $school->sel($start,$limit);
        return view('show',['arr'=>$res,'data'=>$data]);
    }
 
    //分页
    public function fenye($page='')
    {
        $user = new Collage();
        $coll = new Major();
        if($page=='')
        {
            $page=$_GET['page'];
        }
        $sel=$_GET['sel'];
        $cc=$_GET['cc'];
        $count = $coll->page_count($sel,$cc);
        $limit=4;
        $numpage=ceil($count/$limit);
        $start=($page-1)*$limit;
        if($page<1)
        {
            echo 1;
            return false;
        }
       if($page>$numpage)
        {
            echo 1;
            return false;
        }
        $user->sel();
        $res = $coll->sel($start,$limit,$sel,$cc);
        return json_encode($res);
    }
 
   //批删
    public function dels()
    {
        $coll = new Major();
        //接值
        $page=$_GET['page'];
        $ids=$_GET['ids'];
        //删除
        $coll->del($ids);
        //返回
        return $this->fenye($page);
    }
 
}
