<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>测试轮循接口</title>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
</head>
<body>
  <h1>测试轮循接口</h1>
  
  消息类型: <select name="" id="msgType">
    <option value="0" disabled="disabled" selected="selected">请选择</option>
    <option value="1">社区提醒</option>
    <option value="2">系统通知</option>
    <option value="3">京东公告</option>
  </select>
  <input type="button" id="sub" value="+1"/>
</body>
</html>
<script>
  $('#sub').click(function(){
    var $value = $('#msgType').val();
   if($value){
     $.ajax({
      url:'/index.php/Home/Test/actMsg',
      type:'post',
      data:{type:$value}
     });
    }
  });
</script>