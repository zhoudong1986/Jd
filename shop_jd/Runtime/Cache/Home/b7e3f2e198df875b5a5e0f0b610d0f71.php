<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>
    我的级别
  </title>
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/grade.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/common.css" media="all">
  <script>
    var $url = "/index.php/Home/Common/getMsg";
  </script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
</head>
<body myjd="_MYJD_grade">
<!--引进头部-->
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
      <li class="myOrder"><a href="/index.php/Home/Member/myOrder/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">我的订单</a></li>
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
  <div id="header-2013" style="display: none;">
  </div>
</div>
<!--引进个人中心导航-->
<div id="nav">
  <div class="w">
    <div class="logo">
      <a href="/index.php/Home/Index/index" target="_top" class="fore1"></a>
      <a href="/index.php/Home/Member/home/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self" class="fore2">我的京东</a>
      <a href="/index.php/Home/Index/index" target="_top" class="fore3">返回京东首页</a>
    </div>
    <div class="navitems">
      <ul>
        <li class="fore-1">
          <a target="_self" href="/index.php/Home/Member/home/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">首页</a>
        </li>
        <li class="fore-2">
          <a href="http://me.jd.com/" target="_top">个人主页</a>
        </li>
        <li class="fore-3">
          <div class="dl">
            <div class="dt">
              <span class="myjd-set">账户设置</span> <b></b>
            </div>
            <div class="dd">
              <a tid="_MYJD_info" href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">
                <span>个人信息</span>
              </a>
              <a tid="_MYJD_safe"  href="/index.php/Home/Member/safetyCenter/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">
                <span>账户安全</span>
              </a>
              <!--<a tid="_MYJD_accbinde"  href="http://safe.jd.com/union/index.action" target="_self">-->
              <!--<span>账号绑定</span>-->
              <!--</a>-->
              <a tid="_MYJD_grade"  href="/index.php/Home/Member/grade/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">
                <span>我的级别</span>
              </a>
              <a tid="_MYJD_comments" href="/index.php/Home/Member/grade/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">
                <span>收货地址</span>
              </a>
              <!--<a tid="_MYJD_share" href="http://share.jd.com/share/index.html" target="_self">-->
              <!--<span>分享绑定</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_rss" clstag="Homeedm" href="http://edm.jd.com/front/subscribe/index.aspx" target="_self">-->
              <!--<span>邮件订阅</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_recor" clstag="Homeedm" href="http://usergrade.jd.com/user/consume" target="_self">-->
              <!--<span>消费记录</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_app" clstag="Homeedm" href="http://fw.jd.com/home/auth_list.action" target="_top">-->
              <!--<span>应用授权</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_pay" clstag="Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_top">-->
              <!--<span>快捷支付</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_zpzz" clstag="Homezpzz" href="http://invoice.jd.com/user/userinfo/zpzz.html" target="_self">-->
              <!--<span>增票资质</span>-->
              <!--</a>-->
            </div>
          </div>
        </li>
        <li class="fore-4">
          <div class="dl myjd-info">
            <div class="dt ">
								<span>
									社区
									<i></i>
								</span> <b></b>
            </div>
            <div class="dd">
              <a tid="_MYJD_joy" href="http://joycenter.jd.com/" target="_self">
									<span>
										消息精灵
										<b></b>
									</span>
              </a>
              <!--<a tid="_MYJD_activities" clstag="Homeclub" href="http://luck.jd.com/myjd/myJoinActivity.html" target="_self">-->
              <!--<span>我的活动</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_circle" clstag="Homejoincircle" href="http://group.jd.com/circle/myjoincircle.htm" target="_self">-->
              <!--<span>我的圈子</span>-->
              <!--</a>-->
              <!--<a tid="_MYJD_mycollect" clstag="Homethread" href="http://group.jd.com/thread/mythread.htm" target="_self">-->
              <!--<span>我的帖子</span>-->
              <!--</a>-->
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="nav-r">
      <div id="search-2014">
        <ul id="shelper" class="hide"></ul>
        <div class="form">
          <input value="秘密花园" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" type="text">
          <button onclick="search('key');return false;" class="button cw-icon" type="button">
            <i></i>
            搜索
          </button>
        </div>
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
        <a href="http://sale.jd.com/act/SyJi8KHaZYFjwLuq.html" target="_top" class="style-red">优惠券</a>
        <a href="http://list.jd.com/list.html?cat=670%2C716%2C722&amp;delivery=1&amp;page=1&amp;ev=834_56682||101308||13521" target="_top">3D巨幕</a>
        <a href="http://sale.jd.com/act/7RmiNZun1Y.html" target="_top">家电5折</a>
        <a href="http://sale.jd.com/act/JdyF1iDOSU.html" target="_top">200减100</a>
        <a href="http://sale.jd.com/act/WiNblg8JfIhXVHY6.html" target="_top">惊天满减</a>
        <a href="http://sale.jd.com/act/BPdqrCOIc86uZ.html" target="_top">大牌秒杀</a>
        <a href="http://sale.jd.com/act/0CoHdsWgeMjrpt7.html?cpdad=1DLSUE" target="_top">38折封顶</a>
        <a href="http://sale.jd.com/act/W1BULaSyo3.html?from=jdpopser_jr" target="_top">苹果399+</a>
        <a href="http://sale.jd.com/act/zvP8qMJLC7e.html" target="_top">机票20元</a>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!--container start-->
