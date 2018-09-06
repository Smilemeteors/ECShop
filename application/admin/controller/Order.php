<?php
namespace app\admin\controller;

class Order
{
	// 订单列表
	public function orders_list()
	{
		return view('orders_list');
	}
	// 订单查询   
	public function orders_query()
	{
		return view('orders_query');
	}
	// 订单合并
	public function merge_orders()
	{
		return view('merge_orders');
	}
	// 订单打印
	public function orders_printing()
	{
		return view('orders_printing');
	}
	// 缺货登记
	public function shortage_registration()
	{
		return view('shortage_registration');
	}
	// 添加订单
	public function add_order()
	{
		return view('add_order');
	}
	// 发货单列表
	public function list_invoice()
	{
		return view('list_invoice');
	}
	// 退货单列表
	public function list_return()
	{
		return view('list_return');
	}
}