<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />

<link href="/Jd/shop_jd/Seller/Public/css/style.css" rel='stylesheet' type='text/css' />
<link href="/Jd/shop_jd/Seller/Public/css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript" src="/Jd/shop_jd/Seller/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Jd/shop_jd/Seller/Public/js/jquery-1.10.2.min.js"></script>
<script>
$(function(){
	$('.signin').bind('click',function(){
		
		$.ajax({
			url:'<?php echo U('Login/login');?>',
			type:'post',
			data:{'uname':$("input[name=sname]").val(),'password':$('input[name=password]').val()},
			success:function(data){
				alert(data)
				if(data=='0'){

				}else if(data=='1'){
					alert(data);
					// $('input[name=sname]').next().addClass('glyphicon glyphicon-ok-sign has-success');
					$('#right').css('color','red');
				}

			}
		})
	})
})
</script>

</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>

<h1>登录表单</h1>
<div class="login-form">
	<div class="close"> </div>
	<div class="head-info">
		<label class="lbl-1"> </label>
		<label class="lbl-2"> </label>
		<label class="lbl-3"> </label>
	</div>
	<div class="clear"> </div>
	<div class="avtar"><img src="/Jd/shop_jd/Seller/Public/images/avtar.png" /></div>
	<form method="post" onsubmit="return false">
		<input type="text" class="text" name="sname" value="Username" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Username';}" ><span id="right">1111</span>
		<div class="key"><input type="password" name="password" value="Password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}"><span>222</span></div>
		
		<div class="signin"><input type="submit" name="sub" value="Login" ></div>

<!-- </div> -->
	</form>
	<!-- <div class="signin"><input type="submit" value="Login" ></div> -->


</div>
<!-- <div class="copy-rights">
	<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.mycodes.net/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
</div> -->
<script src="/Jd/shop_jd/Seller/Public/js/bootstrap.min.js"></script>
</body>
</html>