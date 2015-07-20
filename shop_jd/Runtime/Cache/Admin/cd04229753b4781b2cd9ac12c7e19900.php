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
    <li class="active">后台管理员</li>
  </ol>
  <nav class="navbar navbar-primary">
    <div class="container-fluid">
      <div class="navbar-header">
        <a  class="navbar-brand">
          <span class="glyphicon glyphicon-th-list"></span>
          &nbsp;&nbsp;管理员列表
          <?php if($_SESSION['role']== 1): ?><button id="add" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>添加</button><?php endif; ?>
        </a>
        
      </div>
      <div class="collapse navbar-collapse" >
        <form class="navbar-form navbar-right" action="/Jd/index.php/Admin/Member/admin" role="search" method="get">
          <div class="form-group">
            <label for="search" class="control-label">账号:</label>
            <input type="text" id="search" class="form-control" name="search"></div>
          <button type="button" class="btn  btn-primary">搜索</button>
        </form>
      </div>
    </div>
  </nav>

  <table style="text-align:center"  class="table  table-bordered table-hover table-striped" >
    <thead align="center">
      <tr class="info">
        <td> <strong>ID</strong>
        </td>
        <td> <strong>管理员账号</strong>
        </td>
        <td>
          <strong>权限</strong>
        </td>
        <td>
          <strong>状态</strong>
        </td>
        <td>
          <strong>最后登录时间</strong>
        </td>
        <td>
          <strong>操作</strong>
        </td>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($admins)): $i = 0; $__LIST__ = $admins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?><tr>
          <td scope="row">
            <strong><?php echo ($ad['admin_id']); ?></strong>
            </td>
            <td>
              <?php echo ($ad['admin_name']); ?></td>
              <td>
                <?php if($ad['role'] == 1): ?>超级管理员
                  <?php elseif($ad['role'] == 2): ?>
                  管理员
                  <?php else: ?>
                  网络编辑<?php endif; ?>
              </td>
              <td>
                <button class="btn <?php echo ($ad['right']); ?>
                  ">
                  <span class="<?php echo ($ad['status']); ?>"></span>
                </button>
              </td>
              <td>
                <?php echo ($ad['login_time']); ?></td>
                <td>
                  <a href="/Jd/index.php/Admin/Member/edit/id/<?php echo ($ad['admin_id']); ?>
                    " class="btn btn-info ">
                    <span class="glyphicon glyphicon-pencil"></span>
                    资料
                  </a>
                  <?php if($_SESSION['role']< $ad['role']): ?><span>
                      <a href=""  admin_id="<?php echo ($ad['admin_id']); ?>
                        " class="btn btn-success ">
                        <span>
                          <?php echo ($ad['button']); ?></span>
                        </a>

                      </span><?php endif; ?>
                    <?php if($_SESSION['role']< $ad['role']): ?><a href="/Jd/index.php/Admin/Member/editPwd/id/<?php echo ($ad['admin_id']); ?>/name/<?php echo ($ad['admin_name']); ?>" class="btn btn-warning  ">
                        <span>修改密码</span>
                      </a><?php endif; ?>
                    <?php if(($ad['role'] != 1) AND ($_SESSION['role']== 1)): ?><a href="/Jd/index.php/Admin/Member/del/id/<?php echo ($ad['admin_id']); ?>" class="btn btn-danger ">删除</a><?php endif; ?>

                  </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              <tr>
                <td colspan="6" align="right">
                  <?php echo ($pageNav); ?>
                    <!--  <nav>
                    <ul class="pagination pagination-md">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                      <li>
                        <a href="#">5</a>
                      </li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  -->
                </td>
              </tr>

            </tbody>
          </table>

          <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
          <!-- jQuery -->
          <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
          <script>
  $(function(){
    $('#add').click(function(){
      location.href = '/Jd/index.php/Admin/Member/add';
    });
    $('tbody span a').click(function(){
      var $admin_id = $(this).attr('admin_id');
      var $status = $(this).children('span').text();
      $.post(
        "<?php echo U('Member/status');?>",
        {'admin_id':$admin_id,'status':$status},
        function($msg){
          if(!$msg){
            alert('操作失败');
          }
        }
        );
     
    });
  
  })
  </script>
</body>
        </html>