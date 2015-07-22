<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>京东-欢迎登录</title>
    <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/login.css" media="all">
    <script src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
    <script src="/shop_jd/Home/Public/js/login.js"></script>
</head>
<body>
    <div class="w">
        <div id="logo">
            <a href="http://www.jd.com/" clstag="pageclick|keycount|20150112ABD|45">
                <img src="/shop_jd/Home/Public/images/logo-201305-b.png" alt="京东" height="60" width="170"></a> <b></b>
        </div>
    </div>
    <div id="content">
        <div class="login-wrap">
            <div class="w">
                <div class="login-form">
                    <div class="login-box">
                        <div class="mt">
                            <h1>京东会员</h1>
                            <div class="extra-r">
                                <div class="regist-link">
                                    <a href="/index.php/Home/Index/register" target="_top"> <b></b>
                                        立即注册
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="msg-wrap">
                            <div class="msg-warn">
                                <b></b>
                                公共场所不建议自动登录，以防账号丢失
                            </div>
                            <div style="display: none;" class="msg-error hide">
                                <b></b>
                            </div>
                        </div>
                        <div class="mc">
                            <div class="form">
                                <form action="https://passport.jd.com/uc/login?ReturnUrl=http%3A//www.jd.com/" id="formlogin" method="post" onsubmit="return false;">
                                    <input id="uuid" name="uuid" value="3266f340-1013-4299-8194-17004fd94308" type="hidden">
                                    <input name="machineNet" id="machineNet" value="" class="hide" type="hidden">
                                    <input name="machineCpu" id="machineCpu" value="" class="hide" type="hidden">
                                    <input name="machineDisk" id="machineDisk" value="" class="hide" type="hidden">
                                    <input name="srHQwhPedr" value="hdzba" type="hidden">
                                    <div class="item item-fore1">
                                        <label for="loginname" class="login-label name-label"></label>
                                        <input value="" id="loginname" class="itxt" name="loginname" tabindex="1" autocomplete="off" placeholder="邮箱/用户名/已验证手机" type="text">
                                        <span class="clear-btn"></span>
                                    </div>
                                    <div id="entry" class="item item-fore2">
                                        <label class="login-label pwd-label" for="nloginpwd"></label>
                                        <label id="sloginpwd" style="display: none;">
                                            <span id="_ocx_password_down" class="text_pge" style="text-align: center;">
                                                <a href="#JDedit.exe">请刷新页面或安装安全控件</a>
                                            </span>
                                        </label>
                                        <input id="nloginpwd" name="nloginpwd" class="itxt itxt-error" tabindex="2" autocomplete="off" placeholder="密码" type="password">
                                        <input name="loginpwd" id="loginpwd" value="" class="hide" type="hidden">
                                        <span class="clear-btn"></span>
                                        <span style="display: none;" class="capslock">
                                            <b></b>
                                            大小写锁定已打开
                                        </span>
                                    </div>
                                    <div class="item item-fore3">
                                        <div class="safe">
                                            <span>
                                                <input checked="checked" id="autoLogin" name="chkRememberMe" class="jdcheckbox" tabindex="3" clstag="pageclick|keycount|20150112ABD|6" type="checkbox">
                                                <label for="">自动登录</label>
                                            </span>
                                            <span>
                                                <input id="chkOpenCtrl" name="chkOpenCtrl" class="jdcheckbox safe-chk" tabindex="4" clstag="pageclick|keycount|20150112ABD|7" type="checkbox">
                                                <label data-tips="安全控件可提高账户安全性，加密保护您的密码。" id="jdsafe">安全控件登录</label>
                                            </span>
                                            <span class="forget-pw-safe">
                                                <a href="forgetPwd.html" class="" target="_top">忘记密码?</a>
                                            </span>
                                        </div>
                                        <div class="updata" id="updata" style="display: none;">
                                            安全控件升级了!
                                            <a href="javascript:void(0);" class="up-two">立即更新</a>
                                            <a class="up-one" href="javascript:void(0);" onclick="$('#updata').hide();"></a>
                                        </div>
                                    </div>

                                    <div id="o-authcode" class="item item-vcode item-fore4  hide ">
                                        <input value="" style="ime-mode: disabled;" id="authcode" class="itxt itxt02" name="authcode" tabindex="5" type="text">
                                        <img id="JD_Verification1" class="verify-code" src2="https://authcode.jd.com/verify/image?a=1&amp;acid=3266f340-1013-4299-8194-17004fd94308&amp;uid=3266f340-1013-4299-8194-17004fd94308" onclick="this.src= document.location.protocol +'//authcode.jd.com/verify/image?a=1&amp;acid=3266f340-1013-4299-8194-17004fd94308&amp;uid=3266f340-1013-4299-8194-17004fd94308&amp;yys='+new Date().getTime();$('#authcode').val('');">
                                        <a href="javascript:void(0)" onclick="$('#JD_Verification1').click();">看不清楚换一张</a>
                                    </div>
                                    <div class="item item-fore5">
                                        <div class="login-btn">
                                            <a href="javascript:;" class="btn-img btn-entry" id="loginsubmit" tabindex="6" clstag="pageclick|keycount|20150112ABD|2">登&nbsp;&nbsp;&nbsp;&nbsp;录</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="coagent">
                                <h5>使用合作网站账号登录京东：</h5>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/wangyin/login.action'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD|3">京东钱包</a>
                                        <span class="line">|</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/qq/login.aspx'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD|4">QQ</a>
                                        <span class="line">|</span>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="window.location='http://qq.jd.com/new/wx/login.action'+window.location.search;return false;" clstag="pageclick|keycount|20150112ABD_201505135|2">微信</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="qrcode-login">
                        <div class="mc">
                            <div class="qrcode-desc">
                                <h2>
                                    用京东APP
                                    <span class="ml5">扫码安全登录</span>
                                </h2>
                            </div>
                            <div class="qrcode-error">
                                <b></b>
                                <h6>登录失败</h6>
                                请刷新二维码后重新扫描
                            </div>
                            <div class="qrcode-main">
                                <div class="qrcode-img">
                                    <img src="./images/blank.gif" alt="">
                                    <div class="qrcode-error02 hide" id="J-qrcoderror">
                                        <a href="#none">
                                            <span class="error-icon"></span>
                                            <div class="txt">
                                                网络开小差咯
                                                <span class="ml10">刷新二维码</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="qrcode-panel">
                                    <ul>
                                        <li class="fore1">
                                            <a href="#none">刷新二维码</a>
                                        </li>
                                        <li>
                                            <a href="http://help.jd.com/user/issue/353-1096.html">使用帮助</a>
                                        </li>
                                    </ul>
                                    <div class="qrcode-tips">
                                        <span>扫描不上，版本过低？</span>
                                        <div class="triangle-border tb-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#nogo" class="qrcode-target btn-2qrcode" clstag="pageclick|keycount|20150112ABD_201505135|1">扫码登录</a>
                </div>
            </div>
            <div class="login-banner" style="background-color: rgb(94, 143, 54);">
                <div class="w">
                    <div id="banner-bg" clstag="pageclick|keycount|20150112ABD|46" class="i-inner" style="background: rgb(94, 143, 54) url('/shop_jd/Home/Public/images/554ad450na30d68d6.jpg') no-repeat scroll 0px 0px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w">
        <div class="ar">
            <a href="http://surveys.jd.com/index.php?r=survey/index/sid/568245/lang/zh-Hans" target="_top" class="q-link">
                <b></b>
                登录页面，调查问卷
            </a>
        </div>
    </div>
    <div class="w">
        <div id="footer-2013">
            <div class="links">
                <a rel="nofollow" target="_top" href="http://www.jd.com/intro/about.aspx">关于我们</a>
                |
                <a rel="nofollow" target="_top" href="http://www.jd.com/contact/">联系我们</a>
                |
                <a rel="nofollow" target="_top" href="http://zhaopin.jd.com/">人才招聘</a>
                |
                <a rel="nofollow" target="_top" href="http://www.jd.com/contact/joinin.aspx">商家入驻</a>
                |
                <a rel="nofollow" target="_top" href="http://www.jd.com/intro/service.aspx">广告服务</a>
                |
                <a rel="nofollow" target="_top" href="http://app.jd.com/">手机京东</a>
                |
                <a target="_top" href="http://club.jd.com/links.aspx">友情链接</a>
                |
                <a target="_top" href="http://cps.jd.com/">销售联盟</a>
                |
                <a href="http://club.jd.com/" target="_top">京东社区</a>
                |
                <a href="http://gongyi.jd.com/" target="_top">京东公益</a>
                |
                <a target="_top" href="http://en.jd.com/" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
            </div>
            <div class="copyright">Copyright©2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有</div>
        </div>
    </div>
