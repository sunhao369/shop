<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body>
    <div class="x-body">
        <form class="layui-form" method="post" action="addData">
            <?php echo csrf_field(); ?>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>登录名
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="username" name="admin_name" required="" lay-verify="required"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>将会成为您唯一的登入名
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_pass" class="layui-form-label">
                  <span class="x-red">*</span>密码
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_pass" name="admin_pwd" required="" lay-verify="pass"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  6到16个字符
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
                  <span class="x-red">*</span>确认密码
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_repass" name="repass" required="" lay-verify="repass"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script>
        // layui.use('form', function(){
        //     var data = layui.form;
        //
        //     //各种基于事件的操作，下面会有进一步介绍
        // });
        // layui.use(['form','layer'], function(){
        //     $ = layui.jquery;
        //   var data = layui.form
        //   ,layer = layui.layer;
        //   $ajax({
        //       url:addData,
        //       data:$data,
        //   })

          //自定义验证规则

          // form.verify({
          //   nikename: function(value){
          //     if(value.length < 5){
          //       return '昵称至少得5个字符啊';
          //     }
          //   }
          //   ,pass: [/(.+){6,12}$/, '密码必须6到12位']
          //   ,repass: function(value){
          //       if($('#L_pass').val()!=$('#L_repass').val()){
          //           return '两次密码不一致';
          //       }
          //   }
          // });

          // 监听提交
          // form.on('submit(add)', function(data){
          //
          //   console.log(data);
          //   //发异步，把数据提交给php
          //   layer.alert("增加成功", {icon: 6},function () {
          //       // 获得frame索引
          //       var index = parent.layer.getFrameIndex(window.name);
          //       //关闭当前frame
          //       parent.layer.close(index);
          //       // 可以对父窗口进行刷新
          //       x_admin_father_reload();
          //   });
          //   return false;
          // });

          
        // });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html><?php /**PATH D:\phpstudy\PHPTutorial\WWW\shopping\resources\views/admin/create.blade.php ENDPATH**/ ?>