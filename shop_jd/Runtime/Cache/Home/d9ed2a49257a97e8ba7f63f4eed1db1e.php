<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>我的京东--账户安全</title>
    <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/editPwd.css" media="all">
    <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
    <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
    <link rel="stylesheet" href="/shop_jd/Home/Public/css/common.css"/>
</head>
<body myjd="_MYJD_safe" menuid="set">
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
    <!--<div id="nav">-->
        <!--<div class="w">-->
            <!--<div class="logo">-->
                <!--<a href="http://www.jd.com/" target="_top" class="fore1"></a>-->
                <!--<a href="http://home.jd.com/" target="_self" class="fore2">我的京东</a>-->
                <!--<a href="http://www.jd.com/" target="_top" class="fore3">返回京东首页</a>-->
            <!--</div>-->
            <!--<div class="navitems">-->
                <!--<ul>-->
                    <!--<li class="fore-1">-->
                        <!--<a target="_self" href="http://home.jd.com/">首页</a>-->
                    <!--</li>-->
                    <!--<li class="fore-2">-->
                        <!--<a href="http://me.jd.com/" target="_top" clstag="click|keycount|myhome|hgr">个人主页</a>-->
                    <!--</li>-->
                    <!--<li class="fore-3">-->
                        <!--<div class="dl" clstag="click|keycount|myhome|hsz">-->
                            <!--<div class="dt">-->
                                <!--<span class="myjd-set">账户设置</span> <b></b>-->
                            <!--</div>-->
                            <!--<div class="dd">-->
                                <!--<a tid="_MYJD_info" clstag="Homeyser" href="http://i.jd.com/user/info" target="_self">-->
                                    <!--<span>个人信息</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_safe" clstag="Homesafe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self">-->
                                    <!--<span>账户安全</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_accbinde" clstag="Homezhbd" href="http://safe.jd.com/union/index.action" target="_self">-->
                                    <!--<span>账号绑定</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_grade" clstag="Homegrade" href="http://usergrade.jd.com/user/grade" target="_self">-->
                                    <!--<span>我的级别</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_comments" clstag="homeadd" href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">-->
                                    <!--<span>收货地址</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_share" clstag="Homeshare" href="http://share.jd.com/share/index.html" target="_self">-->
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
                            <!--</div>-->
                        <!--</div>-->
                    <!--</li>-->
                    <!--<li class="fore-4">-->
                        <!--<div class="dl myjd-info" clstag="click|keycount|myhome|hsq">-->
                            <!--<div class="dt ">-->
                                <!--<span>-->
                                    <!--社区-->
                                    <!--<i>2</i>-->
                                <!--</span> <b></b>-->
                            <!--</div>-->
                            <!--<div class="dd">-->
                                <!--<a tid="_MYJD_joy" clstag="Homemsg" href="http://joycenter.jd.com/" target="_self">-->
                                    <!--<span>-->
                                        <!--消息精灵-->
                                        <!--<b>(2)</b>-->
                                    <!--</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_activities" clstag="Homeclub" href="http://luck.jd.com/myjd/myJoinActivity.html" target="_self">-->
                                    <!--<span>我的活动</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_circle" clstag="Homejoincircle" href="http://group.jd.com/circle/myjoincircle.htm" target="_self">-->
                                    <!--<span>我的圈子</span>-->
                                <!--</a>-->
                                <!--<a tid="_MYJD_mycollect" clstag="Homethread" href="http://group.jd.com/thread/mythread.htm" target="_self">-->
                                    <!--<span>我的帖子</span>-->
                                <!--</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
            <!--<div class="nav-r">-->
                <!--<div id="search-2014">-->
                    <!--<ul style="display: none;" id="shelper" class="hide"></ul>-->
                    <!--<div class="form">-->
                        <!--<input value="ZUK盲筹" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" type="text">-->
                        <!--<button onclick="search('key');return false;" class="button cw-icon" type="button">-->
                            <!--<i></i>-->
                            <!--搜索-->
                        <!--</button>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div id="settleup-2014" class="dorpdown">-->
                    <!--<div class="cw-icon">-->
                        <!--<i class="ci-left"></i>-->
                        <!--<i class="ci-right">&gt;</i>-->
                        <!--<i class="ci-count" id="shopping-amount">0</i>-->
                        <!--<a target="_top" href="http://cart.jd.com/cart/cart.html">我的购物车</a>-->
                    <!--</div>-->
                    <!--<div class="dorpdown-layer">-->
                        <!--<div class="spacer"></div>-->
                        <!--<div id="settleup-content">-->
                            <!--<span class="loading"></span>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div id="hotwords-2014">-->
                    <!--<a href="http://sale.jd.com/act/bpdqrcoic86uz.html" target="_top" class="style-red">机不可失</a>-->
                    <!--<a href="http://sale.jd.com/act/1LdMxPk5ZVB.html" target="_top">游戏爆品</a>-->
                    <!--<a href="http://sale.jd.com/act/BRmr0lD1qJjQ.html" target="_top">减减减</a>-->
                    <!--<a href="http://sale.jd.com/act/LJjlYizcMpoxqh.html" target="_top">低至5折</a>-->
                    <!--<a href="http://sale.jd.com/act/WiNblg8JfIhXVHY6.html" target="_top">惊天满减</a>-->
                    <!--<a href="http://sale.jd.com/act/MqVOwgZFE047m.html" target="_top">荣耀4A</a>-->
                    <!--<a href="http://tuan.jd.com/channel/entity-beijing-56-0-0-1-0-0-0-0-1.html" target="_top">暑期阅读</a>-->
                    <!--<a href="http://sale.jd.com/act/KXojGsEAh7Qk8.html?from=jdpopser_jr" target="_top">苹果免息</a>-->
                    <!--<a href="http://sale.jd.com/act/pQukl7nj3hf.html" target="_top">尖货1元</a>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="clr"></div>-->
        <!--</div>-->
    <!--</div>-->
    <div id="container">
        <div class="w">
            <div id="content">
                <div id="sub">
                    <div id="menu">
                        <dl class="fore1">
                          <dt id="_MYJD_setting">设置</dt>
                          <dd class="fore1_1 curr" id="_MYJD_info">
                            <a  href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">个人信息</a>
                          </dd>
                          <dd class="fore1_3" id="_MYJD_safe">
                            <a clstag="homepage|keycount|home2013|Homesafe" href="/index.php/Home/Member/safetyCenter/uid/<?php echo ($_SESSION['login_info']['uid']); ?>" target="_self">账户安全</a>
                          </dd>
                          <dd class="fore1_4" id="_MYJD_grade">
                            <a clstag="homepage|keycount|home2013|Homegrade" href="http://usergrade.jd.com/user/grade" target="_self">我的级别</a>
                          </dd>
                          <dd class="fore1_5" id="_MYJD_comments">
                            <a clstag="homepage|keycount|home2013|homeadd" href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">收货地址</a>
                          </dd>
                            <!--<dd class="fore1_6" id="_MYJD_share">-->
                                <!--<a clstag="homepage|keycount|home2013|Homeshare" href="http://share.jd.com/share/index.html" target="_self">分享绑定</a>-->
                            <!--</dd>-->
                            <!--<dd class="fore1_7" id="_MYJD_rss">-->
                                <!--<a clstag="homepage|keycount|home2013|Homeedm" href="http://edm.jd.com/front/subscribe/index.aspx" target="_self">邮件订阅</a>-->
                            <!--</dd>-->
                            <!--<dd class="fore1_8" id="_MYJD_recor">-->
                                <!--<a clstag="homepage|keycount|home2013|Homeedm" href="http://usergrade.jd.com/user/consume" target="_self">消费记录</a>-->
                            <!--</dd>-->
                            <!--<dd class="fore1_9" id="_MYJD_app">-->
                                <!--<a clstag="homepage|keycount|home2013|Homeedm" href="http://fw.jd.com/home/auth_list.action" target="_top">应用授权</a>-->
                            <!--</dd>-->
                            <!--<dd class="fore1_10" id="_MYJD_pay">-->
                                <!--<a clstag="homepage|keycount|home2013|Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_top">快捷支付</a>-->
                            <!--</dd>-->
                            <!--<dd class="fore1_11" id="_MYJD_zpzz">-->
                                <!--<a clstag="homepage|keycount|home2013|Homezpzz" href="http://invoice.jd.com/user/userinfo/zpzz.html" target="_self">增票资质</a>-->
                            <!--</dd>-->
                        </dl>
                    </div>
                </div>
                <div id="main">
                    <div class="mod-main mod-comm">
                        <div class="mt">
                            <h3>修改登录密码</h3>
                        </div>
                        <div class="mc">
                            <div id="sflex03" class="stepflex ">
                                <dl class="first done">
                                    <dt class="s-num">1</dt>
                                    <dd class="s-text">
                                        验证身份
                                        <s></s>
                                        <b></b>
                                    </dd>
                                    <dd></dd>
                                </dl>
                                <dl class="normal doing">
                                    <dt class="s-num">2</dt>
                                    <dd class="s-text">
                                        修改登录密码
                                        <s></s>
                                        <b></b>
                                    </dd>
                                </dl>
                                <dl class="last">
                                    <dt class="s-num">&nbsp;</dt>
                                    <dd class="s-text">
                                        完成
                                        <s></s>
                                        <b></b>
                                    </dd>
                                </dl>
                            </div>
                            <div class="form">
                                <div class="item">
                                    <span class="label"> <em>*</em>
                                        新的登录密码：
                                    </span>
                                    <div class="fl">
                                        <input class="itxt" tabindex="1" name="password" id="password" type="password">
                                        <div class="clr"></div>
                                        <div class="msg-text" id="password_message" style="display: none;">由字母加数字或符号至少两种以上字符组成的6-20位半角字符，区分大小写</div>
                                        <div class="clr"></div>
                                        <div id="password_error" class="msg-error" style="display:none;">请输入登录密码</div>
                                        <div class="clr"></div>
                                        <div id="strength" class="ir icon-s-00" style="display: none;"></div>
                                        <div class="clr"></div>
                                        <div class="msg-error" id="strength_error" style="display: none;"></div>
                                        <input id="passwordLevel" name="passwordLevel" type="hidden"></div>
                                    <div class="clr"></div>
                                </div>
                                <div class="item">
                                    <span class="label"> <em>*</em>
                                        请再输入一次密码：
                                    </span>
                                    <div class="fl">
                                        <input class="itxt" tabindex="2" onblur="isSamePassword();" name="rePassword" id="rePassword" type="password">
                                        <div class="clr"></div>
                                        <div id="rePassword_error" class="msg-error" style="display: none;"></div>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="item">
                                    <span class="label">
                                        <em>*</em>
                                        验证码：
                                    </span>
                                    <div class="fl">
                                        <input value="" class="itxt"  tabindex="3" name="authCode" id="authCode" type="text">
                                        <label>
                                            <img id="verify" class="ml10" src="/index.php/Home/Member/verify" alt="验证码" onclick="this.src=this.src+'?' + new Date().getTime()" style="cursor: pointer; width: 120px; height: 40px;">
                                            看不清？
                                            <a href="javascript:void(0)"  class="ftx-05" onclick="verify11()">换一张</a>
                                        </label>
                                        <div class="clr"></div>
                                        <div id="authCode_error" class="msg-error"></div>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="item">
                                    <span class="label">&nbsp;</span>
                                    <div class="fl">
                                        <a class="btn-1" href="javascript:void(0);">
                                            <b>提交</b>
                                        </a>
                                    </div>
                                    <div class="clr"></div>
                                </div>
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

    </div>
