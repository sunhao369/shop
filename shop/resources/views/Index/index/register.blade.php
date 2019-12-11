@include("Layouts.header")

<body style="background: #f1f1f1;">
<form action="/index/regDo" method="post">
    @csrf
<div class="qing juzhong lobg" style="position: absolute;top: 50%;margin-top: -290px; left:50%; margin-left:-600px; overflow:inherit">

  <div class="log-rf" style="float:none; margin:0 auto; height:auto;">
    <div class="logk zcok" style="padding-bottom:40px; margin-bottom:30px;">
    <div class="loto"><img src="/index/images/login-t.png" width="145" height="145" class="login-t"><img src="/index/images/login-bg.png" width="221" height="247" class="login-bg"></div>
      <div class="lo-dl">
        <div class="lf">用户名：</div>
        <input type="text" placeholder="请输入用户名" name="username" id="username">
      </div>
      
      <div class="lo-dl">
        <div class="lf">密　　码：</div>
        <input type="password" placeholder="请输入密码" name="password" id="password">
      </div>
      <div class="lo-dl">
        <div class="lf">确认密码：</div>
        <input type="password" placeholder="请确认密码" name="repassword" id="repassword">
      </div>
      


        <div>
        <input type="submit" value="注册" class="dlan">
      </div>
      <div class="lo-zc">
        已经注册账号？　　<a href="/index/login" class="lo-zc1">立即登录</a>
      </div>
    </div>
  </div>

</div>
</form>
</body>
</html>
