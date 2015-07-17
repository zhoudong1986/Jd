<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		$this->display();
    }
    public function loginHandle($code,$i = ''){
    	$verify = new \Think\Verify();
        $verifyCheck = $verify->check($code,$i);
        $admin = M('admin');
        $where = array(
            'admin_name' => I('admin'),
            'password' => I('pwd','','md5'),
            'status' => '1'
            );
        $adminResult = $admin->where($where)->find();
        if(!$verifyCheck){
            $this->ajaxReturn('1');
            
        }
        if(!$adminResult){
            $this->ajaxReturn('2');
         
        }else{
            session('admin_id',$adminResult['admin_id']);
            session('admin_name',$adminResult['admin_name']);
            session('role',$adminResult['role']);
            session('loginTime',time());
            session('loginIp',get_client_ip());
            session('isLogin','1');
            $this->ajaxReturn('3');
        }

    }
    public function showVerify(){
        $config = array(
            'fontSize' => '50px',
            'useNoise' => 'false',
            'length' => 4
            );
    	$verify = new \Think\Verify($config);
    	$verify->entry();
    }

}