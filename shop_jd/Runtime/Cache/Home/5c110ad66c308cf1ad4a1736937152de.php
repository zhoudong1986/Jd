<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>我的京东--我的订单</title>
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/order.css" media="all"></head>
  <link rel="stylesheet" href="/shop_jd/Home/Public/css/common.css"/>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
<body myjd="_MYJD_ordercenter">
	<div class="w ld" id="toppanel">
		<div style="right: 110.5px; display: none;" id="sidepanel" class="hide">
			<a class="research" target="_top" href="http://surveys.jd.com/index.php?r=survey/index/sid/11322/lang/zh-Hans"> <b></b>
				调查问卷
			</a>
			<a href="#" class="gotop" title="使用快捷键T也可返回顶部哦！"> <b></b>
				返回顶部
			</a>
		</div>
	</div>
  <div id="headBox2">
  <div class="contents">
    <ul class="left">
      <li class="first"><a href="/index.php/Home/Index/index">返回京东</a></li>
      <li class="second"><span class="start"></span><a href="">收藏京东会员</a></li>
    </ul>
    <ul class="right">
      <li class="login">
        <?php if($_SESSION['login_info']['isLogin']): ?><a href='/index.php/Home/Member/home/uid/<?php echo ($_SESSION["login_info"]["uid"]); ?>' class='first'><?php echo ($_SESSION['login_info']['user_name']); ?></a>
          <?php else: ?>
          <a class="first" href="/index.php/Home/Login/login" >您好，请登录</a><?php endif; ?>
      </li>
      <li class="register">
        <a href="">免费注册</a>
      </li>
      <li class="separate"></li>
      <li class="myOrder">
        <a href="/index.php/Home/Member/myOrder/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">我的订单</a>
      </li>
      <li class="separate"></li>
      <!--<li class="memBox">-->
        <!--<a href="" class="member">京东会员</a>-->
      <!--</li>-->
      <li class="separate"></li>
      <!--<li class="business">-->
        <!--<img src="/shop_jd/Home/Public/images/546bfdd4N00e36964.jpg" alt=""/>-->
        <!--<a href="">企业频道</a>-->
      <!--</li>-->
      <li class="separate"></li>
      <li class="phBox">
        <a href="#" class='phone2'>手机京东</a>
        <i class="ci-right"></i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="bbt"></div>
      </li>
      <li class="separate"></li>
      <li class="clientBox">
        <p class="clientService">客户服务</p>
        <i class="ci-right"></i>
        <div class="up"></div>
        <div class="line"></div>
        <ul class="content">
          <!--<li><a href="">帮助中心</a></li>-->
          <!--<li><a href="">售后服务</a></li>-->
          <li><a href="">在线客服</a></li>
          <!--<li><a href="">意见建议</a></li>-->
          <!--<li><a href="">客服邮箱</a></li>-->
        </ul>
      <li class="separate"></li>
      <li class="navBox">
        <p class="navigation">网站导航</p>
        <i class="ci-right"></i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="contents">
          <div class="feature">
            <h3>特色栏目</h3>
            <ul class="lis">
              <li><a href="#">京东通信</a></li>
              <li><a href="#">校园之星</a></li>
              <li><a href="#">视频购物</a></li>
              <li><a href="">京东社区</a></li>
              <li><a href="">在线读书</a></li>
              <li><a href="">装机大师</a></li>
              <li><a href="">京东E卡</a></li>
              <li><a href="">家装城</a></li>
              <li><a href="">搭配购</a></li>
              <li><a href="">游戏社区</a></li>
              <li><a href="">智能社区</a></li>
              <li><a href="">智能馆</a></li>
              <li><a href="">礼品购</a></li>
              <li><a href="">乡村招募</a></li>
              <li><a href="">校园加盟</a></li>
            </ul>
          </div>
          <div class="separate2"></div>
          <div class="feature">
            <h3>企业服务</h3>
            <ul class="lis">
              <li><a href="">企业采购</a></li>
              <li><a href="">办公生活馆</a></li>
            </ul>
          </div>
          <div class="separate2"></div>
          <div class="feature">
            <h3>其他栏目</h3>
            <ul class="lis">
              <li><a href="">English Site</a></li>
              <li><a href="">知识产权维权</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
	<!--shortcut end-->
	<div id="o-header-2013">
		<div class="w" id="header-2013">
			<div id="logo-2013" class="ld">
				<a href="http://www.jd.com/" hidefocus="true">
					<b></b>
					<img src="/shop_jd/Home/Public/images/logo-201305.png" alt="京东" height="60" width="270"></a>
			</div>
			<!--logo end-->
			<div id="search-2013">
				<div class="i-search ld">
					<ul id="shelper" class="hide"></ul>
					<div class="form">
						<input value="佳能" class="text" accesskey="s" id="key" autocomplete="off" onkeydown="javascript:if(event.keyCode==13) search('key');" type="text">
						<input value="搜索" class="button" onclick="search('key');return false;" type="button"></div>
				</div>
				<div id="hotwords">
					<strong>热门搜索：</strong>
					<a href="http://search.jd.com/Search?keyword=%E9%AD%94%E9%94%A5%E8%80%B3%E6%9C%BA&amp;enc=utf-8&amp;jdr=hot" target="_top">魔锥耳机</a>
					<a href="http://search.jd.com/Search?keyword=%E6%99%BA%E8%83%BD%E7%94%B5%E8%A7%86&amp;enc=utf-8&amp;jdr=hot" target="_top">智能电视</a>
					<a href="http://search.jd.com/Search?keyword=%E8%A1%A5%E6%B0%B4%E9%9D%A2%E8%86%9C&amp;enc=utf-8&amp;jdr=hot" target="_top">补水面膜</a>
					<a href="http://search.jd.com/Search?keyword=%E6%91%84%E5%BD%B1&amp;enc=utf-8&amp;jdr=hot" target="_top">摄影</a>
				</div>
			</div>
			<!--search end-->
			<div id="my360buy-2013">
				<dl load="1" class="">
					<dt class="ld">
						<s></s>
						<a href="http://home.jd.com/">我的京东</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							<span class="fl">
								<strong>jd_女王空大</strong>
							</span>
							<span class="fr">
								<a href="http://home.jd.com/">去我的京东首页&nbsp;&gt;</a>
							</span>
						</div>
						<div id="jduc-orderlist"></div>
						<div class="uclist">
							<ul class="fore1 fl">
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04b" href="http://order.jd.com/center/list.action">
										待处理订单
										<span id="num-unfinishedorder"> <font style="color: rgb(204, 204, 204);">(0)</font>
										</span>
									</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04c" href="http://club.jd.com/myjd/userConsultationList_1.html">
										咨询回复
										<span id="num-consultation"> <font style="color: rgb(204, 204, 204);">(0)</font>
										</span>
									</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04d" href="http://t.jd.com/product/followProductList.action?isReduce=true">
										降价商品
										<span id="num-reduction"></span>
									</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|shouhou" href="http://myjd.jd.com/repair/orderlist.action">返修退换货</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04e" href="http://quan.jd.com/user_quan.action">
										优惠券
										<span id="num-ticket">
											<font style="color: rgb(204, 204, 204);">(0)</font>
										</span>
									</a>
								</li>
							</ul>
							<ul class="fore2 fl">
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04i" href="http://t.jd.com/home/follow">我的关注&nbsp;&gt;</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|04g" href="http://bean.jd.com/myJingBean/list">我的京豆&nbsp;&gt;</a>
								</li>
								<li>
									<a target="_top" clstag="homepage|keycount|home2013|licai" href="http://trade.jr.jd.com/centre/browse.action">我的理财&nbsp;&gt;</a>
								</li>
								<li style="display: list-item;" class="J_baitiao hide">
									<a target="_top" clstag="homepage|keycount|home2013|baitiao" href="http://baitiao.jd.com/creditUser/list">我的白条&nbsp;&gt;</a>
								</li>
								<li class="J_jincai hide">
									<a target="_top" clstag="homepage|keycount|home2013|jincai" href="http://baitiao.jd.com/jinCai/record">京东金采&nbsp;&gt;</a>
								</li>
							</ul>
						</div>
						<div class="viewlist">
							<div class="smt" clstag="homepage|keycount|home2013|04k">
								<h4>最近浏览的商品：</h4>
								<div style="float: right; padding-right: 9px;">
									<a style="border: 0px none; color: rgb(0, 94, 167);" href="http://my.jd.com/history/list.html" target="_top">查看浏览历史&nbsp;&gt;</a>
								</div>
							</div>
							<div class="smc" id="jduc-viewlist" clstag="homepage|keycount|home2013|04j">
								<ul class="lh">
									<li data-clk="http://mercury.jd.com/log.gif?t=rec.202001&amp;v=src=rec$action=1$reqsig=f41971fd7119c200ae98ed2d532b010150fe73c8$enb=1$sku=0$csku=1056857$index=0$expid=20200100114031937&amp;rid=6378771595017614654&amp;ver=1&amp;sig=ed0fe73fd1b4df27fd80d83aca7f1b0bf046f442">
										<a href="http://item.jd.com/1056857.html" target="_top" title="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 绿色">
											<img src="/shop_jd/Home/Public/images/rbehv1l113aiaaaaaahh3bvqs_yaaiccam-awgaaeh0732.jpg" alt="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 绿色" height="50" width="50"></a>
									</li>
									<li data-clk="http://mercury.jd.com/log.gif?t=rec.202001&amp;v=src=rec$action=1$reqsig=f41971fd7119c200ae98ed2d532b010150fe73c8$enb=1$sku=0$csku=1056858$index=1$expid=20200100114031937&amp;rid=6378771595017614654&amp;ver=1&amp;sig=f6e01c73b76363f07943361a6eb5714f3cfa521b">
										<a href="http://item.jd.com/1056858.html" target="_top" title="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 橙色">
											<img src="/shop_jd/Home/Public/images/rbehvvl113miaaaaaahmzuowfroaaiccao7ggmaaebl951.jpg" alt="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 橙色" height="50" width="50"></a>
									</li>
									<li data-clk="http://mercury.jd.com/log.gif?t=rec.202001&amp;v=src=rec$action=1$reqsig=f41971fd7119c200ae98ed2d532b010150fe73c8$enb=1$sku=0$csku=1056861$index=2$expid=20200100114031937&amp;rid=6378771595017614654&amp;ver=1&amp;sig=8adfa5f727602c04a70b1718ac8cc366b08661f1">
										<a href="http://item.jd.com/1056861.html" target="_top" title="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色">
											<img src="/shop_jd/Home/Public/images/rbehvvl113yiaaaaaagclirin4yaaiccqbgg34aazyu686.jpg" alt="美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色" height="50" width="50"></a>
									</li>
									<li data-clk="http://mercury.jd.com/log.gif?t=rec.202001&amp;v=src=rec$action=1$reqsig=f41971fd7119c200ae98ed2d532b010150fe73c8$enb=1$sku=0$csku=908668$index=3$expid=20200100114031937&amp;rid=6378771595017614654&amp;ver=1&amp;sig=6838ef66c16d414e6bdde465dd5d451d18ae2530">
										<a href="http://item.jd.com/908668.html" target="_top" title="EZON宜准电波表运动手表户外手表多功能手表防水手表电子手表L002A01黑">
											<img src="/shop_jd/Home/Public/images/555ef2cfn2f4a41d1.jpg" alt="EZON宜准电波表运动手表户外手表多功能手表防水手表电子手表L002A01黑" height="50" width="50"></a>
									</li>
									<li data-clk="http://mercury.jd.com/log.gif?t=rec.202001&amp;v=src=rec$action=1$reqsig=f41971fd7119c200ae98ed2d532b010150fe73c8$enb=1$sku=0$csku=1458037231$index=4$expid=20200100114031937&amp;rid=6378771595017614654&amp;ver=1&amp;sig=6cd3bdee69d00e1c32a73c0ac43ed0d488de78b8">
										<a href="http://item.jd.com/1458037231.html" target="_top" title="买6送1Walkers沃尔克斯 英国 进口曲奇饼干 节日礼盒装 蓝罐红罐英式糕点 面包干 手指形黄油酥饼干*1盒">
											<img src="/shop_jd/Home/Public/images/54c08a4bn3ca9fb1a.jpg" alt="买6送1Walkers沃尔克斯 英国 进口曲奇饼干 节日礼盒装 蓝罐红罐英式糕点 面包干 手指形黄油酥饼干*1盒" height="50" width="50"></a>
									</li>
								</ul>
							</div>
						</div>
					</dd>
				</dl>
			</div>
			<!--my360buy end-->
			<div id="settleup-2013">
				<dl class="">
					<dt class="ld">
						<s></s>
						<span class="shopping">
							<span id="shopping-amount">2</span>
						</span>
						<a href="http://cart.jd.com/cart/cart.html?r=1437186367957" id="settleup-url">去购物车结算</a>
						<b></b>
					</dt>
					<dd>
						<div id="settleup-content">
							<div class="smt">
								<h4 class="fl">最新加入的商品</h4>
							</div>
							<div class="smc">
								<ul id="mcart-sigle">
									<li>
										<div class="p-img fl">
											<a href="http://item.jd.com/1499247677.html" target="_top">
												<img src="/shop_jd/Home/Public/images/5584fec1ndffff235.jpg" alt="" height="50" width="50"></a>
										</div>
										<div class="p-name fl">
											<a href="http://item.jd.com/1499247677.html" title="耐克Nike Air Max90 女子气垫跑鞋 休闲鞋724882 443817 树莓红443817-600  37.5码/5Y" target="_top">
												耐克Nike Air Max90 女子气垫跑鞋 休闲鞋724882 443817 树莓红443817-600  37.5码/5Y
											</a>
										</div>
										<div class="p-detail fr ar">
											<span class="p-price">
												<strong>￥899.00</strong>
												×1
											</span>
											<br>
											<a class="delete" data-id="1499247677" data-type="RemoveProduct" href="#delete">删除</a>
										</div>
									</li>
								</ul>
								<ul id="mcart-gift"></ul>
								<ul id="mcart-mz">
									<li class="dt">
										<div class="fl">
											<span class="hl-orange">满赠</span>
											已购满30元，您可领赠品
										</div>
										<div class="fr"> <em>小计：￥99.00</em>
										</div>
										<div class="clr"></div>
									</li>
									<li>
										<div class="p-img fl">
											<a href="http://item.jd.com/1153740.html" target="_top">
												<img src="/shop_jd/Home/Public/images/53a4097cn8308d4ec.jpg" alt="" height="50" width="50"></a>
										</div>
										<div class="p-name fl">
											<span></span>
											<a href="http://item.jd.com/1153740.html" title="乐心（LIFESENSE） Mambo 运动手环 智能手环 计步器 微信朋友圈运动PK 微信互联 " target="_top">乐心（LIFESENSE） Mambo 运动手环 智能手环 计步器 微信朋友圈运动PK 微信互联</a>
										</div>
										<div class="p-detail fr ar">
											<span class="p-price">
												<strong>￥99.00</strong>
												×1
											</span>
											<br>
											<a class="delete" data-id="1153740|183830361" data-type="RemoveSuit" href="#delete">删除</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="smb ar">
								共
								<b>2</b>
								件商品　共计
								<strong>￥ 998.00</strong>
								<br>
								<a href="http://cart.jd.com/cart/cart.html?r=1437186367954" title="去购物车结算" id="btn-payforgoods">去购物车结算</a>
							</div>
						</div>
					</dd>
				</dl>
			</div>
			<!--settleup end-->
		</div>
		<!--header end-->
		<div class="w">
			<!--<div id="nav-2013">-->
				<!--<div class="categorys-2014" id="categorys-2013">-->
					<!--<div class="mt ld">-->
						<!--<h2>-->
							<!--<a href="http://www.jd.com/allSort.aspx">-->
								<!--全部商品分类-->
								<!--<b></b>-->
							<!--</a>-->
						<!--</h2>-->
					<!--</div>-->
					<!--<div id="_JD_ALLSORT" class="mc">-->
						<!--<div class="item fore1">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://book.jd.com/">图书</a>-->
									<!--、-->
									<!--<a href="http://mvd.jd.com/">音像</a>-->
									<!--、-->
									<!--<a href="http://e.jd.com/ebook.html">电子书</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore2">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/electronic.html">家用电器</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore3">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://shouji.jd.com/">手机</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/digital.html">数码</a>-->
									<!--、-->
									<!--<a href="http://mobile.jd.com/index.do">京东通信</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore4">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/computer.html">电脑、办公</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore5">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/home.html">家居</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/furniture.html">家具</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/decoration.html">家装</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/kitchenware.html">厨具</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore6">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/1315-1342.html">男装</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/1315-1343.html">女装</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/1315-1345.html">内衣</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/jewellery.html">珠宝</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore7">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/beauty.html">个护化妆</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore8">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/shoes.html">鞋靴</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/bag.html">箱包</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/watch.html">钟表</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/1672-2615.html">奢侈品</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore9">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/sports.html">运动户外</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore10">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://car.jd.com/">汽车</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/auto.html">汽车用品</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore11">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/baby.html">母婴</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/toys.html">玩具乐器</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore12">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/food.html">食品</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/wine.html">酒类</a>-->
									<!--、-->
									<!--<a href="http://channel.jd.com/freshfood.html">生鲜</a>-->
									<!--、-->
									<!--<a href="http://china.jd.com/">特产</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore13">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://channel.jd.com/health.html">营养保健</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="item fore14">-->
							<!--<span data-split="1">-->
								<!--<h3>-->
									<!--<a href="http://caipiao.jd.com/">彩票</a>-->
									<!--、-->
									<!--<a href="http://trip.jd.com/">旅行</a>-->
									<!--、-->
									<!--<a href="http://chongzhi.jd.com/">充值</a>-->
									<!--、-->
									<!--<a href="http://piao.jd.com/">票务</a>-->
								<!--</h3>-->
								<!--<s></s>-->
							<!--</span>-->
						<!--</div>-->
						<!--<div class="extra">-->
							<!--<a href="http://www.jd.com/allSort.aspx">全部商品分类</a>-->
						<!--</div>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div id="treasure"></div>-->
				<!--<ul id="navitems-2013">-->
					<!--<li class="fore1" id="nav-home">-->
						<!--<a href="http://www.jd.com/">首页</a>-->
					<!--</li>-->
					<!--<li class="fore2" id="nav-fashion">-->
						<!--<a href="http://fashion.jd.com/">服装城</a>-->
					<!--</li>-->
					<!--<li class="fore3" id="nav-chaoshi">-->
						<!--<a href="http://channel.jd.com/chaoshi.html">美食</a>-->
					<!--</li>-->
					<!--<li class="fore4" id="nav-tuan">-->
						<!--<a href="http://tuan.jd.com/" target="_top">团购</a>-->
					<!--</li>-->
					<!--<li class="fore5" id="nav-auction">-->
						<!--<a href="http://auction.jd.com/">夺宝岛</a>-->
					<!--</li>-->
					<!--<li class="fore6" id="nav-shan">-->
						<!--<a href="http://red.jd.com/">闪购</a>-->
					<!--</li>-->
					<!--<li class="fore7" id="nav-jinrong">-->
						<!--<a href="http://jr.jd.com/" target="_top">金融</a>-->
					<!--</li>-->
				<!--</ul>-->
			<!--</div>-->
		</div>
	</div>

	<!-- header end -->

	<div id="container">
		<div class="w">
			<!--<div id="myjd-shortcut">-->
				<!--<div class="tit">-->
					<!--<a href="http://home.jd.com/">我的京东</a>-->
				<!--</div>-->
				<!--<div class="mypage">-->
					<!--<a href="http://me.jd.com/" target="_top">个人主页</a>-->
				<!--</div>-->

				<!--<dl class="myjd-set">-->
					<!--<dt>-->
						<!--<span>设置</span>-->
						<!--<b></b>-->
					<!--</dt>-->
					<!--<dd>-->
						<!--<a target="_self" tid="_MYJD_info" href="http://i.jd.com/user/info">-->
							<!--<span>个人信息</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_safe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action">-->
							<!--<span>账户安全</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_grade" href="http://usergrade.jd.com/user/grade">-->
							<!--<span>我的级别</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_add" href="http://easybuy.jd.com/address/getEasyBuyList.action">-->
							<!--<span>收货地址</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_share" href="http://share.jd.com/share/index.html">-->
							<!--<span>分享绑定</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_rss" href="http://edm.jd.com/front/subscribe/index.aspx">-->
							<!--<span>邮件订阅</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_recor" href="http://usergrade.jd.com/user/consume">-->
							<!--<span>消费记录</span>-->
						<!--</a>-->
						<!--<a target="_top" tid="_MYJD_app" href="http://fw.jd.com/home/auth_list.action">-->
							<!--<span>应用授权</span>-->
						<!--</a>-->
						<!--<a target="_top" tid="_MYJD_pay" href="https://cashier.jd.com/quick/quickBindCard.action">-->
							<!--<span>快捷支付</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_zpzz" href="http://i.jd.com/user/userinfo/zpzz.html">-->
							<!--<span>增票资质</span>-->
						<!--</a>-->
					<!--</dd>-->
				<!--</dl>-->
				<!--<dl class="myjd-info">-->
					<!--<dt>-->
						<!--<span>-->
							<!--社区 <i>(1)</i>-->
						<!--</span>-->
						<!--<b></b>-->
					<!--</dt>-->
					<!--<dd>-->
						<!--<a target="_self" tid="_MYJD_joy" href="http://joycenter.jd.com/">-->
							<!--<span>-->
								<!--消息精灵-->
								<!--<b>(1)</b>-->
							<!--</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_activities" href="http://luck.jd.com/myjd/myJoinActivity.html">-->
							<!--<span>我的活动</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_circle" href="http://group.jd.com/circle/myjoincircle.htm">-->
							<!--<span>我的圈子</span>-->
						<!--</a>-->
						<!--<a target="_self" tid="_MYJD_mycollect" href="http://group.jd.com/thread/mythread.htm">-->
							<!--<span>我的帖子</span>-->
						<!--</a>-->
					<!--</dd>-->
				<!--</dl>-->
			<!--</div>-->
			<div id="main">
				<div class="g-0">
					<div id="content" class="c-3-5">
						<div class="mod-main mod-comm" id="order01">
							<div class="m m3" id="safeinfo" style="display: none;"></div>
							<div class="mt">
								<h3>
									我的订单
									<div class="layer-credit" id="creditPayShow" style="display: none;">
										<a class="close" href="#none" clstag="click|keycount|orderinfo|baitiaoclose">关闭</a>
										<div class="cont">
											<span></span>
											<a class="go" href="#none" target="_top"></a>
										</div>
									</div>
								</h3>
								<div class="extra-r" id="orderTmDiv">
									<a href="http://order.jd.com/center/recycle.action?d=1" class="ftx-05 mr10" clstag="click|keycount|orderinfo|recycle">订单回收站</a>
									<!--a class="im2013" href="#" title="联系客服">
									<strong>联系客服</strong>
								</a-->
								<a class="im2013" href="#" onclick="getPamsForChat()" title="联系客服">
									<strong>京东在线客服</strong>
								</a>
							</div>
						</div>
						<div class="mc" id="order01">
							<p>
								<a href="http://shu.jd.com/2014.html" target="_black" clstag="click|keycount|orderinfo|shu">2014京东数聚汇 我的城市故事</a>
							</p>
							<dl>
								<dt>便利提醒：</dt>
								<dd id="ordercount-waitPay" clstag="click|keycount|orderinfo|waitPay">待付款(0)</dd>
								<dd id="ordercount-waitReceive" clstag="click|keycount|orderinfo|waitReceive">待确认收货(0)</dd>
								<dd id="ordercount-waitPick" clstag="click|keycount|orderinfo|waitPick">待自提(0)</dd>
							</dl>
							<dl>
								<dt>特色服务：</dt>
								<dd>
									<a href="http://auction.jd.com/interest.action" target="_top" clstag="click|keycount|orderinfo|auction">夺宝箱</a>
								</dd>
								<dd>
									<a href="http://diy.jd.com/colllogin/myhouse.action" target="_top" clstag="click|keycount|orderinfo|colllogin">装机配置单</a>
								</dd>
								<dd>
									<a href="http://dujia.jd.com/order/orderList.html" target="_top" clstag="click|keycount|orderinfo|international">我的旅行订单</a>
								</dd>
								<dd>
									<a href="http://ding.jd.com/plan/showPlans.action" target="_top" clstag="click|keycount|orderinfo|showPlans">我的定期送</a>
								</dd>
								<dd>
									<a href="http://paimai.jd.com/money/mymoney.action" target="_top" clstag="click|keycount|orderinfo|mymoney">我的竞拍保证金</a>
								</dd>
								<dd>
									<a class="icon-new" href="http://baitiao.jd.com/creditUser/list" target="_top" clstag="click|keycount|orderinfo|baitiao">京东白条</a>
								</dd>
								<dd>
									<a class="icon-new" href="http://huishou.jd.com/order" target="_top" clstag="click|keycount|orderinfo|huishou">以旧换新</a>
								</dd>
								<dd>
									<a class="icon-new" href="http://kd.eve.jd.com/reserve/myReservePage" target="_top" clstag="click|keycount|orderinfo|huishou">宽带</a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="mod-main mod-comm lefta-box" id="order02">
						<div class="mt">
							<ul class="taborder">
								<li>
									<div class="tyies-t">
										<strong class="ftx-01">全部订单</strong>
										<b></b>
									</div>
									<div class="tyies-c">
										<div class="close"></div>
										<div class="filter-item">
											<span class="label">不限：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=&amp;d=1&amp;s=4096" target="_self">全部类型</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">普通：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=0-6-8-9-10-11-13-15-16-17-18-19-21-22-23-24-25-32-33-41-42-49-54-56&amp;d=1&amp;s=4096" target="_self">实物商品</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">旅游：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=35-83&amp;d=1&amp;s=4096" target="_self">机票</a>
												<a href="http://order.jd.com/center/list.action?t=39&amp;d=1&amp;s=4096" target="_self">酒店</a>
												<a href="http://order.jd.com/center/list.action?t=45&amp;d=1&amp;s=4096" target="_self">租车</a>
												<a href="http://order.jd.com/center/list.action?t=47&amp;d=1&amp;s=4096" target="_self">度假</a>
												<a href="http://order.jd.com/center/list.action?t=44&amp;d=1&amp;s=4096" target="_self">景点</a>
												<a href="http://order.jd.com/center/list.action?t=46&amp;d=1&amp;s=4096" target="_self">火车</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">充值：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=34-62&amp;d=1&amp;s=4096" target="_self">游戏</a>
												<a href="http://order.jd.com/center/list.action?t=37&amp;d=1&amp;s=4096" target="_self">手机充值</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">票务：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=43&amp;d=1&amp;s=4096" target="_self">电影票</a>
												<a href="http://order.jd.com/center/list.action?t=53&amp;d=1&amp;s=4096" target="_self">演出票</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">数字：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=38&amp;d=1&amp;s=4096" target="_self">电子书</a>
												<a href="http://order.jd.com/center/list.action?t=58&amp;d=1&amp;s=4096" target="_self">数字音乐</a>
												<a href="http://order.jd.com/center/list.action?t=57&amp;d=1&amp;s=4096" target="_self">应用商店</a>
											</div>
										</div>
										<div class="filter-item">
											<span class="label">其他：</span>
											<div class="item-con">
												<a href="http://order.jd.com/center/list.action?t=36&amp;d=1&amp;s=4096" target="_self">彩票</a>
												<a href="http://order.jd.com/center/list.action?t=28-29-201&amp;d=1&amp;s=4096" target="_self">团购</a>
												<a href="http://order.jd.com/center/list.action?t=48-64-65&amp;d=1&amp;s=4096" target="_self">保险</a>
												<a href="http://order.jd.com/center/list.action?t=2&amp;d=1&amp;s=4096" target="_self">夺宝岛</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="extra-r">
								<div class="search-01">
									<input id="ip_keyword" name="" class="s-itxt" value="商品名称、商品编号、订单编号" onfocus="if (this.value==this.defaultValue) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" onkeydown="javascript:if(event.keyCode==13) OrderSearch('ip_keyword');" type="text">
									<!--input name="" type="button" value="查 询" class="btn-13" onclick="OrderSearch('ip_keyword')" clstag="click|keycount|orderinfo|search"/-->
									<a href="javascript:;" class="btn-13" onclick="OrderSearch('ip_keyword')" clstag="click|keycount|orderinfo|search">查 询</a>
								</div>
							</div>
						</div>
						<div class="mc">
							<table class="tb-void">
								<colgroup>
								<col width="290">
								<col width="90">
								<col width="110">
								<col width="100">
								<col width="100">
								<col width="130"></colgroup>
							<thead>
								<tr>
									<th>订单信息</th>
									<th>收货人</th>
									<th>订单金额</th>
									<th>
										<select id="submitDate" name="" class="sele">
											<option value="1" selected="">最近三个月</option>
											<option value="2">今年内</option>
											<option value="2014">2014年</option>
											<option value="2013">2013年</option>
											<option value="2012">2012年</option>
											<option value="3">2012年以前</option>
										</select>
									</th>
									<th>
										<select id="orderState" name="" class="sele">
											<option value="4096" selected="">全部状态</option>
											<option value="1">等待付款</option>
											<option value="32">等待自提</option>
											<option value="128">等待收货</option>
											<!-- <option value="0">处理中</option>
										-->
										<!--<option value="2048">有效</option>
									-->
									<option value="1024">已完成</option>
									<option value="-1">已取消</option>
								</select>
							</th>
							<th>操作</th>
						</tr>
					</thead>
          <tbody id="tb-9755310702">
            <tr class="tr-th">
              <td colspan="6">
                <span class="tcol1">
                    订单编号:
                    <a name="orderIdLinks" id="idUrl9755310702" target="_blank" href="http://order.jd.com/normal/item.action?orderid=9755310702&amp;PassKey=5CAC03D8AFFECB5BF0EF31646A07155F" clstag="click|keycount|orderinfo|order_num">9755310702</a>
                </span>
                <span class="tcol2">京东</span>
                <span class="tcol3">
                    <a class="btn-im" onclick="getPamsForChat()" href="#none" title="联系客服"></a>
                </span>
              </td>
            </tr>
            <tr id="track9755310702" oty="0,4,70" class="tr-td">
              <td>
                <div class="img-list">
                  <a href="http://item.jd.com/1499247677.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_blank">
                    <img class="err-product" src="/shop_jd/Home/Public/images/5584fec1Ndffff235.jpg" title="耐克Nike Air Max90 女子气垫跑鞋 休闲鞋724882 443817 树莓红443817-600  37.5码/5Y" height="50" width="50">
                  </a>
                  <a href="http://item.jd.com/1530969004.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_blank">
                    <img class="err-product" src="/shop_jd/Home/Public/images/55656890N371f50dc.jpg" title="加一尚品女式内裤 春夏莫代尔低腰平角打底裤女内裤防走光安全裤 P08 三条装 混色 155/85  S" height="50" width="50">
                  </a>
                  <a href="http://item.jd.com/1153740.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_blank">
                    <img class="err-product" src="/shop_jd/Home/Public/images/53a4097cN8308d4ec.jpg" title="乐心（LIFESENSE） Mambo 运动手环 智能手环 计步器 微信朋友圈运动PK 微信互联 " height="50" width="50">
                  </a>
                </div>
              </td>
              <td><div class="u-name">周广生</div></td>
              <td>
                ¥1127.00<br>
                在线支付<br>
              </td>
              <td>
                <span class="ftx-03">2015-07-19 <br> 10:48:54</span>
                <input id="datasubmit-9755310702" value="2015-07-19 10:48:54" type="hidden">
              </td>

              <td class="td-01"><strong class="ftx-04 order-statu">等待付款</strong>
                <div class="tooltip" onmouseover="ShowUmsMessage(this, 9755310702,0,0,0,0,0,0);" onmouseout="CloseUmsMessage();">跟踪<s></s></div></td>

              <td id="operate9755310702" class="order-doi" width="100">

                <span id="pay-button-9755310702"><a class="btn btn-4" target="_blank" href="https://cashier.jd.com/payment/pay.action?OrderType=0&amp;companyid=10&amp;id=9755310702&amp;key=2E9741259ED348A93B99ED9FB9E36C4CC480B9CC35F0DF01A779FD582C519411&amp;toType=10&amp;total=1127.00"><s></s>付&nbsp;款</a></span><br><a class="ipay" href="http://pay.jd.com/payment/instead_confirm.action?id=9755310702&amp;total=1127.00&amp;companyid=10&amp;OrderType=0&amp;key=2E9741259ED348A93B99ED9FB9E36C4C29D850D12DF8C43E" target="_blank">请别人代付</a>
                <br><a target="_blank" href="http://order.jd.com/normal/item.action?orderid=9755310702&amp;PassKey=5CAC03D8AFFECB5BF0EF31646A07155F" clstag="click|keycount|orderinfo|order_check">查看</a><a href="#" onclick="CancelOrder(9755310702,'6BC52666C668883F65F9F82DC49CBFF9')"></a>

                <br><a href="javascript:;" clstag="click|keycount|orderinfo|cancel" onclick="CancelOrder(9755310702,'6BC52666C668883F65F9F82DC49CBFF9','cancelOrder.html?1&amp;cancalText=0&amp;isHaveGiftOrder=0')">取消订单</a></td>
            </tr>
          </tbody>
					<tbody id="tb-9340764346">
						<tr class="tr-th">
							<td colspan="6">
								<span class="tcol1">
									订单编号:
									<a name="orderIdLinks" id="idUrl9340764346" target="_top" href="http://order.jd.com/normal/item.action?orderid=9340764346&amp;PassKey=2286316898986E60393686D69EA8206C" clstag="click|keycount|orderinfo|order_num">9340764346</a>
								</span>
								<span class="tcol2">京东</span>
								<span class="tcol3">
									<a class="btn-im" onclick="getPamsForChat()" href="#none" title="联系客服"></a>
								</span>
							</td>
						</tr>
						<tr id="track9340764346" oty="0,4,70" class="tr-td">
							<td>
								<div class="img-list">
									<a href="http://item.jd.com/970122.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/53b22c37n3b03f758.jpg" title="ESK 便携收纳包 数据线包 耳机包 理线盒  防压防震 黑色" height="50" width="50"></a>
									<a href="http://item.jd.com/1226597.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/542220b9nb6748f3b.jpg" title="幻响（i-mu）便携收纳包 多功能收纳盒 耳机收纳 数据线包 防震防压" height="50" width="50"></a>
									<a href="http://item.jd.com/1149508.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/53a8ec55n5f7419c7.jpg" title="MaxMco 便携收纳器 数据包 耳机包 理线盒 防压防震（颜色随机发放）" height="50" width="50"></a>
									<a href="http://item.jd.com/1205858.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/54ed7df0nd0508238.jpg" title="幻响（i-mu）二合一数据电源线 苹果iphone6/plus/5/5S/5C三星小米 Lightning/Micro usb 高速升级版 蓝色" height="50" width="50"></a>
									<a href="http://item.jd.com/1226597.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/542220b9nb6748f3b.jpg" title="幻响（i-mu）便携收纳包 多功能收纳盒 耳机收纳 数据线包 防震防压" height="50" width="50"></a>
									<a href="http://item.jd.com/1090262.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/53c5e8f8n785c3a79.jpg" title="dostyle HS303 多功能入耳式耳机 钛金灰" height="50" width="50"></a>
									<a href="http://item.jd.com/1250967.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/5473178bn94970d0b.jpg" title="Apple iPad Air 2 MH182CH/A 9.7英寸平板电脑 （64G WLAN 机型）金色" height="50" width="50"></a>
								</div>
							</td>
							<td>
								<div class="u-name">周广生</div>
							</td>
							<td>
								¥4389.00
								<br>
								在线支付
								<br></td>
							<td>
								<span class="ftx-03">
									2015-05-12
									<br>21:59:54</span>
								<input id="datasubmit-9340764346" value="2015-05-12 21:59:54" type="hidden"></td>

							<td>
								<span class="ftx-03">已取消</span>
							</td>

							<td id="operate9340764346" class="order-doi" width="100">

								<span id="pay-button-9340764346" state=""></span>
								<a target="_top" href="http://order.jd.com/normal/item.action?orderid=9340764346&amp;PassKey=2286316898986E60393686D69EA8206C" clstag="click|keycount|orderinfo|order_check">查看</a>
								<span id="order_comment"></span>
								<span class="pop-recycle-a">
									|
									<a href="javascript:void(0)" clstag="click|keycount|orderinfo|order_del" onclick="ensureMoveOrderToRecycle(9340764346,'B18EB7C696C63BFD032E5F1C26B4FA12');">删除</a>
								</span>
								<a class="btn-again" clstag="click|keycount|orderlist|buy" href="http://cart.jd.com/cart/dynamic/reBuyForOrderCenter.action?wids=970122,1226597,1149508,1205858,1226597,1090262,1250967&amp;nums=1,1,1,1,1,1,1&amp;rid=1437186290682" target="_top">还要买</a>

							</td>
						</tr>
					</tbody>
					<tbody id="tb-9340756034">

						<tr class="tr-th">
							<td colspan="6">
								<span class="tcol1">
									订单编号:
									<a name="orderIdLinks" id="idUrl9340756034" target="_top" href="http://order.jd.com/normal/item.action?orderid=9340756034&amp;PassKey=13C62E62485613312B24FB7E5D03BD03" clstag="click|keycount|orderinfo|order_num">9340756034</a>

								</span>

								<span class="tcol2" id="venderName91434">
									<a target="_top" href="http://huashilannu.jd.com/">华诗兰奴旗舰店</a>
								</span>
								<span class="tcol3" id="venderChat91434">
									<a class="btn-im" title="联系客服" target="_top" href="http://chat.jd.com/index.action?venderId=91434" clstag="click|keycount|orderinfo|chatim"></a>
								</span>
								<span class="tcol4"></span>
							</td>
						</tr>
						<tr id="track9340756034" oty="22,4,70" class="tr-td">
							<td>
								<div class="img-list">
									<a href="http://item.jd.com/1490618597.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/554879e5n8099eeb1.jpg" title="华诗兰奴 2015夏装上新女装修身短袖真丝雪纺连衣裙夏Z082 浅色花 L" height="50" width="50"></a>
									<a href="http://item.jd.com/1485529227.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/5524bebcn5294d2e5.jpg" title="华诗兰奴 2015春装新款衬衫领打底衫休闲韩版大码雪纺衫长袖女春C008 2222 L" height="50" width="50"></a>
								</div>
							</td>
							<td>
								<div class="u-name">周广生</div>
							</td>
							<td>
								¥288.00
								<br>
								在线支付
								<br></td>
							<td>
								<span class="ftx-03">
									2015-05-12
									<br>21:58:22</span>
								<input id="datasubmit-9340756034" value="2015-05-12 21:58:22" type="hidden"></td>

							<td>
								<span class="ftx-03">已取消</span>
							</td>

							<td id="operate9340756034" class="order-doi" width="100">

								<span id="pay-button-9340756034" state=""></span>
								<a target="_top" href="http://order.jd.com/normal/item.action?orderid=9340756034&amp;PassKey=13C62E62485613312B24FB7E5D03BD03" clstag="click|keycount|orderinfo|order_check">查看</a>
								<span id="order_comment"></span>
								<span class="pop-recycle-a">
									|
									<a href="javascript:void(0)" clstag="click|keycount|orderinfo|order_del" onclick="ensureMoveOrderToRecycle(9340756034,'9FACBAF0D1009A0F2BB4327880AD33E7');">删除</a>
								</span>
								<a class="btn-again" clstag="click|keycount|orderlist|buy" href="http://cart.jd.com/cart/dynamic/reBuyForOrderCenter.action?wids=1490618597,1485529227&amp;nums=1,1&amp;rid=1437186290683" target="_top">还要买</a>

							</td>
						</tr>
					</tbody>
					<tbody id="tb-9339174165">

						<tr class="tr-th">
							<td colspan="6">
								<span class="tcol1">
									订单编号:
									<a name="orderIdLinks" id="idUrl9339174165" target="_top" href="http://order.jd.com/normal/item.action?orderid=9339174165&amp;PassKey=C9234B3F9E0503FBFBC465231F06FEDF" clstag="click|keycount|orderinfo|order_num">9339174165</a>

								</span>

								<span class="tcol2">京东</span>
								<span class="tcol3">
									<a class="btn-im" onclick="getPamsForChat()" href="#none" title="联系客服"></a>
								</span>
							</td>
						</tr>
						<tr id="track9339174165" oty="0,4,70" class="tr-td">
							<td>
								<div class="img-list">
									<a href="http://fuwu.jd.com/platformmyorder/myorder.action?serviceId=1250285&amp;orderId=9339174165" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/544f35fcn21211519.jpg" title="iPhone屏碎保修服务6个月" height="50" width="50"></a>
									<a href="http://item.jd.com/1217510.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/542d0c1bn0fcb5c06.jpg" title="苹果（Apple）iPhone 6 (A1586) 64GB 银色 移动联通电信4G手机" height="50" width="50"></a>
									<a href="http://item.jd.com/1295318.html" class="img-box" clstag="click|keycount|orderinfo|order_product" target="_top">
										<img class="err-product" src="/shop_jd/Home/Public/images/55926ca3n4151db4c.jpg" title="【京东自营】dostyle PC303 苹果iphone6 4.7寸 手机壳/手机套+钢化玻璃膜/钢化膜 月牙白" height="50" width="50"></a>
								</div>
							</td>
							<td>
								<div class="u-name">周广生</div>
							</td>
							<td>
								¥5877.00
								<br>
								在线支付
								<br></td>
							<td>
								<span class="ftx-03">
									2015-05-12
									<br>15:51:01</span>
								<input id="datasubmit-9339174165" value="2015-05-12 15:51:01" type="hidden"></td>

							<td>
								<span class="ftx-03">已取消</span>
							</td>

							<td id="operate9339174165" class="order-doi" width="100">

								<span id="pay-button-9339174165" state=""></span>
								<a target="_top" href="http://order.jd.com/normal/item.action?orderid=9339174165&amp;PassKey=C9234B3F9E0503FBFBC465231F06FEDF" clstag="click|keycount|orderinfo|order_check">查看</a>
								<span id="order_comment"></span>
								<span class="pop-recycle-a">
									|
									<a href="javascript:void(0)" clstag="click|keycount|orderinfo|order_del" onclick="ensureMoveOrderToRecycle(9339174165,'F69FA3CED369C6C38D01852FDEEC79C6');">删除</a>
								</span>
								<a class="btn-again" clstag="click|keycount|orderlist|buy" href="http://cart.jd.com/cart/dynamic/reBuyForOrderCenter.action?wids=1250285,1217510,1295318&amp;nums=1,1,1&amp;rid=1437186290683" target="_top">还要买</a>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mt10">
				<div class="pagin fr">
					<!--  <span class="text">共3条记录</span>
				<span class="text">共1页</span>
				-->
				<span class="prev-disabled">
					上一页
					<b></b>
				</span>

				<!-- <span class="prev-disabled">首页</span>
			-->
			<a class="current">1</a>
			<!-- <span class="next-disabled">末页</span>
		-->
		<span class="next-disabled">
			下一页
			<b></b>
		</span>

	</div>
	<div class="clr"></div>
