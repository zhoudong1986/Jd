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

  //异步轮循消息
  public function getMsg(){
    $uid = $_SESSION['login_info']['uid']; //当前用户UID
    $msg = S('userMsg'.$uid);
    if($msg){//在内存中有推送消息的时候才处理
        if($msg['status']){
          $sum = $msg['total'];
          $msg['status']=0;
          S('userMsg'.$uid,$msg,0);
          echo json_encode(array(
              'status'=>1,
              'total'=>$sum
          ));
        }


    }else{
      echo json_encode(array(
          'status'=>0,
          'total'=>0,
          'type'=>1
      ));
    }

  }
}