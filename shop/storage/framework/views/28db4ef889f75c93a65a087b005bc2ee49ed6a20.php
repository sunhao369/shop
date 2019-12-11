<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php foreach ($data as $key => $value): ?>
  <body>
    <div class="x-body">

        <form class="layui-form" action="/warehouse/update" method="post" >
            <?php echo csrf_field(); ?>
          <div class="layui-form-item">
                <label for="username" class="layui-form-label" >
                    <span class="x-red">*</span>仓库名
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="warehouse_name" required="" lay-verify="required"
                           autocomplete="off" class="layui-input" value="<?php echo $value['warehouse_name'] ?>">
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
                           autocomplete="off" class="layui-input" value="<?php echo $value['warehouse_coding'] ?>">
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
                           autocomplete="off" class="layui-input" value="<?php echo $value['warehouse_serve'] ?>">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>仓库服务地区
                </div>
            </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <td><input type="hidden" value="<?php echo $value['warehouse_id'] ?>" name="id"></td>
              <button  class="layui-btn" lay-filter="warehouseStore" lay-submit="submit">
                  修改
              </button>
          </div>
      </form>
    </div>
    <script type="text/javascript" src="/admin/js/xcity.js"></script>
    

        
            

            
        
        
            
          
          
          
              
              
          

          

          
            
              
                
              
            
            
            
                
                    
                
            
          

          
          

            
            
            
                
                
                
                
                
                
            
            
          

          
        
    
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
<?php endforeach ?>
</html><?php /**PATH D:\store\shop\shop\resources\views/admin/warehouse/edit.blade.php ENDPATH**/ ?>