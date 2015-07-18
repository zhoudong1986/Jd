<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Bootstrap响应式后台管理系统模版Mac - 代码家园-www.daimajiayuan.com</title>
  <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文,后台管理系统模版,后台模版下载,后台管理系统,后台管理模版" />
  <meta name="description" content="代码家园-www.daimajiayuan.com提供Bootstrap模版,后台管理系统模版,后台管理界面,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">
  <base target="adminFrame" />
  <!-- Stylesheets -->
  <link href="/Jd/shop_jd/Admin/Public/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/font-awesome.css">
  <!-- jQuery UI -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/jquery-ui.css">
  <!-- Calendar -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/prettyPhoto.css">
  <!-- Star rating -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/jquery.cleditor.css">
  <!-- Uniform -->
  <!-- <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/uniform.default.css">
  -->
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="/Jd/shop_jd/Admin/Public/css/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="/Jd/shop_jd/Admin/Public/css/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="/Jd/shop_jd/Admin/Public/css/widgets.css" rel="stylesheet">

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/Jd/shop_jd/Admin/Public/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png"></head>

<body>

  <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
        <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span>菜单</span>
        </button>
        <!-- Site name for smallar screens -->
        <a href="index.html" class="navbar-brand hidden-lg">首页</a>
      </div>

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

        <ul class="nav navbar-nav">

          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="label label-success"> <i class="icon-cloud-upload"></i>
              </span>
              上传到云服务器
            </a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>图片上传进度</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">完成40%</span>
                  </div>
                </div>

                <hr />

                <!-- Progress bar -->
                <p>视频上传进度</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">完成80%</span>
                  </div>
                </div>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">查看所有</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="label label-danger"> <i class="icon-refresh"></i>
              </span>
              同步到服务器
            </a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "icon-spin" class to rotate icon. -->
                <p>
                  <span class="label label-info">
                    <i class="icon-cloud"></i>
                  </span>
                  同步会员到服务器
                </p>
                <hr />
                <p>
                  <span class="label label-warning">
                    <i class="icon-cloud"></i>
                  </span>
                  同步书签到云端
                </p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">查看所有</a>
                </div>

              </li>
            </ul>
          </li>

        </ul>

        <!-- Search form -->
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search"></div>
        </form>
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-user"></i>
              管理员 <b class="caret"></b>
            </a>

            <!-- Dropdown menu -->
            <ul class="dropdown-menu " >
              <!-- <div class="btn-group-vertical">
              -->&nbsp;&nbsp;
              <a href="" id=""  data-toggle="modal" data-target=".person-modal">
                <span class="glyphicon glyphicon-user"></span>
                个人资料
              </a>
              <br />
              &nbsp;&nbsp;
              <a href="" id=""  data-toggle="modal" data-target=".pwd-modal">
                <span class="glyphicon glyphicon-pencil"></span>
                修改密码
              </a>
              <br />
              &nbsp;&nbsp;
              <a id="" href="" data-toggle="modal" data-target=".logout-modal">
                <span class="glyphicon glyphicon-off"></span>
                退出
              </a>
              <!-- </div>
              -->
              <div class="modal fade person-modal " tabindex="-1">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-sm-5 col-sm-offset-4" >
                          <h3>系统提示</h3>
                        </div>
                        <div class="col-sm-1 col-sm-offset-1">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <hr />
                        </div>
                      </div>
                      <div class="row" style="font-size:20px;padding-top:50px;padding-bottom:80px;">
                        <span class="glyphicon glyphicon-hand-right col-sm-offset-2 col-sm-1"></span>
                        <span class="col-sm-8">你确定要退出吗？</span>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                          <button type="button" class="btn btn-primary">确定</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.modal-content --> </div>
                <!-- /.modal-dialog --> </div>
              <!-- /.modal -->
              <div class="modal fade pwd-modal " tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <form action="" class="form-horizontal">
                        <div class="form-group">
                          <div class="col-sm-11" style="text-align:center" >
                            <h3>密码修改</h3>
                          </div>
                          <div class="col-sm-1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <hr />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="oPwd" class="col-sm-3 col-sm-offset-2  control-label">原密码:</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" name="oPwd" id="oPwd" onfocus="tips(this);"></div>
                          <div class="col-sm-2">
                            <label for="oPwd" id="oTips" class=" control-label text-danger hide"></label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="Pwd" class="col-sm-3 col-sm-offset-2 control-label">新密码:</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" name="Pwd" id="Pwd" onfocus="tips(this);"></div>
                          <div class="col-sm-3">
                            <label for="Pwd" id="Tips" class="control-label text-danger hide"></label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="rePwd" class="col-sm-3 col-sm-offset-2 control-label" >确认密码:</label>
                          <div class="col-sm-4">
                            <input type="password" class="form-control" name="rePwd" id="rePwd" onfocus="tips(this);"></div>
                          <div class="col-sm-3">
                            <label for="rePwd" id="reTips" class="control-label text-danger hide"></label>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="button" id="edit" class="btn btn-success btn-lg col-sm-3 col-sm-offset-2" onclick="doEdit();">提交修改</button>
                          <button type="button" class="btn btn-danger col-sm-3 btn-lg col-sm-offset-1" id="cl" data-dismiss="modal">取消</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content --> </div>
                <!-- /.modal-dialog --> </div>
              <!-- /.modal -->

              <div class="modal fade logout-modal " tabindex="-1">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-4">
                          <h3>系统提示</h3>
                        </div>
                        <div class="col-sm-1">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <span class="col-sm-12">
                          <hr />
                        </span>
                      </div>
                      <div style="font-size:20px;padding-top:30px;padding-bottom:50px;" class="row">
                        <span class="glyphicon glyphicon-hand-right col-sm-offset-2 col-sm-1"></span>
                        <span class="col-sm-8">你确定要退出吗？</span>
                      </div>
                      <div class="row">
                        <button type="button" onclick="logout();" class="btn btn-primary btn-lg col-sm-4 col-sm-offset-2">确定</button>
                        <button type="button" class="btn btn-default btn-lg col-sm-4 col-sm-offset-1" data-dismiss="modal">取消</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.modal-content --> </div>
                <!-- /.modal-dialog --> </div>
              <!-- /.modal --> </ul>
          </li>

        </ul>
      </nav>

    </div>
  </div>

  <!-- Header starts -->
  <header>
    <div class="container-fluid">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1>
              <a href="#">
                Mac
                <span class="bold"></span>
              </a>
            </h1>
            <p class="meta">后台管理系统</p>
          </div>
          <!-- Logo ends --> </div>

        <!-- Button section -->
        <div class="col-md-4">

          <!-- Buttons -->
          <ul class="nav nav-pills">

            <!-- Comment button with number of latest comments count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-comments"></i>
                聊天
                <span   class="label label-info">6</span>
              </a>

              <ul class="dropdown-menu">
                <li>
                  <!-- Heading - h5 -->
                  <h5>
                    <i class="icon-comments"></i>
                    聊天
                  </h5>
                  <!-- Use hr tag to add border -->
                  <hr />
                </li>
                <li>
                  <!-- List item heading h6 -->
                  <h6>
                    <a href="#">你好 :)</a>
                    <span class="label label-warning pull-right">10:42</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <h6>
                    <a href="#">你怎么样?</a>
                    <span class="label label-warning pull-right">20:42</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <h6>
                    <a href="#">你在干撒呢?</a>
                    <span class="label label-warning pull-right">14:42</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <div class="drop-foot">
                    <a href="#">查看所有</a>
                  </div>
                </li>
              </ul>
            </li>

            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-envelope-alt"></i>
                收件箱
                <span class="label label-primary">6</span>
              </a>

              <ul class="dropdown-menu">
                <li>
                  <!-- Heading - h5 -->
                  <h5>
                    <i class="icon-envelope-alt"></i>
                    消息
                  </h5>
                  <!-- Use hr tag to add border -->
                  <hr />
                </li>
                <li>
                  <!-- List item heading h6 -->
                  <h6>
                    <a href="#">你好啊?</a>
                  </h6>
                  <!-- List item para -->
                  <p>最近咋样啊...</p>
                  <hr />
                </li>
                <li>
                  <h6>
                    <a href="#">今天很好啊?</a>
                  </h6>
                  <p>相当好...</p>
                  <hr />
                </li>
                <li>
                  <div class="drop-foot">
                    <a href="#">查看所有</a>
                  </div>
                </li>
              </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="icon-user"></i>
                用户
                <span   class="label label-success">6</span>
              </a>

              <ul class="dropdown-menu">
                <li>
                  <!-- Heading - h5 -->
                  <h5>
                    <i class="icon-user"></i>
                    用户
                  </h5>
                  <!-- Use hr tag to add border -->
                  <hr />
                </li>
                <li>
                  <!-- List item heading h6-->
                  <h6>
                    <a href="#">Ravi Kumar</a>
                    <span class="label label-warning pull-right">免费</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <h6>
                    <a href="#">Balaji</a>
                    <span class="label label-important pull-right">高级</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <h6>
                    <a href="#">Kumarasamy</a>
                    <span class="label label-warning pull-right">免费</span>
                  </h6>
                  <div class="clearfix"></div>
                  <hr />
                </li>
                <li>
                  <div class="drop-foot">
                    <a href="#">查看所有</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>

        </div>

        <!-- Data section -->

        <div class="col-md-4">
          <div class="header-data">

            <!-- Traffic data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with red background -->
                <i class="icon-signal bred"></i>
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p>
                  <a href="#">7000</a> <em>访问</em>
                </p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="icon-user bblue"></i>
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p>
                  <a href="#">3000</a> <em>用户</em>
                </p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with green background -->
                <i class="icon-money bgreen"></i>
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p>
                  <a href="#">5000</a>
                  <em>订单</em>
                </p>
              </div>
              <div class="clearfix"></div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- Header ends -->

  <!-- Main content starts -->

  <div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-dropdown">
        <a href="#">导航</a>
      </div>

      <!--- Sidebar navigation -->
      <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
      <ul id="nav">
        <!-- Main menu with font awesome icon -->
        <li>
          <a href="index.html" class="open">
            <i class="glyphicon glyphicon-home"></i>
            首页
          </a>
          <!-- Sub menu markup 
            <ul>
          <li>
            <a href="#">Submenu #1</a>
          </li>
          <li>
            <a href="#">Submenu #2</a>
          </li>
          <li>
            <a href="#">Submenu #3</a>
          </li>
        </ul>
        -->
      </li>
      <li class="has_sub">
        <a href="#">
          <i class="icon-list-alt"></i>
          会员管理
          <span class="pull-right">
            <i class="icon-chevron-right"></i>
          </span>
        </a>
        <ul>
          <li>
            <a href="">前台买家</a>
          </li>
          <li>
            <a href="">前台卖家</a>
          </li>
          <li>
            <a href="<?php echo U('Member/admin');?>" >后台管理员</a>
          </li>
        </ul>
      </li>
      <li class="has_sub">
        <a href="#">
          <i class="icon-file-alt"></i>
          页面模块1
          <span class="pull-right">
            <i class="icon-chevron-right"></i>
          </span>
        </a>
        <ul>
          <li>
            <a href="">表单Post</a>
          </li>
          <li>
            <a href="">登录页</a>
          </li>
          <li>
            <a href="" >注册页面</a>
          </li>
          <li>
            <a href="" >帮助页</a>
          </li>
          <li>
            <a href="">购物清单</a>
          </li>
          <li>
            <a href="" >个人资料</a>
          </li>
          <li>
            <a href="gallery.html">相册页面</a>
          </li>
        </ul>
      </li>
      <li class="has_sub">
        <a href="#">
          <i class="icon-file-alt"></i>
          页面模块2
          <span class="pull-right">
            <i class="icon-chevron-right"></i>
          </span>
        </a>
        <ul>
          <li>
            <a href="media.html">媒体</a>
          </li>
          <li>
            <a href="statement.html">描述</a>
          </li>
          <li>
            <a href="error.html">错误</a>
          </li>
          <li>
            <a href="error-log.html">错误日志</a>
          </li>
          <li>
            <a href="calendar.html">日历</a>
          </li>
          <li>
            <a href="grid.html">网格</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="charts.html">
          <i class="icon-bar-chart"></i>
          图表
        </a>
      </li>
      <li>
        <a href="tables.html">
          <i class="icon-table"></i>
          表格
        </a>
      </li>
      <li>
        <a href="forms.html">
          <i class="icon-tasks"></i>
          表单
        </a>
      </li>
      <li>
        <a href="ui.html">
          <i class="icon-magic"></i>
          UI图标
        </a>
      </li>
      <li>
        <a href="calendar.html">
          <i class="icon-calendar"></i>
          日历
        </a>
      </li>
    </ul>
  </div>

  <!-- Sidebar ends -->

  <!-- Main bar -->
  <div class="mainbar">
    <!-- Page heading -->
    
    <iframe id="fram" src="<?php echo U('copyIndex');?>" width="1190" height="800" frameborder="no" name="adminFrame" border="0"  scrolling="no"></iframe>
    <!-- Matter -->

    <!-- Matter ends --> </div>

  <!-- Mainbar ends -->
  <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <!-- Copyright info -->
        <p class="copy">
          Copyright &copy; 2012 |
          <a href="#">Your Site</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<img src="" id="myImg" />
