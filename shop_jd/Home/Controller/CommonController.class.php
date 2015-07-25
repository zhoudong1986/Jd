<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/24
 * Time: 8:48
 */
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
  //自动运行的控制器
  public function _initialize(){
    $uid = $_SESSION['login_info']['uid']; //当前用户UID
    $img = M('user_details')->where(array('user_id'=>$uid))->field('pic')->find();//查找用户头像
    $this->assign('pic',ltrim($img['pic'],'.'));
  }
}