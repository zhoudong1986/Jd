<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache,must-revalidate">
  <title>注册-个人用户</title>
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/register.css" media="all">
  <script src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script src="/shop_jd/Home/Public/js/common.js"></script>
</head>
<body>
<!--验证邮箱框-->
<div id="box" style="display: none"></div>
<div style="display:none;width: 502px; height: 310px; left: 376.5px; top: 300.5px;" class="thickbox" id="mailBox"><div class="thicktitle" id="" style="width:500"><span>验证邮箱</span></div><div class="thickcon" id="opinioncon" style="width: 500px; height: 260px; padding-left: 0px; padding-right: 0px; border-left: 1px none; border-right: 1px none;">
  <div class="form thickbox-form" style="display: block;">
    <div class="f-body">
      <div class="item">
        <span class="label"><b class="ftx04">*</b>请输入邮箱：</span>
        <div class="fl item-ifo">
          <input id="mail" name="mail" class="text" maxlength="50" onpaste="return  false" autocomplete="off" type="text">
          <label id="mail_succeed" class="blank"></label>
          <label id="mail_error" class=""></label>
        </div>
      </div>
      <div class="item">
        <span class="label"><b class="ftx04">*</b>验证码：</span>
        <div class="fl item-ifo">
          <input id="authcode1" style="ime-mode:disabled" name="authcode1" class="text text-1" tabindex="6" autocomplete="off" maxlength="6" type="text">
          <label class="img">
            <img src="<?php echo U('verify2');?>" style="cursor:pointer;width:100px;height:36px;display:block;" onclick="this.src= this.src+ '?' + new Date().getTime()"  id="JD_Verification2"> </label>
          <label class="ftx23">&nbsp;看不清？<a href="javascript:void(0)" onclick="verify2()" class="flk13">换一张</a></label>
          <label id="authcode_succeed" class="blank invisible"></label>
          <span class="clr"></span>
          <label id="authcode_error"></label>
        </div>
        <span class="clr"></span>
      </div>
    </div>
    <div class="f-footer">
      <div class="item">
        <span class="label">&nbsp;</span>
        <input class="btn-img btn-verify" value="发送邮箱验证" type="button">
      </div>
    </div>
  </div>

  <!--发送邮件成功-->
  <div class="thickbox-tip fz14" style="display: none">
    <div class="icon-box">
      <span class="succ-icon m-icon"></span>
      <div class="item-fore">
        <div class="ftx-02 info-succ">账户更安全购物更放心</div>
      </div>
    </div>
    <div class="msg-txt">系统已向您的邮箱&nbsp;<strong class="ftx-01">3030i84263@qq.com</strong>&nbsp;发送了一封验证邮件，请您登录邮箱，点击邮件中的链接完成邮箱验证。如果超过2分钟未收到邮件，您可以<a href="#none" onclick="reSendEmail('3030i84263@qq.com','b5170e596499edaa6c91e8d948822e05');" class="ftx-05">重新发送</a></div>
    <div class="mt10 ftx-01">
      <span id="reSendEmailSuccess"></span>
    </div>
    <div class="mt20">
      <a href="http://mail.qq.com/" id="emailLogin" class="btn-red">登录邮箱</a>
      <span class="clr"></span>
    </div>
  </div>


</div>
  <a href="#" id="closeBox" class="thickclose">×</a>
