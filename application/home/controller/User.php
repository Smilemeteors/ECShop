<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
class User extends Controller
{
    public function welcome()
    {
    	$nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
        session_start();
        $this->assign('$_SESSION',$_SESSION);
        return $this->fetch();
    }
    public function userinfo(){
    	return $this->fetch();
    }
    public function dingdan()
    {
        session_start();
        
        $username = $_SESSION['username'];
        $data = Db('order')->where('username',"$username")->select();
        $nav=Db::name('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
        $this->assign('data',$data);
        $this->assign('$_SESSION',$_SESSION);
    	return $this->fetch();
    }
    public function details()
    {
        $order_id = $_GET['order_id'];
        $data = DB('order')->where('order_id',"$order_id")->find();
        $nav=Db::name('classify')
            ->where('show_in_nav','=',1)
            ->select();
        $this->assign('nav',$nav);
        $this->assign('data',$data);

        session_start();
        $this->assign('$_SESSION',$_SESSION);
        return $this->fetch();
    }
    public function shouhuo()
    {
        return $this->fetch();
    }
    public function shoucang()
    {
        return $this->fetch();
    }
    public function liuyan()
    {
        return $this->fetch();
    }

    public function biaoqian(){
        return $this->fetch();
    }
    public function quehuo()
    {
    	return $this->fetch();
    }
    public function hongbao()
    {
        return $this->fetch();
    }
    public function tuijian()
    {
        return $this->fetch();
    }
    public function pinglun()
    {
    	return $this->fetch();
    }

    public function genzong()
    {
        return $this->fetch();
    }

    public function money()
    {
        return $this->fetch();
    }
    public function lianjie()
    {
        return $this->fetch();
    }
    
}