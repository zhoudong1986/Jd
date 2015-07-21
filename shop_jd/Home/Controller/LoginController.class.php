<?php
/**
 * 用户登陆模块
 * User: Administrator
 * Date: 2015/7/21
 * Time: 10:20
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function  login(){//登陆功能
      $this->display();
    }

  //退出登录
  public function logOut(){
    //注销session
    session('login_info',null);
    $this->redirect('Index/index', '', 0, '');//跳转到首页
  }
}