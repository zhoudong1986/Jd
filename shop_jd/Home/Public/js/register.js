/**
 * Created by Administrator on 2015/7/19.
 */
function checkVal($str){
  var reg = /^[\u4E00-\u9FA5\uF900-\uFA2D\w-]{4,15}$/ig;
  return reg.test($str);
}
$(function(){
  $('#regName').focus(function(){
    $(this).addClass('highlight1');//框变绿色
    $(this).siblings('#regName_error').attr('class','').addClass('focus').text('4-15位字符，支持汉字、字母、数字、"-"以及"_"组合');
  });
  $('#regName').blur(function () {
    var value = $(this).val(); //获取输入表单的值
    if(!checkVal(value)){
      $(this).addClass('highlight2');//框变红色
      $(this).css('color','#333'); //字体色变成黑色
      $(this).siblings('#regName_error').attr('class','').addClass('error').text('用户名长度只能在4-15位字符之间');
      return;
    }
    //ajax查看用户名有没被注册过
    $.ajax({
      type:'post',
      url:"<{:U('checkRegister')}>",
      beforeSend:function(XMLHttpRequest){
        $(this).siblings('#regName_error').text('监测中……');
      },
      sucess:function($msg){
        if($msg){
          $('#select-regName').find('.i-name').css({backgroundUrl:'__IMAGE__/sucess.png'});
        }else{
          alert(3333);
        }
      }

    })

  })
})