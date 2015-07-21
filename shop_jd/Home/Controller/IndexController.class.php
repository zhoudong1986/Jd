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
    //生成验证码
    public function verify(){
      $config = array(
          'fontSize' => '50px',
          'useNoise' => 'false',
          'length' => 4
      );
      $verify = new \Think\Verify($config);
      $verify->entry(1);
    }
  //生成验证码（邮箱）2
  public function verify2(){
    $config = array(
        'fontSize' => '50px',
        'useNoise' => 'false',
        'length' => 4
    );
    $verify = new \Think\Verify($config);
    $verify->entry(2);
  }

//检验验证码2(邮箱验证)
  public function checkVerify1(){
    $code = I('code'); //前台AJAX过来的验证码
    $verify = new \Think\Verify(); //实例化验证码类
    if($verify->check($code, '1')){
      $this->ajaxReturn('1');
    }else{
      $this->ajaxReturn('2');
    }
  }

  //检验验证码2(邮箱验证)
  public function checkVerify2(){
    $code = I('code'); //前台AJAX过来的验证码
    $verify = new \Think\Verify(); //实例化验证码类
    if($verify->check($code, '2')){
        $this->ajaxReturn('1');
    }else{
        $this->ajaxReturn('2');
    }
  }

  //验证注册用户名
    public function checkRegister(){
      $userName = I('userName');
      //组装where条件
      $where = array(
        'user_name'=>$userName
      );
      //去数据库查询是否有重名
     $result =  D('user')->where($where)->getField('user_id');
      if(!$result){
        //数据库没有改用户名
        $this->ajaxReturn('1');
      }else{
        //用户名已经注册过了
        $this->ajaxReturn('0');
      }
    }

    //验证邮箱有没有被绑定过
    function checkMail(){
      $mail = I('mail');
      $result = M()->table(array('jd_user'=>'user','jd_user_details'=>'user_details'))->field('user.user_name')->where("user.user_id=user_details.user_id AND user_details.email='{$mail}'")->select();
      if(!$result){//邮箱没被注册过
          $this->ajaxReturn('1');
      }else{
          $this->ajaxReturn('2');
      }
    }

    //发送邮件验证
    public function setMail(){
      $userName = I('userName'); //用户名
      $pwd  = I('password','','md5'); //密码
      $mail = I('mail'); //邮箱
      $serialize = serialize($userName.','.$pwd.','.$mail);
      $url = U('finishMailCheck',array('serialize'=>$serialize));
      sendMail("11273548@qq.com","仿京东：邮件验证","内容:请点击以下链接以完成验证:<a href='http://".'127.0.0.1/'."$url'>".date('ymdhis').rand(00000-99999)."</a>");
      //发送成功后
      $this->ajaxReturn(1);
    }

  //完成邮箱验证
  public  function finishMailCheck(){
    $tmp = I('serialize','','unserialize');//获得传参
    $arr = explode(',',$tmp);//组装参数为数组
    $userName = $arr[0];//用户名
    $pwd = $arr[1];//密码
    $email = $arr[2];//邮箱
    //组装添加数组
    $addArr = array(
      'user_name'=>$userName,
      'password'=>$pwd
    );
    //链接数据库，添加注册新用户
    $lastInsertId = M('user')->add($addArr);
    $data['email'] =$email;
    $data['user_id']= $lastInsertId;
    M('user_details')->add($data);
    $this->assign('uid',$lastInsertId);
    $this->display('mailSuccess');
  }
  //处理表单提交
  public function actionRegister(){
    dump(I('.post'));
  }
}