<?php
namespace app\admin\model;
use think\Model;
class Collage extends Model
{
   public function sel()
   {
       return $this->select();
   }
}
