<?php
namespace app\admin\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;

class Logo extends Controller
{
    //广告展示
    public function logo()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('place')->join('position p','place.position_id=p.position_id')->paginate(5);
        // print_r($list);die;
        // 把分页数据赋值给模板变量list
        $this->assign('arr', $list);
        // 渲染模板输出
        return $this->fetch();
    }
    //广告添加
    public function addLogo()
    {
        // 如果post接收数据添加，如果get返回添加页面
    	if (request()->isPost()) {
    		//获取需要入库的数据
    		$data = Request::instance()->post();
            // var_dump($data);
    		$data['ad_img'] = $this->upload();
    		// print_r($data['ad_img']);die;
            // 添加信息
<<<<<<< HEAD
            $res = Db('place')->insert($data);
            if ($res) {
                $this->success('添加成功', 'logo/logo');
            } else {
                $this->error('添加失败', 'logo/addlogo');
            }
            // 渲染模板
        } else {
            return view('addLogo');
        }
    }
=======
>>>>>>> 078a7cd9446889f1673fe4098c2caf032628735b
    		$res = Db('place')->insert($data); 
            if ($res) {
                $this->success('添加成功','Logo/logo');
            } else {
                $this->error('添加失败','Logo/addLogo');
            }	
    	} else {
            $re = Db('position')->select();
            $this->assign('re',$re);
    		return view('addLogo');
<<<<<<< HEAD
    	}
=======
    	}   	
>>>>>>> 078a7cd9446889f1673fe4098c2caf032628735b
    }
    //广告上传
	public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('ad_img');	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->move(ROOT_PATH . 'public'.'/uploads');
	        // var_dump($info);die;
	        if($info){
	            // 输出 
	            return $info->getFilename(); 
	        }else{
	            // 上传失败获取错误信息
	            return $file->getError();
	        }
    	}
	}
    //广告修改
    public function upLogo()
    {
        //接id
        $id=Request::instance()->get('id');
        //查询
        $data = Db('place')->join('position p','place.position_id=p.position_id')->where('ad_id',$id)->find();
        // var_dump($data);die;
        $re = Db('position')->select();
        $this->assign('re',$re);
        // 赋值
        $this->assign('arr',$data);
        // 渲染模板
        return view('upLogo');
    }
    public function updateLogo()
    {
        //获取需要入库的数据
        $data = Request::instance()->post();
        // print_r($data);die;
        $data['ad_img'] = $this->upload();
        //修改
        $res = Db::table('place')->where('ad_id',$data['ad_id'])->update($data);
        // var_dump($res);die;
        if ($res) {
            $data = Db::name('place')->paginate(5); 
            // print_r($data);die;
            // 赋值
            $this->assign('arr',$data);
            $this->success('修改成功','Logo/logo');
        } else {
            $data = Db::name('place')->paginate(5);
            // 赋值
            $this->assign('arr',$data);
            $this->error('修改失败','Logo/upLogo');
        }       
    }

    //广告删除
    public function delLogo()
    {
        //接id
        $id=Request::instance()->get('id');
        // 删除信息
        $res = Db('place')->where('ad_id',$id)->delete();
        // print_r($res);
        // 判断
        if ($res) {
            //查询 
            $data = Db::name('place')->paginate(5);
            // print_r($data);die; 
            // 赋值
            $this->assign('arr',$data);
            // 渲染模板
            $this->success('删除成功','Logo/logo');
            // return view('logo');
        } else {
            //查询 
            $data = Db::name('place')->paginate(5);
            // print_r($data);die; 
            // 赋值
            $this->assign('arr',$data);
            // 渲染模板
            $this->error('删除失败','Logo/logo');
        }       
    }


    //广告位展示
    public function position()
    {
        // 查询状态为1的用户数据 并且每页显示5条数据
        $res = Db::name('position')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('re', $res);
        // 渲染模板输出
        return $this->fetch();
    }
    //广告位添加
    public function addPosition()
    {
        // 如果post接收数据添加，如果get返回添加页面
        if (request()->isPost()) {
            $arr = Request::instance()->post();
            // print_r($arr);
            $arr['position_style'] = $this->load();
            // print_r($arr['position_style']);
            $res = Db('position')->insert($arr);
            // print_r($res);die;
            if ($res) {
                $this->success('添加成功','Logo/position');
            } else {
                $this->error('添加失败','Logo/addPosition');
            }
        } else {
            return view('addPosition');
        }	
    }
    //广告位上传
    public function load(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('position_style');      
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public'.'/uploads');
            // var_dump($info);die;
            if($info){
                // 输出 .jpg
                return $info->getFilename(); 
            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }
        }
    }

    //广告位修改
    public function upPosition()
    {
        //接id
        $id=Request::instance()->get('id');
        //查询
        $data = Db('position')->where('position_id',$id)->find();
        // var_dump($data);die;
        // 赋值
        $this->assign('re',$data);
        // 渲染模板
        return view('upPosition');
    }
    public function updatePosition()
    {
        //获取需要入库的数据
        $data = Request::instance()->post();
        // print_r($data);
        $data['position_style'] = $this->load();
        //print_r($data['position_style']);die;
        //修改
        $res = Db::table('position')->where('position_id',$data['position_id'])->update($data);
        // var_dump($res);die;
        if ($res) {
            $data = Db::name('position')->paginate(5); 
            // print_r($data);die;
            // 赋值
            $this->assign('re',$data);
            $this->success('修改成功','Logo/position');
        } else {
            $data = Db::name('position')->paginate(5);
            // 赋值
            $this->assign('re',$data);
            $this->error('修改失败','Logo/upPosition');
        }       
    }

    //广告位删除
    public function delPosition()
    {
        //接id
        $id=Request::instance()->get('id');
        // 删除信息
        $res = Db('position')->where('position_id',$id)->delete();
        // print_r($res);
        // 判断
        if ($res) {
            //查询 
             $data = Db::name('position')->paginate(5);
            // print_r($data);die; 
            // 赋值
            $this->assign('re',$data);
            // 渲染模板
            $this->success('删除成功','Logo/position');
            // return view('position');
        } else {
            //查询 
            $data = Db::name('position')->paginate(5);
            // print_r($data);die; 
            // 赋值
            $this->assign('re',$data);
            // 渲染模板
            $this->error('删除失败','Logo/position');
        }
    }
    //广告位详情
    public function detail()
    {
        // 接收id
        $id=Request::instance()->get('id');
         // 查询
        $data = Db('position')->where('position_id',$id)->find();
        // 赋值
        $this->assign('arr',$data);
        // 渲染模板
        return view('detail');   
    }
}