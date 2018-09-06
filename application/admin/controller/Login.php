<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Request;

class Login extends Controller{
    public function login(){
        return view('login');
    }
    public function login_do(){
        $User_name = Request::instance()->post('User_name');
        $User_pwd = Request::instance()->post('User_pwd');
        $arr = Db::table('user')->where("User_name='$User_name' and User_pwd='$User_pwd'")->find();
        if ($arr){
            $this->success('恭喜您登录成功','admin/index/index');
        }else
            $this->error('登录失败');
        }
    }
