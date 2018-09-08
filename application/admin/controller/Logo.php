<?php
namespace app\admin\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;

class Logo extends Controller
{
    public function logo()
    {
    	$place = Db('place');
    	$data = $place->select(); 
        // print_r($data);die; 
        $this->assign('arr',$data);
        return view('logo');
    }

    public function addLogo()
    {
    	if ($_POST) {
    		//获取需要入库的数据
    		$data = Request::instance()->post();
    		$data['ad_img'] = $this->upload();
    		// print_r($data['ad_img']);die;
    		$res = Db('place')->insert($data);  
    		return view('logo');	
    	} else {
    		return view('addLogo');
    	}   	
    }

	public function upload(){
	    // 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('ad_img');	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->move(ROOT_PATH . 'public'.'/uploads');
	       // var_dump($info);die;
	        if($info){
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            return $info->getFilename(); 
	        }else{
	            // 上传失败获取错误信息
	            return $file->getError();
	        }
    	}
	}

    public function upLogo()
    {
        
    }

    public function delLogo()
    {
        $id = $_GET['id'];
        $place = Db('place');
        $res = $place->where('ad_id',$id)->delete();
        // print_r($res);
        return view('logo');
    }

    public function position()
    {
        $position = Db('position');
        $res = $position->select();
        $this->assign('re',$res);
    	return view('position');
    }

    public function addPosition()
    {
        if ($_POST) {
            $arr = Request::instance()->post();
            // print_r($arr);die;
            $arr['position_style'] = $this->load();
            // print_r($arr['position_style']);die;
            $res = Db('position')->insert($arr);
            // print_r($res);die;
            return view('position');
        } else {
            return view('addPosition');
        }	
    }

    public function load(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('position_style');      
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public'.'/uploads');
           // var_dump($info);die;
            if($info){
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                return $info->getFilename(); 
            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }
        }
    }

    public function upPosition()
    {

    }

    public function delPosition()
    {
        $id = $_GET['id'];
        $position = Db('position');
        $res = $position->where('position_id',$id)->delete();
        // print_r($res);
        return view('addPosition');
    }
    
    public function detail()
    {

    }
}