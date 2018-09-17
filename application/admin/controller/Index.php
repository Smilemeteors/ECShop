<?php
namespace app\admin\controller;
use think\Request;
use think\Controller;

class Index extends Controller
{
    public function index()
    {   
        $name = Request::instance()->session('name');
        if (!$name) {
            $this->error('请先登录','/');
        }
        return view('index');
    }
    public function index_main()
    {
        Request::instance()->session('name');
    	return view('index_main');
    }
    public function index_menu()
    {
        Request::instance()->session('name');
    	return view('index_menu'); 
    }
    public function index_top()
    {
        $name =  Request::instance()->session('name');
    	return view('index_top',['name'=>$name]);
    }
}
