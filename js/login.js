//登陆页JS

$(function(){
  $('#loginname').focus(function(){
      $(this).prev('.name-label').css({'backgroundPosition':'0px -48px'});
  });
  $('#loginname').blur(function(){
    $(this).prev('.name-label').removeAttr('style');
  });
  $('#nloginpwd').focus(function(){
      $(this).prev().prev('.pwd-label').css({'backgroundPosition':'-48px -48px'})
  });
  $('#nloginpwd').blur(function(){
    $(this).prev().prev('.pwd-label').removeAttr('style');
  });
});