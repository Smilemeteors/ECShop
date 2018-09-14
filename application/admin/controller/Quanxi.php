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
		$data = Db('agency')->paginate(2);
		$page = $data->render();
		$this->assign('list',$data);
		$this->assign('page',$page);
		return view('agency');
	}
	public function agency_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('agency')->where('agency_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Quanxi/agency");
        }
        else{
        	return $this->error('删除失败',"admin/Quanxi/agency");
        }
	}
	public function agency_edit()
	{
		$id = input('id');
		// echo $id;exit;
		$data = Db('agency')->where('agency_id='.$id)->select();
		$this->assign('list', $data);		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 
			$data = [		//接受传递的参数
				'agency_name' => input('agency_name'),
				'agency_desc' => input('agency_desc'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('agency')->where('agency_id='.$id)->update($data)){		//添加数据
				return $this->success('修改办事处成功',"admin/Quanxi/agency");	//成功后跳转  lst 界面
			}else{
				return $this->error('修改办事处失败');
			}
			return;
		
		}
		return view('agency_edit');
	}
	public function agency_add()
	{
		if(request()->isPost()){ 
			$data = [		//接受传递的参数
				'agency_name' => input('agency_name'),
				'agency_desc' => input('agency_desc'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('agency') -> insert($data)){		//添加数据
				return $this->success('添加办事处成功',"admin/Quanxi/agency");	//成功后跳转  lst 界面
			}else{
				return $this->error('添加办事处失败');
			}
			return;
		
		}
		return view('agency_add');
	}
	public function privilege()
	{
		
		$data =Db('admin')->select();
		// var_dump($data);die;
		$this->assign('list', $data);
		return $this->fetch('privilege');
	}
	public function privilege_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('admin')->where('admin_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Quanxi/privilege");
        }
        else{
        	return $this->error('删除失败',"admin/Quanxi/privilege");
        }
		
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
	public function privilege_edit()
	{
		$id = input('id');
		// echo $id;exit;
		$data =Db('admin')->where('admin_id='.$id)->select();
		$this->assign('list', $data);		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 
			$data = [		//接受传递的参数
				'admin_name' => input('user_name'),
				'admin_email' => input('email'),
				'admin_pwd' => md5(input('new_password')),
				// 'date_time'=> date("Y-m-d H:i:s",time()),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('admin')->where('admin_id='.$id)->update($data)){		//添加数据
				return $this->success('修改管理员成功',"admin/Quanxi/privilege");	//成功后跳转  lst 界面
			}else{
				return $this->error('修改管理员失败');
			}
			return;
		
		}
		return $this->fetch('privilege_edit');
	}
	public function role()
	{
		$data =Db('role')->select();
		// var_dump($data);die;
		$this->assign('list', $data);
		return view('role');
	}
	public function role_add()
	{
		if(request()->isPost()){
			$data = [
				'role_name'=>input('role_name'),
				'role_desc'=>input('role_desc'),
				'action_code'=>input('action_code'),
			];
			// var_dump($data);die;
			if(Db('role') -> insert($data)){		//添加数据
				return $this->success('添加角色成功',"admin/Quanxi/role");	//成功后跳转  lst 界面
			}else{
				return $this->error('添加角色失败');
			}
			return;
		}
		return view('role_add');
	}
	public function role_edit(){
		$id = input('id');
		// echo $id;exit;
		$data =Db('role')->where('role_id='.$id)->select();
		$this->assign('list', $data);		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 			$data = input('post.');
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('role')->where('role_id='.$id)->update($data)){		//添加数据
				return $this->success('修改角色成功',"admin/Quanxi/role");	//成功后跳转  lst 界面
			}else{
				return $this->error('修改角色失败');
			}
			return;		
		}
		return view('role_edit');
	}
	public function role_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('role')->where('role_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Quanxi/role");
        }
        else{
        	return $this->error('删除失败',"admin/Quanxi/role");
        }
	}
	public function suppliers()
	{
		$data =Db('suppliers')->paginate(2);
		$page = $data->render();
		$this->assign('list', $data);
		$this->assign('page',$page);
		return view('suppliers');
	}
	public function suppliers_add()
	{
		if(request()->isPost()){
			$data = [
				'suppliers_name'=>input('suppliers_name'),
				'suppliers_desc'=>input('suppliers_desc'),
			];
			// var_dump($data);die;
			if(Db('suppliers') -> insert($data)){		//添加数据
				return $this->success('添加供货商成功',"admin/Quanxi/suppliers");	//成功后跳转  lst 界面
			}else{
				return $this->error('添加供货商失败');
			}
			return;
		}
		return view('suppliers_add');
	}
	public function suppliers_edit()
	{
		$id = input('id');
		// echo $id;exit;
		$data =Db('suppliers')->where('suppliers_id='.$id)->select();
		$this->assign('list', $data);		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 			$data = [
				'suppliers_name'=>input('suppliers_name'),
				'suppliers_desc'=>input('suppliers_desc'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('suppliers')->where('suppliers_id='.$id)->update($data)){		//添加数据
				return $this->success('修改供货商成功',"admin/Quanxi/suppliers");	//成功后跳转  lst 界面
			}else{
				return $this->error('修改供货商失败');
			}
			return;		
		}
		return view('suppliers_edit');
	}
	public function suppliers_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('suppliers')->where('suppliers_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Quanxi/suppliers");
        }
        else{
        	return $this->error('删除失败',"admin/Quanxi/suppliers");
        }
	}
}