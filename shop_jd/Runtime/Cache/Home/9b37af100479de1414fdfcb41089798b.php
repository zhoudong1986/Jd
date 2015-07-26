<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>收货地址</title>
	<link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/myAddr.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/common.css" media="all">
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
</head>
<body myjd="_MYJD_comments" menuid="set">
  <!--样式一头部-->
<div id="headBox">
  <div class="head">
    <div class="cityBox">
      <div class="shadow"></div>
      <p class="content">送至：<span class="choose">黑龙江</span><i class="ci-cor"><span>◇</span></i></p>
      <ul class="citys">
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">黑龙江</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">上海</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">北京</a></li>
        <li><a  href="">秦皇岛</a></li>
        <li><a  href="">海外</a></li>
      </ul>
    </div>
    <ul class="rightBox">
      <li class="login"><?php if($_SESSION['login_info']['isLogin']){echo "<a href='/index.php/Home/Member/home/uid/".$_SESSION['login_info']['uid']."'>".$_SESSION['login_info']['user_name']."</a>"."&nbsp;&nbsp;<a href='/index.php/Home/Login/logOut'>退出</a>";}else{ echo '<a href="/index.php/Home/Login/login">您好，请登陆</a>';} ?>&nbsp;&nbsp;<a class="please" href="/index.php/Home/Index/register">免费注册</a></li>
      <li class="separate"></li>
      <li class="myOrder"><a href="__MODULE/Member/myOrder/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">我的订单</a></li>
      <li class="separate"></li>
      <li class="myJd">
        <a href="" class="jd">我的京东</a>
        <i class="ci-right">
          <s>◇</s>
        </i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="conBox">
          <?php if($pic): ?><a href="/index.php/Home/Member/Home/uid/<?php echo ($_SESSION['login_info']['uid']); ?>"><img src="<?php echo ($pic); ?>" alt="用户自定义头像" class="pic"/></a>
            <?php else: ?>
            <img src="/shop_jd/Home/Public/images/no-img_mid_.jpg" alt="默认头像" class="pic"/><?php endif; ?>
          <div class="right">
            <?php if($_SESSION['login_info']['isLogin']): ?><a href='/index.php/Home/Member/home/uid/<?php echo ($_SESSION["login_info"]["uid"]); ?>' class='first'><?php echo ($_SESSION['login_info']['user_name']); ?></a>
              <?php else: ?>
              <a class="first" href="/index.php/Home/Login/login" >您好，请登录</a><?php endif; ?>
            <p class="second"><a href="">优惠券</a><s></s><a href="">消息</a>
            </p>
          </div>
          <div class="bottomBox">
            <ul class="left">
              <li><a href="#">待处理订单</a></li>
              <li><a href="#">资讯回复</a></li>
              <li><a href="#">降价商品</a></li>
              <li><a href="#">返修退换货</a></li>
            </ul>
            <ul class="right">
              <li><a href="#">我的关注</a></li>
              <li><a href="#">我的京豆</a></li>
              <li><a href="#">我的理财</a></li>
              <li><a href="#">我的白条</a></li>
            </ul>
          </div>
          <div class="recently">
            <p class="left">最近浏览</p><p class="right"><a href="">更多></a></p>
            <div class="imgs">
              <img src="/shop_jd/Home/Public/images/552de9f5Nca6d7263.jpg" alt=""/>
              <img src="/shop_jd/Home/Public/images/552de9f5Nca6d7263.jpg" alt=""/>
              <img src="/shop_jd/Home/Public/images/552de9f5Nca6d7263.jpg" alt=""/>
              <img src="/shop_jd/Home/Public/images/552de9f5Nca6d7263.jpg" alt=""/>
            </div>
          </div>
        </div>
      </li>
      <li class="separate"></li>
      <!--<li class="memBox">-->
        <!--<a href="" class="member">京东会员</a>-->
      <!--</li>-->
      <!--<li class="separate"></li>-->
      <!--<li class="comBox">-->
        <!--<a href="" class="company">企业采购</a>-->
      <!--</li>-->
      <!--<li class="separate"></li>-->
      <li class="phBox">
        <a href="#" class='phone'>手机京东</a>
        <i class="ci-right">
          <s>◇</s>
        </i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="bbt"></div>
      </li>
      <li class="separate"></li>
      <li class="attenBox">
        <p href="" class="attention">关注京东</p>
        <i class="ci-right">
          <s>◇</s>
        </i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="code"></div>
      </li>
      <li class="separate"></li>
      <li class="clientBox">
        <p class="clientService">客户服务</p>
        <i class="ci-right">
          <s>◇</s>
        </i>
        <div class="up"></div>
        <div class="line"></div>
        <ul class="content">
          <!--<li><a href="">帮助中心</a></li>-->
          <!--<li><a href="">售后服务</a></li>-->
          <li><a href="">在线客服</a></li>
          <!--<li><a href="">意见建议</a></li>-->
          <!--<li><a href="">客服邮箱</a></li>-->
        </ul>
      </li>
      <!--<li class="separate"></li>-->
      <!--<li class="navBox">-->
        <!--<p class="navigation">网站导航</p>-->
        <!--<i class="ci-right">-->
          <!--<s>◇</s>-->
        <!--</i>-->
        <!--<div class="up"></div>-->
        <!--<div class="line"></div>-->
        <!--<div class="contents">-->
          <!--<div class="fore1">-->
            <!--<h3>特色主题</h3>-->
            <!--<div class="clear"></div>-->
            <!--<ul>-->
              <!--<li><a href="">品牌街</a></li>-->
              <!--<li><a href="">今日炒底</a></li>-->
              <!--<li><a href="">好东西</a></li>-->
              <!--<li><a href="">京东预售</a></li>-->
              <!--<li><a href="">尖er货</a></li>-->
              <!--<li><a href="">京东首发</a></li>-->
              <!--<li><a href="">今日团购</a></li>-->
              <!--<li><a href="">优惠券</a></li>-->
              <!--<li><a href="">闪购</a></li>-->
              <!--<li><a href="">京东会员</a></li>-->
              <!--<li><a href="">京东京选</a></li>-->
              <!--<li><a href="">定期送</a></li>-->
              <!--<li><a href="">装机大师</a></li>-->
              <!--<li><a href="">搭配购</a></li>-->
              <!--<li><a href="">京东试用</a></li>-->
              <!--<li><a href="">礼品购</a></li>-->
              <!--<li><a href="">智能馆</a></li>-->
              <!--<li><a href="">玩bigger</a></li>-->
              <!--<li><a href="">大牌免息</a></li>-->
              <!--<li><a href="">北京老字号</a></li>-->
            <!--</ul>-->
          <!--</div>-->
          <!--<div class="separate"></div>-->
          <!--<div class="fore2">-->
            <!--<h3>行业频道</h3>-->
            <!--<div class="clear"></div>-->
            <!--<ul>-->
              <!--<li><a href="">服装城</a></li>-->
              <!--<li><a href="">家用电器</a></li>-->
              <!--<li><a href="">电脑办公</a></li>-->
              <!--<li><a href="">手机</a></li>-->
              <!--<li><a href="">美妆馆</a></li>-->
              <!--<li><a href="">食品</a></li>-->
              <!--<li><a href="">数码</a></li>-->
              <!--<li><a href="">母婴</a></li>-->
              <!--<li><a href="">家装城</a></li>-->
              <!--<li><a href="">运动户外</a></li>-->
              <!--<li><a href="">整车</a></li>-->
              <!--<li><a href="">图书</a></li>-->
            <!--</ul>-->
          <!--</div>-->
          <!--<div class="separate"></div>-->
          <!--<div class="fore2">-->
            <!--<h3>生活服务</h3>-->
            <!--<div class="clear"></div>-->
            <!--<ul>-->
              <!--<li>京东凑众</li>-->
              <!--<li>白条</li>-->
              <!--<li>京东钱包</li>-->
              <!--<li>京东小金库</li>-->
              <!--<li>理财</li>-->
              <!--<li>话费</li>-->
              <!--<li>旅行</li>-->
              <!--<li>彩票</li>-->
              <!--<li>游戏</li>-->
              <!--<li>机票</li>-->
              <!--<li>电影票</li>-->
              <!--<li>水电费</li>-->
              <!--<li>京东到家</li>-->
            <!--</ul>-->
          <!--</div>-->
          <!--<div class="separate"></div>-->
          <!--<div class="fore2">-->
            <!--<h3>生活服务</h3>-->
            <!--<div class="clear"></div>-->
            <!--<ul class="fore2">-->
              <!--<li>京东社区</li>-->
              <!--<li>京东通信</li>-->
              <!--<li>在线读书</li>-->
              <!--<li>京东E卡</li>-->
              <!--<li>智能社区</li>-->
              <!--<li>游戏社区</li>-->
              <!--<li>京友邦</li>-->
              <!--<li>卖家入驻</li>-->
              <!--<li>企业采购</li>-->
              <!--<li>服务市场</li>-->
              <!--<li>乡村招募</li>-->
              <!--<li>校园加盟</li>-->
              <!--<li>办公生活馆</li>-->
              <!--<li>知识产权维权</li>-->
              <!--<li>English Site</li>-->
            <!--</ul>-->
          <!--</div>-->
        <!--</div>-->
      <!--</li>-->
    </ul>
  </div>
