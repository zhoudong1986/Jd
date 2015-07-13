//轮播图函数
var $num=0;
var $timer=null;
var $a=0;
var $b=0;
function turnImg() {
		if($num>$('.shuffling_num li').length){$num=0;}

	$('.shuffling_num li').eq($num).css('background','#b80e5e')
	.siblings('li').css('background','#3d3d3d');
	$('div.imgs a.imgsA').eq($num).show().siblings('a.imgsA').hide();
	$num++;
}

$(function(){
	// 打开页面广告条下滑事件
	$('#top_ads').animate({width:'100%',height:'220px'},1000);
	$('#top_ads .top_pic .top_die').click(function(){
		$('#top_ads').css('display','none');
	});
	
	//鼠标控制◇旋转事件与收起和显示事件
	$('.all_class').hover(function(){
		$('.classify .rectangule').css('transform','rotate(180deg)');
		$('.all_class .all_kinds').css('display','block');
		$('.all_class .classify').css('borderBottom','none');
	},function(){
		$('.classify .rectangule').css('transform','rotate(0deg)');
		$('.all_class .all_kinds').css('display','none');
		$('.all_class .classify').css('borderBottom','1px solid #ccc');
	});

	//购物车收起事件
	$('#logo_box .car_box').hover(function() {
		$('.buy_good').css('display','block');
		$('.car').css('borderBottom','none');
	},function() {
		$('.buy_good').css('display','none');
		$('.car').css('borderBottom','1px solid #ddd');
	});

	
	//轮播图的按钮事件
	$('#shuffling').hover(function(){
		$('#shuffling .pre_btn,.next_btn').show();
	},function(){
		$('#shuffling .pre_btn,.next_btn').hide();
	});
	$('#shuffling .pre_btn,.next_btn').hover(function(){
		$(this).css({backgroundColor:'#747289'});
	},function(){
		$(this).css({backgroundColor:'#746c6b'})
	})

	//轮播图
	$timer=setInterval("turnImg()",1000);
	$('.shuffling_num ul').children('li').hover(function(){
		clearInterval($timer);
		$timer=null;
		$('div.imgs a.imgsA').eq($(this).index()).show().siblings('a.imgsA').hide();
		$('.shuffling_num ul li').css({background:'#3d3d3d'});
		$(this).css({background:'#b80e5e'});
		$a=$(this).index();
	},function(){
		$num=$a;
		$timer=setInterval("turnImg()",2000)
	});
	// $('#shuffling').hover(function(){
	// 	clearInterval($timer);
	// 	$timer=null;
	// },function(){
	// 	$timer=setInterval("turnImg()",2000);
	// });
	// $('#shuffling .pre_btn').click(function(){
	// 	clearInterval($timer);
	// 	$timer=null;
	// 	var $speed = 1;
	// 	$b=$num-1;
	// 	alert($b);
	// 	$('div.imgs a.imgsA').eq($b).show().siblings('a.imgsA').hide();
	// })

	//今日推荐边框事件
	$('.recommend_pic').hover(function(){
		$(this).children('div.border_img').show();
	},function(){
		$(this).children('div.border_img').hide();
	});

	//限时抢购的边框事件
		$('div.ready_sell').hover(function(){
			$(this).children('div.ready_border').show();
		},function(){
			$(this).children('div.ready_border').hide();
		})

	//人气爆款边框事件
	$('div.popularity_pic').hover(function(){
		$(this).children('div.popularity_bor').show();
	},function(){
		$(this).children('div.popularity_bor').hide();
	});

	//今日推荐立即抢购按键背景变色事件
	$('a div.sell').hover(function(){
		$(this).css({backgroundColor:'#d94766'});
	},function(){
		$(this).css({backgroundColor:'#b80e5e'});
	});

	//限时抢购的抢购按钮背景变色事件
	$('a div.now_sell').hover(function(){
		$(this).css({backgroundColor:'#d94766'});
	},function(){
		$(this).css({backgroundColor:'#b80e5e'});
	});

	//人气爆款按键背景变色事件
	$('a.pop_rob').hover(function(){
		$(this).css({backgroundColor:'#d94766'});
	},function(){
		$(this).css({backgroundColor:'#b80e5e'});
	});
	//楼层事件
	$(document).scroll(function(){

		if($(document).scrollTop()>=650){
			$('#floor_box').show();
		}else{
			$('#floor_box').hide();
		}
	});
	$('#floor_box .floor_ul').children('li').hover(function(){
		$(this).css({backgroundColor:'#c81623'});
		$(this).children('a').css({color:'#fff'});
	},function(){
		$(this).css({backgroundColor:'#fff',color:'#c81623'});
		$(this).children('a').css({color:'#666'});
	})

});
