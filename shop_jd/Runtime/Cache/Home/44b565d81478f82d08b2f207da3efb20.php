<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>账户信息</title>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/personal.css" media="all">
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/common.css" media="all">
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
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
          <?php if($pic): ?><img src="$pic" alt="用户自定义头像" class="pic"/>
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
      <li class="memBox">
        <a href="" class="member">京东会员</a>
      </li>
      <li class="separate"></li>
      <li class="comBox">
        <a href="" class="company">企业采购</a>
      </li>
      <li class="separate"></li>
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
          <li><a href="">帮助中心</a></li>
          <li><a href="">售后服务</a></li>
          <li><a href="">在线客服</a></li>
          <li><a href="">意见建议</a></li>
          <li><a href="">客服邮箱</a></li>
        </ul>
      </li>
      <li class="separate"></li>
      <li class="navBox">
        <p class="navigation">网站导航</p>
        <i class="ci-right">
          <s>◇</s>
        </i>
        <div class="up"></div>
        <div class="line"></div>
        <div class="contents">
          <div class="fore1">
            <h3>特色主题</h3>
            <div class="clear"></div>
            <ul>
              <li><a href="">品牌街</a></li>
              <li><a href="">今日炒底</a></li>
              <li><a href="">好东西</a></li>
              <li><a href="">京东预售</a></li>
              <li><a href="">尖er货</a></li>
              <li><a href="">京东首发</a></li>
              <li><a href="">今日团购</a></li>
              <li><a href="">优惠券</a></li>
              <li><a href="">闪购</a></li>
              <li><a href="">京东会员</a></li>
              <li><a href="">京东京选</a></li>
              <li><a href="">定期送</a></li>
              <li><a href="">装机大师</a></li>
              <li><a href="">搭配购</a></li>
              <li><a href="">京东试用</a></li>
              <li><a href="">礼品购</a></li>
              <li><a href="">智能馆</a></li>
              <li><a href="">玩bigger</a></li>
              <li><a href="">大牌免息</a></li>
              <li><a href="">北京老字号</a></li>
            </ul>
          </div>
          <div class="separate"></div>
          <div class="fore2">
            <h3>行业频道</h3>
            <div class="clear"></div>
            <ul>
              <li><a href="">服装城</a></li>
              <li><a href="">家用电器</a></li>
              <li><a href="">电脑办公</a></li>
              <li><a href="">手机</a></li>
              <li><a href="">美妆馆</a></li>
              <li><a href="">食品</a></li>
              <li><a href="">数码</a></li>
              <li><a href="">母婴</a></li>
              <li><a href="">家装城</a></li>
              <li><a href="">运动户外</a></li>
              <li><a href="">整车</a></li>
              <li><a href="">图书</a></li>
            </ul>
          </div>
          <div class="separate"></div>
          <div class="fore2">
            <h3>生活服务</h3>
            <div class="clear"></div>
            <ul>
              <li>京东凑众</li>
              <li>白条</li>
              <li>京东钱包</li>
              <li>京东小金库</li>
              <li>理财</li>
              <li>话费</li>
              <li>旅行</li>
              <li>彩票</li>
              <li>游戏</li>
              <li>机票</li>
              <li>电影票</li>
              <li>水电费</li>
              <li>京东到家</li>
            </ul>
          </div>
          <div class="separate"></div>
          <div class="fore2">
            <h3>生活服务</h3>
            <div class="clear"></div>
            <ul class="fore2">
              <li>京东社区</li>
              <li>京东通信</li>
              <li>在线读书</li>
              <li>京东E卡</li>
              <li>智能社区</li>
              <li>游戏社区</li>
              <li>京友邦</li>
              <li>卖家入驻</li>
              <li>企业采购</li>
              <li>服务市场</li>
              <li>乡村招募</li>
              <li>校园加盟</li>
              <li>办公生活馆</li>
              <li>知识产权维权</li>
              <li>English Site</li>
            </ul>
          </div>
        </div>
      </li>
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
								<a tid="_MYJD_recor" clstag="Homeedm" href="http://usergrade.jd.com/user/consume" target="_self">
									<span>消费记录</span>
								</a>
							</div>
						</div>
					</li>
					<li class="fore-4">
						<div class="dl myjd-info" clstag="click|keycount|myhome|hsq">
							<div class="dt ">
								<span>
									社区
									<i>1</i>
								</span> <b></b>
							</div>
							<div class="dd">
								<a tid="_MYJD_joy" clstag="Homemsg" href="http://joycenter.jd.com/" target="_self">
									<span>
										消息精灵
										<b>(1)</b>
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
					<ul style="display: none;" id="shelper" class="hide"></ul>
					<div class="form">
						<input value="冷风扇" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" type="text">
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
						<i class="ci-count" id="shopping-amount">2</i>
						<a target="_top" href="http://cart.jd.com/cart/cart.html">我的购物车</a>
					</div>
					<div class="dorpdown-layer">
						<div class="spacer"></div>
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
											<span class="p-price"> <strong>￥899.00</strong>
												×1
											</span>
											<br>
											<a class="delete" data-id="1499247677" data-type="RemoveProduct" href="javascript:void(0)">删除</a>
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
											<span class="p-price"> <strong>￥99.00</strong>
												×1
											</span>
											<br>
											<a class="delete" data-id="1153740|183830361" data-type="RemoveSuit" href="#delete">删除</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="smb ar">
								<div class="p-total">
									共
									<b>2</b>
									件商品　共计
									<strong>￥ 998.00</strong>
								</div>
								<a href="http://cart.jd.com/cart/cart.html?r=1437188916939" title="去购物车" id="btn-payforgoods">去购物车</a>
							</div>
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
									<a class="curr" href="http://i.jd.com/user/info">基本信息</a>
								</li>
								<li class="fore-2">
									<a href="http://i.jd.com/user/userinfo/showImg.html">头像照片</a>
								</li>
								<li class="fore-3">
									<a href="http://i.jd.com/user/userinfo/more.html">更多个人信息</a>
								</li>

							</ul>
						</div>
						<div class="mc">
							<div class="user-set userset-lcol">
								<div class="form">
									<div class="item">
										<span class="label"> <em>*</em>
											昵称：
										</span>
										<div class="fl">
											<input clstag="homepage|keycount|home2013|infoname" class="itxt" maxlength="20" id="nickName" name="userVo.nickName" value="<?php echo ($info['sname']); ?>" type="text">
											<div class="clr"></div>
											<div class="prompt-06">
												<span id="nickName_msg"></span>
											</div>
										</div>
									</div>
									<div class="item">
										<span class="label">
											<em>*</em>
											性别：
										</span>
										<div class="fl" clstag="homepage|keycount|home2013|infoGender">
											<input name="sex" class="jdradio" value="0" type="radio" <?php if($info['sex']=='1'){echo "checked='checked'";} ?>>
											<label class="mr10">男</label>
											<input name="sex" class="jdradio" value="1" type="radio"  <?php if($info['sex']=='0'){echo "checked='checked'";} ?>>
											<label class="mr10">女</label>
											<input name="sex" class="jdradio" value="2" type="radio" <?php if($info['sex']=='2'){echo "checked='checked'";} ?>>
											<label class="mr10" >保密</label>
										</div>
									</div>
									<div class="item" clstag="homepage|keycount|home2013|infoBirthday">
										<span class="label">生日：</span>
										<div class="fl birthday-info">
											<select name="" class="selt selt1" id="birthdayYear">
												<option value="0" disabled="" selected="selected">请选择：</option>
												<option value="2015">2015</option>
												<option value="2014">2014</option>
												<option value="2013">2013</option>
												<option value="2012">2012</option>
												<option value="2011">2011</option>
												<option value="2010">2010</option>
												<option value="00后">00后</option>
												<option value="2009">2009</option>
												<option value="2008">2008</option>
												<option value="2007">2007</option>
												<option value="2006">2006</option>
												<option value="2005">2005</option>
												<option value="2004">2004</option>
												<option value="2003">2003</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
												<option value="90后">90后</option>
												<option value="1999">1999</option>
												<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996">1996</option>
												<option value="1995">1995</option>
												<option value="1994">1994</option>
												<option value="1993">1993</option>
												<option value="1992">1992</option>
												<option value="1991">1991</option>
												<option value="1990">1990</option>
												<option value="80后">80后</option>
												<option value="1989">1989</option>
												<option value="1988">1988</option>
												<option value="1987">1987</option>
												<option value="1986">1986</option>
												<option value="1985">1985</option>
												<option value="1984">1984</option>
												<option value="1983">1983</option>
												<option value="1982">1982</option>
												<option value="1981">1981</option>
												<option value="1980">1980</option>
												<option value="70后">70后</option>
												<option value="1979">1979</option>
												<option value="1978">1978</option>
												<option value="1977">1977</option>
												<option value="1976">1976</option>
												<option value="1975">1975</option>
												<option value="1974">1974</option>
												<option value="1973">1973</option>
												<option value="1972">1972</option>
												<option value="1971">1971</option>
												<option value="1970">1970</option>
												<option value="60后">60后</option>
												<option value="1969">1969</option>
												<option value="1968">1968</option>
												<option value="1967">1967</option>
												<option value="1966">1966</option>
												<option value="1965">1965</option>
												<option value="1964">1964</option>
												<option value="1963">1963</option>
												<option value="1962">1962</option>
												<option value="1961">1961</option>
												<option value="1960">1960</option>
												<option value="50后">50后</option>
												<option value="1959">1959</option>
												<option value="1958">1958</option>
												<option value="1957">1957</option>
												<option value="1956">1956</option>
												<option value="1955">1955</option>
												<option value="1954">1954</option>
												<option value="1953">1953</option>
												<option value="1952">1952</option>
												<option value="1951">1951</option>
												<option value="1950">1950</option>
												<option value="40后">40后</option>
												<option value="1949">1949</option>
												<option value="1948">1948</option>
												<option value="1947">1947</option>
												<option value="1946">1946</option>
												<option value="1945">1945</option>
												<option value="1944">1944</option>
												<option value="1943">1943</option>
												<option value="1942">1942</option>
												<option value="1941">1941</option>
												<option value="1940">1940</option>
												<option value="30后">30后</option>
												<option value="1939">1939</option>
												<option value="1938">1938</option>
												<option value="1937">1937</option>
												<option value="1936">1936</option>
												<option value="1935">1935</option>
												<option value="1934">1934</option>
												<option value="1933">1933</option>
												<option value="1932">1932</option>
												<option value="1931">1931</option>
												<option value="1930">1930</option>
											</select>
											<label class="ml5 mr5">年</label>
											<select name="" class="selt selt1" id="birthdayMonth">
												<option value="0" disabled="" selected="selected">请选择：</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<label class="ml5 mr5">月</label>
											<select name="" class="selt selt1" id="birthdayDay">
												<option value="0" disabled="" selected="selected">请选择：</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
											</select>
											<label class="ml5 mr5">日</label>
											<span class="ftx03">填生日有惊喜哦~</span>
										</div>
									</div>

									<div class="item">
										<span class="label">兴趣爱好：</span>
										<div class="fl interest-list">
											<p>请选择您感兴趣的分类，给您最精准的推荐</p>
											<ul class="hobul" clstag="homepage|keycount|home2013|infoInterest">
                        <?php if(is_array($hobulArr)): $i = 0; $__LIST__ = $hobulArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li <?php if(in_array($data['hobul_value'],$usrhobulArr)): ?>class='selected'<?php else: ?>class=''<?php endif; ?> name="hobbyType" value="<?php echo ($data["hobul_value"]); ?>">
                            <?php echo ($data["hobul_name"]); ?>
                            <s></s>
                          </li><?php endforeach; endif; else: echo "" ;endif; ?>

											</ul>
										</div>
									</div>
									<div class="item">
										<span class="label">邮箱：</span>
										<div class="fl" clstag="homepage|keycount|home2013|infomail">
											<div>
												<strong></strong>
												<s id="email_orderly"></s>
												&nbsp;&nbsp;&nbsp;
												<a href="http://safe.jd.com/validate/verifyMail" class="ml5 ftx05">
													<s></s>
													立即验证
												</a>

											</div>
											<div class="clr"></div>
											<div class="prompt-06">
												<span id="email_msg"></span>
											</div>
										</div>

										<div class="clr"></div>
									</div>

									<div class="item">
										<span class="label">
											<em>*</em>
											真实姓名：
										</span>
										<div class="fl">
											<input clstag="homepage|keycount|home2013|infoname2" class="itxt" maxlength="20" name="userVo.realName" id="realName" value="<?php echo ($info['name']); ?>" type="text">
											<div class="clr"></div>
											<div class="prompt-06">
												<span id="realName_msg"></span>
											</div>
										</div>
									</div>

									<div class="item">
										<span class="label">&nbsp;</span>
										<div class="fl">
											<input clstag="homepage|keycount|home2013|infoadd" class="itxt itxt1" name="userVo.address" id="address" value="" type="text">
											<div class="clr"></div>
											<div class="prompt-06">
												<span id="address_msg"></span>
											</div>
										</div>
									</div>
									<div class="item">
										<span class="label">&nbsp;</span>
										<div class="fl">
											<input id="code" value="964921" style="display: none;">
											<input id="rkey" value="736e6f5f315f67657455736572496e666f31383832303134373736305f70393634393231" style="display: none;">
											<a clstag="homepage|keycount|home2013|infobtn" href="javascript:void(0)" class="btn-5">提交</a>
										</div>
									</div>
								</div>
							</div>
							<div id="user-info">
								<div class="u-pic">
									<img alt="用户头像" src="/shop_jd/Home/Public/images/31383832303134373736305f7031343336353738373733333838_mid.jpg">
									<div class="mask"></div>
									<div class="face-link-box"></div>
									<a href="http://i.jd.com/user/userinfo/showImg.html" class="face-link">修改头像</a>
								</div>
								<div class="info-m">
									<div>
										<b><?php echo ($_SESSION['login_info']['user_name']); ?></b>
									</div>
									<div class="u-level">
										<span class="rank r2">
											<s></s>
                     <?php if($account['points']){ switch($account['points']){ case $account['points']<100: echo '<a href="#" target="_top">铜牌会员</a>'; break; case $account['points']<500: echo '<a href="#" target="_top">银牌会员</a>'; break; case $account['points']<1000: echo '<a href="#" target="_top">金牌会员</a>'; break; default; echo '<a href="#" target="_top">金牌会员</a>'; break; } }else{ echo '<a href="http://usergrade.jd.com/user/grade" target="_top">灵魂会员</a>'; } ?>
										</span>
									</div>
									<div class="shop-level">
										购物行为评级：
										<span>
											<a target="_top" href="http://vip.jd.com/help_behaviorRating.html">
                        <?php if($account['points']){ switch($account['points']){ case $account['points']<100: echo '<s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s>'; break; case $account['points']<500: echo '<s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s>'; break; case $account['points']<1000: echo '<s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s>'; break; default; echo '<s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s><s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s>'; break; } }else{ echo '<s id="userCredit" class="rank-sh rank-sh01 rank-sh04"></s>'; } ?>
											</a>
										</span>
									</div>
                  <?php if($account['level']==1): ?><div>会员类型：个人用户</div>
                    <?php elseif($account['level']==2): ?>
                      <div>会员类型：京东会员</div><?php endif; ?>
								</div>
							</div>
							<div class="fr ac" style="width: 280px;">
								注：修改手机和邮箱请到
								<a clstag="homepage|keycount|home2013|infopay" class="ml5 ftx05" href="http://safe.jd.com/user/paymentpassword/safetyCenter.action">账户安全</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--container end-->

	<!--main-->
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

	<!--
