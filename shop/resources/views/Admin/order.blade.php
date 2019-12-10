<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.1</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    @include('layout.header')
</head>

<body>
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
            <input class="layui-input"  autocomplete="off" placeholder="开始日" name="start" id="start">
            <input class="layui-input"  autocomplete="off" placeholder="截止日" name="end" id="end">
            <input type="text" name="username"  placeholder="查询订单名" autocomplete="off" class="layui-input">
            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn" onclick="x_admin_show('添加订单','orderadd',600,400)"><i class="layui-icon"></i>添加</button>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <table class="layui-table x-admin">
        <thead>
        <tr>
            <th>
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>ID</th>
            <th>用户</th>
            <th>订单号</th>
            <th>商品名称</th>
            <th>商品图片</th>
            <th>最终价格</th>
            <th>商品数量</th>
            <th>商品总价</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>zhuangtai</th>
            <th>操作</th>
        </tr>
        </thead>
       <tbody>
       @foreach($data as $v)
           <tr>
               <td><input type="checkbox"></td>
               <td>{{$v->id}}</td>
               <td>{{$v->user_id}}</td>
               <td>{{$v->order_no}}</td>
               <td>{{$v->product_name}}</td>
               <td>{{$v->product_image}}</td>
               <td>{{$v->current_price}}</td>
               <td>{{$v->quantity}}</td>
               <td>{{$v->total_price}}</td>
               <td>{{$v->create_time}}</td>
               <td>{{$v->update_time}}</td>
               <td class="td-status">
                   <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span></td>
               </td>
               <td class="td-manage">
                   <button class="del" value="{{$v->id}}">刪除</button>
                   <a onclick="member_stop(this,'10001')" href="javascript:;"  title="启用">
                       <i class="layui-icon">&#xe601;</i>
                   </a>
               </td>
           </tr>
       @endforeach
       </tbody>
    </table>
</div>
</body>
</html>
<script>
    $(".del").click(function () {
        // alert(23);
        var id=$(this).val();
        // alert(id);
        $.ajax({
            url:"http://www.shop.com/index.php/orderdel",
            data:{
                id:id
            },
            success:function (data) {
                if (data==1){
                    alert("刪除成功");
                    location.href="order";
                }
            }
        })
    })
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){

            if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

            }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
            }

        });
    }
</script>
