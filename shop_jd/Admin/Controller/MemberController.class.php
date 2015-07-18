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
}