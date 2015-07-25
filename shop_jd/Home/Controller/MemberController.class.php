<?php
/**
 * 用户中心
 * User: Administrator
 * Date: 2015/7/22
 * Time: 9:35
 */

namespace Home\Controller;
use Think\Controller;

class MemberController extends CommonController {
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
      if(!$info['birthDay']){$tmp = '0/0/0';}else{$tmp = $info['birthDay'];}
      $birthArr = explode('/',$tmp);
      $usrhobulArr = explode(',',$info['hobbies']);//客户兴趣爱好
      $hobulArr = M('hobul')->select();//兴趣爱好表
      $this->assign('birthArr',$birthArr);
      $this->assign('hobulArr',$hobulArr);
      $this->assign('info',$info);

      $this->assign('account',$account);//客户账户资料
      $this->assign('usrhobulArr',$usrhobulArr);
      $this->assign('uid',$uid);
      $this->display();
    }else{
        $this->redirect('Index/index','',0,'');
    }
  }

  //呢称检测
  public function checknickName(){
    $sname = I('sname');
    $uid = I('uid');
    $error = 1;
    //检查客户呢称唯一性
    $re1 = M('user_details')->field('details_id')->where(array('user_id'=>$uid,'sname'=>$sname))->find();//客户没有更改呢称
    if($re1){$error=0;}
    $re2 = M('user_details')->field('details_id')->where("sname='$sname' AND user_id!='$uid'")->find();
    if(!$re2){//此呢称没有被注册过
      $error=0;
    }else{
      $error=1;
    }
    if(!$error){//没有错误
      $this->ajaxReturn('1');
    }else{
      $this->ajaxReturn('2');
    }
  }

  //录入个人资料
  public function entering(){
    $uid = I('uid');
     if(I('birthdayYear')=='' || I('birthdayMonth')==''||I('birthdayDay')==''){
      $birthday = '';
    }else{
      $birthday = I('birthdayYear').'/'.I('birthdayMonth').'/'.I('birthdayDay');
    }
    $hobul = implode(',',I('hobul')); //组装兴趣爱好数组为字符串形式
    $data = array(
      'sex'=>I('sex'),
      'sname'=>I('sname'),
      'birthDay'=>$birthday,
      'hobbies'=>$hobul,
      'name'=>I('realName'),
      'address'=>I('address'),
    );
    //将数据保存到数据库
    M('user_details')->where(array('user_id'=>$uid))->save($data);
    $this->ajaxReturn('1');
  }

  //修改头像
  public function showImg(){
    $uid = I('uid');
    if($uid){
      $this->assign('uid',$uid);
      $info = M('user_details')->where("user_id='$uid'")->find();//客户详细资料
      $this->assign('info',$info);
      $this->assign('pic',ltrim($info['pic'],'.'));
      $this->assign('min',ltrim($info['mim_thumb'],'.'));
      $this->assign('med',ltrim($info['med_thumb'],'.'));

      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }

 //头像处理函数
  public function actionImg(){
    $uid = I('session_id');
    $path = ''; //保存上传后图片子文件夹路径+文件名
      //配置ThinkPHP头像上传类基本设置
      $config = array(
        'maxSize'=>C('UPLOAD_MAX_SIZE'), //允许上传文件大小,4m
        'savePath '=>C('UPLOADS_ROOTPATH'),//头像保存根路径
        'exts'=>C('UPLOADS_EXTS'),//允许上传的文件后缀,
        'autoSub '=>true,
        'subName'=>'face'.'_'.$uid.'/'.date('ymd'),//子目录命名规则
        'saveName'=>mt_rand(0,99999).'_'.time(),//上传文件名定义规则
      );
      $upload = new \Think\Upload($config);// 实例化上传类
      $info   =   $upload->upload();
      if(!$info) {// 上传错误提示错误信息
        return 2;
      }else{// 上传成功
        foreach($info as $file){
          $path = $file['savepath'].$file['savename'];
        }
        //上传图片的完整路径
        $tmpPath = C('UPLOADS_ROOTPATH').'/'.$path;
        //生成2种格式的缩略图100*100 50*50
        $image = new \Think\Image();
        $image->open($tmpPath);
        //缩略图生成50*50路径
        $minPath = C('UPLOADS_ROOTPATH').'/'.$config['subName'].'/'.'mim_thumb'."_".$config['saveName'].'.jpg';
        $image->thumb(50, 50,\Think\Image::IMAGE_THUMB_FIXED)->save($minPath);
        //缩略图生成100*100路径
        $medPath = C('UPLOADS_ROOTPATH').'/'.$config['subName'].'/'.'med_thumb'."_".$config['saveName'].'.jpg';
        $image->thumb(100, 100,\Think\Image::IMAGE_THUMB_FIXED)->save($medPath);
        //把3种格式路径存到数据库
        $data = array(
          'pic'=>$tmpPath,
          'mim_thumb'=>$minPath,
          'med_thumb'=>$medPath
        );
        M('user_details')->where(array('user_id'=>$uid))->save($data);
        return 1;
      }
  }

  //更多个人资料
  public function more(){
    $uid = I('uid');
    if($uid){
      $info = M('user_details')->field('marriage,income,id_card,educate')->where(array('user_id'=>$uid))->find();
      $this->assign('info',$info);
      $this->assign('uid',$uid);
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }

  }
  //处理更多个人资料
  public function actionMore(){
    //组装上传数组
    $uid = I('uid');
    $data = array(
      'marriage'=>I('marriage'),
      'educate'=>I('educate'),
      'income'=>I('income'),
      'id_card'=>I('id_card')
    );
    M('user_details')->where(array('user_id'=>$uid))->save($data);
    $this->ajaxReturn('1');
  }

  //账户安全
  public function safetyCenter(){
    $uid = I('uid');
    if($uid){
      $info = M('user_details')->where(array('uid'=>$uid))->find();
      $emailARR = explode('@',$info['email']);
      $email = substr_replace($emailARR[0],'***','-3','3');
      $tmp = $email.'@'.$emailARR[1];
      $this->assign('email',$tmp);
      $this->assign('info',$info);
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }

  //修改用户密码
  public function editPwd(){
    $uid = I('uid');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
  //验证码
  public function verify(){
    $Verify = new \Think\Verify();
    $Verify->entry(3);
  }
  //检查验证码
  public function checkVerify(){
    $code = I('verify');
    $uid = I('uid');
    $verify = new \Think\Verify();
    if($verify->check($code, '3')){
      //组装修改密码数组
      $data = array(
        'pwd'=>I('pwd','','md5')
      );
      //去数据库更改密码
      M('user')->where(array('user_id'=>$uid))->save($data);
      $this->ajaxReturn('1');
    }else{
      $this->ajaxReturn('2');
    }
  }
  //修改密码成功页
  public function pwdSuccess(){
    $uid = I('uid');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
  //邮箱验证
  public function verifyMail(){
    $uid = I('uid');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
  //发送邮件
  public function setMail(){
    $uid = I('uid');
    $email = I('email');
    if($uid && $email){
      $serialize = serialize($uid.','.$email);
      $url = U('finishMailCheck',array('serialize'=>$serialize));
      sendMail("$email","仿京东：邮件验证","内容:请点击以下链接以完成验证:<a href='http://".'127.0.0.1/'."$url'>".date('ymdhis').rand(00000-99999)."</a>");
      $this->ajaxReturn('1');
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }

  //发送邮件成功后
  public function sendMailSuccess(){
    $uid = I('uid');
    $email = I('email');
    if($uid && $email){
      $dd = explode('@',$email);
      $e_tmp = substr_replace($dd[0],'***',-3,3);
      $str = $e_tmp.'@'.$dd[1];
      $this->assign('email',$str);
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }

  //完成邮箱验证
  public function finishMailCheck(){
//    $s = unserialize(I('serialize'));
    $tmp = I('serialize','','unserialize');//获得传参
    $sArr = explode(',',$tmp);
    $uid = $sArr[0];
    $email = $sArr[1];
    if($uid && $email){
      //把验证邮箱写到相对应的user_id
      $data = array(
        'email'=>$email,
        'flag'=>'1'
      );
      if(M('user_details')->where(array('user_id'=>$uid))->save($data)){
        $this->redirect('Member/BindMail', array('uid'=>$uid), 0, '');
      }else{
        $this->redirect('verifyMail', array('uid'=>$uid), 0, '');
      }
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
  //邮件绑定成功
  public function BindMail(){
    $uid = I('uid');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Index/index', '', 0, '');
    }
  }
}