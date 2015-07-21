<?php
namespace Seller\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){

      // dump(__CONTROLLER__);
      $this->display();
      
    } 
    public function copy(){
    	$this->display();
    }
    public function profile(){
      $id =session('id');
      $sname=session('sname');
//      组装where语句
      $where=array('id'=>$id,'sname'=>$sname);
      $sellers=D('sellers');
      $result1=$sellers->where($where)->find();
      //$result1为真则为超级管理员
      if($result1){
        $this ->assign('data',$result1);
        $this ->display();
      }else{
        //若为普通管理员，获取其信息
        $sellers_admin=D('sellers_admin');
        $result2=$sellers_admin->where($where)->find();
        $this ->assign('data',$result2);
        $this ->display();
      }

    }
    public function updateAd(){

      $pic=I('pic');
      $email=I('email');
      $id=session('id');
      //把修改信息组合成数组
      $data=array('pic'=>$pic,'email'=>$email);
      $where=array('id'=>$id);

      if(session('manager')){

//          实例化超级管理员数据模型
        $sellers=D('sellers');
        //判断所修改数据是否没变，没变返回0
        $info=$sellers->where($where)->find();
        if($info['pic']==$pic && $info['email']==$email){
          $this ->ajaxReturn(0);
        }else{
          //把修改后的数据存入数据库，成功返回1，否则返回2
          $result=$sellers ->where($where) ->save($data);
          if($result){
            $this->ajaxReturn(1);
          }else{
            $this->ajaxReturn(2);
          }
        }

      }else{
        //实例化普通管理员数据模型
        $sellers_admin=D('sellers_admin');
        //判断所修改数据是否没变，没变返回0
        $info=$sellers_admin->where($where) ->find();
        if($info['pic']==$pic && $info['email']==$email){
          $this ->ajaxReturn(0);
        }else{
          $result=$sellers_admin ->where($where) ->save($data);
          if($result){
            $this->ajaxReturn(1);
          }else{
            $this ->ajaxReturn(2);
          }
        }

      }

    }
}