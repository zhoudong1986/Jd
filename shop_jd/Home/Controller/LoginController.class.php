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
  //检查登录账号和密码
  public function checkAccount(){
    $data = array(
      'user_name'=>I('uname'),
      'password'=>I('pwd','','md5')
    );
    //去数据库查询有没有该用户
    $id = M('user')->where($data)->field('user_id')->find();
    if($id){
      //把该用户资料写到session里面
      $_SESSION['login_info']=array(
          'isLogin'=>true,
          'uid'=>$id['user_id']
      );
      $this->ajaxReturn('1');
    }else{
      $this->ajaxReturn('2');
    }
  }
}