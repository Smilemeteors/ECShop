<?php
namespace app\home\model;
use think\Model;
use think\Db;
class Category extends Model
{
     protected $tableName = 'category';
    public function createTreeBySon($data,$parent_id = 0)
    {
        $new_arr = array();
        foreach ($data as $key => $value) {
            if ($value['parent_id'] == $parent_id) {
                $new_arr[$key] = $value;
                $new_arr[$key]['son']= $this->createTreeBySon($data, $value['cat_id']);
            }
        }
        return $new_arr;
    }


}

