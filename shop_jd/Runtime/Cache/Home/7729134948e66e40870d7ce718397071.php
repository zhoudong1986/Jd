<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>京东网上商城-综合网购首选（JD.COM）-正品低价、品质保障、货到付款、配送及时、放心服务、轻松购物！</title>
  <link rel="stylesheet" href="/shop_jd/Home/Public/css/index.css"/>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/common.js"></script>
  <script language="JavaScript" src="/shop_jd/Home/Public/js/index.js"></script>
</head>
<body>
  <!--引入头部-->
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
  <div id="banner">
    <a href=""><img src="/shop_jd/Home/Public/images/559a55b1Nba5cc052.jpg" alt=""/></a>
    <i></i>
  </div>
  <!-- logo 搜索框以及导航部分-->
  <div id="box">
    <div class="w">
      <!-- Logo -->
      <div class="logo">
        <a href=""><img src="/shop_jd/Home/Public/images/logo-201305.png" alt=""/></a>
      </div>
      <!-- 搜索框-->
      <div class="search">
        <input type="text" class="con" value="魅蓝note2"/>
        <button>搜索</button>
        <div class="hotwords">
          <a href="" class="fore0">分期购</a>
          <a href="">UP3手环</a>
          <a href="">清凉节</a>
          <a href="">600元券</a>
          <a href="">眼镜大促</a>
          <a href="">荣耀7</a>
          <a href="">暑期阅读</a>
          <a href="">搏出4999</a>
          <a href="">秒杀1元</a>
        </div>
      </div>
      <!-- 我的购物车 -->
      <div class="myCarBox">
        <div class="content">
          <a href="">我的购物车</a>
          <i class="nums">0</i>
          <i class="ci-right">></i>
          <div class="line"></div>
          <div class="under">
            <p class="none">购物车中还没有商品，赶紧选购吧！</p>
            <p class="head">最新加入的商品</p>
            <ul class="lists">
              <li>
                <div class="left"><img src="/shop_jd/Home/Public/images/5584fec1Ndffff235.jpg" alt=""/></div>
                <div class="center"><a href="" target="_blank">耐克Nike Air Max90限量款女子气垫跑鞋724882 345017 443817 树莓红443817-600  37.5码/5Y</a></div>
                <div class="right"><p class="price"><strong>￥899.00</strong>×<span>1</span></p><a href="">删除</a></div>
              </li>
              <li class="present">
                <p class="zeng">满赠</p>
                <p class="center">已购满<span>4599</span>元，您可令赠品</p>
                <p class="count">小计：￥899.00</p>
              </li>
              <li>
                <div class="left"><img src="/shop_jd/Home/Public/images/53a4097cN8308d4ec.jpg" alt=""/></div>
                <div class="center"><a href="" target="_blank">耐克Nike Air Max90限量款女子气垫跑鞋724882 345017 443817 树莓红443817-600  37.5码/5Y</a></div>
                <div class="right"><p class="price"><strong>￥899.00</strong>×<span>1</span></p><a href="">删除</a></div>
              </li>
              <li class="payment">
                <p class="content">共<b>2</b>件商品  共计<strong>￥ 998.00</strong></p>
                <button>去购物车</button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 导航条 -->
      <div id="navBox">
        <div class="nav">
          <div class="classify">
            <a href="" class="class">全部商品分类</a>
          </div>
          <ul class="navitems">
            <li><a href="">服装城</a></li>
            <li><a href="">美妆馆</a></li>
            <li><a href="">美食</a></li>
            <li><a href="">全球购</a></li>
            <li><a href="">闪购</a></li>
            <li><a href="">团购</a></li>
            <li><a href="">夺宝岛</a></li>
            <li><a href="">金融</a></li>
            <li><a href="">智能</a></li>
          </ul>
          <div class="banner"><a href=""><img src="/shop_jd/Home/Public/images/55963e07N1ca627c1.jpg" alt=""/></a></div>
        </div>
      </div>
    </div>
    <div id="ddBox">
      <div class="class">
        <div class="dd-inner">
          <div class="item fore1">
            <h3><a href="">家用电器</a></h3>
            <i>></i>
          </div>
          <div class="item fore2">
            <h3><a href="">手机、数码、京东通信</a></h3>
            <i>></i>
          </div>
          <div class="item fore3">
            <h3><a href="">电脑、办公</a></h3>
            <i>></i>
          </div>
          <div class="item fore4">
            <h3><a href="">家居、家具、家装、厨具</a></h3>
            <i>></i>
          </div>
          <div class="item fore6">
            <h3><a href="">男装、女装、内衣、珠宝</a></h3>
            <i>></i>
          </div>
          <div class="item fore7">
            <h3><a href="">个护化妆</a></h3>
            <i>></i>
          </div>
          <div class="item fore8">
            <h3><a href="">鞋靴、箱包、钟表、奢侈品</a></h3>
            <i>></i>
          </div>
          <div class="item fore9">
            <h3><a href="">运动户外</a></h3>
            <i>></i>
          </div>
          <div class="item fore10">
            <h3><a href="">汽车、汽车用品</a></h3>
            <i>></i>
          </div>
          <div class="item fore11">
            <h3><a href="">母婴、玩具乐器</a></h3>
            <i>></i>
          </div>
          <div class="item fore12">
            <h3><a href="">食品、酒类、生鲜、特产</a></h3>
            <i>></i>
          </div>
          <div class="item fore13">
            <h3><a href="">营养保健</a></h3>
            <i>></i>
          </div>
          <div class="item fore14">
            <h3><a href="">图书、音像、数字商品</a></h3>
            <i>></i>
          </div>
          <div class="item fore15">
            <h3><a href="">彩票、旅行、充值、票务</a></h3>
            <i>></i>
          </div>
          <div class="item fore16">
            <h3><a href="">理财、众筹、白条、保险</a></h3>
            <i>></i>
          </div>
        </div>
        <!-- 二级菜单 -->
        <div class="dorpdown-layer">
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">品牌日<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">手机频道<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">本周热卖<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">家装城<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">男装<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">美妆商城<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">美妆商城<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">男鞋<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">运动城<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">全新汽车<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">母婴<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">食品饮料<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">保健食品<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">图书频道<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">充值缴费<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
          <div class="item-sub">
            <div class="item-brands">
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img11.360buyimg.com/vclist/jfs/t745/301/749830018/3039/9c96d09e/54d9eef9N5bb8d27f.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
              <a href=""><img src="http://img10.360buyimg.com/vclist/jfs/t832/286/5445725/2411/8aae93c1/54d9eeeeN993b74f4.jpg" alt=""/></a>
            </div>
            <div class="item-channels">
              <a href="">金融首页<i>></i></a>
              <a href="">品牌日<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">智能生活馆<i>></i></a>
              <a href="">值得买精选<i>></i></a>
            </div>
            <div class="subitems">
              <dl class="fore1">
                <dt><a href="#">大家电<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore2">
                <dt><a href="#">生活电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore3">
                <dt><a href="#">厨房电器<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore4">
                <dt><a href="#">五金家装<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
              <dl class="fore5">
                <dt><a href="#">个人护康<i>></i></a></dt>
                <dd>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">平板电视</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                  <a href="#">烟机/灶具</a>
                </dd>
              </dl>
            </div>
            <div class="item-promotions">
              <a href=""><img src="/shop_jd/Home/Public/images/559899a3N5271c3d3.jpg" width="168" height="134"></a>
              <a href=""><img src="/shop_jd/Home/Public/images/5599fa58N0cdd3ad1.jpg" width="168" height="134"/></a>
            </div>
          </div>
        </div>
      </div>
      <!-- 轮换窗 -->
      <div class="turnBox">
        <div class="imgsBox">
          <a href="" class='imgsA'><img src="/shop_jd/Home/Public/images/1.jpg" alt=""/></a>
          <a href="" class="imgsA"><img src="/shop_jd/Home/Public/images/2.jpg" alt=""/></a>
          <a href="" class='imgsA'><img src="/shop_jd/Home/Public/images/3.jpg" alt=""/></a>
          <a href="" class='imgsA'><img src="/shop_jd/Home/Public/images/4.jpg" alt=""/></a>
          <a href="" class='imgsA'><img src="/shop_jd/Home/Public/images/5.jpg" alt=""/></a>
          <a href="" class='imgsA'><img src="/shop_jd/Home/Public/images/6.jpg" alt=""/></a>
        </div>
        <ul class="indexBox">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
        </ul>
        <div class="peak">
          <div class="left" style="float: left"><</div>
          <div class="right" style='float: right'>></div>
        </div>
      </div>
      <!-- 右边的公告和生活服务 -->
      <div class="rightBox">
        <div class="news">
          <div class="mt">
            <h2>京东快报</h2>
            <div class="extra">
              <a target="_blank" href="#">更多 &gt;</a>
            </div>
          </div>
          <div class="mc">
            <ul>
              <li><a target="_blank" href="#"><span>[特惠]</span>第五届京东清凉节</a></li>
              <li><a target="_blank" href="#"><span>[特惠]</span>第五届京东清凉节</a></li>
              <li><a target="_blank" href="#"><span>[特惠]</span>第五届京东清凉节</a></li>
              <li><a target="_blank" href="#"><span>[公告]</span>京东微联超级APP场景化升级</a></li>
            </ul>
          </div>
        </div>
        <div class="lifeserv">
          <div class="mt">
            <h2>生活服务</h2>
            <div class="extra"></div>
          </div>
          <div class="mc">
            <ul class="lifeserv-current">
              <li class="fore1 current">
                <a href="" style="padding-top:0px;"><i></i><span>话费</span></a>
              </li>
              <li class="fore2">
                <a href="" style="padding-top:0px;"><i></i><span>机票</span></a>
              </li>
              <li class="fore3">
                <a href="" style="padding-top:0px;"><i></i><span>电影票</span></a>
              </li>
              <li class="fore4">
                <a href="" style="padding-top:0px;"><i></i><span>游戏</span></a>
              </li>
            </ul>
          </div>
          <div class="mc-inner">
            <a class="close">×</a>
            <ul class="tab-iframe">
              <li class='tab-item-selected'><a href="">话费充值</a></li>
              <li class="tab-item"><a href="">话费充值</a></li>
            </ul>
            <div class="content-iframe">
              <dl class="form-top">
                <dt>
                  <label for="rechargeNum">号码</label>
                </dt>
                <dd id="rechargeNum">
                  <input type="text" class="input-phone" value="请输入手机号码"/>
                  <s class="icon-right"></s>
                </dd>
                <dd class="msg-wrap">
                  <span class="msg-error">号码不正确</span>
                </dd>
              </dl>
              <dl class="form-bottom">
                <dt>
                  <label for="">面值</label>
                </dt>
                <dd id="rechargeNum">
                  <select name="" id="select-price-money" class='select-price-money'>
                    <option value="10">10元</option>
                    <option value="30">30元</option>
                    <option value="50">50元</option>
                    <option value="100" selected="selected">100元</option>
                    <option value="200">200元</option>
                    <option value="300">300元</option>
                  </select>
                </dd>
                <dd>
                  <span class="msg-price" id="priceRecharge">￥9.0-￥10</span>
                  <span class="msg-price" id="priceRecharge">￥29.0-￥30.0</span>
                  <span class="msg-price" id="priceRecharge">￥48.0-￥50.0</span>
                  <span class="msg-price hover" id="priceRecharge">￥98.0-￥100.0</span>
                  <span class="msg-price" id="priceRecharge">￥198.0-￥200.0</span>
                  <span class="msg-price" id="priceRecharge">￥298.0-￥300.0</span>
                </dd>
              </dl>
              <div class="btn-wrap">
                <input type="text" class='btn-submit' value="快速充值"/>
                <p class="link-ad">
                  <a href="#" target="_blank"><s class="icon-hot"></s> 电信校园优惠购机</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--定位框-->
  <div id="wBox">
    <!--今日推荐-->
    <div class="rec">
      <div class="inner">
        <!--今日推荐小钟-->
        <div class="mt">
          <div class="jd-clock-wrap">
            <div class="jd-clock"></div>
          </div>
        </div>
        <!--今日推荐小钟-->
        <!--右边商品部分-->
        <div class="rightBox">
          <ul class="slider-main">
            <li class="fore1">
              <div class="fore1">
                <a href="" target="_blank">
                  <img src="/shop_jd/Home/Public/images/559ce147N436d7816.jpg" width="250" height="164" alt=""/>
                </a>
              </div>
              <div class="fore2">
                <a href="" target="_blank">
                  <img src="/shop_jd/Home/Public/images/559ce147N436d7816.jpg" width="250" height="164" alt=""/>
                </a>
              </div>
              <div class="fore3">
                <a href="" target="_blank">
                  <img src="/shop_jd/Home/Public/images/559ce147N436d7816.jpg" width="250" height="164" alt=""/>
                </a>
              </div>
              <div class="fore4">
                <a href="" target="_blank">
                  <img src="/shop_jd/Home/Public/images/559ce147N436d7816.jpg" width="250" height="164" alt=""/>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--今日推荐结束-->
    <!--猜你喜欢-->
    <div class="guessBox">
      <div class="guessYous">
        <div class="mt">
          <h2>猜你喜欢</h2>
          <a href="javascript:;" class="extra">换一批</a>
        </div>
        <div class="mc">
          <div class="spacer"><i></i></div>
          <ul>
            <li class="fore1">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
            <li class="fore2">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
            <li class="fore3">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
            <li class="fore4">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
            <li class="fore5">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
            <li class="fore6">
              <div class="p-img">
                <a href="">
                  <img src="/shop_jd/Home/Public/images/rBEhVVL113YIAAAAAAGclirin4YAAIcCQBGg34AAZyu686.jpg" alt=""/>
                </a>
              </div>
              <div class="p-info">
                <div class="p-name">
                  <a href="">美国SPORTSTAR仕博达 户外精英II 多功能户外运动手表 登山军迷 罗盘高度温度计 背光防水 黑色</a>
                </div>
                <div class="p-price">
                  <i>¥</i>580.00
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--猜你喜欢结束-->

     <!--京东特色-->
    <div id="jdtBox">
          <h2>京东特色购</h2>
          <div class="hs-content">
            <div class="hs-content-left">
              <a href="#" target="_top" class="hs-item" >
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="">奢品馆</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">浪琴品牌专场 全场低至5.5折</p>
                <img src="/shop_jd/Home/Public/images/55a37ea5nfa9d6e3e.jpg" height="200" width="201">
              </a>
              <a href="#" target="_top" class="hs-item">
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="">奢品馆</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">运动大牌低至1折起 跑鞋59元抢</p>
                <img src="/shop_jd/Home/Public/images/55a47ccbn550245b0.jpg" height="200" width="201">
              </a>
            </div>
            <div class="hs-content-center">
              <a class="hs-item hs-item-main" href="#" target="_top">
                <div>
                  <p class="hs-m-tit">果粉福利日</p>
                  <p class="hs-m-subtit">iPad 3G版低至1699</p>
                  <span class="hs-m-button">品牌街 &gt;</span>
                </div>
                <img src="/shop_jd/Home/Public/images/55a37852na411ea29.jpg" height="200" width="403">
              </a>
              <div class="under">
                <a href="http://pinpaijie.jd.com/International.html" target="_top" class="hs-item">
                  <p class="tit">
                    <span class="zw zwl"></span>
                    <span class="">国际服饰</span>
                    <span class="zw zwr"></span>
                  </p>
                  <p class="sub-tit">ELAND &amp; T.W.全场低至一折</p>
                  <img src="/shop_jd/Home/Public/images/55a365acn42479fec.jpg" height="200" width="201">
                </a>
                <div class="hs-brands">
                  <div class="hs-brands-con">
                    <a href="" class="item " target="_top">
                      <img src="/shop_jd/Home/Public/images/55a46fbcnfb517e40.jpg" height="39" width="100" />
                    </a>
                    <a href="http://mall.jd.com/index-1000004123.html" class="item even" target="_top">
                      <img src="/shop_jd/Home/Public/images/559500adnff8c8378.jpg" height="39" width="100">
                    </a>
                    <a href="#" class="item " target="_top">
                      <img src="/shop_jd/Home/Public/images/559b3ed0nc39f94dd.jpg" height="39" width="100">
                    </a>
                    <a href="#" class="item even" target="_top">
                      <img src="/shop_jd/Home/Public/images/559350a6n827214f3.jpg" height="39" width="100">
                    </a>
                    <a href="http://mall.jd.com/index-17529.html" class="item " target="_top">
                      <img src="/shop_jd/Home/Public/images/558a59cdnba04f631.jpg" height="39" width="100">
                    </a>
                    <a href="http://mall.jd.com/index-60920.html" class="item even" target="_top">
                      <img src="/shop_jd/Home/Public/images/559b4079nbd3f7b42.jpg" height="39" width="100">
                    </a>
                    <a href="http://mall.jd.com/index-121686.html" class="item " target="_top">
                      <img src="/shop_jd/Home/Public/images/55a33075n67b2eae6.jpg" height="39" width="100">
                    </a>
                    <a href="" class="item even" target="_top">
                      <img src="/shop_jd/Home/Public/images/55a34294n442252ba.jpg" height="39" width="100">
                    </a>
                    <a href="http://mall.jd.com/index-103760.html" class="item " target="_top">
                      <img src="/shop_jd/Home/Public/images/558a5aedn0bbf4c5e.png" height="39" width="100">
                    </a>
                    <a href="http://mall.jd.com/index-41378.html" target="_top">
                      <img src="/shop_jd/Home/Public/images/559267bbn54ca9f41.jpg" height="39" width="100">
                    </a>
                  </div>
                </div>
              </div>

            </div>
            <div class="hs-content-right">
              <a href="#" target="_top" class="hs-item hs-item-red">
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="tit-l">趣购</span>
                  <span>好东西</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">数码风暴 9.9元天天抢</p>
                <img src="/shop_jd/Home/Public/images/55a46ed2n2a53f4a9.jpg" height="200" width="200">
              </a>
              <a href="#" target="_top" class="hs-item hs-item-red">
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="tit-l">首发</span>
                  <span>大NEW货</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">小米电视 智能首发</p>
                <img src="/shop_jd/Home/Public/images/55a46ed2n2a53f4a9.jpg" height="200" width="200">
              </a>
              <a href="#" target="_top" class="hs-item hs-item-red">
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="tit-l">首发</span>
                  <span>大NEW货</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">小米电视 智能首发</p>
                <img src="/shop_jd/Home/Public/images/55a46ed2n2a53f4a9.jpg" height="200" width="200">
              </a>
              <a href="#" target="_top" class="hs-item hs-item-red">
                <p class="tit">
                  <span class="zw zwl"></span>
                  <span class="tit-l">首发</span>
                  <span>大NEW货</span>
                  <span class="zw zwr"></span>
                </p>
                <p class="sub-tit">小米电视 智能首发</p>
                <img src="/shop_jd/Home/Public/images/55a46ed2n2a53f4a9.jpg" height="200" width="200">
              </a>
              <div class="hs-item2 hs-item-2row">
                <a href="http://yushou.jd.com/" target="_top" style="border: medium none;" class="hs-item2 hs-item-red">
                  <img src="/shop_jd/Home/Public/images/55a47e4an922f4c60.jpg" height="200" width="200">
                </a>
                <div class="hs-item2 hs-item-more-m">
                  <div class="static-item-more">
                    <ul>
                      <li>
                        <a href="http://yushou.jd.com/shouji.html" target="_top" title="富图宝360度电动自拍">【手机】富图宝<span class="tkw">360度电动自拍</span></a>
                      </li>
                      <li>
                        <a href="#" target="_top">【数码】机械师3799 <span class="tkw">价保一年</span></a>
                      </li>
                      <li>
                        <a href="#" target="_top">【智能】bong 智能手表 <span class="tkw">仅268</span></a>
                      </li>
                      <li>
                        <a href="#" target="_top">【试用】<span class="tkw">竹盐精研卓效牙膏</span>试用</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <a href="http://yushou.jd.com/" target="_top" >
                  <p class="tit">
                    <span class="zw zwl"></span>
                    <span class="tit-l">预售</span>
                    <span>新品抢先</span>
                    <span class="zw zwr"></span>
                  </p>
                  <p class="sub-tit">三星A8抢鲜约 明日公布价格</p>
                </a>
              </div>
            </div>
          </div>
    </div>
    <!--广告条1-->
    <div class="banner_one">
      <a href="" class="fore1" target="_blank" style="display:inline-block;float:left;">
        <img src="/shop_jd/Home/Public/images/55a3832cNf75315fd.jpg" height="125" width="400">
      </a>
      <a href="" class="fore2" target="_blank" style="display:inline-block;float:left;">
        <img src="/shop_jd/Home/Public/images/55a3832cNf75315fd.jpg" height="125" width="400">
      </a>
      <a href="" class="fore3" target="_blank" style="display:inline-block;float:left;">
        <img src="/shop_jd/Home/Public/images/55a3832cNf75315fd.jpg" height="125" width="400">
      </a>
    </div>
    <!--广告条1结束-->

    <!--1F服装鞋包-->
    <div id="clothBox">
          <div class="mt">
            <h2><i>1F</i>服装鞋包</h2>
            <ul class="tab">
              <li class="tab-item tab-selected" style="width: 58px;"><a href="javascript:void(0)">大牌</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">男装</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">女装</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">鞋靴</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">箱包</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">内衣配饰</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">珠宝首饰</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">奢品礼品</a><span>◆</span></li>
              <li class="tab-item"><a href="javascript:void(0)">奢华腕表</a><span style="background: rgb(255, 255, 255);">◆</span></li>
            </ul>
          </div>
          <div class="mc">
            <div class="side">
              <div class="side-inner">
                <div class="banner">
                  <a href="#" target="_blank">
                    <img src="/shop_jd/Home/Public/images/55a3d74dNe8dc4ef8.jpg" width="330" height="475" alt="" >
                  </a>
                </div>
                <ul class="themes">
                  <li class="fore1">
                    <a target="_blank" href="">
                      <i class="icon"></i>
                      <span>男装</span>
                    </a>
                  </li>
                  <li class="fore2">
                    <a target="_blank" href="#">
                      <i class="icon"></i>
                      <span>女装</span>
                    </a>
                  </li>
                  <li class="fore3">
                    <a target="_blank" href="#">
                      <i class="icon"></i>
                      <span>内衣</span>
                    </a>
                  </li>
                  <li class="fore4">
                    <a target="_blank" href="#">
                      <i class="icon"></i>
                      <span>鞋靴</span>
                    </a>
                  </li>
                  <li class="fore5">
                    <a target="_blank" href="#">
                      <i class="icon"></i>
                      <span>箱包</span>
                    </a>
                  </li>
                  <li class="fore6">
                    <a target="_blank" href="#">
                      <i class="icon"></i>
                      <span>奢侈品</span>
                    </a>
                  </li>
                </ul>
                <ul class="words">
                  <li class="fore1">
                    <a href="" target="_blank">
                      <span class="style-red">服装城</span>
                    </a>
                    <a href="" target="_blank">精品男装</a>
                    <a href="" target="_blank">品牌女装</a>
                    <a href="" target="_blank">太阳镜</a>
                    <a href="" target="_blank">时尚女鞋</a>
                    <a href="http://channel.jd.com/mensshoes.html" target="_blank">
                      <span class="style-red">品质男鞋</span>
                    </a>
                    <a href="" target="_blank">舒适内衣</a>
                    <a href="" target="_blank">奢侈品</a>
                  </li>
                  <li class="fore2">
                    <a href="" target="_blank">菩提手串</a>
                    <a href="" target="_blank">
                      <span class="style-red">水晶手链</span>
                    </a>
                    <a href="http://channel.jd.com/womensbag.html" target="_blank">时尚女包</a>
                    <a href="http://channel.jd.com/mensbag.html" target="_blank">精品男包</a>
                    <a href="http://list.jd.com/list.html?cat=1672%2C2599%2C12080&amp;ev=705_72768%40&amp;page=1&amp;JL=3" target="_blank">小叶紫檀</a>
                    <a href="http://sale.jd.com/act/RtcaYkANFJovCD7.html" target="_blank"><span class="style-red">奢品名表</span></a><a href="http://sale.jd.com/act/nqPpwKA02f.html" target="_blank">人气腕表</a><a href="http://sale.jd.com/act/R4tcnJN5rgQl.html" target="_blank">我爱MIDO</a></li>
                </ul>
              </div>
              <div class="side-extra" >
                <a target="_blank">
                  <img width="328" height="157" src="/shop_jd/Home/Public/images/55a3d786N4212b812.jpg">
                </a>
              </div>
            </div>
            <div class="main main-selected hide" style="display: none;">
              <div class="main-inner">
                <ul class="main-body">
                  <li class="fore1" >
                    <a target="_blank" href="">
                      <img src="/shop_jd/Home/Public/images/55a317cbNc379bfac.jpg" width="439" height="157">
                    </a>
                  </li>
                  <li class="fore2" id="f1-fore-random">
                    <a href="">
                      <img src="/shop_jd/Home/Public/images/55a31a85N18b8c31d.jpg" width="439" height="157">
                    </a>
                  </li>
                  <li class="fore3">
                    <a target="_blank" href="">
                      <img src="/shop_jd/Home/Public/images/55a3dffaNd16e8d73.jpg" width="219" height="157">
                    </a>
                  </li>
                  <li class="fore4" clstag="h|keycount|2015|17b05">
                    <a target="_blank" href="http://sale.jd.com/act/Os1kPUaDzHn.html">
                      <img src="/shop_jd/Home/Public/images/55a482cdN38186674.jpg" width="219" height="157">
                    </a>
                  </li>
                  <li class="fore5" clstag="h|keycount|2015|17b06">
                    <a target="_blank" href="http://sale.jd.com/mall/I3L7msxXa12qH.html">
                      <img src="/shop_jd/Home/Public/images/55a3e038N8ff204ac.jpg" width="219" height="157">
                    </a>
                  </li>
                  <li class="fore6" clstag="h|keycount|2015|17b07">
                    <a target="_blank" href="http://sale.jd.com/act/tPiYVGZJLHSIbdg.html">
                      <img src="/shop_jd/Home/Public/images/55a3dfd7N34666457.jpg" width="219" height="157">
                    </a>
                  </li>
                </ul>
                <ul class="main-extra">
                  <li class="fore1" clstag="h|keycount|2015|17b08">
                    <a target="_blank" href="http://sale.jd.com/act/KndAFrWuvpQG.html">
                      <img src="/shop_jd/Home/Public/images/55a3e04eNf976e0f9.jpg" width="219" height="157">
                    </a>
                  </li>
                  <li class="fore2" clstag="h|keycount|2015|17b09">
                    <a target="_blank" href="http://sale.jd.com/act/2sQxbeBqDXz7J.html">
                      <img src="/shop_jd/Home/Public/images/55a3e01dNc1c72c0b.jpg" width="219" height="157">
                    </a>
                  </li>
                  <li class="fore3" clstag="h|keycount|2015|17b10">
                    <!-- 广告位 2_955_6821-->
                    <div id="ad6821">
                      <a href='' target="_blank" title="">
                        <img src="/shop_jd/Home/Public/images/559f6fafNb670cc12.jpg" width="219" height="316"/>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="slider">
                <div class="slider-body" style="position: relative;">
                  <ul class="slider-main" style="width: 2634px; left: -439px; position: absolute;">
                    <li fclog="10870.100270.202856.1.2_955_6221" class="slider-panel" clstag="h|keycount|2015|17b02d" style="float: left; display: list-item;">
                    <a href="http://c.nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mWlR1HP401IHmvwFQGlQg61ibUTERWPJNPV1CpT+xwLexPDnP5O/aneGMrNUEjJ3BJwid3amo7r5P1gMzSRBzKR93+Cz7jXoPxtJSbvfsN2St2zzWxLf+f/hKdgnq53OJJZmjB5yNIgdy4/UsmeI12Y9OgK342Nz1h2abIDrSuucAkuOIdHLRtkW/q4CIdzM/gKe2acHG0Ajuj9L8JXxidE+hmSpgLz9xmR1xEiObDPEY2cXhMASnNvmSUyLnxgFsxMv49nQdfWafuMVCtVmz8qXOlcppL6VE6XAjxQTKJJ8WOo1bdnPYgppNB+nDWfC8A==&amp;cv=2.0&amp;url=http://sale.jd.com/act/JAXctboFn4rC76.html" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/55a36096Na4b9d4cc.jpg" width="439" height="315" data-lazy-img="done" alt="">
                    </a>
                  </li>
                    <li class="slider-panel slider-panel-selected" style="float: left; display: list-item;">
                      <a href="" target="_blank" title="">
                        <img src="/shop_jd/Home/Public/images/55a46da1Na6fca429.jpg" width="439" height="315" alt="">
                      </a>
                    </li>
                    <li class="slider-panel" style="float: left; display: list-item;">
                      <a  target="_blank" title="">
                        <img src="/shop_jd/Home/Public/images/55a3d7fbNcc2323ba.jpg" width="439" height="315">
                      </a>
                    </li>
                    <li class="slider-panel" style="float: left; display: list-item;">
                      <a  target="_blank" title="">
                      <img src="/shop_jd/Home/Public/images/55a3d7fbNcc2323ba.jpg" width="439" height="315">
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="slider-nav">
                  <ul>
                    <li class="slider-item slider-selected"></li>
                    <li class="slider-item"></li>
                    <li class="slider-item"></li>
                    <li class="slider-item"></li>
                  </ul>
                </div>

                <!-- 2_955_6221 end-->
                <div class="slider-page" style="display: none;">
                  <a href="javascript:void(0)" class="slider-prev">&lt;</a>
                  <a href="javascript:void(0)" class="slider-next">&gt;</a>
                </div>
              </div>
            </div>
            <div class="main main-selected" style="display: block;">
              <ul class="p-list">
                <li class="fore1">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore2">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore3">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore4">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore5">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore6">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore7">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
                <li class="fore8">
                  <div class="p-img">
                    <a target="_blank" href="" title="">
                      <img width="130" height="130" alt="" src="/shop_jd/Home/Public/images/559ccc79N566fb407.png">
                    </a>
                  </div>
                  <div class="p-name">
                    <a target="_blank">马克华菲2015夏季短袖T恤男圆领清爽薄荷茶印花T恤</a>
                  </div>
                  <div class="p-price"><span>￥</span>118.<span>00</span></div>
                </li>
              </ul>
              <ul class="img-list">
                <li class="fore1">
                  <a target="_blank" href="">
                    <img width="219" height="157" src="/shop_jd/Home/Public/images/55a3d85dN0c4e4345.jpg">
                  </a>
                </li>
                <li class="fore2">
                  <a target="_blank" href="">
                    <img width="219" height="157" src="/shop_jd/Home/Public/images/55a3d85dN0c4e4345.jpg">
                  </a>
                </li>
                <li class="fore3">
                  <a target="_blank" href="">
                    <img width="219" height="157" src="/shop_jd/Home/Public/images/55a3d85dN0c4e4345.jpg">
                  </a>
                </li>
                <li class="fore4">
                  <a target="_blank" href="">
                    <img width="219" height="157" src="/shop_jd/Home/Public/images/55a3d85dN0c4e4345.jpg">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    <!--1F服装鞋包结束-->
    <!--品牌条开始-->
    <div class="brands" >
          <ul>
            <li class="fore1" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore2" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore3" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore4" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore5" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore6" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore7" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore8" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore9" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
            <li class="fore10" >
              <a href="#" target="_blank" title="">
                <img src="/shop_jd/Home/Public/images/5535c11fNfc0f3bbf.jpg" width="100" height="40" alt="">
              </a>
            </li>
          </ul>
    </div>
    <!--品牌条结束-->

    <!--广告条2开始-->
    <div class="floor-banner-2">
      <div class="floor-banner">
        <div class="floor-banner-main">
          <a href="" class="fore1" target="_top" style="display: inline-block;float: left">
            <img src="/shop_jd/Home/Public/images/559df713n2f0f2aea.jpg" height="125" width="400">
          </a>
          <a href="" class="fore2" target="_top" style="display: inline-block;float: left">
            <img src="/shop_jd/Home/Public/images/559df713n2f0f2aea.jpg" height="125" width="400">
          </a>
          <a href="" class="fore3" target="_top" style="display: inline-block;float: left">
            <img src="/shop_jd/Home/Public/images/559df713n2f0f2aea.jpg" height="125" width="400">
          </a>
        </div>
      </div>
    </div>
    <!--广告条结束-->
  </div>

  <!--手机-->

    <div id="electronics" class="m">
      <div class="mt">
        <h2><i>4F</i>家用电器</h2>
        <ul class="tab">
          <li style="width: 58px;" class="tab-item tab-selected" >
            <a href="javascript:void(0)">热门</a>
            <span>◆</span>
          </li>
          <li class="tab-item">
            <a href="javascript:void(0)">高端电器</a>
            <span style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">◆</span>
          </li>
        </ul>
      </div>
      <div class="mc">
        <div class="side">
          <div class="side-inner">
            <div class="banner">
              <a href="#" title="" target="_blank">
                <img src="/shop_jd/Home/Public/images/55a52e52Nd7c96010.jpg" alt="" height="475" width="330"></a>
            </div>
            <ul class="themes">
              <li class="fore1">
                <a target="_blank" href="">
                  <i class="icon"></i>
                  <span>家电城</span>
                </a>
              </li>
              <li class="fore2">
                <a target="_blank" href="">
                  <i class="icon"></i>
                  <span>家电服务</span>
                </a>
              </li>
            </ul>
            <ul class="assists" clstag="h|keycount|2015|20a3">
              <li class="fore1">
                <a href="" target="_blank">大家电配送说明</a>
                <i>&gt;</i>
              </li>
              <li class="fore2">
                <a href="http://mall.jd.com/index-1000001782.html?cpdad=1DLSUE" target="_blank">海尔品牌日大促</a><i>&gt;</i></li><li class="fore3"><a href="http://sale.jd.com/mall/Ivp6H2QPqVFOsG.html" target="_blank">创维酷开  评价有礼</a><i>&gt;</i></li><li class="fore4"><a href="http://sale.jd.com/act/QcepiN1tPOu2x.html" target="_blank">康佳品牌钜惠</a><i>&gt;</i></li>
            </ul>
            <ul class="words">
              <li class="fore1">
                <a href="" target="_blank">曲面电视</a>
                <a href="" target="_blank">烟灶套装</a>
                <a href="" target="_blank">电热水器</a>
                <a href="" target="_blank">
                  <span class="style-red">圆柱空调</span>
                </a>
                <a href="" target="_blank">4K电视</a>
                <a href="" target="_blank">滚筒洗衣机</a>
                <a href="" target="_blank">
                  <span class="style-red">风冷冰箱</span>
                </a>
                <a href="" target="_blank">空气净化器</a>
                <a href="" target="_blank">纯水净水器</a>
              </li>
              <li class="fore2">
                <a href="" target="_blank">LED灯</a>
                <a href="http://search.jd.com/search?keyword=%E6%89%AB%E5%9C%B0%E6%9C%BA%E5%99%A8%E4%BA%BA&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=738&amp;click=2-738" target="_blank"><span class="style-red">扫地机器人</span></a><a href="http://search.jd.com/search?keyword=%E5%A4%A7%E5%8F%A3%E5%BE%84%E5%8E%9F%E6%B1%81%E6%9C%BA&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=752&amp;click=2-752" target="_blank">原汁机</a><a href="http://search.jd.com/search?keyword=IH%E7%94%B5%E9%A5%AD%E7%85%B2&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid3=753&amp;click=3-753" target="_blank">IH电饭煲</a><a href="http://search.jd.com/search?keyword=%E5%A3%B0%E6%B3%A2%E7%94%B5%E5%8A%A8%E7%89%99%E5%88%B7&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=1276&amp;click=2-1276" target="_blank"><span class="style-red">声波牙刷</span></a><a href="http://search.jd.com/search?keyword=%E4%B8%89%E5%88%80%E5%A4%B4%E9%A1%BB%E5%88%80&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=1276&amp;click=2-1276" target="_blank">三刀头须刀</a><a href="http://search.jd.com/search?keyword=%E7%BA%AF%E6%B0%B4%E5%87%80%E6%B0%B4%E5%99%A8&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid3=898&amp;click=3-898" target="_blank">纯水净水器</a><a href="http://search.jd.com/search?keyword=%E5%86%B7%E9%A3%8E%E6%89%87&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=738&amp;click=2-738" target="_blank">冷风扇</a><a href="http://search.jd.com/search?keyword=%E5%86%B7%E9%A3%8E%E6%89%87&amp;enc=utf-8&amp;qrst=1&amp;rt=1&amp;stop=1&amp;wtype=1&amp;cid2=738&amp;click=2-738" target="_blank">冷风扇</a><a href="http://list.jd.com/list.html?cat=737,752,759" target="_blank">电烤箱</a></li>
            </ul>
          </div>
        </div>
        <div style="display: none;" class="main hide main-selected">
          <div class="main-inner">
            <ul class="main-body">
              <li class="fore1">
                <a target="_blank" href="http://mall.jd.com/index-1000002299.html">
                  <img src="/shop_jd/Home/Public/images/55a52fbaNd22634f5.jpg" height="117" width="219">
                </a>
              </li>
              <li class="fore2">
                <a target="_blank" href="http://sale.jd.com/act/szZx6WPhON1wI.html">
                  <img src="/shop_jd/Home/Public/images/55a52fbaNd22634f5.jpg" height="117" width="219">
                </a>
              </li>
              <li class="fore3">
                <a target="_blank" href="http://sale.jd.com/act/mKupSoGOkFVg.html">
                  <img src="/shop_jd/Home/Public/images/55a52f75N27f24e16.jpg" height="236" width="219"></a>
              </li>
              <li class="fore4">
                <a target="_blank" href="http://sale.jd.com/act/7RmiNZun1Y.html">
                  <img src="/shop_jd/Home/Public/images/55a52f75N27f24e16.jpg" height="236" width="219">
                </a>
              </li>
              <li class="fore5">
                <a target="_blank" href="http://sale.jd.com/act/aFjqpzHBdKkR0UWs.html">
                  <img src="/shop_jd/Home/Public/images/55a52f75N27f24e16.jpg" height="236" width="219">
                </a>
              </li>
            </ul>
            <ul class="main-extra">
              <li class="fore1">
                <a target="_blank" href="http://sale.jd.com/act/3L0BKPsmolfnXQRM.html">
                  <img src="/shop_jd/Home/Public/images/55a52fd9N413bc556.jpg" height="117" width="219"></a>
              </li>
              <li class="fore2">
                <a target="_blank" href="">
                  <img src="/shop_jd/Home/Public/images/55a52fd9N413bc556.jpg" height="117" width="219">
                </a>
              </li>
              <li class="fore3">
                <div id="ad6824">
                  <a href="" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/559b77afNf912c4ea.jpg" height="236" width="219">
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="slider">
            <div style="position: relative;" class="slider-body">
              <ul style="width: 2634px; left: -439px; position: absolute;" class="slider-main">
                <li style="float: left; display: list-item;" class="slider-panel">
                  <a href="" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/559e1adaN7e702567.jpg" height="236" width="439">
                  </a>
                </li>
                <li style="float: left; display: list-item;" class="slider-panel">
                  <a href="" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/55a68487N2fb9b2e4.jpg" height="236" width="439">
                  </a>
                </li>
                <li style="float: left; display: list-item;" class="slider-panel">
                  <a href="" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/559e1adaN7e702567.jpg" height="236" width="439">
                  </a>
                </li>
                <li style="float: left; display: list-item;" class="slider-panel">
                  <a href="" target="_blank" title="">
                    <img src="/shop_jd/Home/Public/images/55a68487N2fb9b2e4.jpg" height="236" width="439">
                  </a>
                </li>
              </ul>
            </div>
            <div class="slider-nav">
              <ul>
                <li class="slider-item slider-selected"></li>
                <li class="slider-item"></li>
                <li class="slider-item"></li>
                <li class="slider-item"></li>
              </ul>
            </div>
            <!--小图标滚动-->
            <div style="display: none;" class="slider-page">
              <a href="javascript:void(0)" class="slider-prev">&lt;</a>
              <a href="javascript:void(0)" class="slider-next">&gt;</a>
            </div>
          </div>
        </div>
        <div style="display: block;" class="main main-selected">
          <ul class="p-list">
            <li class="fore1">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore2">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore3">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore4">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore5">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore6">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore7">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
            <li class="fore8">
              <div class="p-img">
                <a target="_blank" href="" title="【2299.下单立显】科龙1.5匹变频冷暖空调">
                  <img src="/shop_jd/Home/Public/images/558b58fcN2bb4fe9e.jpg" height="130" width="130">
                </a>
              </div>
              <div class="p-name">
                <a target="_blank" href="" title="">【2299.下单立显】科龙1.5匹变频冷暖空调</a>
              </div>
              <div class="p-price">
                <span>￥</span>2299.<span>00</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="brands" clstag="h|keycount|2015|20x">
      <ul>
        <li class="fore1" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore2" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore3" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore4" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore5" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore6" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore7" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore8" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore9" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
        <li class="fore10" fclog="10968.100172.166080.1.2_955_6234">
          <a href="" target="_blank" title="">
            <img src="/shop_jd/Home/Public/images/55028bb4N78c090dc.jpg" alt="" height="40" width="100">
          </a>
        </li>
      </ul>
    </div>
  <!--手机结束-->
  <!--页脚-->

