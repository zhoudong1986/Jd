<?php
namespace Seller\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }

    public function login(){
    	// 实例化数据库
  	$seller = D('sellers');
  	
  	// 接收ajax传过来的值
  		$data = array(
  			'sname'=> I('sname'),
  			'password' => I('password','','md5')
  			);
  		$sellerResult = $seller->where($data)->find();
      //判断是否为超级管理员,且能否正常登录
      if($sellerResult && $sellerResult['status']==0){
        $this ->ajaxReturn(0);
      }else if($sellerResult && $sellerResult['status']==1){
        // 把用户信息写到Session
        session('id',$sellerResult['sellers_id']);
        session('sname',$sellerResult['sname']);
        session('loginIp',get_client_ip());
        session('pic',$sellerResult['pic']);
        session('isLogin','true');
//        如是超级管理员且能登录则把信息写到session中
        session('manager',true);
        session('role',false);
        $this->ajaxReturn(1);
        //        判断是否为管理员
      }else if($sellerResult==null){
//        实例化管理员数据表
        $seller_admin=D('sellers_admin');
        $adminResult=$seller_admin->where($data)->find();

//        判断是否为普通管理员，且能正常例如
        if($adminResult && $adminResult['status']==0){
          $this->ajaxReturn(0);
        }else if($adminResult && $adminResult['status']==1){
//          把信息写到session中
          session('id',$adminResult['id']);
          session('sname',$adminResult['adname']);
          session('loginIp',get_client_ip());
          session('pic',$adminResult['pic']);
          session('isLogin','true');
//          如为普通管理员且能登录则把信息写到session中
          session('manager',false);
          session('role',$adminResult['role']);

//          dump(session('manager'));
//          die;
          $this ->ajaxReturn(1);
        }else{
          $this ->ajaxReturn(2);
        }


      }else{
        $this ->ajaxReturn(2);
      }

    }

    public function logout(){
      $data=I('sure');
      // dump($data);
      $sess=session('isLogin',null);
      session('id',null);
      session('sname',null);
      session('loginIp',null);
      session('manager',null);
      session('role',null);
      session('pic',null);
      session('loginIp',null);
      if($data=='1' && empty($sess)){
        $this->ajaxReturn(2);
      }else{
        $this->ajaxReturn(3);
      }

      }

  //    修改密码
    public function update() {
//     接收ajax传过来的值
      $sname=session('sname');
      $oldPwd=I('oldPwd','','md5');

      $newPwd=I('newPwd','','md5');
//      实例化数据模型
      $seller=D('sellers');
//     把查询用户名放到数组中
      $data1=array('sname'=>$sname);
//     查询旧密码
      $sellerResult1=$seller ->where($data1) ->find();
//      //判断旧密码是否输入正确
    if($sellerResult1['password'] == $oldPwd){
//      判断新旧密码是否相同
        if($sellerResult1['password'] == $newPwd){
          $this->ajaxReturn(1);
        }else{
          $data2 = array('password'=>$newPwd);
          $sellerResult2=$seller ->where('sellers_id='.$sellerResult1['sellers_id']) ->save($data2);
          if($sellerResult2){
            $this->ajaxReturn(2);
          }else{
            $this ->ajaxReturn(3);
          }
        }

    }else{
      //旧密码输入不正确返回4
      $this ->ajaxReturn(4);
    }






    }
}