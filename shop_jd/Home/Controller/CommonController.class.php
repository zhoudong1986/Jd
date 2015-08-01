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
//    dump(md5(123456));
//    die;
  }

  //异步轮循消息
  public function getMsg(){
    $uid = $_SESSION['login_info']['uid']; //当前用户UID
    $msg = S('userMsg'.$uid);
    if($msg){//在内存中有推送消息的时候才处理
        if($msg['status']){
          $sum = $msg['total'];
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
  //购物车
  public function car(){
    $uid = $_SESSION['login_info']['uid']; //当前用户UID
    if($uid){//去数据库查找当前用户的购物车
      $carInfo = M('cart')->where(array('user_id'=>$uid))->select();
      $count = M('cart')->where(array('user_id'=>$uid))->count('cart_id');
      $str = ''; //HTML容器
      $sum = 0;
      //统计购物车总价格
      foreach($carInfo as $vo){
        $sum+=($vo['goods_number']*$vo['goods_price']);
      }

      if($carInfo){
        $str.='<p class="head">最新加入的商品</p><ul class="lists">';
        foreach($carInfo as $v){
          $str.='<li><div class="left"><img src="'.$v['goods_img'].'"/></div><div class="center"><a href="" target="_blank">'.$v['goods_name'].'</a></div><div class="right"><p class="price"><strong>'.$v['goods_price'].'</strong>×<span></span>'.$v['goods_number'].'</span></p><a href="" car_id="'.$v['cart_id'].'">删除</a></div></li><li class="payment"><p class="content" style="background-color: rgb(249, 249, 249);">共<b>'.$count.'</b>件商品  共计<strong>'.$sum.'</strong></p><button>去购物车</button></li>';
        }
        $str.='</ul>';
        $this->ajaxReturn($str);
      }else{

      }


    }
  }
}