<div id="footBox">
  <div class="items">
    <div class="imgs">
      <img src="/shop_jd/Home/Public/images/service_items_1.png" alt=""/>
      <img src="/shop_jd/Home/Public/images/service_items_2.png" alt=""/>
      <img src="/shop_jd/Home/Public/images/service_items_3.png" alt=""/>
      <img src="/shop_jd/Home/Public/images/service_items_4.png" alt=""/>
    </div>
    <div class="buttom">
      <dl class="fore1">
        <dt>购物指南</dt>
        <dd><a href="">购物流程</a></dd>
        <dd><a href="">购物流程</a></dd>
        <dd><a href="">购物流程</a></dd>
        <dd><a href="">购物流程</a></dd>
        <dd><a href="">购物流程</a></dd>
        <dd><a href="">购物流程</a></dd>
      </dl>
      <dl class="fore1">
        <dt>配送方式</dt>
        <dd><a href="">上门自提</a></dd>
        <dd><a href="">上门自提</a></dd>
        <dd><a href="">上门自提</a></dd>
        <dd><a href="">上门自提</a></dd>
        <dd><a href="">上门自提</a></dd>
      </dl>
      <dl class="fore1">
        <dt>支付方式</dt>
        <dd><a href="">货到付款</a></dd>
        <dd><a href="">货到付款</a></dd>
        <dd><a href="">货到付款</a></dd>
        <dd><a href="">货到付款</a></dd>
        <dd><a href="">货到付款</a></dd>
      </dl>
      <dl class="fore1">
        <dt>售后服务</dt>
        <dd><a href="">售后政策</a></dd>
        <dd><a href="">售后政策</a></dd>
        <dd><a href="">售后政策</a></dd>
        <dd><a href="">售后政策</a></dd>
        <dd><a href="">售后政策</a></dd>
      </dl>
      <dl class="fore2">
        <dt>特色服务</dt>
        <dd><a href="">夺宝岛</a></dd>
        <dd><a href="">夺宝岛</a></dd>
        <dd><a href="">夺宝岛</a></dd>
        <dd><a href="">夺宝岛</a></dd>
        <dd><a href="">夺宝岛</a></dd>
      </dl>
      <div class="coverage">
        <div class="dt">
          京东自营覆盖区县
        </div>
        <div class="dd">
          <p>京东已向全国2050个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
          <p class="ar"><a target="_blank" href="http://help.jd.com/user/issue/103-983.html">查看详情 ></a></p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="w">
    <div clstag="h|keycount|2015|33a" id="footer-2014">
      <div class="links">
        <a rel="nofollow" target="_blank" href="http://www.jd.com/intro/about.aspx">关于我们</a>|<a rel="nofollow" target="_blank" href="http://www.jd.com/contact/">联系我们</a>|<a rel="nofollow" target="_blank" href="http://www.jd.com/contact/joinin.aspx">商家入驻</a>|<a rel="nofollow" target="_blank" href="http://jzt.jd.com">营销中心</a>|<a rel="nofollow" target="_blank" href="http://app.jd.com/">手机京东</a>|<a target="_blank" href="http://club.jd.com/links.aspx">友情链接</a>|<a target="_blank" href="http://media.jd.com/">销售联盟</a>|<a href="http://club.jd.com/" target="_blank">京东社区</a>|<a href="http://gongyi.jd.com" target="_blank">京东公益</a>|<a href="http://en.jd.com/" target="_blank">English Site</a>|<a href="http://help.en.jd.com/help/question-46.html" target="_blank">Contact Us</a>
      </div>
      <div class="copyright">北京市公安局朝阳分局备案编号110105014669&nbsp;&nbsp;|&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;|&nbsp;&nbsp;
        <a target="_blank" href="http://img14.360buyimg.com/da/jfs/t256/349/769670066/270505/3b03e0bb/53f16c24N7c04d9e9.jpg">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>&nbsp;&nbsp;|&nbsp;&nbsp;新出发京零&nbsp;字第大120007号<br><a rel="nofollow" href="http://misc.360buyimg.com/skin/df/i/com/f_music.jpg" target="_blank">音像制品经营许可证苏宿批005号</a>&nbsp;&nbsp;|&nbsp;&nbsp;出版物经营许可证编号新出发(苏)批字第N-012号&nbsp;&nbsp;|&nbsp;&nbsp;互联网出版许可证编号新出网证(京)字150号<br><a href="http://misc.360buyimg.com/wz/wlwhjyxkz.jpg" target="_blank">网络文化经营许可证京网文[2014]2148-348号</a>&nbsp;&nbsp;违法和不良信息举报电话：4006561155&nbsp;&nbsp;Copyright&nbsp;©&nbsp;2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有<br>京东旗下网站：<a target="_blank" href="http://www.360top.com/">360TOP</a>&nbsp;&nbsp;<a href="http://www.paipai.com/" target="_blank">拍拍网</a>&nbsp;&nbsp;<a href="https://www.wangyin.com/" target="_blank">网银在线</a>
      </div>
      <div class="authentication">
        <a rel="nofollow" target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007080200026">
          <img alt="经营性网站备案中心" src="/shop_jd/Home/Public/images/54b8871eNa9a7067e.png" class="err-product" height="32" width="103">
        </a>

        <a rel="nofollow" target="_blank" id="urlknet" tabindex="-1" href="https://ss.knet.cn/verifyseal.dll?sn=2008070300100000031&amp;ct=df&amp;pa=294005">
          <img onclick="CNNIC_change('urlknet')" oncontextmenu="return false;" name="CNNIC_seal" alt="可信网站" src="/shop_jd/Home/Public/images/54b8872dNe37a9860.png" class="err-product" border="true" height="32" width="103">
        </a>
        <a rel="nofollow" target="_blank" href="http://www.bj.cyberpolice.cn/index.do">
          <img alt="朝阳网络警察" src="/shop_jd/Home/Public/images/54b8874bN694454a5.png" class="err-product" height="32" width="103">
        </a>
        <a rel="nofollow" target="_blank" href="https://search.szfw.org/cert/l/CX20120111001803001836">
          <img src="/shop_jd/Home/Public/images/54b8875fNad1e0c4c.png" class="err-product" height="32" width="103">
        </a>
        <a target="_blank" href="http://jubao.china.cn:13225/reportform.do">
          <img src="/shop_jd/Home/Public/images/54b8863dN8d2c61ec.png" class="err-product" height="32" width="185">
        </a>
      </div>
    </div>
  </div>
<!--定位框结束-->
</body>
</html>