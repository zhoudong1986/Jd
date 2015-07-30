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
  private $flag = '0'; //客服聊天标志位
  private $uidArray = array(); //已被放进监听表的用户ID数组
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

  //检测聊天记录表
  public function getTalk(){
    $uid = I('uid','');
    $str = ''; //用来装html容器
    if($uid){
      //去聊天记录表查询有没有自己的ID
      $info = M('talks_record')->where(array('user_id'=>$uid))->select();
      if($info){
        foreach($info as $k=>&$v){ //把时间戳都转换为12:0:0这种形式
          if($v['time']){
            $v['time']=date('H:i:s',$v['time']);
          }
        }
        //根据留言身份不同，来创建不一样的HTML
        foreach($info as $key=>$val){
          if($val['relat']==2){// 管理员的留言
            $str .=<<<EOF
            <div class="im-item im-others">
              <div class="im-message clearfix">
                <div class="im-user-area">
                  <a href="#" class="im-user-pic">
                    <img alt="京东客服" src="/shop_jd/Home/Public/images/user3.png" class="userPic">
                    <img alt="" src="/shop_jd/Home/Public/images/cap48.png" class="im-user-pic-cap">
                  </a>
                </div>
                <div class="im-message-detail">
                  <table class="im-message-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td class="lt">
                      </td>
                      <td class="tt">
                      </td>
                      <td class="rt">
                      </td>
                    </tr>
                    <tr>
                      <td class="lm">
                              <span>
                              </span>
                      </td>
                      <td class="mm">
                        <div class="im-message-title">
                          <p class="im-message-owner">
                                  <span class="im-txt-bold">
                                    京东客服
                                  </span>
                          </p>
                                <span class="im-send-time">
                                  {$val['time']}
                                </span>
                        </div>
                        <div class="im-message-content">
                          <p style="font-family: 宋体; color: rgb(0, 0, 0);">
                            {$val['content']}
                          </p>
                        </div>
                      </td>
                      <td class="rm">
                              <span>
                              </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="lb">
                      </td>
                      <td class="bm">
                      </td>
                      <td class="rb">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
EOF;
          }else{//用户留言
            $str.=<<<EOF
            <div class="im-item im-me">
              <div class="im-message clearfix">
                <div class="im-user-area">
                  <a href="#" class="im-user-pic">
                    <img alt="" src="/shop_jd/Home/Public/images/31383835303331333133395f7031343234353239333932393832_mid.jpg"
                         class="userPic">
                    <img alt="" src="/shop_jd/Home/Public/images/cap48.png" class="im-user-pic-cap">
                  </a>
                </div>
                <div class="im-message-detail">
                  <table class="im-message-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td class="lt">
                      </td>
                      <td class="tt">
                      </td>
                      <td class="rt">
                      </td>
                    </tr>
                    <tr>
                      <td class="lm">
                      </td>
                      <td class="mm">
                        <div class="im-message-title">
                          <p class="im-message-owner">
                                  <span class="im-txt-bold">
                                    18850313139_p
                                  </span>
                          </p>
                                <span class="im-send-time">
                                  {$val['time']}
                                </span>
                        </div>
                        <div class="im-message-content">
                          <p style="font-family: 黑体; font-size: 18pt; color: rgb(51, 51, 51);">
                            {$val['content']}
                          </p>
                        </div>
                      </td>
                      <td class="rm">
                              <span>
                              </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="lb">
                      </td>
                      <td class="bm">
                      </td>
                      <td class="rb">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
EOF;
          }
        }
      }
      $this->ajaxReturn($str);
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }
  //调用客服端聊天界面
  public function custormTalk(){
    $this->display();
  }

  //接入监听列表
  public function sendTalk(){
    $uid = I('uid','');
    //当有接收到客户ID的时候先把当前用户ID放到监听表里面，等待客服接待
    if($uid){
      //查询当前用户ID是否在监听列表里面，在就不重新插入了
      if(!M('monitor')->where(array('user_id'=>$uid))->count('mid')){
        $data = array(
            'user_id'=>$uid,
            'status'=>1,
            'time'=>time()
        );
        if(M(monitor)->add($data)){
          //插入成功后告诉前台页面它前面还有多少个人在等待
          $info = M('monitor')->where("user_id not in($uid)")->count('mid');
          echo json_encode(array(
              'status'=>"1",
              'nums'=>$info
          ));
        }
      }else{
        $info = M('monitor')->where("user_id not in($uid)")->count('mid');
        echo json_encode(array(
            'status'=>"1",
            'nums'=>$info
        ));
      }
    }
  }

  //客服页获取监听列表
  public function getListen(){
    $info = M()->table(array('jd_monitor'=>'m','jd_user'=>'u'))->where("m.user_id=u.user_id AND m.status=1")->field('u.user_id,u.user_name')->select();
    echo json_encode(array(
      'status'=>1,
      'content'=>$info
    ));
  }

  //插入客服对应用户表
  public function setRecords(){
    $uid = I('uid');
    $con = "";
    $time = '';
    if($uid){
      $data =array(
        'user_id'=>$uid,
        'cid'=>122,
        'content'=>'您好，京东客服122号很高兴为您服务！',
        'time'=>time(),
        'relat'=>'2'
      );
      $con = $data['content'];
      $time = date('H:i:s',$data['time']);
      //插入数据库
      if(M('talks_record')->add($data)){
        $this->ajaxReturn('1');// 返回真给前台让前台去遍历数据库里面的消息
      }
    }else{
      $this->redirect('Login/login','',0,'');
    }
  }

  //获得对话记录表内容
  public  function  getRecord(){
    $uid = I('uid');
    $info = M('talks_record')->where(array('user_id'=>$uid,'cid'=>'122'))->order('time ASC')->select();
    $str = '';//用来装返回前台创建html的容器
    if($info){ //有数据才遍历
      foreach($info as $k=>&$v){ //把时间戳都转换为12:0:0这种形式
        if($v['time']){
          $v['time']=date('H:i:s',$v['time']);
        }
      }
      //根据身份组装不同的代码
      foreach($info as $key=>$val){
        if($val['relat']==2){// 管理员的留言
          $str .=<<<EOF
            <div class="im-item im-others">
              <div class="im-message clearfix">
                <div class="im-user-area">
                  <a href="#" class="im-user-pic">
                    <img alt="京东客服" src="/shop_jd/Home/Public/images/user3.png" class="userPic">
                    <img alt="" src="/shop_jd/Home/Public/images/cap48.png" class="im-user-pic-cap">
                  </a>
                </div>
                <div class="im-message-detail">
                  <table class="im-message-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td class="lt">
                      </td>
                      <td class="tt">
                      </td>
                      <td class="rt">
                      </td>
                    </tr>
                    <tr>
                      <td class="lm">
                              <span>
                              </span>
                      </td>
                      <td class="mm">
                        <div class="im-message-title">
                          <p class="im-message-owner">
                                  <span class="im-txt-bold">
                                    京东客服
                                  </span>
                          </p>
                                <span class="im-send-time">
                                  {$val['time']}
                                </span>
                        </div>
                        <div class="im-message-content">
                          <p style="font-family: 宋体; color: rgb(0, 0, 0);">
                            {$val['content']}
                          </p>
                        </div>
                      </td>
                      <td class="rm">
                              <span>
                              </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="lb">
                      </td>
                      <td class="bm">
                      </td>
                      <td class="rb">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
EOF;
        }else{//用户留言
          $str.=<<<EOF
            <div class="im-item im-me">
              <div class="im-message clearfix">
                <div class="im-user-area">
                  <a href="#" class="im-user-pic">
                    <img alt="" src="/shop_jd/Home/Public/images/31383835303331333133395f7031343234353239333932393832_mid.jpg"
                         class="userPic">
                    <img alt="" src="/shop_jd/Home/Public/images/cap48.png" class="im-user-pic-cap">
                  </a>
                </div>
                <div class="im-message-detail">
                  <table class="im-message-table" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                      <td class="lt">
                      </td>
                      <td class="tt">
                      </td>
                      <td class="rt">
                      </td>
                    </tr>
                    <tr>
                      <td class="lm">
                      </td>
                      <td class="mm">
                        <div class="im-message-title">
                          <p class="im-message-owner">
                                  <span class="im-txt-bold">
                                    18850313139_p
                                  </span>
                          </p>
                                <span class="im-send-time">
                                  {$val['time']}
                                </span>
                        </div>
                        <div class="im-message-content">
                          <p style="font-family: 黑体; font-size: 18pt; color: rgb(51, 51, 51);">
                            {$val['content']}
                          </p>
                        </div>
                      </td>
                      <td class="rm">
                              <span>
                              </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="lb">
                      </td>
                      <td class="bm">
                      </td>
                      <td class="rb">
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
EOF;
        }
      }
    }
    $this->ajaxReturn($str);
  }

  //把用户发送的消息放到数据库
  public function sendRecords(){
    $content = I('con');
    $uid = I('uid');
    //组装上传数据
    $data = array(
      'content'=>$content,
      'time'=>time(),
      'cid'=>'122',
      'user_id'=>$uid,
      'relat'=>'2'
    );
    if(M('talks_record')->add($data)){
      $this->ajaxReturn(1);
    }
  }

  //客户端上传聊天信息到数据库
  public function addRecords(){
    $content = I('con');
    $uid = I('uid');
    //组装上传数据
    $data = array(
        'content'=>$content,
        'time'=>time(),
        'cid'=>'122',
        'user_id'=>$uid,
        'relat'=>'1'
    );
    if(M('talks_record')->add($data)){
      $this->ajaxReturn(1);
    }
  }
}