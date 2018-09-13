<?php
namespace app\admin\controller;
use thinkphp\library\think\paginator;
use think\Controller;
class Member extends Controller
{
	public function users()
	{
		// where('is_delete',1)->paginate(5);
		$data = Db('users')->paginate(1);
		$page = $data->render();
		$this->assign('list',$data);
		$this->assign('page',$page);
		return view('users');
	}
	public function user_put()
	{
		$user_id = input('get.user_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("users")->where("user_id",$user_id)->update(["is_validated"=>'0']);
        }else{
            $res = Db("users")->where("user_id",$user_id)->update(["is_validated"=>'1']);
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
	public function user_add()
	{
		if(request()->isPost()){ 
			$data = [		//接受传递的参数
				'user_name' => input('user_name'),
				'email' => input('email'),	
				'password' => md5(input('password')),
				'sex' => input('sex'),
				'birthday' => input('birthday'),
				'user_money' => input('user_money'),
				'frozen_money' => input('frozen_money'),
				'pay_points' => input('pay_points'),
				'rank_points' => input('rank_points'),
				'address_id' => input('address_id'),
				'reg_time' => date("Y-m-d H:i:s",time()),
				'credit_line' => input('credit_line'),
				'qq' => input('qq'),
				'office_phone' => input('office_phone'),
				'home_phone' => input('home_phone'),
				'phone' => input('phone'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('users') -> insert($data)){		//添加数据
				return $this->success('注册会员成功',"admin/Member/users");	//成功后跳转  lst 界面
			}else{
				return $this->error('注册会员失败');
			}
			return;
		
		}
		return view('user_add');
	}
	public function user_address_list()
	{
		return view('user_address_list');
	}
	public function users_edit()
	{
		$id = input('id');
		// echo $id;exit;
		$data = Db('users')->where('user_id='.$id)->select();
		$this->assign('list', $data);		
		if(request()->isPost()){
//			dump(input('post.')); //打印接收到的参数
 
			$data = [		//接受传递的参数
				'user_name' => input('user_name'),
				'email' => input('email'),	
				'password' => input('password'),
				'sex' => input('sex'),
				'birthday' => input('birthday'),
				'user_money' => input('user_money'),
				'frozen_money' => input('frozen_money'),
				'pay_points' => input('pay_points'),
				'rank_points' => input('rank_points'),
				'address_id' => input('address_id'),
				'reg_time' => date("Y-m-d H:i:s",time()),
				'credit_line' => input('credit_line'),
				'qq' => input('qq'),
				'office_phone' => input('office_phone'),
				'home_phone' => input('home_phone'),
				'phone' => input('phone'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('users')->where('user_id='.$id)->update($data)){		//添加数据
				return $this->success('修改会员成功',"admin/Quanxi/users");	//成功后跳转  lst 界面
			}else{
				return $this->error('修改会员失败');
			}
			return;
		
		}
		return view('users_edit');
	}
	public function users_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('users')->where('user_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Member/users");
        }
        else{
        	return $this->error('删除失败',"admin/Member/users");
        }
	}
	public function user_msg()
	{
		return view('user_msg');
	}
	public function user_msg_view()
	{
		return view('user_msg_view');
	}
	public function user_rank()
	{
		$data = Db('user_rank')->select();
		$this->assign('list',$data);
		return view('user_rank');
	}
	public function user_rank_add()
	{
		if(request()->isPost()){ 
			$data = [		//接受传递的参数
				'rank_name' => input('rank_name'),
				'min_points' => input('min_points'),
				'max_points' => input('max_points'),
				'show_price' => input('show_price'),
				'special_rank' => input('special_rank'),
				'discount' => input('discount'),
			];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('user_rank') -> insert($data)){		//添加数据
				return $this->success('添加会员等级成功',"admin/Member/user_rank");	//成功后跳转  lst 界面
			}else{
				return $this->error('添加会员等级失败');
			}
			return;
		
		}
		return view('user_rank_add');
	}
	public function user_rank_del()
	{
		$id=input("id");   
		// echo $id;    
        $res=Db('user_rank')->where('rank_id='.$id)->delete();
        if ($res) {
        	return $this->success('删除成功',"admin/Member/user_rank");
        }
        else{
        	return $this->error('删除失败',"admin/Member/user_rank");
        }
	}
	public function user_rank_put()
	{
		$rank_id = input('get.rank_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("user_rank")->where("rank_id",$rank_id)->update(["special_rank"=>'0']);
        }else{
            $res = Db("user_rank")->where("rank_id",$rank_id)->update(["special_rank"=>'1']);
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
	public function user_rank_put1()
	{
		$rank_id = input('get.rank_id');
        $status = input('get.status');
        if($status==1){
            $res = Db("user_rank")->where("rank_id",$rank_id)->update(["show_price"=>'0']);
        }else{
            $res = Db("user_rank")->where("rank_id",$rank_id)->update(["show_price"=>'1']);
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
	// public function integrate()
	// {
	// 	return view('integrate');
	// }
	public function user_account()
	{
		return view('user_account');
	}
	public function user_account_add()
	{
		return view('user_account_add');
	}
	public function user_account_manage()
	{
		return view('user_account_manage');
	}
	public function account_log()
	{
		return view('account_log');
	}
	public function account_list()
	{
		return view('account_list');
	}
	
}