<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Model;
use app\home\model\Category;
use app\home\controller\base;

class Shopcar extends Controller
{
    public function car()
    {
        $res=Db('cart')->select();
        $count=0;
        foreach ($res as $key => $value) {
            $count+=$value['goods_number']*$value['market_price'];
        }
        $goods_count=0;
        foreach ($res as $key => $value) {
            $goods_count+=$value['goods_price']*$value['goods_number'];
        }
        $save_price=$goods_count-$count;
        $this->assign('save_price',$save_price);
        $this->assign('goods_count',$goods_count);
        $this->assign('res',$res);
        $this->assign('count',$count);

        $hot_data=Db('hot')->order('hot_num desc')->select();
        $this->assign('hot_data',$hot_data);
    	$data = Db('cart b')
    	// ->join('goods g','b.goods_id=g.goods_id')
                    ->select();
        $sum_con ='';
        foreach ($res as $key => $value) {
           $sum_con.=$value['market_price']*$value['goods_number'];
        }
        // print_r($sum_con);die;
        $this->assign('sum_con',$sum_con);

        // $data = Db('cart')->select();
    	$this->assign('data',$data);
    	$nav=Db('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);
        session_start();
        $this->assign('$_SESSION',$_SESSION);
    	return $this->fetch();
    }
    public function car_add()
    {
       $goods_id = input("goods_id");
        $data=Db('goods')->where('goods_id',$goods_id)->select();
        // var_dump($data[0]['goods_img']);
        $goods_number=input('post.number');
        $user_id=1;
        $pricesum=$goods_number*$data[0]['goods_price'];
        // var_dump($pricesum);die;
        if ($user_id) {
            $car_data=Db('cart')->where('goods_id',$goods_id)->find();
            if ($car_data) {
                $car_data['goods_number']=$car_data['goods_number']+$goods_number;
                $res=Db('cart')->update($car_data);
                if ($res) {
                    $this->success('添加购物车成功','shopcar/car');
                }
            }else{
                $arr=[
                        'user_id'=>1,
                        'goods_id'=>$goods_id,
                        'goods_name'=>$data[0]['goods_name'],
                        'goods_price'=>$data[0]['market_price'],
                        'goods_number'=>$goods_number,
                        'market_price'=>$pricesum,
                        'goods_img'=>$data[0]['goods_img']
                    ];
                $res=Db('cart')->insert($arr);
                if ($res) {
                    $this->success('添加购物车成功','shopcar/car');
                }
            }
        }else{
            $this->error('请登录');
        }
    }   
    public function del(){
        $id = input("id");
        $data = Db('cart')->where('rec_id='.$id)->delete();
        if ($data) {
            return $this->success('删除成功',"home/shopcar/car");
        }
        else{
            return $this->error('删除失败',"home/shopcar/car");
        }
    }
    public function delAll(){
        $data = Db::query("TRUNCATE cart");
        if ($data) {
            return $this->success('清空购物车失败',"home/shopcar/car");
        }
        else{
            return $this->error('清空购物车成功',"home/shopcar/car");
        }
    }

    public function checkout()
    {
        $nav=Db('classify')
                ->where('show_in_nav','=',1)
                ->select();
        $this->assign('nav',$nav);

        $res=Db('cart')->select();
        $count=0;
        foreach ($res as $key => $value) {
            $count+=$value['goods_number']*$value['market_price'];
        }
        $goods_count=0;
        foreach ($res as $key => $value) {
            $goods_count+=$value['goods_price']*$value['goods_number'];
        }
        $save_price=$count-$goods_count;
        $data=Db('order')->select();
        $this->assign('data',$data);
        $this->assign('save_price',$save_price);
        $this->assign('goods_count',$goods_count);
        $this->assign('res',$res);
        $this->assign('count',$count);
        return $this->fetch();
    }
    public function order_add()
    {
        $user_id=1;
        $data=input('post.');
        // var_dump($data);
        $address_data=Db('address')->where('id',$data['address_id'])->find();
        // var_dump($address_data);die;
        $shipping_arr=array('申通快递','邮局平邮');
        $pay_arr=array('余额支付','银行亏款/转账','货到付款','支付宝');
        $car_data=Db('cart')->where('user_id='.$user_id)->select();
        // var_dump($car_data);die;
        $arr=array(
             'order_sn'=>$this->createsn(),
             'user_id'=>$user_id,
             'order_status'=>0,
             'pay_status'=>0,
             'order_email'=>$address_data['email'],
             'postcode'=>$address_data['zipcode'],
             'consignee'=>$address_data['consignee'],
             'country'=>$address_data['country'],
             'province'=>$address_data['province'],
             'city'=>$address_data['city'],
             'district'=>$address_data['district'],
             'order_address'=>$address_data['address'],
             'tel'=>$address_data['tel'],
             // 'shipping_id'=>$data['ch'],
             'shipping_name'=>$shipping_arr[$data['shipping']],
             // 'pay_id'=>$data['payment'],
             'pay_name'=>$pay_arr[$data['payment']],  
             'goods_amount'=>1,
             'order_amount'=>1,
             'addtime'=>time()
        );
        $order=Db('order')->insert($arr);
        $order_id=Db('order')->getLastInsID();
        // var_dump($order_id);die;

        $tmp=Db('order')->where('order_id='.$order_id)->find();
        // var_dump($tmp);die;
        if ($order) {
            foreach ($car_data as $key => $value) {
                $car_data[$key]['order_id']=$order_id;
                unset($car_data[$key]['car_id']);
                unset($car_data[$key]['user_id']);
                unset($car_data[$key]['goods_img']);

            }
                // var_dump($car_data);die;
                $res=Db('goods_order')->insertAll($car_data);

            // var_dump($car_data_val);die;

            if ($res) {
                Db('cart')->where('user_id',$user_id)->delete();
            }
        }
    }

}