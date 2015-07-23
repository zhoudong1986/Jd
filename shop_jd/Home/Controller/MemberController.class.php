<?php
/**
 * 用户中心
 * User: Administrator
 * Date: 2015/7/22
 * Time: 9:35
 */

namespace Home\Controller;
use Think\Controller;

class MemberController extends Controller {
  //会员首页
  public function home(){
    $uid=  I('uid');
    if($uid){
        //根据客户ID去查询数据
      $result = M()->table(array('jd_user'=>'user','jd_user_details'=>details))->field('user.user_name,details.email,details.pic,details.sex,details.birthDay,details.name,details.hobbies,details.address,details.id_card,details.marriage,details.educate')->where('details.user_id=user.user_id')->find();
      $account = M()->table(array('jd_user'=>'user','jd_user_account'=>'account'))->field('account.points,account.balance')->where('user.user_id=account.user_id')->find();
      $this->assign('user_info',$result);
      $this->assign('account',$account);
      $this->assign('uid',$uid);
      $this->display('memCenter');
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
  //我的订单
  public function myOrder(){
    $uid = I('uid');
    if($uid){
      $this->display('order');
    }else{//有没uid就给它去首页
      $this->redirect('Index/index','',0,'');
    }
  }

  //取消订单
  public function refundList(){
    $uid = I('uid');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Index/index','',0,'');
    }
  }

  //个人信息
  public function personal(){
    $uid = I('uid');
    if($uid){
        //根据UID去查询客户的信息
      $info = M('user_details')->where("user_id='$uid'")->find();//客户详细资料
      $account = M()->table(array('jd_user'=>'user','jd_user_account'=>'account'))->field('account.points,account.balance,user.level')->where('user.user_id=account.user_id')->find();
      $birthArr = explode('/',$info['birthDay']);
      $usrhobulArr = explode(',',$info['hobbies']);//客户兴趣爱好
      $hobulArr = M('hobul')->select();//兴趣爱好表
      $this->assign('birthArr',$birthArr);
      $this->assign('hobulArr',$hobulArr);
      $this->assign('info',$info);
      $this->assign('account',$account);//客户账户资料
      $this->assign('usrhobulArr',$usrhobulArr);
      $this->display();
    }else{
        $this->redirect('Index/index','',0,'');
    }
  }

  //呢称检测
  public function checknickName(){
    $sname = I();
  }
}