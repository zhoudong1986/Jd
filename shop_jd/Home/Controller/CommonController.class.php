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
    //统计购物车里面有多少件商品
    $count = M('cart')->where(array('user_id'=>$uid))->count('cart_id');
    $this->assign('count',$count);
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
          $str.='<li car_id="'.$v['cart_id'].'"><div class="left"><img src="'.$v['goods_img'].'"/></div><div class="center"><a href="'.U('Index/detail',array('good_id'=>$v['goods_id'])).'"'.' target="_blank">'.$v['goods_name'].'</a></div><div class="right"><p class="price"><strong>'.$v['goods_price'].'</strong>×<span></span>'.$v['goods_number'].'</span></p><a class="deleteCar" href="javascript:void(0);" car_id="'.$v['cart_id'].'">删除</a></div></li><li class="payment"><p class="content" style="background-color: rgb(249, 249, 249);">共<b>'.$count.'</b>件商品  共计<strong>'.$sum.'</strong></p><button class="goCar">去购物车</button></li>';
        }
        $str.='</ul>';
        $this->ajaxReturn($str);
      }else{
        $str='<p class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</p>';
        $this->ajaxReturn($str);
      }
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }

  //删除购物车记录
  public function deleteCar(){
    $user_id = $_SESSION['login_info']['uid'];
    $cart_id = I('cart_id');
    if($user_id){
      if(M('cart')->where(array('user_id'=>$user_id,'cart_id'=>$cart_id))->delete()){
        $this->ajaxReturn('1');
      }else{
        $this->ajaxReturn('2');
      }
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }

  //个人中心头部购物车
  public function getCarNav(){
    $uid =  $_SESSION['login_info']['uid']; //用户ID
    //查找购物车信息
    if($uid){//去数据库查找当前用户的购物车
      $carInfo = M('cart')->where(array('user_id'=>$uid))->select();
      $count = M('cart')->where(array('user_id'=>$uid))->count('cart_id');
      $str = ''; //HTML容器
      $sum = 0;
      //统计购物车总价格
      foreach($carInfo as $vo){
        $sum+=($vo['goods_number']*$vo['goods_price']);
      }
      //组装前台html
      if($carInfo){
        $str = '<div class="smt"><h4 class="fl">最新加入的商品</h4></div><div class="smc"><ul id="mcart-sigle">';
        foreach($carInfo as $v){
          $str.='<li car_id="'.$v['cart_id'].'"><div class="p-img fl"><a href="" target="_top"><img src="'.$v['goods_img'].'" height="50" width="50"></a></div><div class="p-name fl"><a href="" target="_top">'.$v['goods_name'].'</a></div><div class="p-detail fr ar"><span class="p-price"><strong>'.$v['goods_price'].'</strong>×'.$v['goods_number'].'</span><br><a target="_top" class="delete" car_id="'.$v['cart_id'].'" href="javascript:void(0)"> 删除</a></div></li>';
        }
        $str.='</ul><ul id="mcart-gift"></ul></div><div class="smb ar"><div class="p-total">共<b>'.$count.'</b>件商品　共计<strong>'.$sum.'</strong></div><a target="_top" href="'.U('Index/mycar').'" id="btn-payforgoods">去购物车</a></div></div>';
        $this->ajaxReturn($str);
      }else{
        $str='<div class="prompt"><p class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</p></div>';
        $this->ajaxReturn($str);
      }
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }

}