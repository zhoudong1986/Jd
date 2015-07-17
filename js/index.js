/**
 * Created by Administrator on 2015/7/7.
 */

var $index = null; //索引
var $sum = 0 ; //计数器
var $sum1 = 0; //计数器2
var $sum2 = 0; //计数器3
var $timer = null; //计数器函数句柄
var $timer2 = null;//计数器函数句柄
var $timer3 = null; //计数器函数句柄
/**
 * 默认的主页头部广告轮播图
 * @param $plg [bool] 控制计数器是否自增
 * @param $obj [object] 轮播对象
 */
function doTurn($plg,$obj){
  var $leng = $obj.children('li').size();
  if($sum>=$leng){$sum=0};
  if($sum<0){$sum=$leng-1};
  $('ul.indexBox').children('li').eq($sum).css({backgroundColor:'red'}).siblings('li').css({backgroundColor:'#3e3e3e'});
  $('.imgsBox').children('a.imgsA').eq($sum).show().siblings('a.imgsA').hide();
  if(!$plg){$sum++;}
}
/**
 * 为主页楼层设计的轮播函数
 * @param $plg [bool] 控制计数器是否自增
 * @param $obj [object] 轮播对象
 */
function doTurnF($plg,$obj1){
  var $leng = $obj1.children('li').size();
  if($sum1>=$leng){$sum1=0};
  var $speed = '-'+($sum1*439)+'px';
  var $tmp = $('#clothBox').children('.mc').find('.main').children('.slider').find('.slider-nav').children('ul').find('li');
  if($sum1<0){$sum1=$leng-1};
  $obj1.css({'left':$speed});
  //控制小球
  $tmp.eq($sum1).addClass('slider-selected').siblings('li').removeClass('slider-selected');
  if(!$plg){$sum1++;}
}
/**
 * 为主页楼层设计的轮播函数2
 * @param $flg
 * @param $obj2
 */
function turnF($flg,$obj2){
  var $leng = $obj2.children('li').size();
  if($sum2>=$leng){$sum2=0};
  var $speed = '-'+($sum2*439)+'px';
  var $tmp = $obj2.parents('.slider-body').next('.slider-nav').find('li');
  if($sum2<0){$sum2=$leng-1};
  $obj2.css({'left':$speed});
  //控制小球
  $tmp.eq($sum2).addClass('slider-selected').siblings('li').removeClass('slider-selected');
  if(!$flg){$sum2++;}
}
//活动门插件
function _slider($arr,$e){
  $.each($arr,function(i,n){
    $(n).bind('mouseover',function(){
      var $index = $(this).index();
      var leng = $(this).children('a').text();
      if(leng.length==2){
        $(this).addClass($e).css({width:'58px'}).siblings('li').removeClass($e).removeAttr('style');
      }else{
        $(this).addClass($e).css({width:'82px'}).siblings('li').removeClass($e).removeAttr('style');
      }
      $(this).parents('.mt').next('.mc').children('div.main').eq($index).removeClass('hide').addClass('main-selected').show();
      $(this).parents('.mt').next('.mc').children('div.main').eq($index).siblings('div.main').addClass('hide').removeClass('main-selected').hide();
    });
  });
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

  //主页头部广告轮播窗
  $timer = setInterval('doTurn(false,$("ul.indexBox"))',2000);
  $('.turnBox').hover(function(){
    clearTimeout($timer);
    $timer =null;
    $('.peak').show();
  },function(){
    $timer = setInterval('doTurn(false,$("ul.indexBox"))',2000);
    $('.peak').hide();
  });
  $('div.peak').children('div').click(function(){
    var $dir = $(this).attr('class');
    var $speed = 1;
    if($dir=='left'){$speed*=-1;}
    $sum = parseInt($sum)+parseInt($speed);
    doTurn(true,$("ul.indexBox"));
  });
  //主页头部广告轮播窗 下小球事件
  $('ul.indexBox li').mouseover(function(){
    clearTimeout($timer);
    $timer =null;
    var $index =  $(this).index();
    $sum = $index;
    doTurn(true,$("ul.indexBox"));
  });

  //1F轮播图
 $timer2 = setInterval("doTurnF(false,$('#clothBox').children('.mc').find('.main').children('.slider').children('.slider-body').find('.slider-main'))",2500);
  //1F小球
  $('#clothBox').children('.mc').find('.main').children('.slider').find('.slider-nav').children('ul').find('li').mouseover(function(){
      clearTimeout($timer2);
      $timer2 = null;
      var $index =  $(this).index();
      $sum1 = $index;
      $(this).addClass('.slider-selected').sibling('li').removeClass('.slider-selected');
    doTurnF(true,$('#clothBox').children('.mc').find('.main').children('.slider').children('.slider-body').find('.slider-main'));
  });
  //鼠标放上去停止轮播
  $('#clothBox').find('.slider').hover(function(){
    clearTimeout($timer2);
    $(this).find('.slider-page').show();
  },function(){
    $(this).find('.slider-page').hide();
    $timer2 = setInterval("doTurnF(false,$('#clothBox').children('.mc').find('.main').children('.slider').children('.slider-body').find('.slider-main'))",2500);
  })
  //点击左右箭头轮换
  $('#clothBox').find('.slider-page').children('a').click(function(){
    var $dir = $(this).attr('class');
    var $speed = 1;
    if($dir=='slider-prev'){$speed*=-1;}
    $sum1 = parseInt($sum1)+parseInt($speed);
    doTurnF(true,$('#clothBox').children('.mc').find('.main').children('.slider').children('.slider-body').find('.slider-main'));
  });

  $('#select-price-money').change(function(){
    var $index = $('#select-price-money option:selected').index();
    $('.msg-price').eq($index).addClass('hover').siblings('span').removeClass('hover');
  })

  //2F轮播图
  $timer3 = setInterval("turnF(false,$('#electronics').find('.slider-main'))",2500);
  //鼠标放上去停止轮播
  $('#electronics').find('.slider').hover(function(){
    clearTimeout($timer3);
    $(this).find('.slider-page').show();
  },function(){
    $(this).find('.slider-page').hide();
    $timer3 = setInterval("turnF(false,$('#electronics').find('.slider-main'))",2500);
  })
  //点击左右箭头轮换
  $('#electronics').find('.slider-page').children('a').click(function(){
    var $dir = $(this).attr('class');
    var $speed = 1;
    if($dir=='slider-prev'){$speed*=-1;}
    $sum2 = parseInt($sum2)+parseInt($speed);
    turnF(true,$('#electronics').find('.slider-main'));
  });


  //猜你喜欢滑动条事件
  $('.guessYous').find('.mc').bind('mouseenter',function(){
    $('.spacer').children('i').stop();
    $('.spacer').children('i').css({right:'910px'}).animate({right:'-1px'},500);
  });

  //猜你喜欢 换一批
  $('.guessYous').children('.mt').find('a.extra').hover(function(){
    $(this).css({'backgroundPosition':'-310px -29px'});
  },function(){
    $(this).removeAttr('style');
  })
  //活动门
  _slider(['#clothBox .mt ul.tab li','#electronics .mt ul.tab li'],'tab-selected');



});