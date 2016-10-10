<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="{{ asset('admins/login/css/style.css') }}" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="{{ asset('admins/login/js/jquery.js') }}"></script>
<script src="{{ asset('admins/login/js/verificationNumbers.js') }}"></script>
<script src="{{ asset('admins/login/js/Particleground.js') }}"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $(".submit_btn").click(function(){
	  location.href="{{ URL('/admin/dologin') }}";
	  });
});
</script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  @if(session('msg'))
    <p class="login-box-msg" style="color:red;">{{ session('msg') }}</p>
  @else()
    <em>Management System</em>
  @endif()
 </dt>
<form action="{{ URL('admin/dologin') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <dd class="user_icon">
    <input type="text" name="userName" placeholder="账号" class="login_txtbx"/>
  </dd>
  <dd class="pwd_icon">
    <input type="password" name="password" placeholder="密码" class="login_txtbx"/>
  </dd>
  <dd class="val_icon">
    <div class="col-xs-6">
      <input name="code" type="text" id="J_codetext" placeholder="验证码" maxlength="6" class="login_txtbx">
    </div>
  </dd>
  <dd>
    <div>
      <img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('admin/captcha') }}/'+Math.random()">
    </div>
  </dd>
  <dd>
    <input type="submit" value="立即登陆" class="submit_btn"/>
  </dd>
</form>
 
</dl>
</body>
</html>
