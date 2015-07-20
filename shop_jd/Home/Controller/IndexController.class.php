<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页
    public function index(){
      $this->display();
    }

    //免费注册
    public function register(){
      $this->display();
    }
    //验证码
    public function verify(){
      $config = array(
          'fontSize' => '50px',
          'useNoise' => 'false',
          'length' => 4
      );
      $verify = new \Think\Verify($config);
      $verify->entry();
    }

  //验证注册用户名
    public function checkRegister(){
      $userName = I('userName');
      //去数据库查询是否有重名
      
    }
}