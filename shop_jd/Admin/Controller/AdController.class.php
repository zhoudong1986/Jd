<?php
namespace Admin\Controller;
use Think\Controller;
class AdController extends CommonController {

	// 商品分类列表
    public function index(){
    	// 引进第三方分页类
    	import('@.Class.Page');
    	// 接收表单传过来的搜索值
    	$search = I('search');
    	// 查询条件
      $where['ad_model'] = array('like','%'.$search.'%');
    	// 实例化Model类
    	$ad = M('advantage');
    	// 查询符合条件的数据总数
    	$count = $ad->where($where)->count();
    	// 配置第三方分页类的相关配置
    	$config = array(
    		'url' => !empty($param['url']) ? $param['url'] : '',//配置url
    		'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
    		'max' => !empty($param['max']) ? $param['max'] : 6,//每页显示最大条数
    		'ajax' => !empty($param['ajax']) ? true : false,//开启ajax分页
    		'url_model' => 1,//设置URL模式
    		'total' => $count,//数据总数
    		'url_siffix' => true,//开启URL后缀
    		'tags' => array('首页','上一页','下一页','尾页')
    		);

    	// 实例化第三方分页类
    	$p = new \Page($config);
    	// 查询数据
    	$info = $ad->field(array('ad_id','ad_src','ad_img','type','ad_id','ad_model','ad_where',"concat(ad_model,ad_where)"=>'p'))->where($where)->order('p')->limit($p->pagerows(),$p->maxrows())->select();
  		// 分配变量
  		$this->assign('info',$info);
      $this->assign('search',$search);
  		$this->assign('page',$p->get_page());
  		$this->display();
    }

