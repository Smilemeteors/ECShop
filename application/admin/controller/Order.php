<?php
namespace app\admin\controller;
use think\Model;
use think\Db;
class Order extends \think\Controller
{
	// 订单列表
	public function orders_list()
	{
		$data = Db::name('order')->paginate(5);
		$this->assign('data',$data);
		return view('orders_list');
	}
	public function details()
	{
		$id = isset($_GET['id'])?$_GET['id']:'';
		$data = Db('order')->where('order_id',"$id")->find();
		// print_r($data);
		$this->assign('data',$data);
		 return view('details');	
	}
	public function delorder()
	{
		$id = isset($_GET['id'])?$_GET['id']:'';
		$res = Db('order')->where('order_id',"$id")->delete();
		if($res){
			$data = Db::name('order')->paginate(5);
			$this->assign('data',$data);
			return view('orders_list');	
		}else{
			$data = Db::name('order')->paginate(5);
			$this->assign('data',$data);
			return view('orders_list');
		}
	}
	public function paytype()
	{
		return view('paytype');
	}
	public function other()
	{
		return view('other');
	}
	public function consignee()
	{
		return view('consignee');
	}
	public function goods()
	{
		return view('goods');
	}
	public function cost()
	{
		return view('cost');
	}
	// 订单查询   
	public function orders_query()
	{
		return view('orders_query');
	}
	public function search()
	{
		$order_number = isset($_POST['order_number'])?$_POST['order_number']:'';
		$consignee = isset($_POST['consignee'])?$_POST['consignee']:'';		
		if(empty($order_number) && empty($consignee)){
			$data = Db::name('order')->paginate(5);
		}else if(empty($order_number)){
			$data = Db::name('order')->where('consignee',"$consignee")->paginate(5);
		}else if(empty($consignee)){
			$data = Db::name('order')->where('order_number',"$order_number")->paginate(5);
		}else{
			$data = Db::name('order')->where(['consignee'=>"$consignee",'order_number'=>"$order_number"])->paginate(5);
		}
		$this->assign('data',$data);
		return view('orders_list');
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
	public function user_order()
	{
		return view('user_order');
	}
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