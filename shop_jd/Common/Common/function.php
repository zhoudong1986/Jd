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
