/**
 * Created by Administrator on 2015/7/7.
 */

$(function(){
  //顶部广告点击消失事件
  $('#banner').children('i').hover(function(){
    $(this).css({backgroundPosition:'0 -19px'});
  },function(){
    $(this).css({backgroundPosition:'0 0'});
  }).click(function(){
    $(this).parent('#banner').fadeOut(300);
  });

  //购物车
  $('.content').hover(function(){
    $(this).css({backgroundColor:'#fff'}).children('.line,.under').show();
  },function(){
    $(this).css({backgroundColor:'#f9f9f9'}).children('.line,.under').hide();
  });

  //二级菜单事件
  $('.dd-inner .item').mouseover(function(){
    var $index = $(this).index();
    $(this).css({left:'1px',backgroundColor:'#fff'}).find('h3 a').css('color','red');
    $(this).siblings().css({left:'0px',backgroundColor:''}).find('h3 a').css('color','#fff');
    $('.dorpdown-layer').show();
    $('div.item-sub').eq($index).show().siblings().hide();
  });
});