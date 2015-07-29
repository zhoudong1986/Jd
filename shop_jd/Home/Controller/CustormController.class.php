<?php
/**
 * 客服中心
 * User: Administrator
 * Date: 2015/7/28
 * Time: 17:13
 */

namespace Home\Controller;
use Think\Controller;

class CustormController extends Controller{
//客服首页
  public function index(){
    $uid = I('uid');
    if($uid){
      $info = M('user')->where(array('user_id'=>$uid))->field('user_name')->find();
      $this->assign('info',$info);
      $this->display('custorm');
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }
//谈话页
  public function talk(){
    $uid = I('uid','');
    $orderid = I('orderid','');
    if($uid){
      $this->display();
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }

  //获得客户前台消息
  public function getTalk(){
    $uid = I('uid','');
    $custormTOclient = I('custormTOclient','');//客服回客户的消息
    $clientTOcustorm = I('clientTOcustorm'); //客户回客服信息
    if($uid){ //告诉客服答应器的客户ID
      $user_name = M('user')->where(array('user_id'=>$uid))->field('user_name')->find()['user_name'];
      echo json_encode(array(
        'type'=>'clientTOcustorm',
        'content'=>'uid'
      ));
      die;
    }
//    if($custormTOclient['cusTOcl_status']){ //有客服回客户信息
//      $time = date('H:i:s',time());
//      $contents = $custormTOclient['contents'];
//      $con =<<<EOF
//            <div class="im-message clearfix">
//                <div class="im-user-area">
//                  <a href="#" class="im-user-pic">
//                    <img alt="京东客服" src="/shop_jd/Home/Public/images/user3.png" class="userPic">
//                    <img alt="" src="/shop_jd/Home/Public/images/cap48.png" class="im-user-pic-cap">
//                  </a>
//                </div>
//                <div class="im-message-detail">
//                  <table class="im-message-table" border="0" cellpadding="0" cellspacing="0">
//                    <tbody>
//                    <tr>
//                      <td class="lt">
//                      </td>
//                      <td class="tt">
//                      </td>
//                      <td class="rt">
//                      </td>
//                    </tr>
//                    <tr>
//                      <td class="lm">
//                              <span>
//                              </span>
//                      </td>
//                      <td class="mm">
//                        <div class="im-message-title">
//                          <p class="im-message-owner">
//                                  <span class="im-txt-bold">
//    京东客服
//                                  </span>
//                          </p>
//                                <span class="im-send-time">
//      $time
//    </span>
//                        </div>
//                        <div class="im-message-content">
//                          <p style="font-family: 宋体; font-size: 14pt; color: rgb(0, 0, 0);">
//        $contents
//                          </p>
//                        </div>
//                      </td>
//                      <td class="rm">
//                              <span>
//                              </span>
//                      </td>
//                    </tr>
//                    <tr>
//                      <td class="lb">
//                      </td>
//                      <td class="bm">
//                      </td>
//                      <td class="rb">
//                      </td>
//                    </tr>
//                    </tbody>
//                  </table>
//                </div>
//              </div>
//EOF;
//
//      $this->ajaxReturn('2');
//    }


  }
  public function custormTalk(){
    $this->display();
  }
}