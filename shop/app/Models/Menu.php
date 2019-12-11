<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public $timestamps=false;
    protected $table='menus';

    public function  getTree($data,$pid){
        $tree=[];
        foreach ($data as $k=>$v){
            if ($v['pid']==$pid){
                $v['son']=$this->gettree($data,$v['id']);
                $tree[]=$v;
            }
        }
        return $tree;

    }
}
