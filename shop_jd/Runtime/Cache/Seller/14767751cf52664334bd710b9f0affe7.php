<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/Jd/shop_jd/Seller/Public/images/JD.ico">
    <title>商家客户端-京东商城</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="/Jd/shop_jd/Seller/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/Jd/shop_jd/Seller/Public/css/console.css">

    <!--[if IE 7]>
      <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
   <!--  <link rel="stylesheet" href="/Jd/shop_jdSeller/Public/fonts/" -->

    <!-- ace styles -->

    <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/ace.min.css" />
    <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/ace-skins.min.css" />
    
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="/Jd/shop_jd/Seller/Public/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/Jd/shop_jd/Seller/Public/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/Jd/shop_jd/Seller/Public/js/html5shiv.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/respond.min.js"></script>
    <![endif]-->
    <base target="iframe" />
  </head>

  <body>
  <div style="position:absolute;opacity:0.3;background:black;width:100%;height:100%;display:none;z-index:10" id="bomb"></div>
  <div style="position:absolute;left:635px;top:0px;width:240px;height:140px;z-index:90;border-radius:10px;border:1px solid #5F5959;background:#fff;display:none" id="suerQuit">
    <div style="width:238px;height:50px;font-size:20px;text-align:center;line-height:50px;;">确定真的要退出吗</div>
     <div style="height:90px;width:238px;">
    <button type="button" class="btn btn-danger" style="border-radius:5px;margin:30px 60px 10px 30px;" id="sure">确定</button>
     <button type="button" class="btn btn-success" style="border-radius:5px;margin:-74px 0px 10px 147px;" id="cancel">取消</button>
    </div>
  </div>
  <div id="updatePwd">
      <div class="update"><i class="icon-leaf"></i>&nbsp;修改密码</div>
      <div class="borderIn">
          <form action="" method="" onsubmit="return false;">
            <div class="form-group">
            <label for="exampleInputEmail1">旧密码：</label><span id="pwdOne"></span>
              <input type="password" class="form-control" id="exampleInputEmail1" name="oldPwd" value="">
            </div>
           <div class="form-group">
            <label for="exampleInputPassword1">新密码：</label><span id="pwdTwo"></span>
            <input type="password" class="form-control" id="exampleInputPassword1" name="newPwd" value="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">确认密码：</label><span id="pwdThree"></span>
            <input type="password" class="form-control" id="exampleInputPassword1" name="surePwd" value="" >
          </div>
            <button class="btn btn-success btnone">确认</button>
            <button class="btn btn-danger">取消</button>
         </form>
      </div>
    </div>

  </div>
  <div class="navbar navbar-default" id="navbar">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
          <a href="#" class="navbar-brand">
            <small>
              <i class="icon-leaf"></i>
              京东商家后台管理系统
            </small>
          </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">
            <li class="grey">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-tasks"></i>
                <span class="badge badge-grey">4</span>
              </a>
              <<!-- button data-toggle="dropdown" class="dropdown-toggle">
                <i class="icon-tasks"></i>
                <span class="badge badge-grey">4</span>
              </button> -->

              <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="icon-ok"></i>
                  还有4个任务完成
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">软件更新</span>
                      <span class="pull-right">65%</span>
                    </div>

                    <div class="progress progress-mini ">
                      <div style="width:65%" class="progress-bar "></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">硬件更新</span>
                      <span class="pull-right">35%</span>
                    </div>

                    <div class="progress progress-mini ">
                      <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">单元测试</span>
                      <span class="pull-right">15%</span>
                    </div>

                    <div class="progress progress-mini ">
                      <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">错误修复</span>
                      <span class="pull-right">90%</span>
                    </div>

                    <div class="progress progress-mini progress-striped active">
                      <div style="width:90%" class="progress-bar progress-bar-success"></div>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    查看任务详情
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="purple">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-bell-alt icon-animated-bell"></i>
                <span class="badge badge-important">8</span>
              </a>

              <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="icon-warning-sign"></i>
                  8条通知
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-xs no-hover btn-pink icon-comment"></i>
                        新闻评论
                      </span>
                      <span class="pull-right badge badge-info">+12</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="btn btn-xs btn-primary icon-user"></i>
                    切换为编辑登录..
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                        新订单
                      </span>
                      <span class="pull-right badge badge-success">+8</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <div class="clearfix">
                      <span class="pull-left">
                        <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                        粉丝
                      </span>
                      <span class="pull-right badge badge-info">+11</span>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="#">
                    查看所有通知
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="green">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="icon-envelope icon-animated-vertical"></i>
                <span class="badge badge-success">5</span>
              </a>

              <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="icon-envelope-alt"></i>
                  5条消息
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar">
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Alex:</span>
                        不知道写啥 ...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>1分钟以前</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar">
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Susan:</span>
                        不知道翻译...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>20分钟以前</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar">
                    <span class="msg-body">
                      <span class="msg-title">
                        <span class="blue">Bob:</span>
                        到底是不是英文 ...
                      </span>

                      <span class="msg-time">
                        <i class="icon-time"></i>
                        <span>下午3:15</span>
                      </span>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="inbox.html">
                    查看所有消息
                    <i class="icon-arrow-right"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="light-blue">
              <a data-toggle="dropdown"  class="dropdown-toggle" href="#">
                <img class="nav-user-photo" src="/Jd/shop_jd/Seller/Public/images/user.jpg" alt="<?php echo session('sname');?>'s Photo">
                <span class="user-info">
                  <small>欢迎光临,</small>
                  <?php echo session('sname');?>               </span>

                <i class="icon-caret-down"></i>
              </a>

              <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a id="setUp">
                    <i class="icon-cog"></i>
                    设置
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="icon-user"></i>
                    个人资料
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a id="quit" style="cursor:pointer">
                    <i class="icon-off"></i>
                    退出
                  </a>
                </li>
              </ul>
            </li>
          </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
      </div><!-- /.container -->
    </div>
   
