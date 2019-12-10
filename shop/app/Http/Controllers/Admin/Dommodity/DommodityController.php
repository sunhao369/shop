<?php

namespace App\Http\Controllers\Admin\Dommodity;

use App\Models\Goodsbutes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DommodityController extends Controller
{
    //
    public function dommodityShow(){

        $dommoity = new Goodsbutes();

        $data = $dommoity::all();

        return view("Dommodity/dommodity",['data'=>$data]);
    }
    public function dommodityDel(){
        $id =$_REQUEST['id'];

        $dommodity = new Goodsbutes();

        $res = $dommodity::destroy($id);
        if ($res){
            echo "!";
        }else{
            echo "0";
        }
    }
}
