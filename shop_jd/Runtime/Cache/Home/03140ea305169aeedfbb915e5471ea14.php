<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>账户信息</title>
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/showImg.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/common.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shop_jd/Public/uploadify/uploadify.css" media="all">
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
  <script language="JavaScript" src="/shop_jd/Public/uploadify/jquery.uploadify.min.js"></script>
</head>
<body myjd="_MYJD_info" menuid="set">
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
								<a tid="_MYJD_accbinde" clstag="Homezhbd" href="http://safe.jd.com/union/index.action" target="_self">
									<span>账号绑定</span>
								</a>
								<a tid="_MYJD_grade" clstag="Homegrade" href="http://usergrade.jd.com/user/grade" target="_self">
									<span>我的级别</span>
								</a>
								<a tid="_MYJD_comments" clstag="homeadd" href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">
									<span>收货地址</span>
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
					<div class="form">
						<input value="遥控落地扇" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" type="text">
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
					<a href="http://sale.jd.com/act/apm5YPNU2b.html?cpdad=1DLSUE" target="_top" class="style-red">送SSD卡</a>
					<a href="http://sale.jd.com/act/1LdMxPk5ZVB.html" target="_top">游戏爆品</a>
					<a href="http://sale.jd.com/act/j0OHg4QEYws.html" target="_top">“极”TV</a>
					<a href="http://sale.jd.com/act/LJjlYizcMpoxqh.html" target="_top">低至5折</a>
					<a href="http://sale.jd.com/act/WiNblg8JfIhXVHY6.html" target="_top">惊天满减</a>
					<a href="http://sale.jd.com/act/0V7K4MtzJYQ.html" target="_top">努比亚</a>
					<a href="http://tuan.jd.com/channel/entity-beijing-56-0-0-1-0-0-0-0-1.html" target="_top">暑期阅读</a>
					<a href="http://sale.jd.com/act/KXojGsEAh7Qk8.html?from=jdpopser_jr" target="_top">苹果免息</a>
					<a href="http://sale.jd.com/act/pQukl7nj3hf.html" target="_top">尖货1元</a>
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
							<dt id="_MYJD_setting">设置</dt>
							<dd class="fore1_1 curr" id="_MYJD_info">
								<a clstag="homepage|keycount|home2013|Homeyser" href="http://i.jd.com/user/info" target="_self">个人信息</a>
							</dd>
							<dd class="fore1_2" id="_MYJD_accbinde">
								<a clstag="homepage|keycount|home2013|Homezhbd" href="http://safe.jd.com/union/index.action" target="_self">账号绑定</a>
							</dd>
							<dd class="fore1_3" id="_MYJD_safe">
								<a clstag="homepage|keycount|home2013|Homesafe" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self">账户安全</a>
							</dd>
							<dd class="fore1_4" id="_MYJD_grade">
								<a clstag="homepage|keycount|home2013|Homegrade" href="http://usergrade.jd.com/user/grade" target="_self">我的级别</a>
							</dd>
							<dd class="fore1_5" id="_MYJD_comments">
								<a clstag="homepage|keycount|home2013|homeadd" href="http://easybuy.jd.com/address/getEasyBuyList.action" target="_self">收货地址</a>
							</dd>
						</dl>
					</div>
				</div>
				<div id="main">
					<div class="mod-main">
						<div class="mt">
							<ul class="extra-l">
								<li class="fore-1">
									<a href="/index.php/Home/Member/personal/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">基本信息</a>
								</li>
								<li class="fore-2">
									<a class="curr" href="/index.php/Home/Member/showImg/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">头像照片</a>
								</li>
								<li class="fore-3">
									<a href="/index.php/Home/Member/more/uid/<?php echo ($_SESSION['login_info']['uid']); ?>">更多个人信息</a>
								</li>

							</ul>
						</div>
						<div class="mc update-face-cont">
							<div class="update-lcol">
								<div class="mb10">
                  <input type="file" height="30" width="120" id="face"/>
									<!--<object id="SWFUpload_0" type="application/x-shockwave-flash" data="swfupload.swf" class="swfupload" height="34" width="202">-->
										<!--<param name="wmode" value="window">-->
										<!--<param name="movie" value="http://i.jd.com/commons/swfupload.swf?preventswfcaching=1437633987255">-->
										<!--<param name="quality" value="high">-->
										<!--<param name="menu" value="false">-->
										<!--<param name="allowScriptAccess" value="always">-->
										<!--<param name="flashvars" value="movieName=SWFUpload_0&amp;uploadURL=http%3A%2F%2Fi.jd.com%2Fuser%2Fupload%2Fimage.action&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=0&amp;params=flashuploadimg%3DBFAB03D791061154B121A84D3E0557DD4766D6FD599470F894091D73FEDE440BA4240B09D3802E96A51F5548B0E43FFE0331E50EB826EFEF19271BFA4FD4172BD76E0BCFB6244833A3AE952AD8A91A25CE6C8729AFDE598B5E31791FAD8D6CA824F103EF099FDDCA561D5FB0BEA11F1DF3893D668A7FCFD688F6BBF38C0DAC769682873A5B507A6621E11F2E272ACEA9&amp;filePostName=file&amp;fileTypes=*.jpg%3B*.gif%3B*.png%3B*.jpeg%3B*.bmp&amp;fileTypesDescription=img&amp;fileSizeLimit=4%20MB&amp;fileUploadLimit=0&amp;fileQueueLimit=0&amp;debugEnabled=false&amp;buttonImageURL=http%3A%2F%2Fi.jd.com%2Fimages%2Fperfect_bg.jpg&amp;buttonWidth=202&amp;buttonHeight=34&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-100&amp;buttonDisabled=false&amp;buttonCursor=-1">-->
                  <!--</object>-->
									<img id="loading" class="float:left" src="/shop_jd/Home/Public/images/loading.gif" style="display: none;">
									<div id="messages" style="border: 1px solid rgb(219, 154, 154); background-color: rgb(255, 232, 232); color: rgb(204, 0, 0); text-align: left; display: none;"></div>
									<input id="btnCancel" type="hidden">
									<div class="ftx03">仅支持JPG、GIF、PNG、JPEG、BMP格式，文件小于4M</div>
								</div>
								<div class="img-b-cont img-cont ">
									<!--<div class="tip">编辑预览区</div>
								-->
								<div class="img-b">
									<img src="<?php echo ($pic); ?>" id="bigImage" name="bigImage" alt="" height="150" width="150"></div>
							</div>
							<!--<div class="smt">-->
								<!--<h3>推荐头像</h3>-->
							<!--</div>-->
							<!--<div class="smc face-list">-->
								<!--<ul class="imgUl" clstag="homepage|keycount|home2013|infoshowtx2">-->
									<!--<li value="1">-->
										<!--<img src="/shop_jd/Home/Public/images/1.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="2">-->
										<!--<img src="/shop_jd/Home/Public/images/2.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="3">-->
										<!--<img src="/shop_jd/Home/Public/images/3.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="4">-->
										<!--<img src="/shop_jd/Home/Public/images/4.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="5">-->
										<!--<img src="/shop_jd/Home/Public/images/5.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="6">-->
										<!--<img src="/shop_jd/Home/Public/images/6.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="7">-->
										<!--<img src="/shop_jd/Home/Public/images/7.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="8">-->
										<!--<img src="/shop_jd/Home/Public/images/8.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="9">-->
										<!--<img src="/shop_jd/Home/Public/images/9.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="10">-->
										<!--<img src="/shop_jd/Home/Public/images/10.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="11">-->
										<!--<img src="/shop_jd/Home/Public/images/11.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="12">-->
										<!--<img src="/shop_jd/Home/Public/images/12.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="13">-->
										<!--<img src="/shop_jd/Home/Public/images/13.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="14">-->
										<!--<img src="/shop_jd/Home/Public/images/14.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="15">-->
										<!--<img src="/shop_jd/Home/Public/images/15.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
									<!--<li value="16">-->
										<!--<img src="/shop_jd/Home/Public/images/16.jpg" alt="" height="50" width="50">-->
										<!--<b></b>-->
									<!--</li>-->
								<!--</ul>-->
								<!--<div class="btns mt20">-->
									<!--<a clstag="homepage|keycount|home2013|infoshowbtn" href="javascript:void(0)" class="btn-5 mr10" onclick="uploadDefaultImg()">保存</a>-->
								<!--</div>-->
							<!--</div>-->
						</div>
						<div class="update-rcol">
							<div class="smt">
								<h3>效果预览</h3>
							</div>
							<div class="smc">
								你上传的图片会自动生成2种尺寸，请注意小尺寸的头像是否清晰
								<div class="img-m-cont img-cont">
									<div class="img-s">
										<img id="midImage" name="midImage" src="<?php echo ($med); ?>"></div>
								</div>
								100*100像素
								<div class="img-s-cont img-cont">
									<div class="img-s">
										<img id="smaImage" name="smaImage" src="<?php echo ($min); ?>"></div>
								</div>
								50*50像素
							</div>
						</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--container end-->

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

<!--main-->
</body>
</html>
<!--头像上传-->
<script>
    $('#face').uploadify({
      swf:'/shop_jd/Public/uploadify/uploadify.swf',//载入uploadify插件
      uploader: "/index.php/Home/Member/actionImg", //上传处理地址
      width: 120,
      height:30,
      buttonImage:"/shop_jd/Public/uploadify/browse-btn.png",
      fileTypeDesc: 'Image File', //允许上传文件类型
      fileTypeExts: '*.jpeg;*.jpg;*.png;*.gif;*.bmp',//允许选择的文件类型
      formData:{'session_id' : "<?php echo ($_SESSION['login_info']['uid']); ?>"},//把UID传到后台
      onUploadSuccess:function(file,data,response) {//上传的文件名、返回信息
        if (data == 2) {
          alert('上传错误');
        }else{
          alert('上传成功');
          window.location.href = "/index.php/Home/Member/showImg/uid/<?php echo ($_SESSION['login_info']['uid']); ?>";
        }
      }
    });
</script>