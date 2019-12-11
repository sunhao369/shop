<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Menu\MenuController;
use App\Models\Admin;
use App\Models\Menu;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin/list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = $request->post();
        unset($data['_token']);
//      var_dump($data);die;
        $pwd = md5($data['admin_pwd']);
        $repass = md5($data['repass']);
        $data['repass'] = $repass;
        $data['admin_pwd'] = $pwd;

        $time = date('Y-m-d H:i:s');
        $data['admin_time'] = $time;
        unset($data['repass']);
//      var_dump($data);die;
       $admin = new Admin();

        $admin->admin_name = $data['admin_name'];
        $admin->admin_pwd = $data['admin_pwd'];
        $admin->admin_time = $data['admin_time'];
        $res = $admin->save();
        if ($res){
            echo "<script>alert('添加成功');</script> ";
//            return Redirect::to('list');
            return redirect('list');
        }else{
            echo "<script>alert('添加失败');</script> ";
            return redirect('create');
        }
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
    public function edit(Request $request)
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
         $this->validate($request );
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

    public function add(Request $request)
    {

    }
}
