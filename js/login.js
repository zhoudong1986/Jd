//登陆页JS

$(function(){
  $('#loginname').focus(function(){
      $(this).prev('.name-label').css({'backgroundPosition':'0px -48px'});
  });
});