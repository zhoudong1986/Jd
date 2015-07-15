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
  		 // 判断用户是否能正常登录
  		if($sellerResult && $sellerResult['status']==0){
  			$this->ajaxReturn(0);
  			
  		}else if($sellerResult){
  			// 把用户信息写到Session
  			session('id',$sellerResult['id']);
  			session('sname',$sellerResult['sname']);
  			session('loginIp',get_client_ip());
  			session('isLogin','true');
  			$this->ajaxReturn(1);
  		}else{
  			$this->ajaxReturn(2);
  		}

    }
}