</div>

  <div class="w ld" id="toppanel">
    <div style="right: 110.5px; display: none;" id="sidepanel" class="hide">
      <a class="research" target="_top" href="http://surveys.jd.com/index.php?r=survey/index/sid/447941/lang/zh-Hans"> <b></b>
        调查问卷
      </a>
      <a title="使用快捷键T也可返回顶部哦！" class="gotop" href="#"> <b></b>
        返回顶部
      </a>
    </div>
  </div>
  <div id="shortcut-2013">
    <div class="w">
      <ul class="fl lh">
        <li class="fore1 ld">
          <b></b>
          <a href="javascript:addToFavorite()" rel="nofollow">收藏京东</a>
        </li>
      </ul>
      <ul class="fr lh">
        <li class="fore1" id="loginbar">
          <a href="javascript:login();" class="link-login">你好，请登录</a>
          &nbsp;&nbsp;
          <a href="javascript:regist();" class="link-regist style-red">免费注册</a>
        </li>
        <li class="fore2 ld">
          <s></s>
          <a href="http://jd2008.jd.com/JdHome/OrderList.aspx" rel="nofollow">我的订单</a>
        </li>
        <li class="fore3 ld">
          <s></s>
          <a href="http://app.jd.com/" target="_top">手机京东</a>
        </li>
        <li class="fore4 ld menu" id="biz-service" data-widget="dropdown">
          <s></s>
          <span class="outline"></span>
          <span class="blank"></span>
          客户服务
          <b></b>

          <div class="dd">
            <div>
              <a href="http://help.jd.com/help/question-61.html" target="_top">常见问题</a>
            </div>
            <div>
              <a href="http://myjd.jd.com/repair/orderlist.action" target="_top" rel="nofollow">售后服务</a>
            </div>
            <div>
              <a href="http://chat.jd.com/jdchat/custom.action" target="_top" rel="nofollow">在线客服</a>
            </div>
            <div>
              <a href="http://myjd.jd.com/opinion/list.action" target="_top" rel="nofollow">投诉中心</a>
            </div>
            <div>
              <a href="http://www.jd.com/contact/service.html" target="_top">客服邮箱</a>
            </div>
          </div>
        </li>
        <li class="fore5 ld menu" id="site-nav" data-widget="dropdown">
          <s></s>
          <span class="outline"></span>
          <span class="blank"></span>
          网站导航
          <b></b>

          <div class="dd lh">
            <dl class="item fore1">
              <dt>特色栏目</dt>
              <dd>
                <div>
                  <a target="_top" href="http://my.jd.com/personal/guess.html">为我推荐</a>
                </div>
                <div>
                  <a target="_top" href="http://shipingou.jd.com/">视频购物</a>
                </div>
                <div>
                  <a target="_top" href="http://club.jd.com/">京东社区</a>
                </div>
                <div>
                  <a target="_top" href="http://xiaoyuan.jd.com/">校园频道</a>
                </div>
                <div>
                  <a target="_top" href="http://read.jd.com/">在线读书</a>
                </div>
                <div>
                  <a target="_top" href="http://diy.jd.com/">装机大师</a>
                </div>
                <div>
                  <a target="_top" href="http://market.jd.com/giftcard/">礼品卡</a>
                </div>
              </dd>
            </dl>
            <dl class="item fore2">
              <dt>企业服务</dt>
              <dd>
                <div>
                  <a target="_top" href="http://market.jd.com/giftcard/company/default.aspx">企业客户</a>
                </div>
                <div>
                  <a target="_top" href="http://sale.jd.com/p10997.html">办公直通车</a>
                </div>
              </dd>
            </dl>
            <dl class="item fore3">
              <dt>旗下网站</dt>
              <dd>
                <div>
                  <a target="_top" href="http://www.360top.com/">360TOP</a>
                </div>
                <div>
                  <a target="_top" href="http://www.minitiao.com/">迷你挑</a>
                </div>
                <div>
                  <a target="_top" href="http://en.360buy.com/">English Site</a>
                </div>
              </dd>
            </dl>
          </div>
        </li>
      </ul>
      <span class="clr"></span>
    </div>
  </div>
  <div class="w" id="logo">
    <div>
      <a href="http://www.jd.com/">
        <img src="/shop_jd/Home/Public/images/logo-2013.png" alt="京东商城" height="60" width="170"></a>
      <b></b>
    </div>
  </div>

  <div class="w" id="regist">
    <div class="mt">
      <ul class="tab">
        <li class="curr">个人用户</li>
        <!--<li class="line">-->
          <!--<a clstag="regist|keycount|personalreg|02" href="https://reg.jd.com/reg/company">企业用户</a>-->
        <!--</li>-->
        <!--<li class="fore">-->
          <!--<a href="http://passport.en.jd.com/user/facade">International Customers</a>-->
        <!--</li>-->
      </ul>
      <div class="extra">
        <span style="text-align: right;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="flk13" onclick="javascript:location.href=&quot;http://en.360buy.com&quot;+location.search;" href="#">English</a>
        </span>
        <span>
          我已经注册，现在就&nbsp;
          <a href="../../../../login.html" class="flk13">登录</a>
        </span>
      </div>
    </div>
    <div class="mc">
      <form action="https://reg.jd.com/reg/person?ReturnUrl=http%3A//www.jd.com/" id="personRegForm" method="POST" onsubmit="return false;">
        <input name="regType" id="regType" value="person" type="hidden">
        <input name="uuid" id="uuid" value="07967044-4dee-4b35-88a4-9c286cabf05b" type="hidden">
        <input name="verifymc" id="verifymc" value="" type="hidden">
        <input name="emailMg" id="emailMg" type="hidden">
        <input name="authcodeMg" id="authcodeMg" type="hidden">
        <input name="state" id="state" value="" type="hidden">
        <input name="tgKey" id="tgKey" value="${tgKey}" type="hidden">
        <div class="form" onselectstart="return false;">
          <div class="item" id="select-regName">
            <span class="label">
              <b class="ftx04">*</b>
              用户名：
            </span>

            <div class="fl item-ifo">
              <div class="o-intelligent-regName">
                <input id="regName" name="regName" maxlength="20" class="text" value="" type="text"> <i class="i-name"></i>
                <ul id="intelligent-regName" class="hide"></ul>
                <label id="regName_succeed" class="blank"></label>
                <label id="regName_error" class="hide"></label>
              </div>

              <div class="intelligent-error hide" id="morePinDiv">
                <h5>推荐您使用：</h5>

                <div class="groom" id="morePinGroom"></div>
              </div>
              <input name="ChhnHxPAKW" value="GhHtY" type="hidden">
              <input value="-1" id="hnschool" class="hide" type="hidden">
              <input id="schoolid" name="schoolid" class="hide" type="hidden">
              <input id="hnseli" class="hide" type="hidden"></div>
          </div>

          <div id="capslock"> <i></i>
            <s></s>
            键盘大写锁定已打开，请注意大小写
          </div>
          <div id="o-password">
            <div class="item">
              <span class="label">
                <b class="ftx04">*</b>
                请设置密码：
              </span>

              <div class="fl item-ifo">
                <input id="pwd" name="pwd" maxlength="20" class="text" tabindex="2" style="ime-mode: disabled;" onpaste="return  false" autocomplete="off" type="password">
                <i class="i-pass"></i>
                <label id="pwd_succeed" class="blank"></label>
                <label id="pwd_error"></label>
                <span class="clr"></span>
                <label class="hide" id="pwdstrength">
                  <span class="fl">安全程度：</span>
                  <b></b>
                </label>

              </div>
            </div>

            <div class="item">
              <span class="label">
                <b class="ftx04">*</b>
                请确认密码：
              </span>

              <div class="fl item-ifo">
                <input id="pwdRepeat" name="pwdRepeat" maxlength="20" class="text"  type="password">
                <i class="i-pass"></i>
                <label id="pwdRepeat_succeed" class="blank"></label>
                <label id="pwdRepeat_error"></label>
              </div>
            </div>
            <div class="item" id="dphone">
              <span class="label">
                <b class="ftx04">*</b>
                验证邮箱：
              </span>

              <div class="fl item-ifo">
                <input value="" id="phone" maxlength="11" name="phone" class="text"   type="text">
                <i class="i-phone"></i>
                <label id="phone_succeed" class="blank"></label>
                <label id="phone_error"></label>
              </div>

            </div>

          </div>
          <div class="item" id="authcodeDiv">
            <span class="label">
              <b class="ftx04">*</b>
              验证码：
            </span>

            <div class="fl item-ifo">
              <input value="" id="authcode" style="ime-mode: disabled;" name="authcode" class="text text-1" tabindex="6" autocomplete="off" maxlength="6" type="text">
              <label class="img">
                <img src="<?php echo U('verify');?>" style="cursor: pointer; width: 100px; height: 36px; display: block;" alt="" clstag="regist|keycount|personalreg|06" onclick="this.src= this.src+ '?' + new Date().getTime()" id="JD_Verification1"></label>

              <label class="ftx23">
                &nbsp;看不清？
                <a href="javascript:void(0)" onclick="verify()" class="flk13">换一张</a>
              </label>
              <label id="authcode_succeed" class="blank invisible"></label>
              <span class="clr"></span>
              <label id="authcode_error"></label>
            </div>
          </div>
          <div class="item item-new">
            <span class="label">&nbsp;</span>

            <div class="fl item-ifo">
              <input class="checkbox" checked="checked" id="readme" onclick="agreeonProtocol();" type="checkbox">
              <label for="protocol">
                我已阅读并同意
                <a href="#" class="blue" id="protocol">《京东用户注册协议》</a>
              </label>
              <span class="clr"></span>
              <label id="protocol_error" class="error hide">请接受服务条款</label>
            </div>
          </div>
          <div class="item">
            <span class="label">&nbsp;</span>
            <input class="btn-img btn-regist" id="registsubmit" value="立即注册" tabindex="8" clstag="regist|keycount|personalreg|07" onclick="reg();" type="button"></div>
        </div>
        <div class="phone">
          <img src="/shop_jd/Home/Public/images/phone-bg.jpg" height="180" width="180"></div>
        <span class="clr"></span>
      </form>
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
      </div>
      <div class="copyright">Copyright©2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有</div>
    </div>
  </div>
