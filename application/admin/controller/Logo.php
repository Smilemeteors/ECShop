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
    	// 实例化model
    	// $place = Db('place');
    	// $data = $place->fetchAll();  
        return view('logo');
    }

    public function addLogo()
    {
    	if ($_POST) {
    		//获取需要入库的数据
    		$data = Request::instance()->post();
    		$data['ad_img'] = $this->upload();
    		 // print_r($data['ad_img']);die;
    		// 实例化model
    		$res = Db('place')->insert($data);  
    		// print_r($data);die;	
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

    public function position()
    {
    	return view('position');
    }

    public function addPosition()
    {
    	return view('addPosition');
    }
    
}