<script type="text/javascript" src="http://i.jd.com/js/updatePetName.js"></script>
-->
</body>
</html>
<script>
    function checkSname($str){//检测呢称
      var reg = /^[\u4E00-\u9FA5\uF900-\uFA2D\w-]{4,20}$/ig;
      return reg.test($str);
    }
    $(function(){
      //自动根据数据库选择生日
      var birthdayYear = <?php echo ($birthArr[0]); ?>; //年
      var birthdayMonth = <?php echo ($birthArr[1]); ?>;//月
      var birthdayDay = <?php echo ($birthArr[2]); ?>;//日
      var error = 1;
      $('#birthdayYear').children('option').each(function(i){
          if(this.value==birthdayYear){
              this.selected='selected';
          }
      });
      $('#birthdayMonth').children('option').each(function(i){
        if(this.value==birthdayMonth){
          this.selected='selected';
        }
      });
      $('#birthdayDay').children('option').each(function(i){
        if(this.value==birthdayDay){
          this.selected='selected';
        }
      });

      //表单判断
      $('#nickName').focus(function () {
        $(this).attr('class','itxt');
        $('#nickName_msg').parent('div').attr('class','prompt-06').end().show().text('4-20位字符,可全部由字母组成，或数字、字母、下划线');
      });
      $('#nickName').blur(function () {
        var $val = $(this).val();
        if($val.length>0){ //有输入值
          if(!checkSname($val)){//不符合长度、字符规则
            $(this).attr('class','itxt itxt-error');
            $('#nickName_msg').parent('div').attr('class','prompt-error').end().show().text('4-20位字符,可由中英文、数字、字母、下划线');
          }else{//符合长度、字符规则
            $(this).attr('class','itxt itxt-succ');
            $('#nickName_msg').parent('div').attr('class','prompt-06').end().text('').hide();
            error = 0;
          }
        }else{//没有输入值
          $(this).attr('class','itxt itxt-error');
          $('#nickName_msg').parent('div').attr('class','prompt-error').end().show().text('请输入昵称');
        }
      })
    })

</script>