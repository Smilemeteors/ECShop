<?php 
namespace app\admin\model;
use think\Model;
use think\Request;
use think\Db;
use think\Paginator;

class Goods extends Model
{
	public function createTree($data,$parent_id = 0, $level = 1)
    {
	  static $new_arr = array();
	    foreach ($data as $key => $value) {
	        if ($value['parent_id'] == $parent_id) {
	         $value['level'] = $level;
	            $new_arr[] = $value;

	            $this->createTree($data, $value['cat_id'], $level + 1);
	        }
	    }
	    return $new_arr;
	 }
	//分类
	public function addData($data){
        return Db::table('classify')->insert($data);
    }
    public function shows(){
        return Db::table('classify')->select();
    }
    public function find($id){
        return Db::table('classify')->find($id);
    }
    public function upd($request,$cat_id){
        return Db::table('classify')->where("cat_id=$cat_id")->update($request);
    }
    public function del($cat_id){
        return Db::table('classify')->delete($cat_id);
    }
    public function getPathList($id,$path='path'){
        $result=Db::query("SELECT *,CONCAT($path,'-',$id) as new FROM classify ORDER BY new");
        return $result;
    }
    public function getCatList($cat_id)
    {
        return Db::table('classify')->where("cat_id=$cat_id")->select();
    }
    public function cat()
    {
        return Db::table('classify')->select();
    }
	//分类
	public function goods_Show($keyword,$pages)
	{
		// return $res = Db::name('goods')->where('is_delete',1)->paginate(5);
		$pageParam['query']['keyword'] = $keyword;
        return $res= Db::name('goods')->where('is_delete',1)->where('goods_name','like','%'.$keyword.'%')->order('sort_order order')->paginate($pages,false,$pageParam);
	}

	//品牌
	public function getBrandList()
	{
        return Db::table('brand')->select();
	}
	//品牌搜索+分页
	public function brand_show($find,$pages){
		$pageParam['query']['find'] = $find;
        return $res= Db::name('brand')->where('brand_name','like','%'.$find.'%')->order('sort_order order')->paginate($pages,false,$pageParam);
    }
    /* $find = Request::instance()->param('find');
    //活动的id
    $id = Request::instance()->param('a_id');

    //搜索结果分页：要给paginate函数中传入第三个参数$pageParam，这个参数中要包含搜索的值$pageParam['query']['find']

    $pageParam['query']['find'] = $find;
    $result = db('activity_record')->where('activityid','=',$id)->where('name|mobile|openid','like','%'.$find.'%')->order(['id'=>'desc'])->paginate(10,false,$pageParam);

    return $result;*/

    public function comment_show(){
        return $res= Db::name('comment')->paginate(5);
    }

    public function inserts($request){
        return Db::table('brand')->insert($request);
    }
    public function goods_inserts($request){
        return Db::table('goods')->insert($request);
    }
    public function goods_type(){
        return Db::table('goods_type')->select();
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
