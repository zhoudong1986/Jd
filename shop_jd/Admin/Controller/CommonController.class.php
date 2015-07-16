<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){ 
		$flag = session('isLogin');
		//判断是否存在登陆标示
		if(empty($flag)){
			$this->redirect('Login/index');
		}
	}
}