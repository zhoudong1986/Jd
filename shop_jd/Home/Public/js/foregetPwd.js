/**
 * Created by Administrator on 2015/7/17.
 */

$(function(){
  $('#username').focus(function(){
      $('#username_error').text('请输入您的账户名/邮箱');
      $(this).css({borderColor:'#71B247'});
  });
  $('#username').blur(function(){
    $('#username_error').text('');
    $(this).removeAttr('style');
  });

  $('#sendMobileCode').click(function(){
    if($('#timeDiv').css('display')=='none'){
      $('#timeDiv').show();
      var timer = setInterval(function(){

      },1000)
    }
  });

  $('#password').focus(function(){
    $(this).siblings('#password_error').text('由字母加数字组成');
  })
  $('#repassword').focus(function(){
    $(this).siblings('#repassword_error').text('请输入新密码');
  })
})