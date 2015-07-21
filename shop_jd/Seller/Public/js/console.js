$(function(){

  //密码修改事件
  $('#setUp').click(function(){
    $('#updatePwd').show().animate({top:'160px'},500);
    $('#bomb').show();
  });
  $('.borderIn button').last().click(function(){
    $('#updatePwd').css('top','0px').hide();
    $('#bomb').hide();
    $('.formOne input').val([]);
  });


})