<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>登录(Login)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="/fornt/assets/css/reset.css">
    <link rel="stylesheet" href="/fornt/assets/css/supersized.css">
    <link rel="stylesheet" href="/fornt/assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/fornt/assets/js/html5.js"></script>
    <![endif]-->
    <style>
        body{
            background-color: #0C0C0C;
        }
    </style>
</head>

<body>

<div class="page-container">
    <h1>登录(Login)</h1>
    <form action="doLogin" method="post">
        @csrf
        <input type="text" name="admin_name" class="username" placeholder="请输入您的用户名！">
        <input type="password" name="admin_password" class="password" placeholder="请输入您的用户密码！">
        <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">
        <button type="submit" class="submit_button">登录</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p>快捷</p>
        <p>
            <a class="facebook" href=""></a>
            <a class="twitter" href=""></a>
        </p>
    </div>
</div>

<!-- Javascript -->
<script src="/fornt/assets/js/jquery-1.8.2.min.js" ></script>
<script src="/fornt/assets/js/supersized.3.2.7.min.js" ></script>
<script src="/fornt/assets/js/supersized-init.js" ></script>
<script src="/fornt/assets/js/scripts.js" ></script>

</body>
</html>
