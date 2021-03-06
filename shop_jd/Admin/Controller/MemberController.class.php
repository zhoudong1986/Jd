<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController {
    public function admin(){
    	// 导入第三方类库
    	import('@.Class.Page');

    	// 接收表单传递过来的搜索条件
    	$admin_name = I('get.search');

    	// 连接数据库
    	$admin = M('admin');

    	// 组合查询条件
    	$where['admin_name'] = array('like','%'.$admin_name.'%');

    	// 查询符合要求的总数据数量
    	$count = $admin->where($where)->count();

    	// 进行第三方分页类配置
    	$page = array(
    		'total' => $count,//总数
    		'url' => !empty($param['url']) ? $param['url'] : '',//配置url
    		'max' => !empty($param['max']) ? $param['max'] : 6,//设置每页显示条数
    		'url_model' => 1,//url模式
    		'ajax' => !empty($param['ajax']) ? true : false,//开启ajax分页
    		'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
    		'url_suffix' => true,//url后缀
    		'tags' => array('首页','上一页','下一页','尾页')
    		);
    	// 实例化第三方分页类库
    	$p = new \Page($page);
    	// 执行分页类查询操作
    	$data = $admin->where($where)->limit($p->pagerows(),$p->maxrows())->select();
        // 定义账号状态数组
        $statusArr = array('glyphicon glyphicon-lock','glyphicon glyphicon-ok');
        $buttonArr = array('解锁','锁定');
        $rightArr = array('btn-info','btn-success');
        foreach($data as &$val){
            $val['button'] = $buttonArr[$val['status']];
            $val['right'] = $rightArr[$val['status']];
            $val['status'] = $statusArr[$val['status']];
            $val['login_time'] = date('Y-m-d H:i:s',$val['login_time']);
        }

    	// 分配变量
    	$this->assign('admins',$data);
    	$this->assign('pageNav',$p->get_page());
		$this->display();
    }
    // 改变锁定状态
    public function status(){
        // 接收传来的变量
        $admin_id = I('admin_id');
        $status = I('status');
        if($status == '锁定'){
            $status = 0;
            $text = '解锁';
        }elseif($status == '解锁'){
            $status = 1;
            $text = '锁定';
        }
        // 连接数据库
        $admin = M('admin');
        // 制作修改条件
        $up = array(
            'status' => $status
            );
        // 执行修改操作返回结果
        $updateResult = $admin->where('admin_id='.$admin_id)->save($up);
        if($updateResult){//成功返回值
            $this->ajaxReturn($text);
        }else{//失败返回0
            $this->ajaxReturn(0);

        }
    }
 // 删除管理员
    public function del(){
        // 接收id
        $admin_id = I('id');
        // 连接数据库
        $admin = M('admin');
        // 执行删除
        $delResult = $admin->delete($admin_id);
        if($delResult){//删除成功
            $this->success('删除成功');
        }else{//删除失败
            $this->error('删除失败');
        }
    }

    // 跳转管理员密码的修改页面
    public function editPwd(){
        // 接收id
        $admin_id = I('get.id');
        // 接收用户名
        $admin_name = I('get.name');
        // 分配变量
        $this->assign('id',$admin_id);
        $this->assign('name',$admin_name);
        $this->display();
    }

    // 修改管理员密码
    public function doEditPwd(){
        // 接收id
        $admin_id = I('id');
        // 接收密码
        $password = I('pwd','','md5');
        // 连接数据库
        $admin = M('admin');
        // 组装要修改的信息
        $up = array('password'=>$password);
        // 执行修改操作
        $editResult = $admin->where('admin_id='.$admin_id)->save($up);
        if($editResult){//修改成功
            $this->success('修改密码成功',U('Member/admin'));
        }else{//修改失败
            $this->error('修改失败');
        }
    }

    // 获取管理员资料
    public function edit(){
        // 接收id
        $id = I('id');
        // 连接数据库
        $admin = M('admin');
        // 查询用户信息
        $adminInfo = $admin->where('admin_id='.$id)->find();
        if(!$adminInfo){
            $this->error('资料获取失败,正在返回。。。');
            return false;
        }
        switch($adminInfo['status']){
            case 1:
                $statusRig = 'checked';
                $statusErr = '';
                break;
            case 2:
                $statusErr = 'checked';
                $statusRig = '';
                break;
        }
        switch($adminInfo['role']){
            case 1:
                $roleOne = 'checked';
                $roleTwo = '';
                $roleThree = '';
                break;
            case 2:
                $roleOne = '';
                $roleTwo = 'checked';
                $roleThree = '';
                break;
            case 3:
                $roleOne = '';
                $roleTwo = '';
                $roleThree = 'checked';
                break;
        }
        $statusArr = array('锁定','正常使用');
        $roleArr = array('','超级管理员','管理员','网络编辑');
        // 分配变量
        $this->assign('id',$id);
        $this->assign('name',$adminInfo['admin_name']);
        $this->assign('qq',$adminInfo['qq']);
        $this->assign('phone',$adminInfo['phone']);
        $this->assign('email',$adminInfo['email']);
        $this->assign('statusRig',$statusRig);
        $this->assign('statusErr',$statusErr);
        $this->assign('roleOne',$roleOne);
        $this->assign('roleTwo',$roleTwo);
        $this->assign('roleThree',$roleThree);
        $this->assign('status',$statusArr[$adminInfo['status']]);
        $this->assign('role',$roleArr[$adminInfo['role']]);
        $this->display();
    }

    // 修改管理员信息
    public function doEdit(){
        // 接收修改信息
        $id = I('id');
        $name = I('name');
        $qq = I('qq');
        $phone = I('phone');
        $status = I('status');
        $role = I('role');
        $email = I('email');
        // 连接数据库
        $admin = M('admin');
        // 组合修改条件
        if($status == '正常使用' || $status == '锁定'){
            $up = array(
                'admin_name' => $name,
                'qq' => $qq,
                'phone' => $phone,
                'email' => $email
                );
        }else{
            $up = array(
                'admin_name' => $name,
                'qq' => $qq,
                'phone' => $phone,
                'status' => $status,
                'email' => $email,
                'role' => $role
                );
        }
        // 执行修改操作
        $upResult = $admin->where('admin_id='.$id)->save($up);
        if($upResult){
            $this->success('修改成功',U('admin'));
        }else{
            $this->error('修改失败');
        }
    }

    // 跳转添加管理员页面
    public function add() {
        $this->display();
    }

    // 添加管理员
    public function doAdd() {
        // 接收新管理员的信息
        $name = I('name');
        $pwd = I('pwd','','md5');
        $email = I('email');
        $role = I('role');
        $status = I('status');
        // 连接数据库
        $admin = M('admin');
        // 组合添加信息
        $addArr = array(
            'admin_name' => $name,
            'password' => $pwd,
            'email' => $email,
            'role' => $role,
            'status' => $status
            );
        // 添加管理员
        $addResult = $admin->add($addArr);
        if($addResult){
            $this->success('添加成功',U('admin'));
        }else{
            $this->error('添加失败');
        }
    }

}