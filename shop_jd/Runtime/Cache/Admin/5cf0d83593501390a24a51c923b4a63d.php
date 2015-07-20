<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <title>后台管理员</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/Jd/shop_jd/Admin/Public/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
 <input type="text" value="1111" id="a" name="a">
     <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
          <!-- jQuery -->
          <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
  <script>
  $(function(){
    var $a=window.parent.document.getElementById('my');
    $('#a').text($a+'222');
  })
  </script>
</body>
</html>