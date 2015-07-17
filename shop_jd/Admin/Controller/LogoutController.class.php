<?php
namespace Admin\Controller;
use Think\Controller;
class LogoutController extends Controller {
	public function logout(){
		session(null);
		$this->success('注销成功',U('Login/index'),1);
	}
    public function editPwd(){
    	// 接收原来的密码
    	$oPwd = I('oPwd','','md5');
    	// 接收新的密码
    	$Pwd = I('Pwd','','md5');
    	$rePwd = I('rePwd','','md5');
    	// 从session取出当前管理员的用户id
    	$admin_id = session('admin_id');
    	$admin = M('admin');
    	// 制作查询条件
    	$where = array(
    		'admin_id' => $admin_id,
    		'password' => $oPwd
    		);
    	// 执行查询
    	$adminResult = $admin->where($where)->find();
    	if($Pwd != $rePwd){// 两次密码不一致
    		$this->ajaxReturn('rePwd');
    	}elseif(!$adminResult){
    		// 查询失败,原密码错误
    		$this->ajaxReturn('oPwd');
    	}else{
    		// 查询成功,修改密码
    		$ud['password'] = $Pwd;
    		// 执行修改密码操作
    		$result = $admin->where('admin_id='.$admin_id)->save($ud);
    		if($result){
    			// 修改成功
    			session(null);
	    		$this->ajaxReturn('Pwd');
    		}else{
    			// 修改失败
    			$this->ajaxReturn('other');
    		}
    	}


    }
}