</div>

<span id="jdhome_orderlist_recproduct" style="display: none;"></span>
<span id="pop_sign" style="display: none;"></span>
<span id="pop_ids" style="display: none;"></span>
<span id="not_pop_ids" style="display: none;">9340764346,9340756034,9339174165,</span>
<span id="music_orderIds" style="display: none;"></span>
<span id="music_orderWids" style="display: none;"></span>
<span id="pay-button-order" style="display: none;"></span>
<span id="ebook_orderWids" style="display: none;"></span>
<span id="recOrders" style="display: none;">970122,1226597,1149508,1205858,1090262,1250967</span>
<span id="recOrderTypes" style="display: none;">[]</span>
<span id="itemUrlType" style="display: none;"></span>
<span id="currpin" style="display: none;">18820147760_p</span>
<span id="order_center_path_1" style="display: none;">http://order.jd.com/lazy/getPopOrderInfo.action</span>
<span id="order_center_path_3" style="display: none;">http://order.jd.com/lazy/getOrderListCount.action</span>
<span id="baitiao_link" style="display: none;">1</span>
<span id="buGouOrderIds" style="display: none;">[]</span>
<span id="popVenderIds" style="display: none;">91434</span>
<span id="yuShouOrderListJson" style="display: none;"></span>
<span id="showCacelIds" style="display: none;"></span>
</div>
<div class="mod-main mod-comm" id="guessing-liked" data-widget="tabs" style="">
<div class="mt">
	<h3>猜你喜欢</h3>
	<div class="extra-r">
		<div class="controls">
			<a class="" data-widget="tab-item" href="#none">1</a>
			<a class="" data-widget="tab-item" href="#none">2</a>
			<a class="curr" data-widget="tab-item" href="#none">3</a>
		</div>
	</div>
