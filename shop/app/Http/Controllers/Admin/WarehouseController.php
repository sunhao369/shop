<?php

namespace App\Http\Controllers\Admin;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warehouses = Warehouse::paginate(3);
//        var_dump($warehouses);die;
        return view('admin/warehouse/list',['warehouses'=>$warehouses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/warehouse/create');

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

        $data = $request->post();
//        dd($data);
        $province = $data['province'];
        $city = $data['city'];
        $area = $data['area'];

        $warehouse_region = $province.$city.$area;
        $data['warehouse_region'] = $warehouse_region;
        unset($data['province'],$data['city'],$data['area'],$data['_token']);
        $warehouse = new Warehouse();
        $warehouse->warehouse_name = $data['warehouse_name'];
        $warehouse->warehouse_coding = $data['warehouse_coding'];
        $warehouse->warehouse_state = $data['warehouse_state'];
        $warehouse->warehouse_region = $data['warehouse_region'];
        $warehouse->warehouse_serve = $data['warehouse_serve'];
//        dd($data);
        $res = $warehouse->save();
        if ($res){
            echo "<script>alert('添加成功');</script> ";
//            return Redirect::to('list');
            return redirect('warehouse/list');
        }else{
            echo "<script>alert('添加失败');</script> ";
            return redirect('warehouse/create');
        }

//        $admin->admin_name = $data['admin_name'];
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
    public function edit(Request $request)
    {
        //

        $id = $request->get('id');
//       var_dump($id);die;
        $data = Warehouse::where('warehouse_id',$id)->get()->toArray();
//         var_dump($data);die;
        return view("admin/warehouse/edit",['data'=>$data] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $data = $request->all();
//      dd($data);
        $id = $data['id'];
//var_dump($id);die;

        $province = $data['province'];
        $city = $data['city'];
        $area = $data['area'];

        $warehouse_region = $province.$city.$area;
        $data['warehouse_region'] = $warehouse_region;
        unset($data['province'],$data['city'],$data['area'],$data['_token'],$data['id']);
//        dd($data);
        $warehouse = new Warehouse();
        $res = $warehouse->where('warehouse_id',$id)->update($data);


//        $admin->admin_name = $data['admin_name'];
//        $admin->admin_pwd = $data['admin_pwd'];
//        $admin->update_at = $data['update_at'];
//        $res = $admin->where('admin_id',$id)->update();
        if ($res){
            echo "<script>alert('修改成功');</script> ";
//            return Redirect::to('list');
            return redirect('/warehouse/list');
        }else{
            echo "<script>alert('修改失败');</script> ";
            return redirect('/warehouse/list');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->get('id');
//       var_dump($id);die;
        $ware = new  Warehouse();
           $res =$ware->destroy($id);

        if ($res){
            return 1;
        }else{
            return 0;
        }


    }
}
