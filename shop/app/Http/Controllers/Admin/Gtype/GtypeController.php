<?php

namespace App\Http\Controllers\Admin\Gtype;

use App\models\Gtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GtypeController extends Controller
{
    //
    public function gtypeShow(){

        $user = new Gtype();
        $data = $user::all();
        return view("Gtype\gtypeshow",['data'=>$data]);
    }
    public function gtypeDel(){
        $id = $_REQUEST['id'];

        $gtype = new Gtype();
        $res = $gtype::destroy($id);
        if ($res){
            echo "1";
        }else{
            echo "0";
        }
    }
}