</div>
<div class="mc">
	<ul style="display: none;" data-widget="tab-content" class="tabcon hide">
		<li onclick="clsClickLog('', '', '854240', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=854240$index=0$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=a258491ac8b547732de707270fd38e3752154b90');">
			<div class="p-img">
				<a href="http://item.jd.com/854240.html" target="_top">
					<img src="/shop_jd/Home/Public/images/55769c47nbb0e3528.jpg" alt="维达 抽纸 超韧3层130抽面巾纸*6包(小规格)" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/854240.html" title="维达 抽纸 超韧3层130抽面巾纸*6包(小规格)" target="_top">维达 抽纸 超韧3层130抽面巾纸*6包(小规格)</a>
			</div>
			<div class="p-price">
				<strong>￥14.9</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/854240.html#comments-list" id="cmt-854240">(已有275972人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '854234', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=854234$index=1$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=77abe47c07efa801bf18afed122b8e36c47a5874');">
			<div class="p-img">
				<a href="http://item.jd.com/854234.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5508ebeenbe2d63bf.jpg" alt="维达 抽纸 倍韧2层200抽面巾纸*3包(小规格)" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/854234.html" title="维达 抽纸 倍韧2层200抽面巾纸*3包(小规格)" target="_top">维达 抽纸 倍韧2层200抽面巾纸*3包(小规格)</a>
			</div>
			<div class="p-price">
				<strong>￥7.9</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/854234.html#comments-list" id="cmt-854234">(已有606085人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '854249', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=854249$index=2$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=c1054c66238c346bafe776c60448c05cc9a85649');">
			<div class="p-img">
				<a href="http://item.jd.com/854249.html" target="_top">
					<img src="/shop_jd/Home/Public/images/rbeqwff2u1aiaaaaaaeyomdpbtsaaeyxaj-8gaaatjq166.jpg" alt="维达卫生纸 柔滑3层280节卷纸*12卷" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/854249.html" title="维达卫生纸 柔滑3层280节卷纸*12卷" target="_top">维达卫生纸 柔滑3层280节卷纸*12卷</a>
			</div>
			<div class="p-price">
				<strong>￥19.9</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/854249.html#comments-list" id="cmt-854249">(已有55488人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1296342034', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1296342034$index=3$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=b70728bed5b612b6e522e3fce7a5b898c5aed36');">
			<div class="p-img">
				<a href="http://item.jd.com/1296342034.html" target="_top">
					<img src="/shop_jd/Home/Public/images/556003c7n44b6cc71.jpg" alt="MAH 2015夏装新款男士印花中国风V领短袖t恤 潮流男士个性休闲体恤衫 有大码 S02白 XL" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1296342034.html" title="MAH 2015夏装新款男士印花中国风V领短袖t恤 潮流男士个性休闲体恤衫 有大码 S02白 XL" target="_top">MAH 2015夏装新款男士印花中国风V领短袖t恤 潮流男士个性休闲体恤衫 有大码 S02白 XL</a>
			</div>
			<div class="p-price">
				<strong>￥139.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1296342034.html#comments-list" id="cmt-1296342034">(已有1134人评价)</a>
			</div>
		</li>
	</ul>
	<ul style="display: none;" data-widget="tab-content" class="tabcon hide">
		<li onclick="clsClickLog('', '', '1530042841', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1530042841$index=4$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=463788b2557128d6a6cff9f58b516c3b2a552b05');">
			<div class="p-img">
				<a href="http://item.jd.com/1530042841.html" target="_top">
					<img src="/shop_jd/Home/Public/images/559e6217n2bbd146c.jpg" alt="奈幽 2015夏装新款潮男士短袖T恤 个性休闲印花热卖体恤夜店型男打底衫V领半袖小衫 闪电图 L(建议100-120斤)" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1530042841.html" title="奈幽 2015夏装新款潮男士短袖T恤 个性休闲印花热卖体恤夜店型男打底衫V领半袖小衫 闪电图 L(建议100-120斤)" target="_top">奈幽 2015夏装新款潮男士短袖T恤 个性休闲印花热卖体恤夜店型男打底衫V领半袖小衫 闪电图 L(建议100-120斤)</a>
			</div>
			<div class="p-price">
				<strong>￥98.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1530042841.html#comments-list" id="cmt-1530042841">(已有560人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1491787238', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1491787238$index=5$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=1916b1d1b42dad09353f652da7f5042c23aa0d17');">
			<div class="p-img">
				<a href="http://item.jd.com/1491787238.html" target="_top">
					<img src="/shop_jd/Home/Public/images/557d37d7n7b61c0c9.jpg" alt="奈幽 2015夏装新款男士印花圆领短袖t恤男 潮流韩版个性休闲纯棉体恤衫 有大码 白色 XL" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1491787238.html" title="奈幽 2015夏装新款男士印花圆领短袖t恤男 潮流韩版个性休闲纯棉体恤衫 有大码 白色 XL" target="_top">奈幽 2015夏装新款男士印花圆领短袖t恤男 潮流韩版个性休闲纯棉体恤衫 有大码 白色 XL</a>
			</div>
			<div class="p-price">
				<strong>￥119.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1491787238.html#comments-list" id="cmt-1491787238">(已有639人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1195551', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1195551$index=6$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=5e2e5da4686d3f33927ff3589e48c4ced3047b35');">
			<div class="p-img">
				<a href="http://item.jd.com/1195551.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5509201dn9473e70d.jpg" alt="飞科（FLYCO）FS372 全身水洗充电式三刀头电动剃须刀（亮光紫）" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1195551.html" title="飞科（FLYCO）FS372 全身水洗充电式三刀头电动剃须刀（亮光紫）" target="_top">飞科（FLYCO）FS372 全身水洗充电式三刀头电动剃须刀（亮光紫）</a>
			</div>
			<div class="p-price">
				<strong>￥89.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1195551.html#comments-list" id="cmt-1195551">(已有86484人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1498200761', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1498200761$index=7$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=f2ac6aaf701cf9ab3ddc10ace0a59631dc939d9f');">
			<div class="p-img">
				<a href="http://item.jd.com/1498200761.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5538c1d8n2b4a17ab.jpg" alt="古仕卡特 韩版2015夏装新款修身印花短袖t恤 男 B373 白色 XL" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1498200761.html" title="古仕卡特 韩版2015夏装新款修身印花短袖t恤 男 B373 白色 XL" target="_top">古仕卡特 韩版2015夏装新款修身印花短袖t恤 男 B373 白色 XL</a>
			</div>
			<div class="p-price">
				<strong>￥128.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1498200761.html#comments-list" id="cmt-1498200761">(已有492人评价)</a>
			</div>
		</li>
	</ul>
	<ul style="display: block;" data-widget="tab-content" class="tabcon">
		<li onclick="clsClickLog('', '', '1491724059', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1491724059$index=8$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=b6a9fc05892ff15c0aac1593b156de2c1e77b658');">
			<div class="p-img">
				<a href="http://item.jd.com/1491724059.html" target="_top">
					<img src="/shop_jd/Home/Public/images/555d89f2n21fc71d2.jpg" alt="奈幽 2015夏装新款短袖t恤男 韩版潮流个性男士印花圆领休闲纯棉体恤打底衫 有大码 白色 XL" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1491724059.html" title="奈幽 2015夏装新款短袖t恤男 韩版潮流个性男士印花圆领休闲纯棉体恤打底衫 有大码 白色 XL" target="_top">奈幽 2015夏装新款短袖t恤男 韩版潮流个性男士印花圆领休闲纯棉体恤打底衫 有大码 白色 XL</a>
			</div>
			<div class="p-price">
				<strong>￥99.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1491724059.html#comments-list" id="cmt-1491724059">(已有400人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1138288', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1138288$index=9$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=a4779c8a73329a367e5f3a2576727bd203c7a96c');">
			<div class="p-img">
				<a href="http://item.jd.com/1138288.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5459bdacn264aa8bd.jpg" alt="罗马仕（ROMOSS）sense6加量版超智能 20000毫安移动电源充电宝" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1138288.html" title="罗马仕（ROMOSS）sense6加量版超智能 20000毫安移动电源充电宝" target="_top">罗马仕（ROMOSS）sense6加量版超智能 20000毫安移动电源充电宝</a>
			</div>
			<div class="p-price">
				<strong>￥84.9</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1138288.html#comments-list" id="cmt-1138288">(已有600742人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '1498160890', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=1498160890$index=10$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=5b65a930d6ef09fd93c7646b4e22063fc9c266b8');">
			<div class="p-img">
				<a href="http://item.jd.com/1498160890.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5550a6a4n8c34c1bd.jpg" alt="古仕卡特 韩版2015年夏季男士短袖T恤 修身印花T恤 男 B374 白色 XL" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/1498160890.html" title="古仕卡特 韩版2015年夏季男士短袖T恤 修身印花T恤 男 B374 白色 XL" target="_top">古仕卡特 韩版2015年夏季男士短袖T恤 修身印花T恤 男 B374 白色 XL</a>
			</div>
			<div class="p-price">
				<strong>￥128.0</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/1498160890.html#comments-list" id="cmt-1498160890">(已有805人评价)</a>
			</div>
		</li>
		<li onclick="clsClickLog('', '', '418657', 38, 0, 'rodZd');RecommendGuess.newImage('http://mercury.jd.com/log.gif?t=rec.201002&amp;v=src=rec$action=1$reqsig=b0acca6318f95e4caf7b5edee0af22fc2d203e03$enb=1$sku=0$skus=970122,1226597,1149508,1205858,1090262,1250967$csku=418657$index=11$expid=105&amp;rid=593734429688668830&amp;ver=1&amp;sig=e5283be4fc1fea9eb4b0599a4d5a79e37b1b88bf');">
			<div class="p-img">
				<a href="http://item.jd.com/418657.html" target="_top">
					<img src="/shop_jd/Home/Public/images/5416af20n26e270ee.jpg" alt="福临门水晶米 大米5kg" data-img="1" height="160" width="160"></a>
			</div>
			<div class="p-name">
				<a href="http://item.jd.com/418657.html" title="福临门水晶米 大米5kg" target="_top">福临门水晶米 大米5kg</a>
			</div>
			<div class="p-price">
				<strong>￥29.9</strong>
			</div>
			<div class="p-extra">
				<a class="ftx-05" href="http://item.jd.com/418657.html#comments-list" id="cmt-418657">(已有515948人评价)</a>
			</div>
		</li>
	</ul>
