$(function(){

  //密码修改事件
  $('#setUp').click(function(){
    $('#updatePwd').show().animate({top:'160px'},500);
    $('#bomb').show();
  });
  $('.borderIn button').last().click(function(){
    $('#updatePwd').css('top','0px').hide();
    $('#bomb').hide();
  });


  //$.ajax({
  //  url:'<{:U("Login/update")}>',
  //  type:'post',
  //  data:{'oldPwd':$('input[name="oldPwd"]').val(),'newPwd':$('input[name="newPwd"]').val(),'surePwd':$('input[name="surePwd"]').val()},
  //  success:function(data){
  //
  //  }
  //})
})