</div>
<!--样式一头部结束-->

	<div id="o-header-2013">
		<div id="header-2013" style="display: none;"></div>
	</div>
  <div id="nav">
  <div class="w">
    <div class="logo">
      <a href="http://www.jd.com/" target="_top" class="fore1"></a>
      <a href="http://home.jd.com/" target="_self" class="fore2">我的京东</a>
      <a href="http://www.jd.com/" target="_top" class="fore3">返回京东首页</a>
    </div>
    <div class="navitems">
      <ul>
        <li class="fore-1">
          <a target="_self" href="http://home.jd.com/">首页</a>
        </li>
        <li class="fore-2">
          <a href="http://me.jd.com/" target="_top" clstag="click|keycount|myhome|hgr">个人主页</a>
        </li>
        <li class="fore-3">
          <div class="dl" clstag="click|keycount|myhome|hsz">
            <div class="dt">
              <span class="myjd-set">账户设置</span> <b></b>
            </div>
            <div class="dd">
              <a tid="_MYJD_info" clstag="Homeyser" href="http://i.jd.com/user/info" target="_self">
                <span>个人信息</span>
              </a>
              <a tid="_MYJD_safe" clstag="Homesafe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self">
                <span>账户安全</span>
              </a>

              <a tid="_MYJD_grade" clstag="Homegrade" href="http://usergrade.jd.com/user/grade" target="_self">
                <span>我的级别</span>
              </a>
              <a tid="_MYJD_comments" clstag="homeadd" href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">
                <span>收货地址</span>
              </a>
              <a tid="_MYJD_share" clstag="Homeshare" href="http://share.jd.com/share/index.html" target="_self">
                <span>分享绑定</span>
              </a>
              <a tid="_MYJD_rss" clstag="Homeedm" href="http://edm.jd.com/front/subscribe/index.aspx" target="_self">
                <span>邮件订阅</span>
              </a>
              <a tid="_MYJD_recor" clstag="Homeedm" href="http://usergrade.jd.com/user/consume" target="_self">
                <span>消费记录</span>
              </a>
              <a tid="_MYJD_app" clstag="Homeedm" href="http://fw.jd.com/home/auth_list.action" target="_top">
                <span>应用授权</span>
              </a>
              <a tid="_MYJD_pay" clstag="Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_top">
                <span>快捷支付</span>
              </a>
              <a tid="_MYJD_zpzz" clstag="Homezpzz" href="http://invoice.jd.com/user/userinfo/zpzz.html" target="_self">
                <span>增票资质</span>
              </a>
            </div>
          </div>
        </li>
        <li class="fore-4">
          <div class="dl myjd-info" clstag="click|keycount|myhome|hsq">
            <div class="dt ">
								<span>
									社区
									<i>2</i>
								</span> <b></b>
            </div>
            <div class="dd">
              <a tid="_MYJD_joy" clstag="Homemsg" href="http://joycenter.jd.com/" target="_self">
									<span>
										消息精灵
										<b>(2)</b>
									</span>
              </a>
              <a tid="_MYJD_activities" clstag="Homeclub" href="http://luck.jd.com/myjd/myJoinActivity.html" target="_self">
                <span>我的活动</span>
              </a>
              <a tid="_MYJD_circle" clstag="Homejoincircle" href="http://group.jd.com/circle/myjoincircle.htm" target="_self">
                <span>我的圈子</span>
              </a>
              <a tid="_MYJD_mycollect" clstag="Homethread" href="http://group.jd.com/thread/mythread.htm" target="_self">
                <span>我的帖子</span>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="nav-r">
      <div id="search-2014">
        <ul id="shelper" class="hide"></ul>
        <!--<div class="form">-->
          <!--<input value="闪购特卖" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" type="text">-->
          <!--<button onclick="search('key');return false;" class="button cw-icon" type="button">-->
            <!--<i></i>-->
            <!--搜索-->
          <!--</button>-->
        <!--</div>-->
      </div>
      <div id="settleup-2014" class="dorpdown">
        <div class="cw-icon">
          <i class="ci-left"></i>
          <i class="ci-right">&gt;</i>
          <i class="ci-count" id="shopping-amount">0</i>
          <a target="_top" href="http://cart.jd.com/cart/cart.html">我的购物车</a>
        </div>
        <div class="dorpdown-layer">
          <div class="spacer"></div>
          <div id="settleup-content">
            <span class="loading"></span>
          </div>
        </div>
      </div>
      <div id="hotwords-2014">
        <a href="http://sale.jd.com/act/bpdqrcoic86uz.html" target="_top" class="style-red">机不可失</a>
        <a href="http://sale.jd.com/act/1LdMxPk5ZVB.html" target="_top">游戏爆品</a>
        <a href="http://sale.jd.com/act/BRmr0lD1qJjQ.html" target="_top">减减减</a>
        <a href="http://sale.jd.com/act/LJjlYizcMpoxqh.html" target="_top">低至5折</a>
        <a href="http://sale.jd.com/act/WiNblg8JfIhXVHY6.html" target="_top">惊天满减</a>
        <a href="http://sale.jd.com/act/MqVOwgZFE047m.html" target="_top">荣耀4A</a>
        <a href="http://tuan.jd.com/channel/entity-beijing-56-0-0-1-0-0-0-0-1.html" target="_top">暑期阅读</a>
        <a href="http://sale.jd.com/act/KXojGsEAh7Qk8.html?from=jdpopser_jr" target="_top">苹果免息</a>
        <a href="http://sale.jd.com/act/pQukl7nj3hf.html" target="_top">尖货1元</a>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</div>
	<div id="container">
		<div class="w">
			<div id="content">
				<input id="whereFrom" value="" type="hidden">
				<div id="sub">
					<div id="menu">
						<dl class="fore1">
							<dt id="_MYJD_setting">设置</dt>
              <dd class="fore1_1" id="_MYJD_info">
                <a  href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">个人信息</a>
              </dd>
              <dd class="fore1_3" id="_MYJD_safe">
                <a href="/index.php/Home/Member/safetyCenter/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">账户安全</a>
              </dd>
              <dd class="fore1_4" id="_MYJD_grade">
                <a href="/index.php/Home/Member/grade/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">我的级别</a>
              </dd>
              <dd class="fore1_5 curr" id="_MYJD_comments">
                <a href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">收货地址</a>
              </dd>
						</dl>
					</div>
					<div id="menu-ads">
						<!--广告全部放这里-->
						<div>
							<a href="http://c.nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnymMImvln2Js0HU3q+mnlAr0LpeSNpALCbss46Fg5S8sQYb7iog8VJRd/DurbeYQwISZI7p/OOlX6LABVlykvJwqJOjcdfYtg4LR/8nWWAGIVoNyWeGqd+Q7wP6xUaN8n11WkEWpXi1QspDG2bIfft81TOm/SOIneVxhE4LtBdkzfEKHfimMQj3Iw4V9UaLhib1ll/LIATEUbAn/s32Kw4IT+2H9P9ZloUHfxMDj1t98jemO+qRFI51oV5yjVXWSb1Vwmcnz+LjKmIEN7/uZJP43Dti/UNGXO9rUg+5WktSX8KghgkpMFgdFGRP3JZtfl3w=&amp;cv=2.0&amp;url=http://wan.jd.com/yeyou/play.html?gameId=86&amp;gateWayId=s125" target="_top">
								<img alt="" app="image:poster" src="/shop_jd/Home/Public/images/55399ba2n6c0b842e.gif" height="70" width="90"></a>
						</div>
					</div>
				</div>
				<div id="main">
					<div class="mod-main mod-comm">
						<div class="mt">
							<h3>收货地址和轻松购</h3>
						</div>
						<div class="mc">
							<div id="describe">
								<div class="fl">
									<p>设置好轻松购信息，就可以在商品页面直接下单 ，购物从此变得简单快乐。</p>
									<div class="link">
										<a href="http://help.jd.com/help/question-147.html" class="ftx-05" target="_top">不会操作吗？点我&gt;</a>
									</div>
									<div class="op-order-method clearfix"> <strong>设置轻松购下单方式：</strong>
										<a href="javascript:setEasyBuyFlow(0)" class="order-method order-method-selected simple-order" id="ordermethod1">
											<b></b>
											一键下单
											<s class="i1"></s>
											<s class="i2"></s>
											<s class="i3"></s>
										</a>
										<a href="javascript:setEasyBuyFlow(1);" class="order-method order-method normal-order" id="ordermethod0">
											<b></b>
											进入结算页确认下单
											<s class="i1"></s>
											<s class="i2"></s>
											<s class="i3"></s>
										</a>
									</div>
								</div>
								<div class="extra fr">
									<img src="/shop_jd/Home/Public/images/easybuy.jpg" alt=""></div>
								<div class="clr"></div>
							</div>
						</div>
					</div>
					<div id="addressList" class="mod-main mod-comm">

						<div class="mt">
							<a  class="e-btn add-btn btn-5" href="javascript:;">新增收货地址</a>
							<span class="ftx-03">
								您已创建
								<span id="addressNum_top" class="ftx-02"><?php if($info): echo $info|count; else: ?>0<?php endif; ?></if></span>
								个收货地址，最多可创建
								<span class="ftx-02">20</span>
								个
							</span>
						</div>
						<div class="mc">
              <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sm easebuy-m " id="addresssDiv-137624748">
                  <div class="smt">
                    <h3><?php if($vo['alias']): echo ($vo['alias']); else: echo ($vo['consignee']); echo (convertAddr($vo['district'])); endif; ?></h3>
                    <div class="extra">
                      <a class="del-btn" href="#none">删除</a>
                    </div>
                  </div>
                  <div class="smc">
                    <div class="items new-items">
                      <div class="item-lcol">
                        <div class="item">
                          <span class="label">收货人：</span>
                          <div class="fl"><?php echo ($vo["consignee"]); ?></div>
                          <div class="clr"></div>
                        </div>
                        <div class="item">
                          <span class="label">所在地区：</span>
                          <div class="fl"><?php echo (convertAddr($vo['province'])); echo (convertAddr($vo['city'])); echo (convertAddr($vo['district'])); ?></div>
                          <div class="clr"></div>
                        </div>
                        <div class="item">
                          <span class="label">地址：</span>
                          <div class="fl"><?php echo ($vo['street']); ?></div>
                          <div class="clr"></div>
                        </div>
                        <!--div class="item">
                        <span class="label">邮编：</span>
                        <div class="fl">100022</div>
                        <div class="clr"></div>
                      </div-->
                        <div class="item">
                          <span class="label">手机：</span>
                          <div class="fl"><?php echo (substr_replace($vo['mobile'],XXX,3,3)); ?></div>
                          <div class="clr"></div>
                        </div>
                        <div class="item">
                          <span class="label">固定电话：</span>
                          <div class="fl"></div>
                          <div class="clr"></div>
                        </div>
                        <!--<div class="item">-->
                          <!--<span class="label">电子邮箱：</span>-->
                          <!--<div class="fl"></div>-->
                          <!--<div class="clr"></div>-->
                        <!--</div>-->
                      </div>
                      <div class="item-rcol">
                        <div class="extra">
                          <a class="ml10 ftx-05" href="javascript:makeAddressAllDefault('137624748');">设为默认</a>
                          <a class="ml10 ftx-05" href="javascript:getPayment(137624748,0,0);">使用轻松购</a>
                          <a class="ml10 ftx-05" href="javascript:;" onclick="alertUpdateAddressDiag(137624748);">编辑</a>
                        </div>
                      </div>
                      <div class="clr"></div>
                    </div>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>

				<div class="mt" id="addAddressDiv_bottom">
					<a  class="e-btn add-btn btn-5" href="javascript:;">新增收货地址</a>
					<span class="ftx-03">
						您已创建
						<span id="addressNum_botton" class="ftx-02"><?php echo $info|count;?></span>
						个收货地址，最多可创建
						<span class="ftx-02">20</span>
						个
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div id="service-2014">
<div class="w">
	<dl class="fore1">
		<dt>购物指南</dt>
		<dd>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-29.html">购物流程</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-151.html">会员介绍</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-297.html">生活旅行/团购</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue.html">常见问题</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-136.html">大家电</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/index.html">联系客服</a>
			</div>
		</dd>
	</dl>
	<dl class="fore2">
		<dt>配送方式</dt>
		<dd>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-81-100.html">上门自提</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-81.html">211限时达</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/103-983.html">配送服务查询</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/109-188.html">配送费收取标准</a>
			</div>
			<div>
				<a target="_top" href="http://en.jd.com/chinese.html">海外配送</a>
			</div>
		</dd>
	</dl>
	<dl class="fore3">
		<dt>支付方式</dt>
		<dd>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-172.html">货到付款</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-173.html">在线支付</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-176.html">分期付款</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-174.html">邮局汇款</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-175.html">公司转账</a>
			</div>
		</dd>
	</dl>
	<dl class="fore4">
		<dt>售后服务</dt>
		<dd>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/321-981.html">售后政策</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-132.html">价格保护</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/130-978.html">退款说明</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://myjd.jd.com/repair/repairs.action">返修/退换货</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-50.html">取消订单</a>
			</div>
		</dd>
	</dl>
	<dl class="fore5">
		<dt>特色服务</dt>
		<dd>
			<div>
				<a target="_top" href="http://help.jd.com/user/issue/list-133.html">夺宝岛</a>
			</div>
			<div>
				<a target="_top" href="http://help.jd.com/user/issue/list-134.html">DIY装机</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://fuwu.jd.com/">延保服务</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://giftcard.jd.com/market/index.action">京东E卡</a>
			</div>
			<div>
				<a rel="nofollow" target="_top" href="http://mobile.jd.com/">京东通信</a>
			</div>
		</dd>
	</dl>
	<span class="clr"></span>
