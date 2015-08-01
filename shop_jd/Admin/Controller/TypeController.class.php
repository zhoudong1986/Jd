<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends CommonController {

	// 商品分类列表
    public function index(){
    	// 引进第三方分页类
    	import('@.Class.Page');
    	// 接收表单传过来的搜索值
    	$search = I('search');
    	// 查询条件
    	$where['cat_name'] = array('like','%'.$search.'%');
    	// 实例化Model类
    	$cate = M('category');
    	// 查询符合条件的数据总数
    	$count = $cate->where($where)->count();
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
    	$typeInfo = $cate->field(array('cat_id','cat_name','parent_id','path','is_show',"concat(path,cat_id)"=>'p'))->where($where)->order('p')->limit($p->pagerows(),$p->maxrows())->select();
  		$fidArr = $cate->field('parent_id')->select();
  		foreach($fidArr as $val){
  			$fid[] = $val['parent_id'];
  		}
  		// 给可删除的类做标识
  		foreach($typeInfo as &$val){
  			if(!in_array($val['cat_id'],$fid)){
  				$val['del'] = 'del';
  			}
  		}
  		// 分配变量
  		$this->assign('types',$typeInfo);
  		$this->assign('page',$p->get_page());
  		$this->display();
    }

    // 添加商品分类页面
    public function add(){
    	// 实例化model类
    	$cate = M('category');
    	// 查询所有商品分类
    	$c = $cate->field(array('cat_id','is_show','cat_name','path',"concat(path,cat_id)"=>'p'))->order('p')->select();
    	$disabled = array('disabled','');
  		foreach($c as &$val){
  			$num = substr_count($val['path'],',');
  			$rep = ($num-1)*6;
  			$nb = str_repeat('&nbsp;',$rep);
  			$str = $nb.$val['cat_name'];
  			$val['cat_name'] = $str;
  			$val['is_show'] = $disabled[$val['is_show']];
  		}
  		// 分配变量
  		$this->assign('cate',$c);
  		$this->display();
    }

    // 添加商品分类、、
    public function doAdd() {
    	// 接收信息
    	$name = I('post.name');
    	$path = I('post.p');
    	$desc = I('post.desc');
    	$status = I('post.status');
    	if($path == '0'){
    		$path = '0,';
    		$id = 0;
    	}else{
	    	$arr = explode(',',$path);
	    	// 获取父id
	    	$id = array_pop($arr);
	    	// 组装path路径
	    	$path = implode(',',$arr).','.$id.',';
    	}
    	// 实例化model类
    	$cate = M('category');
    	// 组合商品分类信息
    	$data = array(
    		'cat_name' => $name,
    		'cat_desc' => $desc,
    		'path' => $path,
    		'parent_id' => $id,
    		'is_show' => $status
    		);
    	// dump($data);die;
    	// 添加商品分类
    	$addResult = $cate->add($data);
    	if(!$addResult){
    		$this->error('添加失败');
    	}else{
    		$this->success('添加成功',U('index'));
    	}
    }

   	// 删除商品分类
   	public function del() {
   		// 接收id
   		$id = I('id');
   		// 实例化Model类
   		$cate = M('category');
   		// 删除商品分类
   		$delResult = $cate->delete($id);
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