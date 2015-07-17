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

  		}else if($sellerResult && $sellerResult['status']==1){
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
    public function logout(){
      $data=I('sure');
      // dump($data);
      $sess=session('isLogin',null);
      session('id',null);
      session('sname',null);
      session('loginIp',null);
      if($data=='1' && empty($sess)){
        $this->ajaxReturn(2);
      }else{
        $this->ajaxReturn(3);
      }

      }

  //    修改密码
    public function update() {
//      接收ajax传过来的值
      $sname=session('sname');
      $oldPwd=I('oldPwd','','md5');
      $newPwd=I('newPwd','','md5');
      $surePwd=I('surePwd','','md5');
      if($newPwd != $surePwd){
        $this ->ajaxReturn(0);
        return false;
      }else{
        // 实例化数据库
        $seller=D('sellers');
        //把修改值放到数组中
        $data1=array('password'=>$newPwd);

//      修改数据库密码
        $sellerResult=$seller ->where('password='.$oldPwd) ->save($data1);
//      判断是否修改成功
        if($sellerResult){
          $this->ajaxReturn(1);
        }else{
          $this->ajaxReturn(2);
        }
      }



      

    }
}