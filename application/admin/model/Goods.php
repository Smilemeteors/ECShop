<?php 
namespace app\admin\model;
use think\Model;
use think\Request;
use think\Db;
use think\Paginator;

class Goods extends Model
{
	//删除分类
	public function del($cat_id){
        return Db::table('cat')->delete($cat_id);
    }
	public function shows()
	{
        return Db::table('cat')->select();
    }
    public function goods_Show()
	{
		return $res = Db::name('goods')->where('is_delete',1)->paginate(5);
	}

	public function brand_show(){
        return $res= Db::name('brand')->paginate(5);
    }

    public function comment_show(){
        return $res= Db::name('comment')->paginate(5);
    }

    public function inserts($request){
        return Db::table('brand')->insert($request);
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
