@include('Layout.header')
  <body>
    <div class="x-body">

        <form class="layui-form" action="/warehouse/store" method="post" >
            @csrf
          <div class="layui-form-item">
                <label for="username" class="layui-form-label" >
                    <span class="x-red">*</span>仓库名
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="warehouse_name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>仓库名
                </div>
            </div>
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span class="x-red">*</span>仓库编码
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="warehouse_coding" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>仓库编码
                </div>
            </div>
            <div class="layui-input-inline">
                <label class="layui-form-label">仓库是否启用</label>
                <div class="layui-input-block">
                    <select name="warehouse_state" lay-filter="aihao">
                        <option value="已启用">启用</option>
                        <option value="已停用">已停用</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <div class="x-body">
                    <div class="layui-row">

                            <div class="layui-form-item" id="x-city">
                                <label class="layui-form-label">城市联动</label>
                                <div class="layui-input-inline">
                                    <select name="province" lay-filter="province">
                                        <option value="">请选择省</option>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="city" lay-filter="city">
                                        <option value="">请选择市</option>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="area" lay-filter="area">
                                        <option value="">请选择县/区</option>
                                    </select>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span class="x-red">*</span>仓库服务地区
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="warehouse_serve" required="" lay-verify="required"
                           autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>仓库服务地区
                </div>
            </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="warehouseStore" lay-submit="submit">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script type="text/javascript" src="/admin/js/xcity.js"></script>
    {{--<script>--}}

        {{--layui.use('form', function(){--}}
            {{--var data = layui.form;--}}

            {{--//各种基于事件的操作，下面会有进一步介绍--}}
        {{--});--}}
        {{--layui.use(['form','layer'], function(){--}}
            {{--$ = layui.jquery;--}}
          {{--var data = layui.form--}}
          {{--,layer = layui.layer;--}}
          {{--$ajax({--}}
              {{--url:addData,--}}
              {{--data:$data,--}}
          {{--})--}}

          {{--自定义验证规则--}}

          {{--form.verify({--}}
            {{--nikename: function(value){--}}
              {{--if(value.length < 5){--}}
                {{--return '昵称至少得5个字符啊';--}}
              {{--}--}}
            {{--}--}}
            {{--,pass: [/(.+){6,12}$/, '密码必须6到12位']--}}
            {{--,repass: function(value){--}}
                {{--if($('#L_pass').val()!=$('#L_repass').val()){--}}
                    {{--return '两次密码不一致';--}}
                {{--}--}}
            {{--}--}}
          {{--});--}}

          {{--监听提交--}}
          {{--form.on('submit(add)', function(data){--}}

            {{--console.log(data);--}}
            {{--//发异步，把数据提交给php--}}
            {{--layer.alert("增加成功", {icon: 6},function () {--}}
                {{--// 获得frame索引--}}
                {{--var index = parent.layer.getFrameIndex(window.name);--}}
                {{--//关闭当前frame--}}
                {{--parent.layer.close(index);--}}
                {{--// 可以对父窗口进行刷新--}}
                {{--x_admin_father_reload();--}}
            {{--});--}}
            {{--return false;--}}
          {{--});--}}

          {{----}}
        {{--});--}}
    {{--</script>--}}
    <script>
        layui.use(['form','code'], function(){
            form = layui.form;

            layui.code();

            $('#x-city').xcity('广东','广州市','东山区');

        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>