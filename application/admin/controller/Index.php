<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
        return view('index');
    }
    public function index_main()
    {
    	return view('index_main');
    }
    public function index_menu()
    {
    	return view('index_menu');
    }
    public function index_top()
    {
    	return view('index_top');
    }
}