<!-- 头部节束 -->

<!-- 主体内容 -->
<div class="main-container" id="main-container">
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>

      <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
          <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
          <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
          </script>

          <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
              <button class="btn btn-success">
                <i class="icon-signal"></i>
              </button>

              <button class="btn btn-info">
                <i class="icon-pencil"></i>
              </button>

              <button class="btn btn-warning">
                <i class="icon-group"></i>
              </button>

              <button class="btn btn-danger">
                <i class="icon-cogs"></i>
              </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
              <span class="btn btn-success"></span>

              <span class="btn btn-info"></span>

              <span class="btn btn-warning"></span>

              <span class="btn btn-danger"></span>
            </div>
          </div><!-- #sidebar-shortcuts -->

          <ul class="nav nav-list">
            <li class="active">
              <a href="<?php echo U(copy);?>">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 控制台 </span>
              </a>
            </li>
          </ul>
          <!-- /.nav-list -->
          <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
          </div>

          <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
          </script>
        </div>

        <!-- /.main-content -->
        <!-- 设置按键开始 -->
        <div class="ace-settings-container" id="ace-settings-container">
          <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="icon-cog bigger-150"></i>
          </div>

          <div class="ace-settings-box" id="ace-settings-box">
            <div>
              <div class="pull-left">
                <select style="display: none;" id="skin-colorpicker" class="hide">
                  <option data-skin="default" value="#438EB9">#438EB9</option>
                  <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                  <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                  <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select><div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" href="#" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>
              </div>
              <span>&nbsp; 选择皮肤</span>
            </div>

            <div>
              <input class="ace ace-checkbox-2" id="ace-settings-navbar" type="checkbox">
              <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
            </div>

            <div>
              <input class="ace ace-checkbox-2" id="ace-settings-sidebar" type="checkbox">
              <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
            </div>

            <div>
              <input class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" type="checkbox">
              <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
            </div>

            <div>
              <input class="ace ace-checkbox-2" id="ace-settings-rtl" type="checkbox">
              <label class="lbl" for="ace-settings-rtl">切换到左边</label>
            </div>

            <div>
              <input class="ace ace-checkbox-2" id="ace-settings-add-container" type="checkbox">
              <label class="lbl" for="ace-settings-add-container">
                切换窄屏
                <b></b>
              </label>
            </div>
          </div>
        </div> <!-- /#ace-settings-container 设置按键节束 -->
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
              try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
              <li>
                <i class="icon-home home-icon"></i>
                <a href="#">首页</a>
              </li>
              <li class="active">控制台</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
                  <i class="icon-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- #nav-search -->
        </div>
        <!-- 右边开始 -->
        <div class="page-content">
            <iframe src="<?php echo U('copy');?>"  width="1232" align="center" height="800"  onload="Javascript:SetCwinHeight(this)" frameborder="0" scrolling="no" name='iframe' style='position:relative;left:170px;top:-65px;'></iframe>
        </div>
        <!-- 右边节束 -->
      </div><!-- /.main-container-inner -->
      
      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
      </a>
    </div>
    <!-- 主体内容节束 -->
    <!-- <div class="jumbotron" style="position:relative;left:170px;top:-65px;width:200px;height:200px;">
      <h1>Hello, world!</h1>
        <p>确定真的要退出吗</p>
      <p><a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a></p>
    </div> -->

    <script>

