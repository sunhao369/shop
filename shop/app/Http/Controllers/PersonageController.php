<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = $request ->session()->all();
//        var_dump($data);die;
        $id = $data['id'];
//        $user = new User();
        $user = User::find($id);
//        dd($user->username);
//        dd($list->attributes);
//        var_dump($list);die;

        if ($data){
            return view('Index/personage/index',['data'=>$data, 'user'=>$user]);
        }else{
//            $data ="";
            return view('/index/login');
        }

    }
    public function order(Request $request){
        $data = $request ->session()->all();

//        dd($data);
         return view("Index/personage/order",['data'=>$data]);
    }
    public function cart(Request $request){

        return view("Index/personage/cart");
    }
    public function check(){
        return view("Index/personage/check");
    }
//    支付成功
    public function pay(){
        return view('Index/personage/pay');
    }
//    添加地址
    public function address(Request $request){
        $data = $request ->session()->all();

//        dd($data);
        return view("Index/personage/address",['data'=>$data]);

    }
//    我的推荐
    public function recommend(Request $request){

        $data = $request ->session()->all();
        return view('Index/personage/recommend',['data'=>$data]);
    }

//    待付款
    public function dpayment(Request $request){

        $data = $request ->session()->all();
        return view('Index/personage/dpayment',['data'=>$data]);
    }


    //代评论
    public function evaluate(Request $request){

        $data = $request ->session()->all();
        return view('Index/personage/evaluate',['data'=>$data]);
    }

    //待收货

    public function receiving(Request $request){

        $data = $request ->session()->all();
        return view('Index/personage/receiving',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
