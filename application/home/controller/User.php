<?php
namespace app\home\controller;
use think\Controller;
use think\Db;

class User extends Controller
{
    public function welcome()
    {
    	return $this->fetch();
    }
    public function userinfo(){
    	return $this->fetch();
    }
    public function dingdan()
    {
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

    
}