</div>
</div>
<div class="w">
<div id="footer-2014">
	<div class="links">
		<a rel="nofollow" target="_top" href="http://www.jd.com/intro/about.aspx">关于我们</a>
		|
		<a rel="nofollow" target="_top" href="http://www.jd.com/contact/">联系我们</a>
		|
		<a rel="nofollow" target="_top" href="http://www.jd.com/contact/joinin.aspx">商家入驻</a>
		|
		<a rel="nofollow" target="_top" href="http://jzt.jd.com/">营销中心</a>
		|
		<a rel="nofollow" target="_top" href="http://app.jd.com/">手机京东</a>
		|
		<a target="_top" href="http://club.jd.com/links.aspx">友情链接</a>
		|
		<a target="_top" href="http://media.jd.com/">销售联盟</a>
		|
		<a href="http://club.jd.com/" target="_top">京东社区</a>
		|
		<a href="http://gongyi.jd.com/" target="_top">京东公益</a>
		|
		<a href="http://en.jd.com/" target="_top">English Site</a>
		|
		<a href="http://help.en.jd.com/help/question-46.html" target="_top">Contact Us</a>
	</div>
	<div class="copyright">
		北京市公安局朝阳分局备案编号110105014669&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;
		<a target="_top" href="53f16c24n7c04d9e9.jpg">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;新出发京零&nbsp;字第大120007号
		<br>
		<a rel="nofollow" href="f_music.jpg" target="_top">音像制品经营许可证苏宿批005号</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;出版物经营许可证编号新出发(苏)批字第N-012号&nbsp;&nbsp;|&nbsp;&nbsp;互联网出版许可证编号新出网证(京)字150号
		<br>
		<a href="wlwhjyxkz.jpg" target="_top">网络文化经营许可证京网文[2014]2148-348号</a>
		&nbsp;&nbsp;违法和不良信息举报电话：4006561155&nbsp;&nbsp;Copyright&nbsp;©&nbsp;2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有
		<br>
		京东旗下网站：
		<a target="_top" href="http://www.360top.com/">360TOP</a>
		&nbsp;&nbsp;
		<a href="http://www.paipai.com/" target="_top">拍拍网</a>
		&nbsp;&nbsp;
		<a href="https://www.wangyin.com/" target="_top">网银在线</a>
	</div>
	<div class="authentication">
		<a rel="nofollow" target="_top" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026">
			<img alt="经营性网站备案中心" src="/shop_jd/Home/Public/images/54b8871ena9a7067e.png" class="err-product" height="32" width="103"></a>
		<a rel="nofollow" target="_top" id="urlknet" tabindex="-1" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005">
			<img onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal" alt="可信网站" src="/shop_jd/Home/Public/images/54b8872dne37a9860.png" class="err-product" border="true" height="32" width="103"></a>
		<a rel="nofollow" target="_top" href="http://www.bj.cyberpolice.cn/index.do">
			<img alt="朝阳网络警察" src="/shop_jd/Home/Public/images/54b8874bn694454a5.png" class="err-product" height="32" width="103"></a>
		<a rel="nofollow" target="_top" href="https://search.szfw.org/cert/l/CX20120111001803001836">
			<img src="/shop_jd/Home/Public/images/54b8875fnad1e0c4c.png" class="err-product" height="32" width="103"></a>
		<a target="_top" href="http://jubao.china.cn:13225/reportform.do">
			<img src="/shop_jd/Home/Public/images/54b8863dn8d2c61ec.png" class="err-product" height="32" width="185"></a>
	</div>
