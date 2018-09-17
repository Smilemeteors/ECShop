<?php
namespace app\home\controller;
use think\Controller;
use think\Db;

class Usertwo extends Controller
{
  
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