<?php
namespace app\home\controller;
use think\Controller;
use think\Db;

class Shopcar extends Controller
{
    public function car()
    {
    	return $this->fetch();
    }

    public function checkout()
    {
    	return $this->fetch();
    }

}