<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop">
  <a href="#">
    <i class="icon-chevron-up"></i>
  </a>
</span>

<!-- JS -->
<script src="/Jd/shop_jd/Admin/Public/js/jquery-1.10.2.min.js"></script>
<!-- jQuery -->
<script src="/Jd/shop_jd/Admin/Public/js/bootstrap.min.js"></script>
<!-- Bootstrap -->
<!-- <script src="/Jd/shop_jd/Admin/Public/js/jquery.js"></script>
-->
<!-- <script src="/Jd/shop_jd/Admin/Public/js/bootstrap.js"></script>
-->
<script src="/Jd/shop_jd/Admin/Public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/fullcalendar.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.rateit.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.prettyPhoto.js"></script>

<!-- jQuery Flot -->
<script src="/Jd/shop_jd/Admin/Public/js/excanvas.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.flot.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.flot.resize.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.flot.pie.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="/Jd/shop_jd/Admin/Public/js/jquery.noty.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/default.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/bottom.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/topRight.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/top.js"></script>
<!-- jQuery Notification ends -->
<script src="/Jd/shop_jd/Admin/Public/js/jquery.cleditor.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/sparklines.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/bootstrap-datetimepicker.min.js"></script>
<!-- <script src="/Jd/shop_jd/Admin/Public/js/jquery.uniform.min.js"></script>
-->
<script src="/Jd/shop_jd/Admin/Public/js/bootstrap-switch.min.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/filter.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/charts.js"></script>
<script src="/Jd/shop_jd/Admin/Public/js/custom.js"></script>

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */
    $('#logout').click(function(){
      alert(11);
      $('#logoutbt').trigger('click');
    });
    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});
