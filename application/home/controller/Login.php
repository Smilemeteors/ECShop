<?php
namespace app\home\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
    public function login()
    {
    	return $this->fetch();
    }
    public function login_do()
    {
        $data=input('post.');
        $user_name=$data['user_name'];
        // var_dump($data['user_password']);die;
        $re=Db::name('user')
            ->where([
                'user_name'=>$data['user_name'],
                ])
            ->find();
        // 错误次数加1
        $error_num=$re['error_num']+1;

        $current_time=date('Y-m-d H:i:s',time());
     
if($re['error_num']<3)
{
       // var_dump($user_id);die;
        if($re['user_password'] == $data['user_password'])
        {   
           
            $result=Db::execute("update `user` set lasttrylogin = '$current_time' where user_name = '$user_name' ");
            $this->success('登录成功','index/index');

        }else{

            // $result = Db::name('user')
            //         ->where(['user_name'=>$data['user_name']])
            //         ->save($error_num+1);
            $result=Db::execute("update `user` set error_num = '$error_num',lasttrylogin = '$current_time' where user_name = '$user_name' ");
                // var_dump($result);die;

            $this->error('登录失败','login/login');
        }  
}else{
     if(strtotime($current_time)-strtotime($re['lasttrylogin'])>=7200)
     {

        if($re['user_password'] == $data['user_password'])
        {   
           
            $result=Db::execute("update `user` set lasttrylogin = '$current_time',error_num = '0' where user_name = '$user_name' ");
            $this->success('登录成功','index/index');

        }else{

            // $result = Db::name('user')
            //         ->where(['user_name'=>$data['user_name']])
            //         ->save($error_num+1);
            $result=Db::execute("update `user` set error_num = '1',lasttrylogin = '$current_time' where user_name = '$user_name' ");
                // var_dump($result);die;

            $this->error('登录失败','login/login');
        }  

     }
     else
     {
          $this->error('密码输错3次,请2小时后登录','login/login');
  
     }

    
}



    }

    public function back()
    {
    	return $this->fetch();
    }

    public function reg()
    {   
    	return $this->fetch();
    }
    public function register()
    {
        $data=input('post.');
        unset($data['confirm_password']);
        // var_dump($data);die;
        $re=Db::name('user')->where(array('user_name'=>$data['user_name']))->select();
        // var_dump($re);die;
        if($re)
        {
            $this->error('用户已存在','login/reg');
        }else{
            $phone=Db::name('user')->where(array('phone'=>$data['phone']))->select();
            if($phone)
            {
                 $this->error('手机号已注册','login/reg');
            }else{
                 $add=Db::name('user')->insert($data);
                if($add)
                {
                    $this->success('注册成功','login/login');
                }else{
                    $this->error('注册失败','login/reg');
                }
            }
           
        }
    }
}