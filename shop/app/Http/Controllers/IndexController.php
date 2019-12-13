<?php

namespace App\Http\Controllers;

use App\Models\Orderdetail;
use App\Models\User;
use App\Models\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function login(){
        return view('Index/index/login');
    }
    public function logDo(Request $request){
        $data = $request->all();
        $username = $data['username'];
        $password = md5($data['password']);
        $res = User::where('username', '=', $username)->where('password', '=', $password)->get();
        //       dd($res);
        // $ls = $request->session();
        // var_dump($ls);die;
        if ($res){
//            echo 1;
            session(['username' => $username]);
            $data = $request ->session()->get('username');
            if ($data){
                return view('Index/index/index',['data'=>$data]);
            }else{
                $data ="";
                return view('Index/index/index',['data'=>$data]);
            }
//        var_dump($data);die;
        }else{
            echo 2;
        }
    }
    public function register(){
        return view("Index/index/register");
    }
    public function regDo(Request $request){
        $data = $request->all();
//       var_dump($data);
        $user = new User();
        $user ->_token = $data['_token'];
        $user ->username = $data['username'];
        $user ->password = md5($data['password']);
//        dd($user);
        $res = $user->save();
        if ($res){
            return view('Index/index/login');
        }else{
            echo 2;
        }
    }
    public function index(Request $request)
    {
        //
        $data = $request ->session()->get('username');
        if ($data){
            return view('Index/index/index',['data'=>$data]);
        }else{
            $data ="";
            return view('Index/index/index',['data'=>$data]);
        }
    }
    public  function quit(Request $request){
        $res = $request->session()->forget('username');
        if ($res){
            return view('Index/index/index');
        }else{
            return view('Index/index/index');
        }
    }
    public function productShow(){

       $goods = new Goods();

       $data = $goods::all();
       return view("Index/index/index",['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = new Goods();
       $data = $user::all();
       return view("Index/index/category",['data'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}