<?php
namespace Seller\Controller;
use Think\Controller;
class ShopController extends CommonController {
  public function shopInfor() {
    //获取sellers_id值，判断是否为普通管理员登录
    if(session('sellers_id')){
      $sellers_id=session('sellers_id');
    }else{
      //否则为超级管理员登录
      $sellers_id=session('id');
    }
//    组装where条件
    $where=array('sellers_id'=>$sellers_id);
    //实例化数据模型
    $shop_info=D('shop_info');
    $shopResult=$shop_info ->where($where) ->find();

    //获取店家主账号
    $sellers=D('sellers');
    $sellersResult=$sellers ->where($where) ->find();

    //获取店铺负责人信息
    $shop_charge=D('shop_charge');
    $chargeResult=$shop_charge ->where($where) ->find();

    //获取运营联系人信息
    $shop_operate=D('shop_operate');
    $operateResult=$shop_operate ->where($where)->find();

    //获取售后服务人信息
    $shop_serve=D('shop_serve');
    $serveResult=$shop_serve ->where($where) ->find();

//    把数据分配到前台
    $this ->assign('data1',$shopResult);
    $this ->assign('data2',$sellersResult);
    $this ->assign('data3',$chargeResult);
    $this ->assign('data4',$operateResult);
    $this ->assign('data5',$serveResult);
    $this ->display();
  }
}