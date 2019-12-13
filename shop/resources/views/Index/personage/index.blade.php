@include("Layouts.header")
@include("Layouts.body")

<!--会员内容 -->
<div class="qing juzhong" style="width:900px;">
  <div style="width:900px; line-height:40px; background:#e01222; color:#FFF; font-size:16px; padding-left:15px;">个人资料</div>
  <div class="cenbg" style="    margin-bottom: 40px;">
      <form id="infoform" action="check.php?action=editinfo" method="post" enctype="multipart/form-data" >
      <div class="xinxi">
      {{--<div class="qing"><div class="lf">当前头像：</div>--}}
        {{--<div class="touxk">--}}
          {{--<div class="toux">--}}
          	{{--<img id="showpicture" src="/index/images/moren_touxiang.jpg" width="150" height="150">--}}
          {{--</div>--}}
          {{--<div class="lf xzk">--}}
            {{--<input type="file" id="headimgurl" name="headimgurl" accept="image/*">--}}
            {{--<div class="lf">仅允许上传jpg,jpeg,png,gif</div>--}}
            {{--<!--<a href="#">选择文件</a>--}}
            {{--<div class="lf">未选择文件</div> -->--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div> --}}
      <div class="qing">
        <div class="lf">用&nbsp;&nbsp;户&nbsp;名：</div>
        <input type="text" value="<?php echo $user->username?>" class="xie" name="mobile" id="mobile" >
      </div>
      <div class="qing"><div class="lf">邮   箱：</div>
        <input type="email" value="<?php echo $user->email?>" class="xie" name="username" id="username" >
      </div> 
      {{--<div class="qing"><div class="lf">性　　别：</div>--}}
        {{--<div class="sex">--}}
          {{--<input type="radio" name="sex" id="nan" value="1" class="xuz" ><label for="nan">男</label>--}}
          {{--<input type="radio" name="sex" id="nv" value="2" class="xuz" ><label for="nv">女</label>--}}
          {{--<input type="radio" name="sex" id="mi" value="0" class="xuz"  checked><label for="mi">保密</label>--}}
        {{--</div>--}}
      {{--</div>--}}
      <div class="qing"><div class="lf">密码修改：</div>
        <input type="text"  placeholder="互联网账号存在被盗风险，建议您定期更改密码以保护账户安全。" class="xie2" name="password" id="password" > （不修改，请为空）
      </div>
      <div class="qing aniu">
        <input type="submit" value="保存" class="bao1">
        <a href="/index/quit" class="bao2">退出当前账户</a>
      </div>
      </div>
    </form>
    </div>
  </div>
  </div>
@include("Layouts.left")
  
</div>

@include("Layouts.footer")