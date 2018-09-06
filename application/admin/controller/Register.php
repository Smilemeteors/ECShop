<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Request;

class Register extends Controller{
    public function register(){
        return view('register');
    }
    public function register_do(){
        $User_name = Request::instance()->post('User_name');
        $User_pwd = Request::instance()->post('User_pwd');
        $User_pwd1 = Request::instance()->post('User_pwd1');
        if($User_pwd == $User_pwd1){
            $data = ['User_name' => "$User_name", 'User_pwd' => "$User_pwd"];
            $arr = Db::name('user')->insert($data);
            if($arr){
                $this->success('注册成功','login/login');
            }else{
                $this->error('注册失败','register/register');
            }
        }
        else{
            $this->error('密码与确认密码不相同','register/register');
        }
    }
}