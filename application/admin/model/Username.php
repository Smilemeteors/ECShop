<?php
namespace app\index\model;
use think\Model;
class Username extends Model
{
    public function sel($name,$pwd)
    {
        return $this->where("name='$name' && pwd='$pwd'")->select();
    }
}
