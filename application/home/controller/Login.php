<?php
namespace app\home\controller;
use think\Controller;

class Login extends Controller
{
    public function login()
    {
    	return $this->fetch();
    }
    

    public function back()
    {
    	return $this->fetch();
    }

    public function reg()
    {   
    	return $this->fetch();
    }

}