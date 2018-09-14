<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Request;
use think\view;
use think\Session;


class Login extends Controller{
    public function login(){
        return view('login');
    }
    public function login_do(){
        $User_name = Request::instance()->post('User_name');
        $User_pwd = Request::instance()->post('User_pwd');
        $code=input("code");
        if (empty($code)) {
            echo "<script>alert('验证码不能为空');location.href='login'</script>";
        }else if(!captcha_check($code)){
            echo "<script>alert('验证码错误');location.href='login'</script>";
        }else{
        $arr = Db::table('user')->where("User_name='$User_name' and User_pwd='$User_pwd'")->find();
        if ($arr){
//            $this->success('恭喜您登录成功','admin/index/index');
            echo "<script>alert('恭喜您登录成功');location.href='http://www.ecshop4.0.com/admin'</script>";
        }else
            echo "<script>alert('用户名密码或验证码错误');location.href='login'</script>";
    }
    }
}
