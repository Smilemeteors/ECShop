<?php 
namespace app\admin\model;
use think\Model;
use think\Request;
use think\Db;
use think\Paginator;

class Goods extends Model
{
    public function getShow()
	{
		return $res = Db::name('goods')->paginate(4);
	}





	// public function login(){
	// 	return $res = Db::table('user')->where('username',input('post.username'))->where('password',input('post.password'))->find();
	// }

	// public function register()
	// {
	// 	return $res = Db::table('user')->insert(input('post.'));
	// }

	// public function getInfo($id,$uid)
	// {
	// 	Db::table('show')->where('id',$id)->setInc('read');
	// 	$data['res'] = Db::table('show')->where('id',$id)->find($id);
	// 	$data['code'] = Db::table('up')->where('aid',$id)->where('uid',$uid)->select();
	// 	echo "文章id=$id";
	// 	echo "<br>";
	// 	echo "用户id=$uid";
	// 	return $data;
	// }

	// public function up($id,$uid)
	// {
	// 	$aid = $id['aid'];
	// 	if ($id['up'] == 0) 
	// 	{
	// 		$res = Db::table('show')->where('id',$aid)->setInc('sum');
	// 		$res1 = Db::tble('up')->insert(['uid'=>$uid,'aid'=>$aid]);
	// 	}//点赞
	// 	else
	// 	{
	// 		$res = Db::table('show')->where('id',$aid)->setDec('sum');
	// 		$res1 = Db::table('up')->where('uid',$uid)->where('aid',$aid)->delete();
	// 	}//取消
	// 	if ($res == 1 && $res1 == 1) 
	// 	{
	// 		$code = 1;
	// 	}
	// 	else
	// 	{
	// 		$code = 0;
	// 	}
		
	// 	return $code;
	// }

	// public function getComment($data)
	// {
	// 	return $con = Db::table('comment')->insert($data);
	// }

}