</div>
</div>
  <iframe style="width: 100%; height: 1086px;" class="thickframe" id="" marginwidth="0" marginheight="0" scrolling="no" frameborder="0"></iframe>
  <div style="width: 100%; height: 1086px;" class="thickdiv" id=""></div>
  <div style="left: 246.5px; top: 126px; width: 762px; height: 542px;" class="thickbox"
       id="">
    <div style="width: 760px;" class="thickwrap">
      <div class="thicktitle" id="" style="width:740">
          <span>
            添加收货地址
          </span>
      </div>
      <div class="thickcon" id="" style="width: 740px; height: 490px; padding-left: 10px; padding-right: 10px;">
        <div id="addressDiagDiv">
          <title>
            收货地址
          </title>
          <div class="m" id="edit-cont">
            <div class="mc">
              <div class="form">
                <div class="item">
                    <span class="label">
                      <em>
                        *
                      </em>
                      收货人：
                    </span>
                  <div class="fl">
                    <input value="" id="consigneeName" class="text" type="text"/>
                      <span id="consigneeNameNote" class="error-msg hide">
                      </span>
                  </div>
                  <div class="clr">
                  </div>
                </div>
                <div class="item">
                    <span class="label">
                      <em>
                        *
                      </em>
                      所在地区：
                    </span>
                  <div class="fl">
                    <select id="provinceDiv" class="sele">
                      <option value="0">
                        请选择
                      </option>
                      <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['region_id']); ?>">
                          <?php echo ($vo['region_name']); ?>
                        </option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select id="cityDiv" class="sele" onchange="loadCounty()">
                      <option value="0">
                        请选择
                      </option>
                    </select>
                    <select id="countyDiv" class="sele" onchange="loadTown()">
                      <option value="0">
                        请选择
                      </option>
                    </select>
                    <select id="townDiv" class="sele hide" onchange="fillTownName()">
                      <option>
                        请选择
                      </option>
                    </select>
                      <span class="error-msg" id="areaNote">
                      </span>
                  </div>
                  <div class="clr">
                  </div>
                </div>
                <div class="item">
                    <span class="label">
                      <em>
                        *
                      </em>
                      详细地址：
                    </span>
                  <div class="fl">
                      <span style="float: left; margin-right: 5px; line-height: 32px;" id="areaName">
                      </span>
                    <input value="" id="consigneeAddress" class="text text1" onblur="checkConsigneeAddress()"
                           type="text">
                  </div>
                    <span class="error-msg" id="consigneeAddressNote">
                    </span>
                  <div class="clr">
                  </div>
                </div>
                <div class="item">
                  <div class="fl">
                      <span class="label">
                        <em>
                          *
                        </em>
                        手机号码：
                      </span>
                    <input value="" id="consigneeMobile" maxlength="11" class="text" onblur="checkMobile()"
                           type="text">
                  </div>
                  <div class="fl">
                      <span class="extra-span ftx-03">
                        或
                      </span>
                  </div>
                  <div class="fl">
                      <span class="label">
                        固定电话：
                      </span>
                    <input value="" id="consigneePhone" class="text" onblur="checkMobile()"
                           type="text">
                      <span class="error-msg hide" id="consigneeMobileNote">
                      </span>
                      <span class="clr">
                      </span>
                  </div>
                  <div class="clr">
                  </div>
                </div>
                <div class="item">
                    <span class="label">
                      <em>
                        *
                      </em>
                      地址别名：
                    </span>
                  <div class="fl">
                    <input value="" id="consigneeAlias" class="text" onblur="checkConsigneeAlias()"
                           type="text">
                      <span class="ftx-03">
                        设置一个易记的名称，如：“送到家里”、“送到公司”
                      </span>
                      <span class="error-msg hide" id="consigneeAliasNote">
                      </span>
                  </div>
                  <div class="clr">
                  </div>
                </div>
                <div class="btns">
                  <a href="javascript:;" onclick="addAddress();" class="e-btn btn-9 save-btn">
                    保存收货地址
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="thickclose" id="">
        ×
      </a>
    </div>
  </div>
</body>
</html>
<script>
  $(function(){
    error = 1;
    //新增收货地址
    $('.add-btn').click(function () {
      $('.thickframe').show();
      $('.thickdiv').show();
      $('.thickbox').show();
    });
    //关闭新增收货地址
    $('.thickclose').click(function () {
      $('.thickframe').hide();
      $('.thickdiv').hide();
      $('.thickbox').hide();
    });
    //收货人
    $('#consigneeName').focus(function () {
      $(this).attr('class','text');
      $('#consigneeNameNote').text('').hide();
    });
    $('#consigneeName').blur(function () {
      var $val = $(this).val();
      if($val.length==0){
        $('#consigneeNameNote').text('请填写收货人').show();
      }
    });
    //省市联动
    $('#provinceDiv').change(function(){
        var val = $(this).val();
        if(val!=0){//
          $.ajax({
            url:'/index.php/Home/Member/linkage',
            type:'post',
            data:{needCity:val},
            success: function ($msg) {
                if($msg){
                  $('#cityDiv').append($msg);
                }else{
                  alert('添加城市失败');
                }
            }
          });
        }
    });
  });
</script>