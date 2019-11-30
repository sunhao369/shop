<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view("laout/index");
    }
    public function login(){
//        echo "2131";
        return view("admin/login");
    }
    public function loginShow(){
        
    }
}