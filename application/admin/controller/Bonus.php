<?php
namespace app\admin\controller;
use think\Model;
use think\Db;
use think\Request;
class Bonus extends \think\Controller
{
	public function bonus_list()
	{
		$data = Db::name('bonus')->paginate(5);
		$this->assign('data',$data);
		return view('bonus_list');
	}
	public function details()
	{
		$id = isset($_GET['id'])?$_GET['id']:'';
		$data = Db('bonus')->where('bonus_id',"$id")->find();
		// print_r($data);
		$this->assign('data',$data);
		 return view('details');	
	}
	public function delorder()
	{
		$id = isset($_GET['id'])?$_GET['id']:'';
		$res = Db('bonus')->where('bonus_id',"$id")->delete();
		if($res){
			$data = Db::name('bonus')->paginate(5);
			$this->assign('data',$data);
			$this->success("删除成功",'bonus_list');	
		}else{
			$data = Db::name('bonus')->paginate(5);
			$this->assign('data',$data);
			return view('bonus_list');
		}
	}
	public function bonus_add()
    {
        // 如果post接收数据添加，如果get返回添加页面
        if (request()->isPost()) {
            $arr = Request::instance()->post();         
            $res = Db('bonus')->insert($arr);
            // print_r($res);die;
            if ($res) {
                $this->success('添加成功','Bonus/bonus_list');
            } else {
                $this->error('添加失败','Bonus/bonus_list');
            }
        } else {
            return view('bonus_add');
        }	
    }
     public function bonus_change_name()
    {
        //接id
        $id = input('get.id');
        $bonus_name = input('get.bonus_name');
        $res = Db('bonus')->where('bonus_id',$id)->update(['bonus_name'=>$bonus_name]);
        if ($res) {
            $arr['status']=0;
            $arr['message']='成功';
        } else {
            $arr['status']=1;
            $arr['message']='失败';
        }   
        echo json_encode($arr);    
    }
}