</body>
</html>
<script>
    function verify11(){//验证码
      return document.getElementById('verify').src='/index.php/Home/Member/verify'+'?'+new Date().getTime();
    }
    function checkPwd($str){//检测密码
      var reg = /^[\S]{6,20}$/ig;
      return reg.test($str);
    }
  $(function(){
    var error = 1;
    $('#password').focus(function(){
      $(this).css({border:"1px solid #7ABD54"});
      $('#password_message').show();

    });

    $('#password').blur(function () {
      var $val = $(this).val();
      if($val.length>0){//有输入值的时候
        if(!checkPwd($val)){//不符合验证
          $('#password_message').hide();
          $('#password_error').show().text('密码必须6-20位,字母或数字');
          $(this).removeAttr('style');//恢复密码框边框颜色
          error = 1;
        }else{//符合正则
          $(this).removeAttr('style');
          $('#password_message').hide();
          $('#password_error').hide();
          error = 0;
        }
      }else{//没有输入值的时候
        $('#password_message').hide();
        $('#password_error').text('密码不能为空').show();
        error = 1;
      }
    });

    //再次输入密码
    $('#rePassword').focus(function () {
      var $val = $(this).val();
      var $val2 = $('#password').val();
      if($val.length>0){//有输入值的时候
        if($val !== $val2){//两次输入密码不一致
          $('#rePassword_error').show();
        }else{
          $('#rePassword_error').hide();
        }
      }else{//没有输入值
       $('#rePassword').css({'border':'1px solid #7ABD54'});
        $('#rePassword_error').hide();
      }
    });
    $('#rePassword').blur(function () {
      var $val = $(this).val();
      var $val2 = $('#password').val();
      $(this).removeAttr('style');
      if($val.length>0){//有输入值的时候
        if($val !== $val2){//两次输入密码不一致
          $('#rePassword_error').text('两次密码输入不一致').show();
          error =1;
      }else{//输入一致
          $('#rePassword_error').hide();
          error = 0;
        }
      }else{//没有输入值的时候
        $('#rePassword_error').text('请确认密码').show();
        error = 1;
      }
    });

    //验证码事件
    $('#authCode').focus(function () {
      $(this).css({'border':'1px solid #7ABD54'});
      $("#authCode_error").hide();
    });
    $('#authCode').blur(function () {
      $(this).removeAttr('style');
    });
    //点击提交事件
    $('.btn-1').children('b').click(function () {
      if(!error){
        //检验验证码的正确性
        var $verify = $('#authCode').val();
        //密码
        var $pwd = $('#rePassword').val();
        $.ajax({
          url:'/index.php/Home/Member/checkVerify',
          type:'post',
          data:{'verify':$verify,'uid':<?php echo ($_SESSION['login_info']['uid']); ?>,'pwd':$pwd},
          success: function ($msg) {
            if($msg=='1'){//验证码正确
              window.location.href = "/index.php/Home/Member/pwdSuccess/uid/<?php echo ($_SESSION['login_info']['uid']); ?>";
            }else{//验证码错误
              $('#authCode_error').text('验证码不正确').show();
            }
          }
        })
      }else{
        return;
      }
    });

  })


</script>