    // 修改广告图片
    public function pic() {
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
        $ad = M('advantage');
        // 要修改的信息
        $data = array(
          'ad_id' => $id,
          'ad_img' => $file
          );
        // 执行修改操作
        $upResult = $ad->save($data);
        if(!$upResult){//失败
          $this->assign('file',$error);
        }else{//成功
          $this->assign('file',$file);
        }
        $this->display();
      }
    }

    // 添加广告
    public function addAd() {
      // 实例化文件上传类
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;//设置最大值
        $upload->rootPath = './shop_jd/Public/Uploads/';//设置保存根路径
        $upload->savePath = 'good/';//设置目录
        $upload->exts = array('jpeg','jpg','png','gif');//上传类型
        // 上传图片
        $info = $upload->uploadOne($_FILES['pic']);
        if(!$info){//上传失败
            $this->error($upload->getError());
        }else{
            //组合商品图片名
            $file = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
            // 接收信息
            $ad_model = array_pop(explode(',',I('type')));
            $ad_where = array_pop(explode(',',I('wz')));
            $srcType = I('srcType');
            $adSrc = I('adSrc');
            if($srcType == 1){//店铺
              $ad_src = U('Seller/Shop/showShop',array("sellers_id"=>$adSrc),'');
            }else{//商品
              $ad_src = U('Home/Index/detail',array("good_id"=>$adSrc),'');
            }
            $data = array(
              'ad_src' => $ad_src,
              'ad_img' => $file,
              'ad_model' => $ad_model,
              'ad_where' => $ad_where,
              'type' => $srcType
              );
            $ad = M('advantage');
            $ad->where("ad_model='{$ad_model}' and ad_where='{$ad_where}'")->delete();
            $result = $ad->add($data);
            if(!$result){
              $this->error('添加失败',U('add'));
            }else{
              $this->success('添加成功',U('add'));
            }
        }
    }

    // 添加广告页面
    public function add(){
      // 实例化model类
      $m = M('model');
      // 查询所有商品分类
      $result = $m->where('pid=0')->field(array('id','name'))->select();
      // 分配变量
      $this->assign('model',$result);
      $this->display();
    }

    // 获取广告位置
    public function wh() {
      $id = array_shift(explode(',',I('id')));
       // 实例化model类
      $m = M('model');
      // 查询所有商品分类
      $result = $m->where('pid='.$id)->field(array('id','name'))->select();
      foreach($result as $val){
        $arr[$val['id']] = $val['name'];
      }
      // 分配变量
      $this->ajaxReturn($arr);
    }

    // 获取店铺
    public function ad() {
       // 实例化model类
        $s = M('sellers');
        // 查询所有商品分类
        $result = $s->field(array('sellers_id','sname'))->select();
        foreach($result as $val){
          $arr[$val['sellers_id']] = $val['sname'];
        }
        // 分配变量
        $this->ajaxReturn($arr);
    }

    // 获取商品
    public function gg() {
        $id = I('id');
       // 实例化model类
        $g = M('goods');
        // 查询所有商品分类
        $result = $g->where('sellers_id='.$id)->field(array('goods_id','goods_name'))->select();
        foreach($result as $val){
          $arr[$val['goods_id']] = $val['goods_name'];
        }
        // 分配变量
        $this->ajaxReturn($arr);
    }

    // 添加广告板块页面
    public function addM(){
    	// 实例化model类
    	$m = M('model');
    	// 查询所有商品分类
    	$result = $m->where('pid=0')->field(array('id','name','pid'))->select();
  		// 分配变量
  		$this->assign('model',$result);
  		$this->display();
    }

    // 添加广告板块、、
    public function doAdd() {
    	// 接收信息
    	$name = I('post.name');
    	$path = I('post.type');
    	if($path == '0'){
    		$id = 0;
    	}else{
	    	$id = $path;
    	}
    	// 实例化model类
    	$m = M('model');
    	// 组合商品分类信息
    	$data = array(
    		'name' => $name,
    		'pid' => $id
    		);
    	// dump($data);die;
    	// 添加商品分类
    	$addResult = $m->add($data);
    	if(!$addResult){
    		$this->error('添加失败');
    	}else{
    		$this->success('添加成功',U('addM'));
    	}
    }

   	// 删除商品分类
   	public function del() {
   		// 接收id
   		$id = I('id');
   		// 实例化Model类
   		$ad = M('advantage');
   		// 删除商品分类
   		$delResult = $ad->delete($id);
   		if (!$delResult) {//删除失败
   			$this->error('删除失败');
   		}else{//删除成功
   			$this->success('删除成功');
   		}
   	}

   	// 修改状态、
   	public function status() {
   		// 接收信息
   		$id = I('id');
   		$status = I('status');
   		// 组合修改信息
   		$data = array('cat_id'=>$id,'is_show'=>$status);
   		// 实例化Model类
   		$cate = M('category');
   		// 修改
   		$upResult = $cate->save($data);
   		if(!$upResult){//修改失败
   			$this->ajaxReturn(0);
   		}else{//修改成功
   			$this->ajaxReturn(1);
   		}
   	}

   	// 跳转到分类详情页面
   	public function getInfo(){
   		// 接收id
   		$id = I('id');
   		// 实例化Model类
   		$cate = M('category');
   		// 查询资料
   		$typeInfo = $cate->where('cat_id='.$id)->field('cat_name,parent_id,path,is_show,cat_desc')->find();
   		if(!$typeInfo){
   			$this->error('请求失败,请稍后再试');
   		}else{
   			// 分配变量
   			$this->assign('id',$id);
   			$this->assign('cate',$typeInfo);
   			$this->display();
   		}
   	}

   	// 修改商品分类
   	public function doEdit() {
   		// 接收信息
   		$id = I('id');
   		$name = I('name');
   		$flag = I('flag');
   		$Desc = I('Desc');
   		$oDesc = I('oDesc');
   		// 判断商品描述是否修改
   		if($Desc != $oDesc){
	   		$data = array(
	   			'cat_id' => $id,
	   			'cat_name' => $name,
	   			'cat_desc' => $Desc
	   			);
   		}else{
   			$data = array(
   				'cat_id' => $id,
   				'cat_name' => $name
   				);
   		}
   		// 实例化Model类
   		$cate = M('category');
		$upResult = $cate->save($data);
		if(!$upResult){//修改失败
			$this->error('修改失败');
		}else{//修改成功
			$this->success('修改成功',U('index'));
		}
   	}

}