</body>
</html>
<script>
  $(function(){
    $('#loginname').focus(function(){
      $(this).parent('div.item').removeClass('item-error');
      $(this).parent('div.item').addClass('item-focus');
    });
    $('#loginname').blur(function () {
      $(this).parent('div.item').removeClass('item-focus');
    });
    $('#nloginpwd').focus(function(){
      $(this).parent('div.item').removeClass('item-error');
      $(this).parent('div#entry').addClass('item-focus');
    });
    $('#nloginpwd').blur(function () {
      $(this).parent('div#entry').removeClass('item-focus');
    });
    //京东会员名键盘事件
    $('#loginname').keyup(function(){
        if($(this).val().length>0){//有输入值得时候
          $('.msg-error').addClass('hide').hide().text('');
          $('.msg-warn').removeAttr('style');
          $(this).siblings('.clear-btn').css({'display':'inline'});
        }else{//没有输入值
          $(this).siblings('.clear-btn').css({'display':'none'});
          $(this).val('');
        }
    });
    //京东会员密码键盘事件
    $('#nloginpwd').keyup(function(){
      if($(this).val().length>0){//有输入值得时候
        $('.msg-error').addClass('hide').hide().text('');
        $('.msg-warn').removeAttr('style');
        $(this).siblings('.clear-btn').css({'display':'inline'});
      }else{//没有输入值
        $(this).siblings('.clear-btn').css({'display':'none'});
        $(this).val('');
      }
    });
    //点击交叉清除用户名
    $('#loginname').siblings('.clear-btn').click(function(){
      $('#loginname').val('');
      $(this).css({'display':'none'});
    });
    //点击交叉清除密码
    $('#nloginpwd').siblings('.clear-btn').click(function(){
      $('#nloginpwd').val('');
      $(this).css({'display':'none'});
    });
    //点击登录事件
    $('#loginsubmit').click(function(){
      var error = 0;
      if($('#loginname').val().length==0 && $('#nloginpwd').val().length==0){ //用户名与密码为空
        $('#loginname').parent('div.item').addClass('item-error');
        $('#nloginpwd').parent('div.item').addClass('item-error');
        $('.msg-error').removeClass('hide').text('请输入账户名和密码').show();
        $('.msg-warn').hide();
        error =1;
      }else if($('#loginname').val().length==0){//用户名为空
        $('#loginname').parent('div.item').addClass('item-error');
        $('.msg-error').removeClass('hide').text('用户名不能为空').show();
        $('.msg-warn').hide();
        error =1;
      }else if($('#nloginpwd').val().length==0){//密码为空
        $('#nloginpwd').parent('div.item').addClass('item-error');
        $('.msg-error').removeClass('hide').text('密码不能为空').show();
        $('.msg-warn').hide();
        error =1;
      }
      if(!error){
        $('.msg-error').addClass('hide').hide();
        $('.msg-warn').show();
        var uname = $('#loginname').val();
        var pwd = $('#nloginpwd').val();
        //ajax到后台验证账号和密码
        $.ajax({
          url:'/index.php/Home/Login/checkAccount',
          type:'post',
          data:{'uname':uname,'pwd':pwd},
          beforeSend:function(XMLHttpRequest){
            $('#loginsubmit').text('正在登录中……')
          },
          success:function($msg){
            if($msg==1){//登录的账户存在
              window.location.href='/index.php/Home/Index/index'
            }else{//登录账户不存在
              $('#loginname').parent('div.item').addClass('item-error');
              $('#nloginpwd').parent('div.item').addClass('item-error');
              $('.msg-error').removeClass('hide').text('用户名或者密码错误').show();
              $('.msg-warn').hide();
              $('#loginsubmit').html('登&nbsp;&nbsp;&nbsp;录');
            }
          }
        });
      }

    });
  })
</script>