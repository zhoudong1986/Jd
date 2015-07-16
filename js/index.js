/**
 * Created by Administrator on 2015/7/7.
 */

var $index = null;
var $sum = 0 ;
var $timer = null;
function doTurn($plg){
  var $leng = $('ul.indexBox').children('li').size();
  if($sum>=$leng){$sum=0};
  if($sum<0){$sum=$leng-1};
  $('ul.indexBox').children('li').eq($sum).css({backgroundColor:'red'}).siblings('li').css({backgroundColor:'#3e3e3e'});
  $('.imgsBox').children('a.imgsA').eq($sum).show().siblings('a.imgsA').hide();
  if(!$plg){$sum++;}
}

$(function(){

  $('#banner').children('i').hover(function(){
    $(this).css({backgroundPosition:'0 -19px'});
  },function(){
    $(this).css({backgroundPosition:'0 0'});
  }).click(function(){
    $(this).parent('#banner').fadeOut(300);
  });


  $('.content').hover(function(){
    $(this).css({backgroundColor:'#fff'}).children('.line,.under').show();
  },function(){
    $(this).css({backgroundColor:'#f9f9f9'}).children('.line,.under').hide();
  });


  $('.class').children('div').children('div').hover(function(){
    $index = $(this).index();
    $('.dd-inner .item').eq($index).css({left:'1px',backgroundColor:'#fff'}).find('h3 a').css('color','red');
    $('.dorpdown-layer').show();
    $('div.item-sub').eq($index).show()
  },function(){
    $('.dd-inner .item').eq($index).css({left:'0px',backgroundColor:''}).find('h3 a').css('color','#fff');
    $('.dorpdown-layer').hide();
    $('div.item-sub').eq($index).hide();
  });


  $timer = setInterval('doTurn()',2000);
  $('.turnBox').hover(function(){
    clearTimeout($timer);
    $timer =null;
    $('.peak').show();
  },function(){
    $timer = setInterval('doTurn()',2000);
    $('.peak').hide();
  });
  $('div.peak').children('div').click(function(){
    var $dir = $(this).attr('class');
    var $speed = 1;
    if($dir=='left'){$speed*=-1;}
    $sum = parseInt($sum)+parseInt($speed);
    doTurn(true);
  });

  $('ul.indexBox li').mouseover(function(){
    clearTimeout($timer);
    $timer =null;
     var $index =  $(this).index();
     $sum = $index;
    doTurn(true);
  });

  $('#select-price-money').change(function(){
    var $index = $('#select-price-money option:selected').index();
    $('.msg-price').eq($index).addClass('hover').siblings('span').removeClass('hover');
  })



});