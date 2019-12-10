<?php

namespace App\Http\Controllers\Goods;

use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommodityController extends Controller
{
    //
    public function goodsShow(){

        $goods= new Goods();

        $data = $goods::all();

        return view("Goods/goodsShow",['data'=>$data]);
    }
    public function goodsDel(){
        $id= $_REQUEST['id'];

        $goods = new Goods();

        $res = $goods::destroy($id);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
}
