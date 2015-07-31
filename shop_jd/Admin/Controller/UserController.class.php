<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
	//买家信息列表
    public function index(){
    	// 导入第三方类库,格式:  @.Class.类名
    	import('@.Class.Page');
    	//接收表单传递过来的搜索条件
    	$name = I('get.search');
        // 实例化Model类
        $user = M('user');
    	// 组合查询条件
    	$where['user_name'] = array('like','%'.$name.'%');
        // 查询符合条件的数据总数
        $count = $user->where($where)->count();
        // 进行第三方分页类的配置
        $page = array(
            'total' => $count,//分页显示的总数目
            'url' => !empty($param['url']) ? $param['url'] : '',//配置url
            'max' => !empty($param['max']) ? $param['max'] : 6,//设置每页显示的条数
            'url_model' => 1,//url模式
            'ajax' => !empty($param['ajax']) ? true : false,//开启ajax分页
            'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
            'url_suffix' => true,//url后缀
            'tags' => array('首页','上一页','下一页','尾页')
            );
        // 组合查询条件
        $where = "u.user_name LIKE '%{$name}%' AND u.user_id = a.user_id";
    	// 实例化第三方分页类
    	$p = new \Page($page);
    	// 查询符合条件的数据
    	$data = M()->table(array('jd_user'=>'u','jd_user_details'=>'a'))->field('u.user_id,u.user_name,u.level,u.status,a.pic')->where($where)->limit($p->pagerows(),$p->maxrows())->select();
    	// 分配变量
    	$this->assign('users',$data);
    	$this->assign('pageNav',$p->get_page());
        $this->display();
    }

    //买家状态修改
    public function status(){
    	// 接收id
    	$id = I('id');
    	// 接收要修改成的状态值
    	$status = I('status');
    	// 连接数据库
    	$user = M('user');
    	// 修改值
    	$data = array('status'=>$status);
    	// 执行修改操作
    	$upResult = $user->where('user_id='.$id)->save($data);
    	// 判断修改是否成功
    	if($upResult){//修改成功
    		$this->ajaxReturn(1);
    	}else{//修改失败
    		$this->ajaxReturn(0);
    	}

    }

    // 跳转修改买家密码页面
    public function editPwd(){
    	// 接收信息
    	$id = I('get.id');
    	$name = I('get.name');
    	// 分配数据
    	$this->assign('id',$id);
    	$this->assign('name',$name);
    	$this->display();
    }
    // 执行修改密码操作
    public function doEditPwd(){
    	// 接收信息
    	$id = I('post.id');
    	$pwd = I('post.pwd','','md5');
    	// 连接数据库
    	$user = M('user');
    	// 要修改的信息
    	$data = array('password'=>$pwd);
    	// 执行修改
    	$upResult = $user->where('user_id='.$id)->save($data);
    	if($upResult){//修改成功
			$this->success('修改成功',U('index'));    		
    	}else{//修改失败
    		$this->error('修改失败');
    	}
    }

    // 删除买家账号
    public function del(){
    	// 接收id
    	$id = I('get.id');
    	// 连接数据库
    	$user = M('user');
    	// 执行删除
    	$delResult = $user->delete($id);
    	if($delResult){//删除成功
    		$this->success('删除成功');
    	}else{//删除失败
    		$this->error('删除失败');
    	}
    }

    // 跳转买家资料页面
    public function getInfo(){
    	// 接收id
    	$id = I('get.id');
    	// 查询数据
        $userInfo = M()->table(array('jd_user'=>'u','jd_user_details'=>'a'))->where("u.user_id = a.user_id AND u.user_id=".$id)->field('u.user_name,u.level,u.status,a.email')->select();
    	if(!$userInfo){//查询失败
    		$this->error('系统繁忙,请稍后再试');
    		return false;
    	}
    	// 分配变量
    	$this->assign('id',$id);
    	$this->assign('user',$userInfo[0]);
    	// 显示页面
    	$this->display();
    }

    // 修改用户资料
    public function doEdit(){
            // 接收传过来的修改值
            $id = I('post.id');
            $name = I('post.name');
            $level = I('post.level');
            $email = I('post.email');
            $status = I('post.status');
            $user = M('user');
            // 组合修改信息
            $data = array(
                'user_id' => $id,
                'name' => $name,
                'level' => $level,
                'status' => $status,
                'email' => $email
                );
            // 修改信息
            $userResult = $user->save($data);
            if(!$userResult){//修改失败
                $this->error('修改失败',U('index'));
            }else{//修改成功
                $this->success('修改成功',U('index'));
            }
    }

    // 修改商家头像
    public function coin(){
        // 实例化文件上传类
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;//设置上传附件的最大值
        $upload->rootPath = './shop_jd/Public/Uploads/';//附件上传保存的根路径
        $upload->savePath = 'member/';//附件上传保存的目录
        $upload->exts = array('jpg','jpeg','png','gif');//附件上传的类型
        // 上传文件
        $info = $upload->uploadOne($_FILES['pic']);
        $file = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
        $error = 'error';
        if(!$info){//上传失败
            $this->assign('file',$error);
        }else{//上传成功
            // 接收id
            $id = I('id');
            // 实例化model类
            $address = M('user_details');
            // 更新信息
            $data = array('pic'=>$file);
            // 条件
            $where = 'user_id='.$id;
            // 修改
            $upResult = $address->where($where)->save($data);
            if($upResult){
                $this->assign('file',$file);
            }else{
                $this->assign('file',$error);
            }
        }
        $this->display();
    }
    
}