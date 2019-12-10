<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function userShow(){

        $user = new User();
        $res = $user::all();
//        var_dump($res);die;
        return view("Admin\userShow",['data'=>$res]);
    }
    public function user(){
        return view("Admin\user");
    }
    public function userDel(){
        $id = $_REQUEST['id'];
        $user = new User();
        $res = $user::destroy($id);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
    public function userAdd(){
        $data = $_REQUEST;

        $res = DB::table("user")->insert($data);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
}
