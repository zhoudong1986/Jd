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
      <a href="#">前台买家</a>
    </li>
    <li >
      <a href="#">
        <?php echo ($name); ?></a>
      </li>
      <li class="active">资料</li>
    </ol>
    
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading panel-default">
          <nav class="navbar navbar-primary">
      <div class="container-fluid">
        <div class="navbar-header">
          <a  class="navbar-brand">
            <span class="glyphicon glyphicon-pencil"></span>
            &nbsp;&nbsp;个人资料
          </a>
        </div>
      </div>
    </nav>
        </div>
        <div class="panel-body ">
          <form id="forms" action="/Jd/index.php/Admin/User/doEdit" class="form-horizontal" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2 col-sm-offset-2">用户名:</label>
              <div class="col-sm-5">
                <input type="text" name="name" class="form-control" readonly value="<?php echo ($user['user_name']); ?>">
                </div>
              </div>
              <div class="form-group ">
                <label  class="col-sm-2 col-sm-offset-2 control-label">用户级别:</label>
                <div class="col-sm-5 ">
                  <input type="text" name="level" class="form-control" value="<?php echo ($user['level']); ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="pic" class="control-label col-sm-2 col-sm-offset-2">用户头像:</label>
                <div class="col-sm-5 ">
                  <img src="/Jd/shop_jd/Admin/Public/images/<?php echo ($user['pic']); ?>" width="80px" height="80px" alt="" class="img-thumbnail" />
                  <input type="file" id="pic">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="control-label col-sm-2 col-sm-offset-2">email:</label>
                <div class="col-sm-5">
                  <input type="email" name="email" class="form-control" id="email" value="<?php echo ($user['email']); ?>"></div>
              </div>
              <?php if(($user['status']) == "1"): ?><div class="form-group">
                <label  class="col-sm-2 col-sm-offset-2 control-label">用户状态:</label>
                <div class="col-sm-5">
                  <input type="radio" id="right" name="status" checked value="1">
                  <label for="right" class="control-label">正常使用</label>
                  <input type="radio" id="error" value="0" name="status">
                  <label for="error" class="control-label">已锁定</label>
                </div>
              </div>
              <?php else: ?>
              <div class="form-group">
                <label  class="col-sm-2 col-sm-offset-2 control-label">用户状态:</label>
                <div class="col-sm-7">
                  <input type="radio" id="right" name="status" value="1">
                  <label for="right" class="control-label">正常使用</label>
                  <input type="radio" id="error" value="0" checked name="status">
                  <label for="error" class="control-label" >已锁定</label>
                </div>
              </div><?php endif; ?>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-5">
                  <button class="btn btn-success  btn-lg" id="submit">提交</button>
                  <a href="/Jd/index.php/Admin/User/admin" class="btn btn-danger btn-lg">返回</a>
                </div>
              </div>
              <input type="hidden" name="id" value="<?php echo ($id); ?>">
              </form>
          </div>

        </div>

      </div>
      <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
      <!-- jQuery -->
      <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
      <script>
  </script>
     
</body>
    </html>