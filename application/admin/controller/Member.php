<?php
namespace app\admin\controller;

class Member
{
	public function users()
	{
		return view('users');
	}
	public function user_add()
	{
		return view('user_add');
	}
	public function user_msg()
	{
		return view('user_msg');
	}
	public function user_rank()
	{
		return view('user_rank');
	}
	public function user_rank_add()
	{
		return view('user_rank_add');
	}
	public function integrate()
	{
		return view('integrate');
	}
	public function user_account()
	{
		return view('user_account');
	}
	public function user_account_add()
	{
		return view('user_account_add');
	}
	public function user_account_manage()
	{
		return view('user_account_manage');
	}
}