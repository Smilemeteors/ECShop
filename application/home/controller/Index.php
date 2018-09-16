<?php
namespace app\home\controller;

class Index
{
    public function index()
    {
        return view('index');
    }
    public function flow()
    {
    	return view('flow');
    }
    public function register()
    {
    	return view('register');
    }
    public function user()
    {
    	return view('user');
    }
    public function category()
    {
    	return view('category');
    }
}

?>