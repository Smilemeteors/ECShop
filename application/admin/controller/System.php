<?php
/**
 * Created by PhpStorm.
 * User: he
 * Date: 2018/9/14
 * Time: 14:24
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Model;
use think\Paginator;
use think\Request;
class System extends Controller
{
    public function system()
    {
        return view('system');
    }
//    投诉列表
    public function accuse_list()
    {
        $arr = Db::table('accuse')->select();
        return view('accuse_list',['arr'=>$arr]);
    }
//    投诉详情
    public function accuse_details()
    {
        $arr = Db::table('accuse')->select();
        return view('accuse_details',['arr'=>$arr]);
    }
//    投诉回复
    public function accuse_attach(){
        $data = Request::instance()->post();
        $arr = Db::table('accuse')->insert($data);
        if($arr){
            $this->success('回复成功','system/accuse_list');
        }else{
            $this->error('回复失败','system/accuse_details');
        }
    }
//    投诉移除
    public function accuse_del()
    {
        $id = Request::instance()->get('id');
        $arr = Db::table('accuse')->where('accuse_id',$id)->delete();
        if($arr){
            $this->success('删除成功','system/accuse_list');
        }else{
            $this->error('删除失败','system/accuse_list');
        }
    }
}