<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $order = new Orderdetail();
        $data = $order::all();
       return view("Admin/order",['data'=>$data]);
    }
    public function orderAdd(){
        return view("Admin/orderadd");
    }
    public function orderDel(){
        $id =$_REQUEST['id'];
        $order = new Orderdetail();
        $res = $order::destroy($id);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
    public function orderCreate(){
        $data = $_REQUEST;

        $res = DB::table("orderdetail")->insert($data);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
}