</body>
</html>
<script>
  var error = 1;
  var errorMail = 1;
  function verify(){
    return document.getElementById('JD_Verification1').src='<?php echo U("verify");?>'+'?'+new Date().getTime();
  }
  function verify2(){
    return document.getElementById('JD_Verification2').src='<?php echo U("verify2");?>'+'?'+new Date().getTime();
  }
  function checkUserName($str){//测查用户名
    var reg = /^[\u4E00-\u9FA5\uF900-\uFA2D\w-]{4,15}$/ig;
    return reg.test($str);
  }
  function checkPwd($str){//检测密码
    var reg = /^[\S]{6,20}$/ig;
    return reg.test($str);
  }
  function checkPwdRe($val1,$val2){
    if($val1!==$val2){
      return 1; //两次密码不一致
    }else if($val2.length <6 || $val2.length >20){ // 密码长度不符合
      return 2;
    }else{
      return 3; //两次密码一致
    }
  }
  //邮箱正则验证
  function checkMail($val){
    var reg =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return reg.test($val);
  }

  function userSuccess(){ //用户名未被注册
    $('#regName').attr('class','').addClass('text');//框变绿色
    $('#select-regName').find('.o-intelligent-regName').children('i').css({background:'transparent url("/shop_jd/Home/Public/images/sucess.png") no-repeat scroll 0px 0px'});//变成绿色钩
    $('#regName').siblings('#regName_error').text('');
    $('#regName').siblings('#regName_error').attr('class','').addClass('null');
  }
  function userFailed(){
    $('#regName').addClass('highlight2');//框变红色
    $('#regName').css('color','#333'); //字体色变成黑色
    $('#select-regName').find('.o-intelligent-regName').children('i').removeAttr('style'); //删除背景图
    $('#regName').siblings('#regName_error').attr('class','').addClass('error').html('<span>该用户名已被使用，请重新输入。如果您是该用户，请立刻<a href="<?php echo U('Login/login');?>" class="flk13">登录</a></span>');
  }
  function toLong($obj){
    $obj.addClass('highlight2');//框变红色
    $obj.css('color','#333'); //字体色变成黑色
    $obj.siblings('#regName_error').attr('class','').addClass('error').text('用户名长度只能在4-15位字符之间');
  }
  function pwdLong($obj,$text){
    $obj.removeAttr('highlight1').addClass('highlight2');
    $obj.siblings('#pwd_error').attr('class','error').text($text);
  }


  $(function(){
    $('#regName').focus(function(){
      $(this).attr('class','').addClass('text highlight1'); //框变绿色
      $(this).siblings('#regName_error').attr('class','').addClass('focus').text('4-15位字符，支持汉字、字母、数字、"-"以及"_"组合');
    });
    $('#regName').blur(function () {
      var value = $(this).val(); //获取输入表单的值
      if(value.length>0){ //在里面有值得时候才做判断
        if(!checkUserName(value)){//检查值是否超过固定长度
         toLong($('#regName'));
          return;
        }
        //ajax查看用户名有没被注册过
        $.ajax({
          type:'post',
          url:"<?php echo U('Index/checkRegister');?>",
          beforeSend:function(XMLHttpRequest){
            $('#regName').siblings('#regName_error').text('监测中……');
          },
          success:function($msg){
            if($msg=='1'){
              //用户名没有被注册
              userSuccess();
              error = 0;
            }else{
              //用户名已经被注册
              userFailed();
              error = 1;
            }
          },
          data:{'userName':value}
        })
      }else{//表单里面没有输入值
        $(this).attr('class','').addClass('text');
        $(this).removeAttr('style');
        $('#regName').siblings('#regName_error').attr('class','').addClass('hide');
      }
    });

    //密码验证部分
    $('#pwd').focus(function(){
      $(this).attr('class','').addClass('text highlight1'); //框变绿色
      $(this).siblings('#pwd_error').attr('class','focus').text('6-20位字符,建议由数字和字母组成');
    });
    $('#pwd').blur(function () {
      var value = $(this).val(); //获取输入表单的值
      if(value.length>0) { //在里面有值得时候才做判断
        if (!checkPwd(value)) {//检查值是否超过固定长度
          pwdLong($('#pwd'),'密码长度只能在6-20位字符之间');
          error = 1;
          return;
        }else{
          //符合密码规则
          error = 0;
        }
      }else{
        $(this).attr('class','text').removeAttr('style');
        $(this).siblings('#pwd_error').attr('class','hide');
      }
    });

    //确认密码验证
    $('#pwdRepeat').focus(function(){
      $(this).attr('class','').addClass('text highlight1'); //框变绿色
      $(this).siblings('#pwdRepeat_error').attr('class','focus').text('请再次输入密码');
    });
    $('#pwdRepeat').blur(function () {
      var value1 = $('#pwd').val();//密码表单值
      var value2 = $(this).val(); //再次输入表单的值
      if(value2.length>0) { //在里面有值得时候才做判断
        var num = checkPwdRe(value1,value2);
        switch (num){
          case 1:
            $(this).attr('class','text').addClass('highlight2'); //框变红色
            $(this).siblings('#pwdRepeat_error').attr('class','error').text('两次密码不一致');
            error = 1;
            break;
          case 2:
            $(this).attr('class','text').addClass('highlight2'); //框变红色
            $(this).siblings('#pwdRepeat_error').attr('class','error').text('密码长度只能在6-20位字符之间');
            error = 1;
            break;
          case 3:
            $(this).siblings('i.i-pass').css({background:'transparent url("/shop_jd/Home/Public/images/sucess.png") no-repeat scroll 0px 0px'});//变成绿色钩
            $(this).siblings('#pwdRepeat_error').attr('class','hide');
            break;
        }
      }else{ //没有输入值的时候
        $(this).attr('class','text').removeAttr('style');
        $(this).siblings('#pwdRepeat_error').attr('class','hide');
      }
    });

    //邮箱验证
    $('#phone').focus(function(){
      $(this).attr('class','').addClass('text highlight1'); //框变绿色
      $(this).siblings('#phone_error').attr('class','focus').html('完成验证,以后可以通过邮箱找回密码,<strong id="checkMail">点击验证</strong>');
    });
    //点击显示验证邮箱框
    $('#phone_error').delegate('strong','click',function(){
      $('#box').show();
      $('#mailBox').show();
    });
    //关闭验证邮箱框
    $('#closeBox').click(function(){
      $('#box').hide();
      $('#mailBox').hide();
      $('#phone_error').attr('class','null').text('');
    });
    //开始邮箱验证
    $('#mail').focus(function(){
      $(this).attr('class','').addClass('text highlight1').siblings('#mail_error').show().attr('class','focus').text('完成验证后，您可以用该邮箱登录和找回密码');
      $(this).siblings('#mail_succeed').attr('class','').addClass('blank'); //去掉小勾
    });
    $('#mail').blur(function(){
      var $val = $(this).val();
      if($val.length>0){ //有输入值的时候才验证
        if(checkMail($val)){//符合邮箱规则
          //去后台看下邮箱有没有没使用过
          $.ajax({
            url:'<?php echo U("checkMail");?>',
            type:'post',
            data:{'mail':$val},
            beforeSend:function(){
              $('#mail').attr('class','').addClass('text').siblings('#mail_error').hide().attr('class','null').text('');
            },
            success:function($msg){
              if($msg =='1'){//没有被注册过
                $('#mail').attr('class','').addClass('text highlight1'); //框变绿色
                $('#mail').siblings('#mail_error').show().attr('class','success').text('此邮箱可以使用');
                $('#mail').siblings('#mail_succeed').attr('class','').addClass('blank succeed'); //小勾背景
                errorMail = 0;
                return;
              }else{//已经被注册过了
                $('#mail').attr('class','').addClass('text highlight2'); //框变红色
                $('#mail').siblings('#mail_error').show().attr('class','error').text('此邮箱已被验证过');
                $('#mail').siblings('#mail_succeed').attr('class','').addClass('blank error-ico');
                errorMail = 1;
                return false;
              }
            }
          });
        }else{//没有符合邮箱规则
          $(this).attr('class','').addClass('text highlight2').siblings('#mail_error').show().attr('class','error').text('此邮地址不正确，请重新填写');//内容变色
          $(this).siblings('#mail_succeed').addClass('error-ico');
          errorMail = 1;
          return;
        }
      }else{ //没有输入值
        $(this).attr('class','text').removeAttr('style');
        $(this).siblings('#mail_error').attr('class','hide').hide();
        $(this).siblings('#mail_succeed').attr('class','blank');
      }
    });

    //验证码检验
    $('#authcode1').blur(function(){
      var $val = $(this).val(); //获得输入的验证码表单
      $.ajax({
        url:"<?php echo U('checkVerify2');?>",
        type:'post',
        data:{'code':$val},
        success:function($msg){
            if($msg=='1'){//验证码正确
              $('#authcode1').css({'border': '1px solid #7ABD54'});
              errorMail=0;
            }else{
              $('#authcode1').css({'border': '1px solid #FF0000'});
              errorMail=1;
            }
        }
      })
    });

    //点击按钮发送邮箱验证
    $('.thickbox-form').find('.btn-verify').click(function(){
        if(errorMail>0){
          //有错误不能提交
          return false;
        }else{
          //没错误可以提交
          var userName = $('#regName').val();
          var password = $('#pwd').val();
          $.ajax({
            url:"<?php echo U('setMail');?>",
            type:'post',
            data:{'userName':userName,'password':password},
            success:function($msg){

            }
          });
        }
    });

  })



</script>