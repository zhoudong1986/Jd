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
    <li >
      <a href="#">后台管理员</a>
    </li>
    <li class="active">添加管理员</li>
  </ol>

  <div class="container-fluid">
    <div class="panel">
      <div class="panel-heading panel-default">
        <nav class="navbar navbar-primary">
          <div class="container-fluid">
            <div class="navbar-header">
              <a  class="navbar-brand">
                <span class="glyphicon glyphicon-pencil"></span>
                &nbsp;&nbsp;填写管理员信息
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="panel-body ">
        <form id="forms" action="/Jd/index.php/Admin/Member/doAdd" class="form-horizontal" onsubmit='return false'>
          <div id="bor" class="form-group">
            <label for="name" class="control-label col-sm-2 col-sm-offset-2">用户名:</label>
            <div class="col-sm-5">
              <input type="text" id="name" name="name" class="form-control" value=""></div>
          </div>
          <div class="form-group">
            <label for="pwd" class="control-label col-sm-2 col-sm-offset-2">密码:</label>
            <div class="col-sm-5">
              <input type="password" name="pwd" class="form-control" id="pwd" value=""></div>
          </div>

          <div class="form-group">
            <label for="repwd" class="control-label col-sm-2 col-sm-offset-2">确认密码:</label>
            <div class="col-sm-5">
              <input type="password" name="repwd" class="form-control" id="repwd" value=""></div>
          </div>
          <div class="form-group">
            <label for="email" class="control-label col-sm-2 col-sm-offset-2">email:</label>
            <div class="col-sm-5">
              <input type="email" name="email" class="form-control" id="email" value=""></div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 col-sm-offset-2 control-label">用户状态:</label>
            <div class="col-sm-7">
              <input type="radio" id="right" name="status" checked value="1">
              <label for="right" class="control-label">正常使用</label>
              <input type="radio" id="error" value="0" name="status">
              <label for="error" class="control-label">已锁定</label>
            </div>
          </div>
          <div class="form-group ">
            <label  class="col-sm-2 col-sm-offset-2 control-label">用户级别:</label>
            <div class="col-sm-7 ">
              <input type="radio" id="three" name="role" value="3">
              <label for="three" class="control-label">网络编辑</label>
              <input type="radio" id="two" value="2" name="role">
              <label for="two" class="control-label">管理员</label>
              <input type="radio" id="one" value="1" checked name="role">
              <label for="one" class="control-label">超级管理员</label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-5">
              <button class="btn btn-success btn-lg" id="submit">提交</button>
              <a href="/Jd/index.php/Admin/Member/admin" class="btn btn-danger btn-lg">返回</a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
    <!-- jQuery -->
    <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
    <script>
    $(function(){
      $('input').focus(function(){
        $(this).parent('div').parent('div').removeClass('has-error');
      });
      $('#submit').click(function(){
        var $name = $('#name').val();
        var $pwd = $('#pwd').val();
        var $repwd = $('#repwd').val();
        if($name == ''){
          $('#name').parent('div').parent('div').addClass('has-error');
          return false;
        }
        if($pwd == ''){
          $('#pwd').parent('div').parent('div').addClass('has-error');
          return false;
        }
        if($repwd == ''){
          $('#repwd').parent('div').parent('div').addClass('has-error');
          return false;
        }
        if($pwd != $repwd){
          alert('两次密码不一致');
          return false;
        }
        $('#forms').removeAttr('onsubmit');
        

      });
    })
    </script>

</body>
  </html>