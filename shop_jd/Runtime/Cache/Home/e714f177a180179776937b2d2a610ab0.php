<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache,must-revalidate">
  <title>注册-个人用户</title>
  <link rel="stylesheet" type="text/css" href="/shop_jd/Home/Public/css/register.css" media="all">
  <script src="/shop_jd/Home/Public/js/jquery-1.10.2.min.js"></script>
  <script src="/shop_jd/Home/Public/js/common.js"></script>
  <script src="/shop_jd/Home/Public/js/register.js"></script>
</head>
<body>
  <div class="w ld" id="toppanel">
    <div style="right: 110.5px; display: none;" id="sidepanel" class="hide">
      <a class="research" target="_top" href="http://surveys.jd.com/index.php?r=survey/index/sid/447941/lang/zh-Hans"> <b></b>
        调查问卷
      </a>
      <a title="使用快捷键T也可返回顶部哦！" class="gotop" href="#"> <b></b>
        返回顶部
      </a>
    </div>
  </div>
  <div id="shortcut-2013">
    <div class="w">
      <ul class="fl lh">
        <li class="fore1 ld">
          <b></b>
          <a href="javascript:addToFavorite()" rel="nofollow">收藏京东</a>
        </li>
      </ul>
      <ul class="fr lh">
        <li class="fore1" id="loginbar">
          <a href="javascript:login();" class="link-login">你好，请登录</a>
          &nbsp;&nbsp;
          <a href="javascript:regist();" class="link-regist style-red">免费注册</a>
        </li>
        <li class="fore2 ld">
          <s></s>
          <a href="http://jd2008.jd.com/JdHome/OrderList.aspx" rel="nofollow">我的订单</a>
        </li>
        <li class="fore3 ld">
          <s></s>
          <a href="http://app.jd.com/" target="_top">手机京东</a>
        </li>
        <li class="fore4 ld menu" id="biz-service" data-widget="dropdown">
          <s></s>
          <span class="outline"></span>
          <span class="blank"></span>
          客户服务
          <b></b>

          <div class="dd">
            <div>
              <a href="http://help.jd.com/help/question-61.html" target="_top">常见问题</a>
            </div>
            <div>
              <a href="http://myjd.jd.com/repair/orderlist.action" target="_top" rel="nofollow">售后服务</a>
            </div>
            <div>
              <a href="http://chat.jd.com/jdchat/custom.action" target="_top" rel="nofollow">在线客服</a>
            </div>
            <div>
              <a href="http://myjd.jd.com/opinion/list.action" target="_top" rel="nofollow">投诉中心</a>
            </div>
            <div>
              <a href="http://www.jd.com/contact/service.html" target="_top">客服邮箱</a>
            </div>
          </div>
        </li>
        <li class="fore5 ld menu" id="site-nav" data-widget="dropdown">
          <s></s>
          <span class="outline"></span>
          <span class="blank"></span>
          网站导航
          <b></b>

          <div class="dd lh">
            <dl class="item fore1">
              <dt>特色栏目</dt>
              <dd>
                <div>
                  <a target="_top" href="http://my.jd.com/personal/guess.html">为我推荐</a>
                </div>
                <div>
                  <a target="_top" href="http://shipingou.jd.com/">视频购物</a>
                </div>
                <div>
                  <a target="_top" href="http://club.jd.com/">京东社区</a>
                </div>
                <div>
                  <a target="_top" href="http://xiaoyuan.jd.com/">校园频道</a>
                </div>
                <div>
                  <a target="_top" href="http://read.jd.com/">在线读书</a>
                </div>
                <div>
                  <a target="_top" href="http://diy.jd.com/">装机大师</a>
                </div>
                <div>
                  <a target="_top" href="http://market.jd.com/giftcard/">礼品卡</a>
                </div>
              </dd>
            </dl>
            <dl class="item fore2">
              <dt>企业服务</dt>
              <dd>
                <div>
                  <a target="_top" href="http://market.jd.com/giftcard/company/default.aspx">企业客户</a>
                </div>
                <div>
                  <a target="_top" href="http://sale.jd.com/p10997.html">办公直通车</a>
                </div>
              </dd>
            </dl>
            <dl class="item fore3">
              <dt>旗下网站</dt>
              <dd>
                <div>
                  <a target="_top" href="http://www.360top.com/">360TOP</a>
                </div>
                <div>
                  <a target="_top" href="http://www.minitiao.com/">迷你挑</a>
                </div>
                <div>
                  <a target="_top" href="http://en.360buy.com/">English Site</a>
                </div>
              </dd>
            </dl>
          </div>
        </li>
      </ul>
      <span class="clr"></span>
    </div>
  </div>
  <div class="w" id="logo">
    <div>
      <a href="http://www.jd.com/">
        <img src="/shop_jd/Home/Public/images/logo-2013.png" alt="京东商城" height="60" width="170"></a>
      <b></b>
    </div>
  </div>

  <div class="w" id="regist">
    <div class="mt">
      <ul class="tab">
        <li class="curr">个人用户</li>
        <!--<li class="line">-->
          <!--<a clstag="regist|keycount|personalreg|02" href="https://reg.jd.com/reg/company">企业用户</a>-->
        <!--</li>-->
        <!--<li class="fore">-->
          <!--<a href="http://passport.en.jd.com/user/facade">International Customers</a>-->
        <!--</li>-->
      </ul>
      <div class="extra">
        <span style="text-align: right;">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="flk13" onclick="javascript:location.href=&quot;http://en.360buy.com&quot;+location.search;" href="#">English</a>
        </span>
        <span>
          我已经注册，现在就&nbsp;
          <a href="../../../../login.html" class="flk13">登录</a>
        </span>
      </div>
    </div>
    <div class="mc">
      <form action="https://reg.jd.com/reg/person?ReturnUrl=http%3A//www.jd.com/" id="personRegForm" method="POST" onsubmit="return false;">
        <input name="regType" id="regType" value="person" type="hidden">
        <input name="uuid" id="uuid" value="07967044-4dee-4b35-88a4-9c286cabf05b" type="hidden">
        <input name="verifymc" id="verifymc" value="" type="hidden">
        <input name="emailMg" id="emailMg" type="hidden">
        <input name="authcodeMg" id="authcodeMg" type="hidden">
        <input name="state" id="state" value="" type="hidden">
        <input name="tgKey" id="tgKey" value="${tgKey}" type="hidden">
        <div class="form" onselectstart="return false;">
          <div class="item" id="select-regName">
            <span class="label">
              <b class="ftx04">*</b>
              用户名：
            </span>

            <div class="fl item-ifo">
              <div class="o-intelligent-regName">
                <input id="regName" name="regName" maxlength="20" class="text" value="" type="text"> <i class="i-name"></i>
                <ul id="intelligent-regName" class="hide"></ul>
                <label id="regName_succeed" class="blank"></label>
                <label id="regName_error" class="hide"></label>
              </div>

              <div class="intelligent-error hide" id="morePinDiv">
                <h5>推荐您使用：</h5>

                <div class="groom" id="morePinGroom"></div>
              </div>
              <input name="ChhnHxPAKW" value="GhHtY" type="hidden">
              <input value="-1" id="hnschool" class="hide" type="hidden">
              <input id="schoolid" name="schoolid" class="hide" type="hidden">
              <input id="hnseli" class="hide" type="hidden"></div>
          </div>

          <div id="capslock"> <i></i>
            <s></s>
            键盘大写锁定已打开，请注意大小写
          </div>
          <div id="o-password">
            <div class="item">
              <span class="label">
                <b class="ftx04">*</b>
                请设置密码：
              </span>

              <div class="fl item-ifo">
                <input id="pwd" name="pwd" maxlength="20" class="text" tabindex="2" style="ime-mode: disabled;" onpaste="return  false" autocomplete="off" type="password">
                <i class="i-pass"></i>
                <label id="pwd_succeed" class="blank"></label>
                <label id="pwd_error"></label>
                <span class="clr"></span>
                <label class="hide" id="pwdstrength">
                  <span class="fl">安全程度：</span>
                  <b></b>
                </label>

              </div>
            </div>

            <div class="item">
              <span class="label">
                <b class="ftx04">*</b>
                请确认密码：
              </span>

              <div class="fl item-ifo">
                <input id="pwdRepeat" name="pwdRepeat" maxlength="20" class="text" tabindex="3" onpaste="return  false" autocomplete="off" type="password">
                <i class="i-pass"></i>
                <label id="pwdRepeat_succeed" class="blank"></label>
                <label id="pwdRepeat_error"></label>
              </div>
            </div>
            <div class="item" id="dphone">
              <span class="label">
                <b class="ftx04">*</b>
                验证邮箱：
              </span>

              <div class="fl item-ifo">
                <input value="" id="phone" maxlength="11" name="phone" class="text" tabindex="4" onfocus="phoneFocus();" onkeyup="phoneKeyup();" onblur="phoneBlur();" autocomplete="off" type="text">
                <i class="i-phone"></i>
                <label id="phone_succeed" class="blank"></label>
                <label id="phone_error"></label>
              </div>

            </div>

          </div>
          <div class="item" id="authcodeDiv">
            <span class="label">
              <b class="ftx04">*</b>
              验证码：
            </span>

            <div class="fl item-ifo">
              <input value="" id="authcode" style="ime-mode: disabled;" name="authcode" class="text text-1" tabindex="6" autocomplete="off" maxlength="6" type="text">
              <label class="img">
                <img src="<?php echo U('verify');?>" style="cursor: pointer; width: 100px; height: 36px; display: block;" alt="" clstag="regist|keycount|personalreg|06" onclick="this.src= this.src+ '?' + new Date().getTime()" id="JD_Verification1"></label>

              <label class="ftx23">
                &nbsp;看不清？
                <a href="javascript:void(0)" onclick="setTimeout(verc,50);" class="flk13">换一张</a>
              </label>
              <label id="authcode_succeed" class="blank invisible"></label>
              <span class="clr"></span>
              <label id="authcode_error"></label>
            </div>
          </div>
          <div class="item item-new">
            <span class="label">&nbsp;</span>

            <div class="fl item-ifo">
              <input class="checkbox" checked="checked" id="readme" onclick="agreeonProtocol();" type="checkbox">
              <label for="protocol">
                我已阅读并同意
                <a href="#" class="blue" id="protocol">《京东用户注册协议》</a>
              </label>
              <span class="clr"></span>
              <label id="protocol_error" class="error hide">请接受服务条款</label>
            </div>
          </div>
          <div class="item">
            <span class="label">&nbsp;</span>
            <input class="btn-img btn-regist" id="registsubmit" value="立即注册" tabindex="8" clstag="regist|keycount|personalreg|07" onclick="reg();" type="button"></div>
        </div>
        <div class="phone">
          <img src="/shop_jd/Home/Public/images/phone-bg.jpg" height="180" width="180"></div>
        <span class="clr"></span>
      </form>
    </div>
  </div>

  <div class="w">
    <div id="footer-2013">
      <div class="links">
        <a rel="nofollow" target="_top" href="http://www.jd.com/intro/about.aspx">关于我们</a>
        |
        <a rel="nofollow" target="_top" href="http://www.jd.com/contact/">联系我们</a>
        |
        <a rel="nofollow" target="_top" href="http://zhaopin.jd.com/">人才招聘</a>
        |
        <a rel="nofollow" target="_top" href="http://www.jd.com/contact/joinin.aspx">商家入驻</a>
        |
        <a rel="nofollow" target="_top" href="http://www.jd.com/intro/service.aspx">广告服务</a>
        |
        <a rel="nofollow" target="_top" href="http://app.jd.com/">手机京东</a>
        |
        <a target="_top" href="http://club.jd.com/links.aspx">友情链接</a>
        |
        <a target="_top" href="http://cps.jd.com/">销售联盟</a>
        |
        <a href="http://club.jd.com/" target="_top">京东社区</a>
        |
        <a href="http://gongyi.jd.com/" target="_top">京东公益</a>
      </div>
      <div class="copyright">Copyright©2004-2015&nbsp;&nbsp;京东JD.com&nbsp;版权所有</div>
    </div>
  </div>

</body>
</html>