<?php
namespace app\admin\model;
use think\Model;
class Major extends Model
{
    //添加
    public function add1($arr)
    {
        return $this->insert($arr);
    }
 
    //展示  两表联查
    public function sel($start,$limit,$sel='',$cc='')
    {
        return $this->whereLike('collage',"%$cc%")->whereLike('name',"%$sel%")->join('collage','major.collage=collage.c_id')->limit($start,$limit)->select();
    }
    //总数据
    public function page_count($sel='',$cc='')
    {
        return $this->whereLike('collage',"%$cc%")->whereLike('name',"%$sel%")->count();
    }
 
    //批删
    public function del($ids)
    {
        return $this->whereIn('id',$ids)->delete();
    }
}
