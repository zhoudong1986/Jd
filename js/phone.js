$(function(){
	// 全部分类列表
	$('#categorys-mini').hover(function(){
		$('#categorys-mini .cw-icon h2 a .ci-right').css({'transform':'rotate(180deg)'});
		$('#categorys-mini-main').css('display','block');
	},function(){
		$('#categorys-mini .cw-icon h2 a .ci-right').css({'transform':'rotate(0deg)'});
		$('#categorys-mini-main').css('display','none');
	});

	// 城市列表
	$('.city-list').hover(function(){
		$('.curr-city i').css({'transform':'rotate(180deg)'});
		$('#jd-citys').css('display','block');
	},function(){
		$('.curr-city i').css({'transform':'rotate(0deg)'});
		$('#jd-citys').css('display','none');
	});
	
	// 微信下拉框
	$('.follow-weixin').hover(function(){
		$(this).children('.i-pop').css({'display':'block'});
		$(this).children('.i-title').css({'border':'1px solid #ccc','height':'37px','borderBottom':'none','padding':'10px 8px 0'});
	},function(){
		$(this).children('.i-pop').css({'display':'none'});
		$(this).children('.i-title').css({'border':'none','height':'31px','padding':'11px 9px 0'});
	});

	// 刷新页面自动加载广告图片
	setTimeout(function(){
		$('.w-slider').animate({'height':'420px'});
	},1000);
	// 点击x图标关闭广告图片
	$('.slide-close').bind('click',function(){
		$('.w-slider').animate({'height':'0px'});
	});

	// 轮播图
	var $Lnum = 0;
	var $wz = 0;
	var $time = null;
	var $c = 0;
	$time = setInterval(runP,2000);
	function runP(){
		if($c >= $('.gc-slider-trigger li').size()){
			$c = 0;
		}
		$('.gc-slider-trigger li').css('background','rgb(51,51,51)');
		$('.gc-slider-trigger li').eq($c).css('background','rgb(218,50,77)');
		$('.gc-slider-list li').css({'opacity':'0'});
		$('.gc-slider-list li').eq($c).css({'opacity':'1'});
		$c++;
	}
	$('.gc-slider-trigger li').hover(function(){
		clearTimeout($time);
		$time = null;
		$wz = $(this).index();
		$c = $wz + 1;
		$('.gc-slider-trigger li').css({'background':'rgb(51,51,51)'});
		$(this).css({'background':'rgb(218,50,77)'});
		$('.gc-slider-list li').css({'opacity':'0'});
		$('.gc-slider-list li').eq($wz).css({'opacity':'1'});
	},function(){
		$time = setInterval(runP,2000);
	});

	// 给导航列表加鼠标事件
	$('.m-categorys-inner').children('div').children('div').hover(function(){
		var $num = $(this).index();
		$('.m-categorys-menu div').eq($num).css({'background':'#005aa9'});
		$('.m-categorys-menu div').eq($num).children('a').children('i').css({'display':'none'});
		$('.m-categorys-menu div').eq($num).children('s').css({'display':'block','borderLeftColor':'#005aa9'});
		$('.m-categorys-submenu div').eq($num).css({'display':'block'});
		$('.slider-item-ad ul li').eq($num).css({'display':'block'});
		$('.phone-firstScreen').children('div').css({'display':'none'});
		$('.phone-firstScreen').children('div').eq(0).css({'display':'block'});
		$('.phone-firstScreen').children('div').eq($num+1).css({'display':'block','opacity':'1'});
	},function(){
		var $num = $(this).index();
		$('.m-categorys-menu div').eq($num).css({'background':'#006ac8'});
		$('.m-categorys-menu div').eq($num).children('a').children('i').css({'display':'block'});
		$('.m-categorys-menu div').eq($num).children('s').css({'display':'none'});
		$('.m-categorys-submenu div').eq($num).css({'display':'none'});
		$('.slider-item-ad ul li').eq($num).css({'display':'none'});
	});

	// 热门商品
	$('.pop-tab-trigger a').hover(function(){
		var $num = $(this).index();
		$('.pop-tab-trigger a i').css({'display':'none'});
		$(this).children('i').css({'display':'block'});
		$('.pop-tab-content .item').css({'display':'none'});
		$('.pop-tab-content .item').eq($num).css({'display':'block'});
	});

	// 排行榜
	$('.sales-rank-list li .p-img').hover(function(){
		$(this).css({'transition':'all 0.3s ease 0s','transform':'scale(1.2,1.2)','zIndex':'20'});
	},function(){
		$(this).css({'transition':'all 0.3s ease 0s','transform':'scale(1,1)'});
	});

	// 专区
	$('.sf-tab li').hover(function(){
		var $index = $(this).index();
		$(this).siblings().css({'width':'151px'});
		$(this).css({'width':'212px'});
		$('.sf-tab li i').css({'display':'none'});
		$(this).children('i').css({'display':'block'});
		if($(this).parents('#gaoxing').size() > 0){
			$('#gaoxing .floor-main-goods ul').css({'display':'none'});
			$('#gaoxing .floor-main-goods ul').eq($index).css({'display':'block'});
		}else{
			$('#heyueji .floor-main-goods').css({'display':'none'});
			$('#heyueji .floor-main-goods').eq($index).css({'display':'block'});
		}
	});
	$('.floor-main-goods ul li .p-img').hover(function(){
		$(this).css({'transition':'all 0.3s ease 0s','transform':'translate(-10px)'});
	},function(){
		$(this).css({'transition':'all 0.3s ease 0s','transform':'translate(0px)'});
	});

	// 小的图片非自动轮播
	$('.floor-main-goods .floor-ad-wrap .slide-controls li').hover(function(){
		var $listNum = $(this).siblings('li').size() + 1;
		var $width = $(this).parent('.slide-controls').siblings('.i-ads').width();
		var $index = $(this).index();
		var $left = '-' + $width*($index/$listNum) + 'px';
		$(this).siblings('li').css({'background':'rgb(51,51,51)'});
		$(this).css({'background':'rgb(218,50,77)'});
		$(this).parent('.slide-controls').siblings('.i-ads').css({'left':$left});
	});

	// 专区横向导航条
	$('.floor-tab-trigger span').hover(function(){
		$(this).siblings().css({'background':'rgb(102,102,102)'});
		$(this).css('background','rgb(235, 83, 69)');
		$(this).parent().siblings('.floor-tab-cont').children('.cont-item').css({'display':'none'});
		var $num = $(this).index();
		$(this).parent().siblings('.floor-tab-cont').children('.cont-item').eq($num).css({'display':'block'});
	});

	// 左侧自动轮播图
	var timeSecond = null;
	var $width = $('.floor-content-box .c-left .jd-floor-wrap ul').width();
	var $listNum = $('.floor-content-box .c-left .slide-controls li').size();
	var $next = 1;
	$('.floor-content-box .c-left .slide-controls li').hover(function(){
		clearTimeout($timeSecond);
		$timeSecond = null;
		var $index = $(this).index();
		$next = $index + 1;
		var $left = '-' + $width*($index/$listNum) + 'px';
		$(this).siblings('li').css({'background':'rgb(51,51,51)'});
		$(this).css({'background':'rgb(218,50,77)'});
		$(this).parent('.slide-controls').siblings('.jd-floor-wrap').children('ul').css({'left':$left});
	},function(){
		$timeSecond = setInterval(runPic,1000);
	});
	function runPic() {
		if ($next >= $listNum) {
			$next = 0;
		}
		var $left = '-' + $width*($next/$listNum) + 'px';
		$('.floor-content-box .c-left .slide-controls li').css({'background':'rgb(51,51,51)'});
		$('.floor-content-box .c-left .slide-controls li').eq($next).css({'background':'rgb(218,50,77)'});
		$('.floor-content-box .c-left .jd-floor-wrap ul').css({'left':$left});
		$next++;
	}
	$timeSecond = setInterval(runPic,1000);

	// 潮机推荐筛选
	$('#chaoji .filter-items dd a').bind('click',function(){
		$(this).siblings().removeClass('on');
		$(this).siblings().children('i').css('display','none');
		$(this).toggleClass('on');
		$(this).children('i').toggle();
		if ($('#chaoji .filter-items dd a').hasClass('on')) {
			$('#chaoji #tidePhoneFilter').removeClass('filter-btn-dis');
			$('#chaoji #tidePhoneFilter').css({'disabled':'none'});
		}else{
			$('#chaoji #tidePhoneFilter').addClass('filter-btn-dis');
			$('#chaoji #tidePhoneFilter').css({'disabled':'disabled'});
		}
	});




})
