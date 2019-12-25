<?php

namespace App\Http\Controllers\Admin\Gtype;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //
   public function brand(){
       $user = new Admin();
       $data = $user::all();
       return view("Gtype/brand",['data'=>$data]);
   }
   public function brandDel(Request $request){

       $id = $_REQUEST['id'];

       $brand = new Admin();

       $res = $brand::destroy($id);
       if ($res){
           echo "1";
       }else{
           echo "0";
       }
   }
}
