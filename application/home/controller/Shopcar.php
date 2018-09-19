<?php
namespace app\home\controller;
use think\Controller;


class Shopcar extends Controller
{
    public function car()
    {
    	$data = Db('brand b')
    	->join('goods g','b.brand_id=g.brand_id')
                    ->select();;
    	$this->assign('data',$data);
    	$nav=Db('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
    	return $this->fetch();
    }

    public function checkout()
    {
    	return $this->fetch();
    }

}