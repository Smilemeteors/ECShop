<?php
namespace app\admin\controller;

use think\Controller;
class Quanxi extends Controller
{
	public function admin_logs()
	{
		return view('admin_logs');
	}
	public function agency()
	{
		return view('agency');
	}
	public function agency_add()
	{
		return view('agency_add');
	}
	public function privilege()
	{
		
		$data =Db('admin')->select();
		// var_dump($data);die;
		$this->assign('list', $data);
		return $this->fetch('privilege');
	}
	public function privilege_add()
	{
		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 
			$data = [		//接受传递的参数
				'admin_name' => input('user_name'),
				'admin_email' => input('email'),
				'admin_pwd' => md5(input('password')),
				'date_time'=> date("Y-m-d H:i:s",time()),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('admin') -> insert($data)){		//添加数据
				return $this->success('添加成功',"admin/Quanxi/privilege");	//成功后跳转  lst 界面
			}else{
				return $this->error('添加管理员失败');
			}
			return;
		
		}

		return view('privilege_add');
	}
	public function role()
	{
		return view('role');
	}
	public function role_add()
	{
		return view('role_add');
	}
	public function suppliers()
	{
		return view('suppliers');
	}
}