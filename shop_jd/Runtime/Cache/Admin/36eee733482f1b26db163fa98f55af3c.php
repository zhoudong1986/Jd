<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <title>后台管理员</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/Jd/shop_jd/Admin/Public/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
  <ol class="breadcrumb">
    <li>
      <a href="#">会员管理</a>
    </li>
    <li ><a href="#">后台管理员</a></li>
    <li ><a href="#"><?php echo ($name); echo ($id); ?></a></li>
    <li class="active">密码修改</li>
  </ol>
  <nav class="navbar navbar-primary">
    <div class="container-fluid">
      <div class="navbar-header">
        <a  class="navbar-brand">
          <span class="glyphicon glyphicon-pencil"></span>
          &nbsp;&nbsp;填写密码
        </a>
      </div>
    </div>
  </nav>
  <div class="container">
    <form id="forms" action="/Jd/index.php/Admin/Member/doEditPwd" class="form-horizontal">
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2 col-sm-offset-2">新密码:</label>
          <div class="col-sm-3">
            <input type="password" name="pwd" class="form-control" id="pwd">
          </div>
        </div>
        <div class="form-group">
          <label for="repwd" class="control-label col-sm-2 col-sm-offset-2">确认密码<?php echo ($id); ?>:</label>
          <div class="col-sm-3">
            <input type="password" name="repwd" class="form-control" id="repwd">
          </div>
          <label id="tips" for="repwd" class="sr-only"><strong class="lead text-danger">两次密码不一致</strong></label>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-4 col-sm-3">
          <a class="btn btn-success  btn-lg" id="submit">提交</a>
          <a class="btn btn-danger btn-lg" href="/Jd/index.php/Admin/Member/admin">取消</a>
        </div>
        </div>
        <input type="hidden" name="id" value="<?php echo ($id); ?>">
      </form>
  </div>
     <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
          <!-- jQuery -->
          <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
  <script>
  $(function(){
    $('input').focus(function(){
      $('#tips').addClass('sr-only');
      $('.form-group').removeClass('has-error');
    });
    $('#submit').click(function(){
      var $pwd = $('#pwd').val();
      var $repwd = $('#repwd').val();
      if($pwd == '' || $repwd == ''){
        return false;
      }
      if($pwd != $repwd){
        $('#tips').removeClass('sr-only');
        $('.form-group').addClass('has-error');
      }else{
        $('#forms').submit();
      }
    })
      
  })
  </script>
</body>
</html>