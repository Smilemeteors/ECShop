<?php
namespace app\home\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;

class Login extends Controller
{
    public function login()
    {
        // 如果post接收数据登录，如果get返回登录页面
        if (request()->isPost()) {
            //获取需要入库的数据
            $data = Request::instance()->post();
            // print_r($data);die;
            $username = $data['username'];
            $password = $data['password1'];
            //添加信息
            $res = Db('reg')->where('username',"$username")->find();
            // print_r($res);die;
            //判断
            if ($res) {
                if($password==$res['password1']){
                    session_start();
                    $_SESSION['username']="$username";
                    // echo "<script>alert('恭喜您登录成功');location.href='http://www.ecshop4.0.com/home/index/index'</script>";
                    // return view("User/welcome");
                    // ,['username'=>$res['username']]
                    $this->success('登录成功','User/welcome');
                }else{
                    $this->error('密码不正确','login/login');
                }               
            } else {
                $this->error('用户名不正确','login/login');
            }   
        } else {
            return view('login/login');
        }	
    }
    


    public function register()
    {
        if(request()->isPost()){
            $data = Request::instance()->post();
            
            // print_r($data); 

            if(array_key_exists('agreement',$data)){
                 $arr = Db('reg')->where('username',$data['username'])->find();
                 if(empty($arr)){
                    $username = $data['username'];
                    
                    session_start();
                    $_SESSION['username']="$username";
                    $res = Db('reg')->insert($data);
                    // print_r($res);die;
                    if($res){
                         // return view("User/welcome");
                         $this->success("注册成功","User/welcome");
                    }
                 }else{ 
                    $this->error("用户已存在","register");
                 }
                 // if($data['username']==$arr['username']){
                 //    echo 1;
                 // }
                 // die;
                 
            }else{
            $this->error("您没有看过或者不接受《用户协议》,请点接受再注册","register");
            }
        }else{
            return $this->fetch();
        }
    }
    public function back()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        return $this->success('退出成功','Login/login');
    }

}