<?php
namespace Seller\Controller;
use Think\Controller;
class MembersController extends CommonController {

  public function members(){
    //导入第三方类库
    import('@.Class.Page');
    //实例化数据模型
    $members = D('sellers_admin');

    //接收表单传递的搜索条件
    $adname = I('search');
//    dump($adname);
//    die;
    //组合查询条件

    $sellers_id=session('id');
//    组装WHERE条件
        $where['adname'] = array('like','%'.$adname.'%');
        $where['sellers_id']=array('eq',$sellers_id);
        $where['recycle']=array('eq',1);
//      $where="adname LIKE '%{$adname}%' and sellers_id='{$id}'";
    $count = $members->where($where)->count();

    //进行第三方分页类配置
    $page = array(
        'total' => $count,//总数
        'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
        'max' => !empty($param['max']) ? $param['max'] : 2,//每页显示多少条记录
        'url_model' => 1,//URL模式
        'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
        'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
        'url_suffix' => true,//url后缀
        'tags' => array('首页','上一页','下一页','尾页'),
    );
    //实例化第三方分页类库
    $p = new \Page($page);
    //获取sellers_admin中管理员信息
    $data = $members ->where($where)->limit($p->pagerows(),$p->maxrows())->select();

//    $data = $members->select();
    $this ->assign('members',$data);
    $this->assign('pageNav',$p->get_page());
    $this ->display();
  }

  public function edit(){
//    获取U传过来的值
    $id=I('id');
//    dump($id);
//    die;
//    实例化数据模型
    $SellerAdmin = D('sellers_admin');
    //获取管理员信息
    $data = $SellerAdmin->where('id='.$id)->find();
//    dump($data);
//    die;
    $this ->assign('edit',$data);
    $this ->display();
  }
  public function updateEdit(){
//    获取传过来的值
    $pic=I('pic');
    $email=I('email');
    $status=I('status')=='正常登录'?'1':'0';
    $role=I('role')=='普通管理员'?'1':'2';
    $adname=I('adname');
    $condition = array('pic'=>$pic,'email'=>$email,'status'=>$status,'role'=>$role,'adname'=>$adname);

//    实例化数据模型
    $seller_admin=D('sellers_admin');
    $result = $seller_admin->where($condition)->find();
//    dump($result);
//    die;
//    判断result为真则信息没有更新
    if($result){
      $this->ajaxReturn(0);
    }else{
//      信息修改，更新数据库

      $condition1= array('pic'=>$pic,'email'=>$email,'status'=>$status,'role'=>$role);
      $data= array('adname'=>$adname);
      $result1=$seller_admin->where($data)->save($condition1);
      if($result1){
        $this->ajaxReturn(1);
      }else{
        $this->ajaxReturn(2);
      }
    }
  }

  public function addmembers(){
    //获取ajax传过来的值
    $adname=I('adname');
    $password=I('password','','md5');
    $email=I('email');
    $role=I('role')=='普通管理员'?1:2;
    $status=I('status')=='锁定'?0:1;
    $pic=I('pic');
    $time=time();
    $seller_id=session('id');
    $recycle=1;
    //    实例化数据模型
    $sellers_admin=D('sellers_admin');
    $name=array('adname'=>$adname);
    $result1= $sellers_admin->where($name)->find();
    if($result1){
      $this->ajaxReturn(0);
    }else{
      $info=array('sellers_id'=>$seller_id,'adname'=>$adname,'password'=>$password,'email'=>$email,'pic'=>$pic,'role'=>$role,'status'=>$status,'add_time'=>$time,'recycle'=>$recycle);

      //插入数据库
      $result = $sellers_admin->add($info);
      if($result){
        $this->ajaxReturn(1);
      }else{
        $this->ajaxReturn(2);
      }
    }
  }
  public function updateRecycle(){
//    接收U传过来的值
    $id=I('id');
//    dump($id);
//    die;
    //把recycle设为1放入回收站中
    $data=array('recycle'=>0);
    //实例化数据模型
    $sellers_admin=D('sellers_admin');
    $result = $sellers_admin ->where('id='.$id) ->save($data);
    if($result){
      $this ->redirect('members');

    }
  }
  public function recycleMember(){
    //导入第三方类库
    import('@.Class.Page');


//    实例化数据模型
  $sellers_admin=D('sellers_admin');
    $sellers_id=session('id');

    $where['sellers_id']=array('eq',$sellers_id);
    $where['recycle']=array('eq',0);

    $count = $sellers_admin->where($where)->count();

    //进行第三方分页类配置
    $page = array(
        'total' => $count,//总数
        'url' => !empty($param['url']) ? $param['url'] : '',//URL配置
        'max' => !empty($param['max']) ? $param['max'] : 1,//每页显示多少条记录
        'url_model' => 1,//URL模式
        'ajax' =>  !empty($param['ajax']) ? true : false,//开启ajax分页
        'out' =>  !empty($param['out']) ? $param['out'] : false,//输出设置
        'url_suffix' => true,//url后缀
        'tags' => array('首页','上一页','下一页','尾页'),
    );
    //实例化第三方分页类库
    $p = new \Page($page);
    //获取sellers_admin中管理员信息
    $result = $sellers_admin ->where($where)->limit($p->pagerows(),$p->maxrows())->select();

    //查找放入回收站的数据
//    $result = $sellers_admin ->where($recycle) ->select();

//    把数据分配到recycleMember.html页面中
    $this ->assign('data',$result);
    $this->assign('pageNav',$p->get_page());
    $this->display();
  }
  public function delRecycle() {
    //获取传过来的ID值
    $id=I('id');
//    实例化数据模型
    $sellers_admin=M('sellers_admin');
    $where=array('id'=>$id);
    $result = $sellers_admin->where($where)->delete();
    if($result){
      $this->redirect('members');
    }
    $this->display();
  }

  public function recover(){
    $id=I('id');

    $sellers_admin = D('sellers_admin');
    $recycle=array('recycle'=>1);
    $result = $sellers_admin ->where('id='.$id) ->save($recycle);
    if($result){
      $this ->redirect('members');
    }
  }
}