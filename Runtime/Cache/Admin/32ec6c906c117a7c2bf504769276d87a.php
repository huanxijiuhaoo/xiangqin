<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>强大的交友系统</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="/Public/admin/css/base.css"/>
<link rel="stylesheet" href="/Public/admin/css/login.css"/>

<style>
body,html { background-image:url(/Public/admin/images/bj.jpg); background-size:cover;}
</style>
</head>
<body>
<div class="m-login">
    <div class="new_logo"><img src="/Public/admin/images/logo.png" alt="">强大的交友系统<p>千万帅哥美女在源码城最全的源码下载等你</p></div>
    <div class="new_logo1">强大的交友系统</div>

	<form action="<?php echo U();?>" method="post" id="form">
	   <div class="form_div">
		   <ul>
		   	<li><input name="username"  type="text" class="login-user" id="username" value="" maxlength="30"></li>
		   	<li><input class="login-pwd" name="password" id="password" type="password" value="" maxlength="30"></li>
		   	<li>
		   		<input class="yzm" name="captcha" id="password1"  value="" maxlength="30">
		   		<img src="<?php echo U('Home/Site/verifyCode');?>" onclick='javascript:this.src="<?php echo U('Home/Site/verifyCode');?>&" + Math.random()' alt="" class="yzm_img">
		   	</li>
		   	<li style="background-color:rgba(0, 0, 0, 0)"><button class="u-login-btn" type="submit">立即登录</button></li>
		   </ul>
	   </div>
	</form>
</div>
</body>
</html>