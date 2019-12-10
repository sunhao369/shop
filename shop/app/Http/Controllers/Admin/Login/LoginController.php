<?php

namespace App\Http\Controllers\Admin\Login;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('Login\login');
    }

    public function doLogin(Request $request)
    {
        $admin_name=$request->post('admin_name');
        $admin_password=$request->post('admin_password');
        $res=Admin::where('admin_name',$admin_name)->where('admin_pwd',$admin_password)->first();
        if ($res) {
            session(['id'=>$res['id']]);
            return redirect('index');

        }
        else {
            return redirect('login');
        }
    }



}
