<?php

/**
 * 邮件发送函数
 */
function sendMail($to, $subject, $content) {

  Vendor('PHPMailer.classphpmailer');

  $mail = new PHPMailer(); //实例化
  $mail->IsSMTP(); // 启用SMTP
  $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以126邮箱为例）
  $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
  $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
  $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
  $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
  $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
  $mail->AddAddress($to,"name");
  $mail->WordWrap = 50; //设置每行字符长度
  $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
  $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
  $mail->Subject =$subject; //邮件主题
  $mail->Body = $content; //邮件内容
  $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //邮件正文不支持HTML的备用显示
  if(!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit();
  } else {
//    echo "Message has been sent";
  }
}

/**
 * 返回省份、城市、地区、街道名字
 * @param int $int [省市地区码]
 * @param int $flag [标志位，1转变省份 2转变城市 3转变地区 4转变街道]
 * @param return array [从数据库查找到的省份|城市|地区的数组]
 */
function convertAddr($int){
  if($int){
    $info = M('region')->where(array('region_id'=>$int))->field('region_name')->find();
    return $info['region_name'];
  }else{
    echo "convertAddr函数初始化失败";
    return false;
  }
}

/**用户消息推送
 * @param [int] $uid [用户ID]
 * @param [int] $type [消息类型：1、社区提醒 2、系统通知 3、京东公告]
 */
function set_msg($uid,$type=1){
//  $name = '';
//  switch($type){
//    case 1:
//      $name = 'community';
//      break;
//    case 2:
//      $name = 'system';
//      break;
//    case 3:
//      $name = 'notice';
//      break;
//  }
  //判断该用户ID是否存在缓存中
  if(S('userMsg'.$uid)){
    //取出该消息数组
    $data = S('userMsg'.$uid);
    $data['total']++; //消息数目+1
    $data['status']=1; //消息状态为没推送
    S('userMsg'.$uid,$data,0);//覆盖原消息数组
  }else{//客户在内存中没有形成缓存
//    $data = array(
//      'community'=>array('total'=>0,'status'=>0), //社区提醒
//      'system'=>array('total'=>0,'status'=>0), //系统通知
//      'notice'=>array('total'=>0,'status'=>0) //京东公告
//    );
    $data= array(
        'total'=>0,
        'status'=>0
    );
    $data['total']++; //消息数目+1
    $data['status']=1; //消息状态为没推送
    S('userMsg'.$uid,$data,0); //形成缓存数组
  }
}