//     function SetCwinHeight(obj){
//       var iframe=obj;
//   if (document.getElementById)
//   {
//     if (iframe && !window.opera)
//     {
//       if (iframe.contentDocument && iframe.contentDocument.body.offsetHeight)
//         iframe.height = iframe.contentDocument.body.offsetHeight;
//       else if(iframeDocument && iframe.Document.body.scrollHeight)
//         iframe.height = iframe.Document.body.scrollHeight;
//     }
//   }
// }
    </script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery-2.0.3.min.js"></script> 
    <script type="text/javascript">
      window.jQuery || document.write("<script src='/Jd/shop_jd/Seller/Public/js/jquery-2.0.3.min.js'>"+"<"+"script>");
    </script>
    <script type="text/javascript">
      if("ontouchend" in document) document.write("<script src='/Jd/shop_jd/Seller/Public/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
    </script>
    <script type="text/javascript" src="/Jd/shop_jd/Seller/Public/js/console.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/bootstrap.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/typeahead-bs2.min.js"></script>
     <script src="/Jd/shop_jd/Seller/Public/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery.slimscroll.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/jquery.sparkline.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/flot/jquery.flot.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/flot/jquery.flot.pie.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/flot/jquery.flot.resize.min.js"></script>

    <!-- ace scripts -->

    <script src="/Jd/shop_jd/Seller/Public/js/ace-elements.min.js"></script>
    <script src="/Jd/shop_jd/Seller/Public/js/ace.min.js"></script>
    <script>
      $(function(){

        // 登录认证事件
        $('#quit').click(function(){
          $('#bomb').show();
          $('#suerQuit').show().animate({top:'150px'},500);
        });
        $('#cancel').click(function(){
         $('#suerQuit').css('top','0px').hide();
         $('#bomb').hide();
        });
        $('#sure').click(function(){
            $.ajax({
              url:"<?php echo U('Login/logout');?>",
              type:'post',
              data:{'sure':'1'},
              success:function(data){
                if(data=='2'){
                  window.location.href="<?php echo U('Login/index');?>";
                }else if(data=='3'){
                  window.location.href="<?php echo U('Index/index');?>";
                }
          }
        })
          
        });

        // 密码修改事件
         $('.borderIn button').first().click(function() {
           $.ajax({
             url:"<?php echo U('Login/update');?>",
             type:'post',
            data:{'oldPwd':$('input[name="oldPwd"]').val(),'newPwd':$('input[name="newPwd"]').val(),'surePwd':$('input[name="surePwd"]').val()},
            success:function(data){
              // alert(data);
              if(data=='0'){
                 $('#pwdOne').html('新密码与确认密码输入不一致');
            }else if(data=='1'){
              $('#pwdOne').html('密码修改成功');
            }else if(data=='2'){
              $('#pwdOne').html('旧密码输入不正确');
            }
          }

          })
      })

      });
      
     
      //   // window.location.href="<?php echo U('Login/index');?>"
      // });
    </script>
</body>
</html>