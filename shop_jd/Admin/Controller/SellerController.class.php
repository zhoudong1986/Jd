<?php
namespace Admin\Controller;
use Think\Controller;
class SellerController extends CommonController {
	// 商家列表
    public function index(){
    	// 引进第三方分页类,格式:  @.Class类名
    	import('@.Class.Page');
    	// 接收表单传过来的搜索值
    	$search = I('get.search');
    	// 制作查询条件、
    	$where['sname'] = array('like','%'.$search.'%');
    	// 实例化model类
    	$seller = M('sellers');
    	// 查询符合条件的数据总数
    	$count = $seller->where($where)->count();
    	// 进行第三方分页类的配置
    	$page = array(
    		'total' => $count,//数据总数
    		'url' => !empty($param['url']) ? $param['url'] : '' ,//配置url
    		'max' => !empty($param['max']) ? $param['max'] : 6,//设置每页显示条数
    		'url_model' => 1,//设置为url模式
    		'ajax' => !empty($param['ajax']) ? true :false,//开启ajax分页
    		'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
    		'url_suffix' => true,//开启URL后缀
    		'tags' => array('首页','上一页','下一页','尾页')
    		);
    	// 实例化分页类
    	$p = new \Page($page);
    	// 查询符合条件的数据
    	$data = $seller->where($where)->field('sellers_id,sname,level,pic,status')->limit($p->pagerows(),$p->maxrows())->select();
    	// 分配变量
    	$this->assign('sellers',$data);
    	$this->assign('page',$p->get_page());
       	$this->display();
    }

    // 修改商家头像
    public function coin() {
    	// 配置文件上传的参数
    	$config = array(
    		'maxSize' => 3145728,//文件上传的最大值
    		'rootPath' => './shop_jd/Public/Uploads/',//保存文件的根路径
    		'savePath' => 'member/',//保存文件的目录
    		'exts' => array('jpg','jpeg','png','gif')//文件的类型
    		);
    	// 实例化文件上传
    	$upload = new \Think\Upload($config);
    	// 上传头像
    	$info = $upload->uploadOne($_FILES['pic']);
		$error = 'error';
    	if(!$info){//上传失败
    		// 分配变量
    		$this->assign('file',$error);
    	}else{//上传成功
    		// 组合头像新名字
    		$file = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
    		// 接收id
    		$id = I('id');
    		// 实例化Model类
    		$seller = M('sellers');
    		// 要修改的信息
    		$data = array(
    			'sellers_id' => $id,
    			'pic' => $file
    			);
    		// 执行修改操作
    		$upResult = $seller->save($data);
    		if(!$upResult){//失败
    			$this->assign('file',$error);
    		}else{//成功
    			$this->assign('file',$file);
    		}
    		$this->display();
    	}
    }

    //修改商家状态
    public function status() {
    	// 接收数据
    	$id = I('post.id');
    	$status = I('post.status');
    	// 实例化Model类
    	$seller = M('sellers');
    	// 组合修改信息
    	$data = array(
    		'sellers_id' => $id,
    		'status' => $status
    		);
    	// 执行修改
    	$upResult = $seller->save($data);
    	if(!$upResult){//修改失败
    		$this->ajaxReturn(0);
    	}else{//修改成功
    		$this->ajaxReturn(1);
    	}
    }

    //跳转到商家密码页面
    public function editPwd() {
    	// 接收id
    	$id = I('id');
    	//接收商家名称
    	$name = I('get.name');
    	// 分配数据
    	$this->assign('id',$id);
    	$this->assign('name',$name);
    	$this->display();
    }

    //修改密码
    public function doEditPwd() {
        // 接收信息
        $id = I('id');
        $pwd = I('pwd','','md5');
        // 实例化Model类
        $seller = M('sellers');
        // 组合修改信息
        $data = array(
            'sellers_id' => $id,
            'password' => $pwd
            );
        // 修改
        $upResult = $seller->save($data);
        if(!$upResult){//修改失败
            $this->error('修改失败');
        }else{
            $this->success('修改成功',U('index'));
        }
    }

    // 跳转到商家资料页面
    public function getInfo() {
        // 接收id
        $id = I('get.id');
        // 实例化Model类
        $seller = M('sellers');
        // 查询商家资料
        $data = $seller->where('sellers_id='.$id)->field('sname,status,add_time,level,email')->find();
        if(!$data){//查询失败
            $this->error('获取商家资料失败,请稍后再试');
            return false;
        }else{//查询成功
            // 分配变量
            $this->assign('id',$id);
            $this->assign('seller',$data);
            $this->display();
        }
    }

    // 修改商家信息
    public function doEdit() {
        // 接收修改信息
        $id = I('id');
        $level = I('level');
        $email = I('email');
        // 实例化Model类
        $seller = M('sellers');
        // 组合修改信息
        $data = array('sellers_id'=>$id,'level'=>$level,'email'=>$email);
        // 修改
        $upResult = $seller->save($data);
        if(!$upResult){//修改失败
            $this->error('修改失败');
        }else{//修改成功
            $this->success('修改成功',U('index'));
        }
    }

    // 跳转添加商家页面
    public function add() {
        $this->display();
    }

    // 删除商家
    public function del() {
        // 接收id
        $id = I('id');
        // 实例化Model类
        $seller = M('sellers');
        // 删除
        $delResult = $seller->delete($id);
        if(!$delResult){//删除失败
            $this->error('删除失败');
        }else{//删除成功
            $this->success('删除成功',U('index'));
        }
    }

    // 添加商家
    public function doAdd() {
        // 接收商家信息
        $name = I('name');
        $pwd = I('pwd','','md5');
        $level = I('level');
        $status = I('status');
        $email = I('email');
        $add_time = date();
        // 实例化Model类
        $seller = M('sellers');
        // 组合商家信息
        $data = array(
            'sname' => $name,
            'password' => $pwd,
            'level' => $level,
            'status' => $status,
            'email' => $email,
            'add_time' => $add_time
            );
        // 添加商家
        $addResult = $seller->add($data);
        if(!$addResult){
            $this->error('添加失败');
        }else{
            $this->success('添加成功',U('index'));
        }
    }

    // 生成密匙
    public function mishi(){
        // 接收id
        $id = I('id');
        // 实例化Model类
        $seller = M('sellers');
        // 组合密匙
        $mishi = date().uniqid();
        // 组合修改信息
        $data = array('sellers_id'=>$id,'token'=>$mishi);
        // 写进数据库
        $upResult = $seller->save($data);
        if(!$upResult){//更新失败
            $this->ajaxReturn(0);
        }else{//更新成功
            $this->ajaxReturn($mishi);
        }
    }
}