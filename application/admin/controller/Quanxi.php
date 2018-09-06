<?php
namespace app\admin\controller;

class Quanxi
{
	public function admin_logs()
	{
		return view('admin_logs');
	}
	public function agency()
	{
		return view('agency');
	}
	public function agency_add()
	{
		return view('agency_add');
	}
	public function privilege()
	{
		return view('privilege');
	}
	public function privilege_add()
	{
		return view('privilege_add');
	}
	public function role()
	{
		return view('role');
	}
	public function role_add()
	{
		return view('role_add');
	}
	public function suppliers()
	{
		return view('suppliers');
	}
}