function doEdit(){
    var $logoutHandle = '<?php echo U("Logout/editPwd");?>';
    var $oPwd = $('#oPwd').val();
    var $Pwd = $('#Pwd').val();
    var $rePwd = $('#rePwd').val();
    var $flag = true;
    if($oPwd == ''){
      $flag = false;
      $('#oTips').removeClass('hide');
      $('#oTips').html('请输入原密码');
      return false;
    }
    if($Pwd == ''){
      $flag = false;
      $('#Tips').removeClass('hide');
      $('#Tips').html('密码不能为空');
      return false;
    }
    if($rePwd == ''){
      $flag = false;
      $('#reTips').removeClass('hide');
      $('#reTips').html('请再次输入密码');
      return false;
    }
    if($flag){
      $.post(
        $logoutHandle,
        {'oPwd':$oPwd,'Pwd':$Pwd,'rePwd':$rePwd},
        function($msg){
          switch($msg){
            case 'oPwd':
              $('#oTips').removeClass('hide');
              $('#oTips').html('密码错误');
              break;
            case 'rePwd':
              $('#Tips').removeClass('hide');
              $('#Tips').html('两次密码不一致');
              break;
            case 'Pwd':
              alert('修改密码成功,鉴于您账户的安全,请点击确认重新登录');
              location.href = "<?php echo U('Login/index');?>";
              break;
            case 'other':
              $('$cl').trigger('click');
              alert('修改失败');
              break;
          }
        }
      );
    }
}
$('#cl').click(function(){
  tips(this);
  $('#oPwd').val('');
  $('#Pwd').val('');
  $('#rePwd').val('');
});
function tips(obj){
  $(obj).parent().next().children('label').addClass('hide');
}
document.onkeydown = function(event){
  var e = event || window.event;
  if(e.keyCode == 13){
    $('#edit').trigger('click');
  }
}
function logout(){
  location.href = '<?php echo U("Logout/logout");?>';
}
/*$('#nav>li>ul a').click(function(){
  var $ifm = document.getElementsByTagName("iframe")[0];
  var $con = $ifm.contentWindow;
  var $height = $con.document.body.clientHeight;
  $('#fram').attr('height',$height);
  alert($('#fram').attr('height'));
});*/
/* Curve chart ends */
</script>

</body>
</html>