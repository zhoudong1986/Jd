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
    <li class="active" id="my">前台买家</li>
  </ol>
  <nav class="navbar navbar-primary">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">
          <span class="glyphicon glyphicon-th-list"></span>
          &nbsp;&nbsp;买家列表
        </a>

      </div>
      <div class="collapse navbar-collapse" >
        <form class="navbar-form navbar-right" action="/Jd/index.php/Admin/User/index" role="search" method="get">
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
        <td> <strong>买家账号</strong>
        </td>
        <td>
          <strong>买家等级</strong>
        </td>
        <td>
          <strong>头像</strong>
        </td>
        <td>
          <strong>状态</strong>
        </td>
        <td>
          <strong>操作</strong>
        </td>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
          <td scope="row">
            <strong><?php echo ($u['user_id']); ?></strong>
            </td>
            <td>
              <?php echo ($u['user_name']); ?></td>
              <td>
                <?php echo ($u['level']); ?></td>
                <td>
                  <form action="/Jd/index.php/Admin/User/coin" target="photo" id="f<?php echo ($u['user_id']); ?>" method="post" enctype="multipart/form-data">
                    <label for="p<?php echo ($u['user_id']); ?>
                      ">
                      <img src="<?php echo ($u['pic']); ?>
                      " width="50px" height="50px" uid="
                      <?php echo ($u['user_id']); ?>" alt="..." class="img-thumbnail" /></label>
                      <input type="file" name='pic' class="hide" id="p<?php echo ($u['user_id']); ?>
                      ">
                      <input type="hidden" name="id" value="<?php echo ($u['user_id']); ?>"></form>
                  </td>
                  <td>
                    <?php if($u['status'] == 1): ?><button class="btn btn-success " value="0" sid="<?php echo ($u['user_id']); ?>
                        ">
                        <span class="glyphicon glyphicon-ok"></span>
                      </button>
                      <button class="btn btn-default hide" value="1" sid="<?php echo ($u['user_id']); ?>
                        ">
                        <span class="glyphicon glyphicon-lock"></span>
                      </button>
                      <?php else: ?>
                      <button class="btn btn-default" value="1" sid="<?php echo ($u['user_id']); ?>
                        ">
                        <span class="glyphicon glyphicon-lock"></span>
                      </button>
                      <button class="btn btn-success hide" value="0" sid="<?php echo ($u['user_id']); ?>
                        ">
                        <span class="glyphicon glyphicon-ok"></span>
                      </button><?php endif; ?>
                  </td>
                  <td>
                    <a href="/Jd/index.php/Admin/User/getInfo/id/<?php echo ($u['user_id']); ?>
                      " class="btn btn-info ">
                      <span class="glyphicon glyphicon-pencil"></span>
                      资料
                    </a>
                    <a href="/Jd/index.php/Admin/User/editPwd/id/<?php echo ($u['user_id']); ?>
                      /name/
                      <?php echo ($u['user_name']); ?>
                        " class="btn btn-warning  ">
                        <span>修改密码</span>
                      </a>
                      <a href="/Jd/index.php/Admin/User/del/id/<?php echo ($u['user_id']); ?>" class="btn btn-danger ">删除</a>
                    </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                  <td colspan="6" align="right">
                    <?php echo ($pageNav); ?></td>
                  </tr>

                </tbody>
              </table>
              <iframe name="photo" id="photo" src="./coin.html" width="800px" height="200px" frameborder="0"></iframe>

              <script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
              <!-- jQuery -->
              <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
              <script>
          $(function(){
            var $t = $(window.frames["photo"].document).find("#a").val();
            alert($t);
            $('tbody button').click(function(){
              var $flag = false;
              var $status = $(this).attr('value');
              var $id = $(this).attr('sid');
              $.post(
                '<?php echo U("User/status");?>',
                {'status':$status,'id':$id},
                function($msg){
                  if(!$msg){
                    alert('系统忙,请稍后再操作'+$status);
                    location.href = '<?php echo U("User/index");?>';
                  }
                }
                );
              $(this).toggleClass('hide');
              $(this).siblings('button').toggleClass('hide');
            });
            $('tbody label').click(function(){
              var $img = $(this).next();
              var $id = $img.next().val();
              var $fo = '#f' + $id;
              var $image = null;
              $img.change(function(){
                $($fo).submit();
                $image = $(window.frames["photo"].document).find('#a').text();
                setInterval(function(){
                  // alert($image);
                },3000);
              })
            });
          
          })
          </script>
</body>
            </html>