</div>
</div>
<div class="mod-main">
<div id="miaozhen10772">
	<a href="http://c.nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mUB6S8Ik7V5DvMrJlpuxAVJAAaYLS2XTRgEt/UQhTDwyE1q70e4Yc/X4H2EGrisqgabOS39RMpTgRDFgEiWVz0km9clSzdjyoP9/xPA54voi389nECsSWXOe0YscC6LHXd8e16gAoyn6zMm4TxVQNtGgLXkL/ZULz/g+rg6KfxIjWam/pYmvZILQg63BSHRFcEKHfimMQj3Iw4V9UaLhib1ll/LIATEUbAn/s32Kw4IT+2H9P9ZloUHfxMDj1t98jemO+qRFI51oV5yjVXWSb1Vwmcnz+LjKmIEN7/uZJP43Dti/UNGXO9rUg+5WktSX8KghgkpMFgdFGRP3JZtfl3w=&amp;cv=2.0&amp;url=http://sale.jd.com/act/UNmcpFg6wAo0Iix.html?cpdad=1DLSUE" target="_top">
		<img alt="" app="image:poster" src="/shop_jd/Home/Public/images/55a73bfcn6f544c2d.jpg" height="100" width="805"></a>
</div>
<div>
	<!--<iframe style="margin-top: 10px;" marginheight="0" marginwidth="0" scrolling="no" src="index_1.html" frameborder="0" height="150px" width="830px">-->
		<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
			<!--<meta http-equiv="Content-Type" content="text/html; charset=utf8">-->
			<!--<title>京东推广</title>-->
			<!--<style type="text/css">-->
                                    <!--body{font-family:Verdana,Arial,Lucida,Helvetica,"\5B8B\4F53","\5FAE\8F6F\96C5\9ED1",sans-serif;margin:0;padding:0;border:0;}-->
                                    <!--div,img,ul,ol,li,dl,dt,dd{margin:0;padding:0;border:0;}-->
                                    <!--.box{position:relative;width:990px;height:150px;}-->
                                    <!--.ad-img{position:absolute;bottom:0;right:0;height:18px;width:75px;overflow:hidden; background: url(/shop_jd/Home/Public/images/rBEhWlJYrAEIAAAAAAACetYAYQwAAECuwP__W4AAAKS951.png) no-repeat scroll right bottom transparent; }-->
                                    <!--.ad-img a{display:block;height:18px;width:75px;line-height:100px;}-->
                                    <!--.ad-img a:hover{background:url(http://img12.360buyimg.com/da/g13/M09/10/03/rBEhVFJYrDAIAAAAAAAHoRFcOGsAAECrwP_uYQAAAe5174.png) no-repeat;}-->
                                    <!--.scroll-cont{width:32777px;}-->
                                <!--</style>-->
<!--</head>-->
<!--<body>-->
			<!--<div class="box">-->
				<!--<a target="_blank" href="http://x.jd.com/action/sale.jd.com/act/EWyc7sQmf6KwMtkP.html?ad=11&amp;unit=90&amp;mat=122&amp;type=1&amp;ID=2010">-->
					<!--<img src="/shop_jd/Home/Public/images/http://img30.360buyimg.com/pop/g15/M02/0F/0A/rBEhWFJbrBwIAAAAAABxB5OaRtMAAEH7wGpEhsAAHEf722.jpg"></a>-->
			<!--</div>-->
			<!--<div class="ad-img">-->
				<!--<a href="#">京东推广</a>-->
			<!--</div>-->
<!--</body>-->
		<!--</html>-->
	<!--</iframe>-->
</div>
</div>
</div>
</div>
<div id="left" class="g-3-5 c-0">
<!--js 加载异步加载的左侧菜单 -->
<div id="menu-new">
<dl>
<dt id="_MYJD_order">订单中心</dt>
<dd class="fore1">
	<div class="item curr" id="_MYJD_ordercenter">
		<a target="_self" href="/index.php/Home/Member/myOrder/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">我的订单</a>
	</div>
</dd>
<!--<dd class="fore2">-->
	<!--<div class="item" id="_MYJD_tuan">-->
		<!--<a target="_top" href="http://tuan.jd.com/order/index.php">团购订单</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore3">-->
	<!--<div class="item" id="_MYJD_locallife">-->
		<!--<a target="_self" href="http://life.jd.com/localOrder/iniOrder.do">本地生活订单</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore4">-->
	<!--<div class="item" id="_MYJD_yushou">-->
		<!--<a target="_self" href="http://yushou.jd.com/member/qualificationList.action">我的预售</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore5">-->
	<!--<div class="item" id="_MYJD_comments">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homecomments" href="http://club.jd.com/mycomments.aspx">评价晒单</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore6 last ">-->
	<!--<div class="item" id="_MYJD_refundment">-->
		<!--<a target="_self" href="/index.php/Home/Member/refundList/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">取消订单记录</a>-->
	<!--</div>-->
<!--</dd>-->
</dl>
<dl>
<dt id="_MYJD_gz">关注中心</dt>
<dd class="fore1">
	<div class="item" id="_MYJD_product">
		<a target="_self" clstag="homepage|keycount|home2013|Homefollow" href="http://t.jd.com/home/follow">关注的商品</a>
	</div>
</dd>
<dd class="fore2">
	<div class="item" id="_MYJD_vender">
		<a target="_self" clstag="homepage|keycount|home2013|Homefollowv" href="http://t.jd.com/vender/followVenderList.action">关注的店铺</a>
	</div>
</dd>
<dd class="fore3">
	<div class="item" id="_MYJD_activity">
		<a target="_self" clstag="homepage|keycount|home2013|Homefollowa" href="http://t.jd.com/activity/followActivityList.action">关注的活动</a>
	</div>
</dd>
<dd class="fore4 last ">
	<div class="item" id="_MYJD_history">
		<a target="_top" clstag="homepage|keycount|home2013|Homelist" href="http://my.jd.com/history/list.html">
			浏览历史&nbsp;
			<img src="/shop_jd/Home/Public/images/myjd-new-ico.png" height="11" width="24"></a>
	</div>
</dd>
</dl>
<!--<dl>-->
<!--<dt id="_MYJD_zc">资产中心</dt>-->
<!--<dd class="fore1">-->
	<!--<div class="item" id="_MYJD_cashbox">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homexjk" href="http://jinku.pay.jd.com/xjk/income.action">小金库</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore2">-->
	<!--<div class="item" id="_MYJD_credit">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|hbt" tag="213" href="http://baitiao.jd.com/">京东白条</a>-->
		<!--&nbsp;-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore3">-->
	<!--<div class="item" id="_MYJD_balance">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homemoney" href="http://mymoney.jd.com/finance/recently.action">余额</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore4">-->
	<!--<div class="item" id="_MYJD_ticket">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homequan" href="http://quan.jd.com/user_quan.action">优惠券</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore5">-->
	<!--<div class="item" id="_MYJD_card">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homegift" href="http://giftcard.jd.com/giftcard/index.action">京东卡/E卡</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore6 last">-->
	<!--<div class="item" id="_MYJD_bean">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homedou" href="http://bean.jd.com/myJingBean/list">京豆</a>-->
	<!--</div>-->
<!--</dd>-->
<!--</dl>-->
<!--<dl>-->
<!--<dt id="_MYJD_ts">特色业务</dt>-->
<!--<dd class="fore1">-->
	<!--<div class="item" id="_MYJD_tx">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homemobile" href="http://mobile.jd.com/yyswt/myjd.do">京东通信</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore2 last ">-->
	<!--<div class="item" id="_MYJD_ding">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homeding" href="http://ding.jd.com/plan/showPlans.action">定期送</a>-->
	<!--</div>-->
<!--</dd>-->
<!--</dl>-->
<!--<dl>-->
<!--<dt id="_MYJD_fw">客户服务</dt>-->
<!--<dd class="fore1">-->
	<!--<div class="item" id="_MYJD_repair">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homerepair" href="http://myjd.jd.com/afs/list/allRepairs.action">返修退换货</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore2">-->
	<!--<div class="item" id="_MYJD_protection">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homejb" href="http://jiabao.jd.com/protecting">价格保护</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore3">-->
	<!--<div class="item" id="_MYJD_complaint">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homeopinion" href="http://myjd.jd.com/opinion/orderList.action">意见建议</a>-->
	<!--</div>-->
<!--</dd>-->
<!--<dd class="fore4 last ">-->
	<!--<div class="item" id="_MYJD_consultation">-->
		<!--<a target="_self" clstag="homepage|keycount|home2013|Homeconsu" href="http://club.jd.com/myjd/userConsultationList_1.html">购买咨询</a>-->
	<!--</div>-->
<!--</dd>-->
<!--</dl>-->
<dl>
<dt id="_MYJD_sz">设置</dt>
<dd class="fore1">
	<div class="item" id="_MYJD_info">
		<a target="_self" clstag="homepage|keycount|home2013|Homeyser2" href="http://i.jd.com/user/info">个人信息</a>
	</div>
</dd>
<dd class="fore2 last ">
	<div class="item" id="_MYJD_add">
		<a target="_self" clstag="homepage|keycount|home2013|Homeadd2" href="http://easybuy.jd.com/address/getEasyBuyList.action">收货地址</a>
	</div>
</dd>
</dl>
</div>
<div id="da-game" class="da-box m">
<a href="http://c.nfa.jd.com/adclick?keyStr=ycGS+KLfrDtx2M/KrfcOelDy1+ozQ7qdPeiCaj0Ia6RTk4tKF3If+i0FaQn1CoUEH3DxBQ7U23mIcjOijTEiV7LaQFR3GGFTZk0Q3G4WVn2ZI7p/OOlX6LABVlykvJwqJOjcdfYtg4LR/8nWWAGIVoNyWeGqd+Q7wP6xUaN8n11WkEWpXi1QspDG2bIfft81TOm/SOIneVxhE4LtBdkzfEKHfimMQj3Iw4V9UaLhib1ll/LIATEUbAn/s32Kw4IT+2H9P9ZloUHfxMDj1t98jemO+qRFI51oV5yjVXWSb1Vwmcnz+LjKmIEN7/uZJP43Dti/UNGXO9rUg+5WktSX8KghgkpMFgdFGRP3JZtfl3w=&amp;cv=2.0&amp;url=http://wan.jd.com/yeyou/play.html?gameId=86&amp;gateWayId=s125">
<img src="/shop_jd/Home/Public/images/547e6a57n75c2f016.gif" alt="" width="100%"></a>
</div>
<div id="da-home" class="da-box">
<a href="http://c.nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mRh5EWcY+oLQoA/A+3OJ1p+V7gnWD1n8e1Xo78IZMfX/1Exvi8XmG5iygvyizWoiL+wDY8Gle5MMjojchowfNoQomOy3091gVSZ7oWYFJcmCSwXQbW532HrjxaTzk0jah6hA16a0h/PAJOLvWDFVb7eINjL4Hy4q+ZiwcH/wDCai91EhMEyYoGnhrPasOOPh783BydpbTN2Y+4DF2jalqzVBwxyTloGozKXBS60OyqxSyMTdD/JGInS6PAEw154QTRrBe/XEh242cmge20Jsi/36NLa04BFWucMokbWKz1SYuHf8Nt6E0Ab3XO+o12tjjg==&amp;cv=2.0&amp;url=http://wan.jd.com/yeyou/play.html?gameId=86&amp;gateWayId=s125" target="_top">
<img alt="" app="image:poster" src="/shop_jd/Home/Public/images/550b8e13n5a644ce8.gif" height="" width="100%"></a>
</div>
<!--<iframe scrolling="no" style="margin-top: 10px;" marginheight="0" marginwidth="0" src="index_2.html" frameborder="0" height="180px" width="150px"></iframe>-->
</div>
<span class="clr"></span>
</div>
</div>
</div>
<div class="w">
<div id="service-2013">
<dl class="fore1">
<dt>
<b></b>
<strong>购物指南</strong>
</dt>
<dd>
<div>
<a href="http://help.jd.com/help/question-56.html" target="_top" rel="nofollow">购物流程</a>
</div>
<div>
<a href="http://help.jd.com/help/question-57.html" target="_top" rel="nofollow">会员介绍</a>
</div>
<div>
<a href="http://help.jd.com/help/question-181.html" target="_top" rel="nofollow">团购/机票</a>
</div>
<div>
<a href="http://help.jd.com/help/question-61.html" target="_top" rel="nofollow">常见问题</a>
</div>
<div>
<a href="http://help.jd.com/help/question-63.html" target="_top" rel="nofollow">大家电</a>
</div>
<div>
<a href="http://help.jd.com/index.html" target="_top" rel="nofollow">联系客服</a>
</div>
</dd>
</dl>
<dl class="fore2">
<dt>
<b></b>
<strong>配送方式</strong>
</dt>
<dd>
<div>
<a href="http://help.jd.com/help/question-64.html" target="_top" rel="nofollow">上门自提</a>
</div>
<div>
<a href="http://help.jd.com/help/question-360.html" target="_top" rel="nofollow">211限时达</a>
</div>
<div>
<a href="http://help.jd.com/help/distribution-768.html" target="_top" rel="nofollow">配送服务查询</a>
</div>
<div>
<a href="http://help.jd.com/help/question-892.html#help2215" target="_top" rel="nofollow">配送费收取标准</a>
</div>

<a href="http://en.jd.com/chinese.html" target="_top">海外配送</a>
</dd>
</dl>
<dl class="fore3">
<dt>
<b></b>
<strong>支付方式</strong>
</dt>
<dd>
<div>
<a href="http://help.jd.com/help/question-67.html" target="_top" rel="nofollow">货到付款</a>
</div>
<div>
<a href="http://help.jd.com/help/question-68.html" target="_top" rel="nofollow">在线支付</a>
</div>
<div>
<a href="http://help.jd.com/help/question-71.html" target="_top" rel="nofollow">分期付款</a>
</div>
<div>
<a href="http://help.jd.com/help/question-69.html" target="_top" rel="nofollow">邮局汇款</a>
</div>
<div>
<a href="http://help.jd.com/help/question-70.html" target="_top" rel="nofollow">公司转账</a>
</div>
</dd>
</dl>
<dl class="fore4">
<dt>
<b></b>
<strong>售后服务</strong>
</dt>
<dd>
<div>
<a href="http://myjd.jd.com/afs/help/afshelp.action" target="_top" rel="nofollow">售后政策</a>
</div>
<div>
<a href="http://help.jd.com/help/question-99.html" target="_top" rel="nofollow">价格保护</a>
</div>
<div>
<a href="http://help.jd.com/help/question-100.html" target="_top" rel="nofollow">退款说明</a>
</div>
<div>
<a href="http://myjd.jd.com/repair/repairs.action" target="_top" rel="nofollow">返修/退换货</a>
</div>
<div>
<a href="http://help.jd.com/help/question-881.html" target="_top" rel="nofollow">取消订单</a>
</div>
</dd>
</dl>
<dl class="fore5">
<dt>
<b></b>
<strong>特色服务</strong>
</dt>
<dd>
<div>
<a href="http://help.jd.com/help/question-79.html" target="_top">夺宝岛</a>
</div>
<div>
<a href="http://help.jd.com/help/question-86.html" target="_top">DIY装机</a>
</div>
<div>
<a href="http://fuwu.jd.com/" target="_top" rel="nofollow">延保服务</a>
</div>
<div>
<a href="http://giftcard.jd.com/market/index.action" target="_top" rel="nofollow">京东E卡</a>
</div>
<div>
<a href="http://help.jd.com/help/question-91.html" target="_top" rel="nofollow">节能补贴</a>
</div>
<div>
<a href="http://mobile.jd.com/" target="_top" rel="nofollow">京东通信</a>
</div>
</dd>
</dl>
<span class="clr"></span>
</div>
</div>
<!-- service end -->
  <div class="w">
  <div id="footer-2013">
    <div class="links">
      <a href="http://www.jd.com/intro/about.aspx" target="_top" rel="nofollow">关于我们</a>
      |
      <a href="http://www.jd.com/contact/" target="_top" rel="nofollow">联系我们</a>
      |
      <a href="http://zhaopin.jd.com/" target="_top" rel="nofollow">人才招聘</a>
      |
      <a href="http://www.jd.com/contact/joinin.aspx" target="_top" rel="nofollow">商家入驻</a>
      |
      <a href="http://sale.jd.com/act/y3surX7qpM.html" target="_top" rel="nofollow">广告服务</a>
      |
      <a href="http://app.jd.com/" target="_top" rel="nofollow">手机京东</a>
      |
      <a href="http://club.jd.com/links.aspx" target="_top">友情链接</a>
      |
      <a href="http://cps.jd.com/" target="_top">销售联盟</a>
      |
      <a target="_top" href="http://club.jd.com/">京东社区</a>
      |
      <a target="_top" href="http://gongyi.jd.com/">京东公益</a>
    </div>
    <div class="copyright">
      北京市公安局朝阳分局备案编号110105014669&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;互联网药品信息服务资格证编号(京)-非经营性-2011-0034
      <br>
      <a target="_top" href="f_music.jpg" rel="nofollow">音像制品经营许可证苏宿批005号</a>
      &nbsp;&nbsp;|&nbsp;&nbsp;出版物经营许可证编号新出发(苏)批字第N-012号&nbsp;&nbsp;|&nbsp;&nbsp;互联网出版许可证编号新出网证(京)字150号
      <br>
      <a target="_top" href="wlwhjyxkz.jpg">网络文化经营许可证京网文[2011]0168-061号</a>
      &nbsp;&nbsp;Copyright&nbsp;©&nbsp;2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有
      <br>
      京东旗下网站：
      <a target="_top" href="http://en.jd.com/">English Site</a>
    </div>
    <div class="authentication">
      <a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026" target="_top" rel="nofollow">
        <img class="err-product" src="/shop_jd/Home/Public/images/108_40_zzoknl.gif" alt="经营性网站备案中心" height="40" width="108"></a>
      <a href="https://ss.cnnic.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005" tabindex="-1" id="urlknet" target="_top" rel="nofollow">
        <img class="err-product" src="/shop_jd/Home/Public/images/rbehafcfc5qiaaaaaaasvqx9rayaacb2whuv1kaabjt760.gif" alt="可信网站" name="CNNIC_seal" oncontextmenu="return false;" onclick="CNNIC_change('urlknet')" border="true" height="40" width="108"></a>
      <a href="http://www.bj.cyberpolice.cn/index.do" target="_top" rel="nofollow">
        <img class="err-product" src="/shop_jd/Home/Public/images/rbeide_nzciiaaaaaab30myxo5qaacrhacj22iaahfq378.png" alt="朝阳网络警察" height="40" width="108"></a>
      <a href="https://search.szfw.org/cert/l/CX20120111001803001836" target="_top" rel="nofollow">
        <img class="err-product" src="/shop_jd/Home/Public/images/112_40_wvaril.png" height="40" width="112"></a>
    </div>
  </div>
</div>
<!-- footer end -->

</body>
</html>