/*
* 京东公共部分JS
* 2015-7-2 12:05
 */

$(function(){

  //消息提示
  function news($json){
      var num = $json.total;
    $('#nav .navitems .myjd-info').find('i').text(num).show();
    $('#nav .navitems .dl .dd').find('b').text('('+num+')').show();
  }

  //异步轮询函数
  function get_Msg($url){
    $.getJSON($url,function(data){
      if(data.status){
        news({'total':data.total});
      }
    });
    setTimeout(function(){
      get_Msg($url);
    },2000)
  }



  /*
   * 头部公共部分JS
   * 2015-7-2 12:10
   * yoyo 77315016@qq.com
   *
   * */
  $('.cityBox').hover(function(){ //配送城市鼠标放上去事件
    var value = $('span.choose').text();
    $(this).children('p').css({backgroundColor:'#fff'});
    $(this).children('div.shadow,ul').show();
    $('ul.citys li a').each(function(i){
      if($(this).text()==value)$(this).addClass('checked');
    });
  },function(){
    $(this).children('p').css({backgroundColor:'#f1f1f1'});
    $(this).children('div.shadow,ul').hide();
  });

  //配送城市里的鼠标放上去事件
  $('ul.citys li a').hover(function(){
      $(this).each(function(i){
        if($(this).attr('class')!='checked'){
          $(this).addClass('over');
        }
      });
  },function(){
    $(this).each(function(i){
      if($(this).attr('class')=='over'){
        $(this).removeClass('over');
      }
    })
  });

  //我的京东鼠标放上去事件
  $('.myJd').hover(function(){
    $(this).children('a.jd').css({backgroundColor:"#fff",color:'red'}).end().children('div.conBox,div.up,div.line').show();
  },function(){
    $(this).children('a.jd').css({backgroundColor:"#f1f1f1",color:'#666'}).end().children('div.conBox,div.up,div.line').hide();
  });

  //手机京东鼠标放上去事件
  $('.phBox').hover(function(){
    $(this).children('a.phone').css({backgroundPosition:'8px -20px','backgroundColor':'#fff'}).end().children('div.up,div.bbt,div.line').show();
  },function(){
    $(this).children('a.phone').css({backgroundPosition:'8px 5px','backgroundColor':'#f1f1f1'}).end().children('div.up,div.bbt,div.line').hide();
  });

  //手机京东鼠标放上去事件2
  $('#headBox2 li.phBox').hover(function(){
    $(this).children('a.phone2').css({backgroundPosition:'-121px -395px','backgroundColor':'#f7f7f7'}).end().children('div.up,div.bbt,div.line').show();
  },function(){
    $(this).children('a.phone2').css({backgroundPosition:'-121px -356px','backgroundColor':'#f7f7f7'}).end().children('div.up,div.bbt,div.line').hide();
  });

  //关注京东
  $('.attenBox').hover(function(){
    $(this).children('p.attention').css({backgroundColor:'#fff'}).end().children('div.line,div.up,div,code').show();
  },function(){
    $(this).children('p.attention').css({backgroundColor:'#f1f1f1'}).end().children('div.line,div.up,div,code').hide();
  });

  //客户服务
  $('.clientBox').hover(function(){
    $(this).children('p.clientService').css({backgroundColor:'#fff'}).end().children('div.line,div.up,ul.content').show();
  },function(){
    $(this).children('p.clientService').css({backgroundColor:'#f1f1f1'}).end().children('div.line,div.up,ul.content').hide();
  });

  //客户服务2
  $('#headBox2 .clientBox').hover(function(){
    $(this).children('p.clientService').css({backgroundColor:'#fff'}).end().children('div.line,div.up,ul.content').show();
  },function(){
    $(this).children('p.clientService').css({backgroundColor:'#f7f7f7'}).end().children('div.line,div.up,ul.content').hide();
  });

  //网站导航
  $('.navBox').hover(function(){
    $(this).children('.navigation').css({backgroundColor:'#fff'}).end().children('div.line,div.up,div.contents').show();
  },function(){
    $(this).children('.navigation').css({backgroundColor:'#f1f1f1'}).end().children('div.line,div.up,div.contents').hide();
  })

  //网站导航2
  $('#headBox2 .navBox').hover(function(){
    $(this).children('.navigation').css({backgroundColor:'#fff'}).end().children('div.line,div.up,div.contents').show();
  },function(){
    $(this).children('.navigation').css({backgroundColor:'#f7f7f7'}).end().children('div.line,div.up,div.contents').hide();
  })

  //2013京东头部
  $('.fore4').hover(function(){
    $(this).find('.dd').show();
    $(this).find('.outline').show();
  },function(){
    $(this).find('.dd').hide();
    $(this).find('.outline').hide();
  });
  $('.fore5').hover(function(){
    $(this).find('.dd').show();
    $(this).find('.outline').show();
  },function(){
    $(this).find('.dd').hide();
    $(this).find('.outline').hide();
  });

  //个人中心导航
  //账户设置
  $('.navitems').find('div.dl').mouseenter(function(){
    $(this).addClass('hover');
  });
  $('.navitems').find('div.dl').mouseleave(function(){
    $(this).removeClass('hover');
  });
  //社区
  $('.navitems').find('div.myjd-info').mouseenter(function(){
    //$('.navitems .myjd-info i').hide();
    $(this).addClass('hover');
  });
  $('.navitems').find('div.myjd-info').mouseleave(function(){
    //$('.navitems .myjd-info i').show();
    $(this).removeClass('hover');
  });
  //购物车中双击删除指定id记录
  $('div.under').delegate('a.deleteCar','dblclick',function(){
      $car_id = $(this).attr('car_id');
      $count = $('.nums').text();
      //去后台删除相对应ID的记录
    $.ajax({
      url:$deleteUrl,
      type:'post',
      data:{'cart_id':$car_id},
      success: function ($msg) {
        if($msg=='1'){
            $('div.under').find('li[car_id='+$car_id+']').remove();//删除该条购物记录
            //购物车总记录数-1
            $count-=1;
            if($count<0){$count=0;}
            $('.nums').text($count);
        }else{
            alert('删除失败');
        }
      }
    });
  });
  //购物车中点击去购物车事件
  $('div.under').delegate('button.goCar','click',function(){
      window.location.href = $goCarUrl;
  });

  //用户中心头部nav中的购物车事件
  $('.dorpdown').hover(function () {
    $('.dorpdown-layer').show();
    $('.hover .dorpdown-layer').show();
    //去后台查询购物车表
    $.ajax({
      url:$getCarNav,
      type:'post',
      success:function($msg){
        $('#settleup-content').html('').append($msg);
      }
    });
  }, function () {
    $('.dorpdown-layer').hide();
    $('.hover .dorpdown-layer').hide();

  });
  //用户中心头部nav中的购物车事件删除
  $('#settleup-content').delegate('a.delete','dblclick', function () {
    var $car_id = $('a.delete').attr('car_id');
    $count = $('#shopping-amount').text();
    $.ajax({
      url:$deleteCar,
      type:'post',
      data:{'cart_id':$car_id},
      success:function($msg){
          if($msg=='1'){
            $('#settleup-content').find('li[car_id='+$car_id+']').remove();//删除该条购物记录
            $count-=1;
            if($count<0){$count=0;}
            $('#shopping-amount').text($count);
          }else{
            alert('删除失败');
          }
      }
    })
  });

  //轮循消息
    //get_Msg($url);

});