<div id="container">
  <div class="w">
    <div id="content">
      <div id="sub">
        <div id="menu">
          <dl class="fore1">
            <dt id="_MYJD_setting">
              设置
            </dt>
            <dd class="fore1_1" id="_MYJD_info">
              <a  href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">个人信息</a>
            </dd>
            <dd class="fore1_3" id="_MYJD_safe">
              <a clstag="homepage|keycount|home2013|Homesafe" href="/index.php/Home/Member/safetyCenter/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">账户安全</a>
            </dd>
            <dd class="fore1_4 curr" id="_MYJD_grade">
              <a href="/index.php/Home/Member/grade/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">我的级别</a>
            </dd>
            <dd class="fore1_5" id="_MYJD_comments">
              <a href="/index.php/Home/Member/myAddr/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">收货地址</a>
            </dd>
          </dl>
        </div>
        <div id="menu-ads">
          <!--广告全部放这里-->
          <div>
            <a href="http://c.nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnymMImvln2Js0HU3q+mnlAr0LpeSNpALCbss46Fg5S8sQYb7iog8VJRd/DurbeYQwISZI7p/OOlX6LABVlykvJwqJOjcdfYtg4LR/8nWWAGIVoNyWeGqd+Q7wP6xUaN8n11WkEWpXi1QspDG2bIfft81gWM2OrW1TfnD3oIuvOCpB0KHfimMQj3Iw4V9UaLhib1ll/LIATEUbAn/s32Kw4IT+2H9P9ZloUHfxMDj1t98jemO+qRFI51oV5yjVXWSb1Vwmcnz+LjKmIEN7/uZJP43Dti/UNGXO9rUg+5WktSX8KghgkpMFgdFGRP3JZtfl3w=&amp;cv=2.0&amp;url=http://wan.jd.com/yeyou/play.html?gameId=86&amp;gateWayId=s129"
               target="_top">
              <img alt="" app="image:poster" src="55399ba2n6c0b842e.gif" height="70"
                   width="90">
            </a>
          </div>
        </div>
      </div>
      <div id="main">
        <div class="mod-main mod-comm lefta-box">
          <div class="mt">
            <ul class="extra-l">
              <li class="fore-1">
                <a href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">
                  基本信息
                </a>
              </li>
              <li class="fore-2">
                <a href="/index.php/Home/Member/showImg/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">
                  头像照片
                </a>
              </li>
              <li class="fore-3">
                <a href="/index.php/Home/Member/more/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">
                  更多个人信息
                </a>
              </li>
              <li class="fore-4">
                <a href="#" class="curr">
                  我的级别
                </a>
              </li>
            </ul>
          </div>
          <div class="mc" id="rankinfo">
            <div class="mc" id="rankinfo">
              <ul>
                  <?php if($info['points']): if($points < 100 ): ?><li class="rank r2">
                        您的会员级别是：
                        <s>
                        </s>
                        <span class="ftx-04">
                        <a href="#" target="_top">铜牌会员</a>
                        </span>
                        （
                        <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                        查看京东会员介绍
                        </a>
                        ）
                        </li>
                        <!-- <li class="rank r2">您的会员级别是：<s></s><span class="ftx-05">铜牌会员</span>（<a href="http://vip.jd.com/help_memberIntroduction.html" target="_blank" style="color:#005ea7">查看京东会员介绍</a>）</li> -->
                        <li class="tlimit">
                        会员级别有效期：长期有效
                        </li>
                        <!-- 铜牌-->
                        <li>
                        您目前的成长值为
                        <span class="ftx-01">
                        <?php echo ($points); ?>
                        </span>
                        ，再获得
                        <span class="ftx-01">
                        <?php echo intval(500-$points) ?>
                        </span>
                        成长值即可升级到
                        <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                        银牌会员
                        </a>
                      </li>
                      <?php elseif($points < 500 ): ?>
                        <li class="rank r2">
                          您的会员级别是：
                          <s>
                          </s>
                        <span class="ftx-04">
                        <a href="#" target="_top">银牌会员</a>
                        </span>
                          （
                          <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                            查看京东会员介绍
                          </a>
                          ）
                        </li>
                        <!-- <li class="rank r2">您的会员级别是：<s></s><span class="ftx-05">铜牌会员</span>（<a href="http://vip.jd.com/help_memberIntroduction.html" target="_blank" style="color:#005ea7">查看京东会员介绍</a>）</li> -->
                        <li class="tlimit">
                          会员级别有效期：长期有效
                        </li>
                        <!-- 铜牌-->
                        <li>
                          您目前的成长值为
                        <span class="ftx-01">
                        <?php echo ($points); ?>
                        </span>
                          ，再获得
                        <span class="ftx-01">
                        <?php echo intval(1000-$points) ?>
                        </span>
                          成长值即可升级到
                          <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                            金牌会员
                          </a>
                        </li>
                        <?php elseif($points < 1000 ): ?>
                          <li class="rank r2">
                            您的会员级别是：
                            <s>
                            </s>
                        <span class="ftx-04">
                        <a href="#" target="_top">金牌会员</a>
                        </span>
                            （
                            <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                              查看京东会员介绍
                            </a>
                            ）
                          </li>
                          <!-- <li class="rank r2">您的会员级别是：<s></s><span class="ftx-05">铜牌会员</span>（<a href="http://vip.jd.com/help_memberIntroduction.html" target="_blank" style="color:#005ea7">查看京东会员介绍</a>）</li> -->
                          <li class="tlimit">
                            会员级别有效期：长期有效
                          </li>
                          <!-- 铜牌-->
                          <li>
                            您目前的成长值为
                        <span class="ftx-01">
                        <?php echo ($points); ?>
                        </span>
                            ，再获得
                        <span class="ftx-01">
                        <?php echo intval(2000-$points) ?>
                        </span>
                            成长值即可升级到
                            <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                              白金会员
                            </a>
                          </li>
                      <?php elseif($points < 2004 ): ?>
                        <li class="rank r2">
                          您的会员级别是：
                          <s>
                          </s>
                        <span class="ftx-04">
                        <a href="#" target="_top">白金会员</a>
                        </span>
                          （
                          <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                            查看京东会员介绍
                          </a>
                          ）
                        </li>
                        <!-- <li class="rank r2">您的会员级别是：<s></s><span class="ftx-05">铜牌会员</span>（<a href="http://vip.jd.com/help_memberIntroduction.html" target="_blank" style="color:#005ea7">查看京东会员介绍</a>）</li> -->
                        <li class="tlimit">
                          会员级别有效期：长期有效
                        </li>
                        <!-- 铜牌-->
                        <li>
                          您目前的成长值为
                        <span class="ftx-01">
                        <?php echo ($points); ?>
                        </span>
                          ，再获得
                        <span class="ftx-01">
                        <?php echo intval(20000-$points) ?>
                        </span>
                          成长值即可升级到
                          <a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">
                            钻石会员
                          </a>
                        </li><?php endif; ?>
                  <?php else: ?>
                    a href="#" target="_top">灵魂会员<?php endif; ?>
                <!--<li class="rank r2">-->
                  <!--您的会员级别是：-->
                  <!--<s>-->
                  <!--</s>-->
                      <!--<span class="ftx-04">-->
                        <!--<a href="#" target="_top">铜牌会员</a>-->
                      <!--</span>-->
                  <!--（-->
                  <!--<a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">-->
                    <!--查看京东会员介绍-->
                  <!--</a>-->
                  <!--）-->
                <!--</li>-->
                <!--&lt;!&ndash; <li class="rank r2">您的会员级别是：<s></s><span class="ftx-05">铜牌会员</span>（<a href="http://vip.jd.com/help_memberIntroduction.html" target="_blank" style="color:#005ea7">查看京东会员介绍</a>）</li> &ndash;&gt;-->
                <!--<li class="tlimit">-->
                  <!--会员级别有效期：长期有效-->
                <!--</li>-->
                <!--&lt;!&ndash; 铜牌&ndash;&gt;-->
                <!--<li>-->
                  <!--您目前的成长值为-->
                      <!--<span class="ftx-01">-->
                        <!--884-->
                      <!--</span>-->
                  <!--，再获得-->
                      <!--<span class="ftx-01">-->
                        <!--1116-->
                      <!--</span>-->
                  <!--成长值即可升级到-->
                  <!--<a href="http://help.jd.com/user/issue/160-346.html" target="_top" style="color: rgb(0, 94, 167);">-->
                    <!--银牌会员-->
                  <!--</a>-->
                <!--</li>-->
                <li>
                  获得成长值的办法:登录、购物、
                  <a href="http://club.jd.com/mycomments.aspx" target="_top" style="color: rgb(0, 94, 167);">
                    评价
                  </a>
                  、
                  <a href="http://club.jd.com/mycomments.aspx" target="_top" style="color: rgb(0, 94, 167);">
                    晒单
                  </a>
                  。
                  <a href="http://help.jd.com/user/issue/163-368.html" target="_top" style="color: rgb(0, 94, 167);">
                    查看详情
                  </a>
                  <!-- <a href="http://vip.jd.com/help_growthValue.html" target="_blank"
                  style="color:#005ea7">查看详情</a> -->
                </li>
                <!--<li>-->
                  <!--<a href="http://usergrade.jd.com/user/usergrade/userjoy" target="_top"-->
                     <!--style="color: rgb(0, 94, 167);">-->
                    <!--查看我的成长值明细-->
                  <!--</a>-->
                <!--</li>-->
              </ul>
            </div>
          </div>
        </div>
        <!--<div class="mod-main mod-comm" id="rankpref">-->
          <!--<div class="mt">-->
            <!--&lt;!&ndash; 铜牌&ndash;&gt;-->
            <!--<h3>-->
              <!--铜牌会员权利及优惠：-->
            <!--</h3>-->
          <!--</div>-->
          <!--<div class="mc">-->
            <!--&lt;!&ndash; 铜牌&ndash;&gt;-->
            <!--&lt;!&ndash; <h5>铜牌会员权利及优惠：</h5> &ndash;&gt;-->
            <!--<p>-->
              <!--1、享受自营商品（-->
              <!--<a href="http://help.jd.com/user/issue/44-75.html" target="_top" style="color: rgb(0, 94, 167);">-->
                <!--如何区分？-->
              <!--</a>-->
              <!--）满79元免运费服务。具体参考-->
              <!--<a href="http://help.jd.com/user/issue/109-188.html" target="_top" style="color: rgb(0, 94, 167);">-->
                <!--配送服务收费标准-->
              <!--</a>-->
              <!--；-->
              <!--<br>-->
              <!--&lt;!&ndash; 2、可以使用积分兑换10元京券；<br />-->
              <!--&ndash;&gt; 2、享受售后服务（退货、换货、维修）运费优惠（-->
              <!--<a href="http://help.jd.com/user/issue/322-1083.html" target="_top" style="color: rgb(0, 94, 167);">-->
                <!--查看售后服务说明-->
              <!--</a>-->
              <!--）；-->
              <!--<br>-->
              <!--3、享受预约电话服务（-->
              <!--<a href="http://myjd.jd.com/appoint/telebooking.action" target="_top"-->
                 <!--style="color: rgb(0, 94, 167);">-->
                <!--我要预约。-->
              <!--</a>-->
              <!--）。-->
            <!--</p>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="mod-main mod-comm" id="rankcour">-->
          <!--<div class="mt">-->
            <!--<h3>-->
              <!--会员级别变动记录：-->
            <!--</h3>-->
          <!--</div>-->
          <!--<div class="mc">-->
            <!--<p>-->
              <!--2014.06.03&nbsp;&nbsp;&nbsp;&nbsp; 升级为 铜牌会员-->
              <!--<br>-->
            <!--</p>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="mod-main mod-comm" id="rankimg">-->
          <!--<div class="mt">-->
            <!--<h3>-->
              <!--会员级别图示：-->
            <!--</h3>-->
          <!--</div>-->
          <!--<div class="mc">-->
            <!--<div class="ac">-->
              <!--&lt;!&ndash;<img width="600" height="111" alt="会员级别图示" src="http://misc.360buyimg.com/jd2008/img/jibie2013.png">&ndash;&gt;-->
              <!--<img alt="会员级别图示" src="jibie.jpg" height="111" width="600">-->
            <!--</div>-->
          <!--</div>-->
        <!--</div>-->
      </div>
      <div id="left" class="g-3-5 c-0">
      </div>
          <span class="clr">
          </span>
    </div>
  </div>
  <!--container end-->
  <div id="service-2014">
    <div class="w">
      <dl class="fore1">
        <dt>
          购物指南
        </dt>
        <dd>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-29.html">
              购物流程
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-151.html">
              会员介绍
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-297.html">
              生活旅行/团购
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue.html">
              常见问题
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-136.html">
              大家电
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/index.html">
              联系客服
            </a>
          </div>
        </dd>
      </dl>
      <dl class="fore2">
        <dt>
          配送方式
        </dt>
        <dd>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-81-100.html">
              上门自提
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-81.html">
              211限时达
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/103-983.html">
              配送服务查询
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/109-188.html">
              配送费收取标准
            </a>
          </div>
          <div>
            <a target="_top" href="http://en.jd.com/chinese.html">
              海外配送
            </a>
          </div>
        </dd>
      </dl>
      <dl class="fore3">
        <dt>
          支付方式
        </dt>
        <dd>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-172.html">
              货到付款
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-173.html">
              在线支付
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-176.html">
              分期付款
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-174.html">
              邮局汇款
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-175.html">
              公司转账
            </a>
          </div>
        </dd>
      </dl>
      <dl class="fore4">
        <dt>
          售后服务
        </dt>
        <dd>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/321-981.html">
              售后政策
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-132.html">
              价格保护
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/130-978.html">
              退款说明
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://myjd.jd.com/repair/repairs.action">
              返修/退换货
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://help.jd.com/user/issue/list-50.html">
              取消订单
            </a>
          </div>
        </dd>
      </dl>
      <dl class="fore5">
        <dt>
          特色服务
        </dt>
        <dd>
          <div>
            <a target="_top" href="http://help.jd.com/user/issue/list-133.html">
              夺宝岛
            </a>
          </div>
          <div>
            <a target="_top" href="http://help.jd.com/user/issue/list-134.html">
              DIY装机
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://fuwu.jd.com/">
              延保服务
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://giftcard.jd.com/market/index.action">
              京东E卡
            </a>
          </div>
          <div>
            <a rel="nofollow" target="_top" href="http://mobile.jd.com/">
              京东通信
            </a>
          </div>
        </dd>
      </dl>
          <span class="clr">
          </span>
    </div>
  </div>
  <div class="w">
    <div id="footer-2014">
      <div class="links">
        <a rel="nofollow" target="_top" href="http://www.jd.com/intro/about.aspx">
          关于我们
        </a>
        |
        <a rel="nofollow" target="_top" href="http://www.jd.com/contact/">
          联系我们
        </a>
        |
        <a rel="nofollow" target="_top" href="http://www.jd.com/contact/joinin.aspx">
          商家入驻
        </a>
        |
        <a rel="nofollow" target="_top" href="http://jzt.jd.com/">
          营销中心
        </a>
        |
        <a rel="nofollow" target="_top" href="http://app.jd.com/">
          手机京东
        </a>
        |
        <a target="_top" href="http://club.jd.com/links.aspx">
          友情链接
        </a>
        |
        <a target="_top" href="http://media.jd.com/">
          销售联盟
        </a>
        |
        <a href="http://club.jd.com/" target="_top">
          京东社区
        </a>
        |
        <a href="http://gongyi.jd.com/" target="_top">
          京东公益
        </a>
        |
        <a href="http://en.jd.com/" target="_top">
          English Site
        </a>
        |
        <a href="http://help.en.jd.com/help/question-46.html" target="_top">
          Contact Us
        </a>
      </div>
      <div class="copyright">
        北京市公安局朝阳分局备案编号110105014669&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;
        <a target="_top" href="53f16c24n7c04d9e9.jpg">
          互联网药品信息服务资格证编号(京)-经营性-2014-0008
        </a>
        &nbsp;&nbsp;|&nbsp;&nbsp;新出发京零&nbsp;字第大120007号
        <br>
        <a rel="nofollow" href="f_music.jpg" target="_top">
          音像制品经营许可证苏宿批005号
        </a>
        &nbsp;&nbsp;|&nbsp;&nbsp;出版物经营许可证编号新出发(苏)批字第N-012号&nbsp;&nbsp;|&nbsp;&nbsp;互联网出版许可证编号新出网证(京)字150号
        <br>
        <a href="wlwhjyxkz.jpg" target="_top">
          网络文化经营许可证京网文[2014]2148-348号
        </a>
        &nbsp;&nbsp;违法和不良信息举报电话：4006561155&nbsp;&nbsp;Copyright&nbsp;©&nbsp;2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有
        <br>
        京东旗下网站：
        <a target="_top" href="http://www.360top.com/">
          360TOP
        </a>
        &nbsp;&nbsp;
        <a href="http://www.paipai.com/" target="_top">
          拍拍网
        </a>
        &nbsp;&nbsp;
        <a href="https://www.wangyin.com/" target="_top">
          网银在线
        </a>
      </div>
      <div class="authentication">
        <a rel="nofollow" target="_top" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026">
          <img alt="经营性网站备案中心" src="54b8871ena9a7067e.png" class="err-product" height="32"
               width="103">
        </a>
        <a rel="nofollow" target="_top" id="urlknet" tabindex="-1" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005">
          <img onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal"
               alt="可信网站" src="54b8872dne37a9860.png" class="err-product" border="true"
               height="32" width="103">
        </a>
        <a rel="nofollow" target="_top" href="http://www.bj.cyberpolice.cn/index.do">
          <img alt="朝阳网络警察" src="54b8874bn694454a5.png" class="err-product" height="32"
               width="103">
        </a>
        <a rel="nofollow" target="_top" href="https://search.szfw.org/cert/l/CX20120111001803001836">
          <img src="54b8875fnad1e0c4c.png" class="err-product" height="32" width="103">
        </a>
        <a target="_top" href="http://jubao.china.cn:13225/reportform.do">
          <img src="54b8863dn8d2c61ec.png" class="err-product" height="32" width="185">
        </a>
      </div>
    </div>
  </div>
  <!-- <script type="text/javascript" src="http://misc.360buyimg.com/jdf/1.0.0/unit/??base/1.0.0/base.js,basePatch/1.0.0/basePatch.js"></script>
  <script type="text/javascript"
  src="http://www.jd.com/hotwords.aspx?position=A-INDEX-036"
  charset="gb2312"></script> -->
</div>
</body>
</html>