<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		$this->display();
    }
    public function loginHandle($i = ''){
        $code = I('code');
    	$verify = new \Think\Verify();
        $verifyCheck = $verify->check($code,$i);
        $admin = M('admin');
        $where = array(
            'admin_name' => I('admin'),
            'password' => I('pwd','','md5'),
            'status' => 1
            );
        $adminResult = $admin->where($where)->select();
        if(!$verifyCheck){
            $this->ajaxReturn('code');
            return false;
        }
        if(!$adminResult){
            $this->ajaxReturn('admin');
            return false;
        }else{
            session('id',$adminResult['admin_id']);
            session('admin_name',$adminResult['admin_name']);
            session('loginTime',time());
            session('loginIp',get_client_ip());
            session('islogin',1);
            $this->success('登录成功,正在跳转...',U('Index/index'),1);
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