<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Menu\MenuController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //登录之后首页
        $menu=new MenuController();
        $data=$menu->getMenu();
        return view('admin/index',['data'=>$data]);
    }

    public function menu()
    {

    }


}
