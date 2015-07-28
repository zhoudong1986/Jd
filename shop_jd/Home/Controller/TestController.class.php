<?php
/**
 * 测试接口
 * User: Administrator
 * Date: 2015/7/27
 * Time: 21:36
 */
namespace Home\Controller;
use Think\Controller;

class TestController extends Controller{
    public function sendMsg(){
      $uid = $_SESSION['login_info']['uid']; //当前用户UID
      $this->assign('uid',$uid);
      $this->display();
    }
    //更改内存中的消息总数
    public function actMsg(){
      $uid = $_SESSION['login_info']['uid']; //当前用户UID
      $type = I('type');
      set_msg($uid,$type);
    }
}