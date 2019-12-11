@include("Layouts.header")

<body style="height:100%; overflow:hidden;background: #f1f1f1;">

<div class="qing juzhong lobg" style="position: absolute;top: 50%;margin-top: -290px; left:50%; margin-left:-600px;">
  <div class="log-lf"></div>
  <div class="log-rf">
    <div class="logk">
    <form id="loginform" action="" method="post">
      <div class="loto"><img src="/index/images/login-t.png" width="145" height="145" class="login-t"><img src="/index/images/login-bg.png" width="221" height="247" class="login-bg"></div>
      <div class="lo-dl">
        <div class="lf">账号：</div>
        <input type="text" placeholder="请输入注册时的用户名" name="mobile" id="mobile">
      </div>
      <div class="lo-dl">
        <div class="lf">密码：</div>
        <input type="password" placeholder="请输入密码" name="password" id="password">
      </div>
      <div>
        <a href="#"><input type="submit" value="立即登录" class="dlan"></a>
      </div>
      <div class="lo-zc">
        还没有帐号？　　<a href="/index/register" class="lo-zc1">免费注册</a>　　|　　<a href="#" class="lo-zc2">忘记密码？</a>
      </div>
    </form>
    </div>
  </div>
</div>
  
</body>
</html>
