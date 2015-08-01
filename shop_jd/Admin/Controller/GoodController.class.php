<?php
namespace Admin\Controller;
use Think\Controller;
class GoodController extends CommonController {
    
    // 商品列表
    public function index(){
        // 引进第三方分页类,格式:  @.Class类名
        import('@.Class.Page');
        // 接收表单传过来的搜索值
        $search = I('get.search');
        // 制作查询条件、
        $where['goods_name'] = array('like','%'.$search.'%');
        // 实例化model类
        $good = M('goods');
        // 查询符合条件的数据总数
        $count = $good->where($where)->count();
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
        $fieldArr = array(
            'goods_id',
            'goods_name',
            'goods_sn',
            'goods_img',
            'market_price',
            'is_onsale',
            'is_hot',
            'is_best',
            'is_promote',
            'is_new'
            );
        // 查询符合条件的数据
        $goods = $good->where($where)->field($fieldArr)->limit($p->pagerows(),$p->maxrows())->select();
        // 分配变量
        $this->assign('search',$search);
        $this->assign('goods',$goods);
        $this->assign('page',$p->get_page());
        $this->display();
    }

    // 改变商品上架情况
    public function status() {
        // 接收信息
        $id = I('id');
        $onsale = I('status');
        // 组合修改信息
        $data = array('goods_id'=>$id,'is_onsale'=>$onsale);
        // 实例化Model类
        $good = M('goods');
        // 修改商品状态
        $upResult = $good->save($data);
        if(!$upResult){//修改失败
            $this->ajaxReturn(0);
        }else{//修改成功
            $this->ajaxReturn(1);
        }
    }

    // 添加商品页面
    public function add(){
        // 实例化Model类
        $cate = M('category');
        $c = $cate->field(array('cat_id','is_show','cat_name','parent_id','path',"concat(path,cat_id)"=>'p'))->order('p')->select();
        $disabled = array('disabled','');
        foreach($c as $v){
            $fid[] = $v['parent_id'];
        }
        foreach($c as &$val){
            $num = substr_count($val['path'],',');
            $rep = ($num-1)*6;
            $nb = str_repeat('&nbsp;',$rep);
            $str = $nb.$val['cat_name'];
            $val['cat_name'] = $str;
            $val['is_show'] = $disabled[$val['is_show']];
            if(in_array($val['cat_id'],$fid)){
                $val['disabled'] = 'disabled';
            }
        }
        // 分配变量
        $this->assign('cate',$c);
        $this->display();
    }

    // 获取商品资料
    public function getInfo() {
        // 接收id
        $id = I('id');
        $table = array(
            'jd_brand' => 'b',
            'jd_goods' => 'g',
            'jd_category' => 'c'
            );
        $where = 'g.goods_id='.$id.' AND g.brand_id=b.brand_id AND g.cat_id=c.cat_id';
        //没心思写字段
        $field = 'b.*,g.*,c.cat_name';
        $info = M()->table($table)->where($where)->field($field)->find();
        // 实例化Model类
        $attr = M('goods_attr');
        $field = array(
            'attr_name',
            'group_concat(attr_value separator "、")' => 'attr_value'
            );
        $attrArr = $attr->where('good_id='.$id)->field($field)->group('attr_name')->select();
        // 分配变量
        if($info || $attrArr){
            $str = '';
            foreach($attrArr as $val){
                $str .= '<p class="form-control-static">'.$val['attr_name'].':'.$val['attr_value'].'&nbsp;&nbsp;';
            }
            $str .= '</p>';
            $this->assign('g',$info);
            $this->assign('str',$str);
            $this->display();
        }else{
            $this->error('请求失败');
        }
    }

    // 修改商品信息
    public function doEdit() {
        // 接收信息
        $id = I('id');
        $goods_name = I('goods_name');
        $market_price = I('market_price');
        $shop_price = I('shop_price');
        $promote_price = I('promote_price');
        $click_count = I('count');
        $goods_number = I('num');
        $onsale = I('onsale');
        $best = I('best');
        $promote = I('promote');
        $hot = I('hot');
        $new = I('new');
        $goods_brief = I('brief');
        $goods_desc = I('desc');
        // 组合修改信息
        $data = array(
            'goods_id' => $id,
            'goods_name' => $goods_name,
            'goods_brief' => $goods_brief,
            'goods_desc' => $goods_desc,
            'is_best' => $best,
            'is_promote' => $promote,
            'is_hot' => $hot,
            'is_onsale' => $onsale,
            'is_new' => $new,
            'click_count' => $click_count,
            'goods_number' => $goods_number,
            'shop_price' => $shop_price,
            'promote_price' => $promote_price,
            'market_price' => $market_price
            );
        // 实例化Model类
        $good = M('goods');
        $upResult = $good->save($data);
        if(!$upResult){
            $this->error('修改失败');
        }else{
            $this->success('修改成功',U('index'));
        }
    }

    // 获取对应品牌
    public function type(){
        // 接收id
        $id = I('type_id');
        // 实例化Model类
        $b = M('brand');
        $brand = $b->where('cat_id='.$id)->field('brand_id,brand_name')->select();
        foreach($brand as $val){
            $idArr[] =$val['brand_id'];
            $nameArr[] =$val['brand_name'];
        }
        $brandArr = array_combine($idArr,$nameArr);
        if(!$brand){//获取失败
            $this->ajaxReturn(0);
        }else{//获取成功
            $this->ajaxReturn($brandArr);
        }
    }

    //删除商品
    public function del(){
        // 接收id
        $id = I('id');
        // 实例化Model类
        $good = M('goods');
        $attr = M('goods_attr');
        $gal = M('galary');
        // 删除
        $goodResult = $good->delete($id);
        $attrResult = $attr->where('good_id='.$id)->delete();
        $galResult = $gal->where('goods_id='.$id)->delete();
        if(!$goodResult){
            $this->error('删除失败');
        }else{
            $this->success('删除成功');
        }
    }
    // 上传商品图片
    public function upload(){
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
            $fd = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
            // 制作缩略图
            $sf = 'sf_'.$info['savename'];
            $mid = 'mid_'.$info['savename'];
            $image = new \Think\Image();
            $image->open('./shop_jd/Public/Uploads/'.$info['savepath'].$info['savename']);
            $image->thumb(54,54)->save('./shop_jd/Public/Uploads/'.$info['savepath'].$sf);
            $image->open('./shop_jd/Public/Uploads/'.$info['savepath'].$info['savename']);
            $image->thumb(350,350)->save('./shop_jd/Public/Uploads/'.$info['savepath'].$mid);
            $sf = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$sf;
            $file = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$mid;
            $id = I('id');
            // 组合添加信息
            $data = array(
                'goods_id' => $id,
                'img_url' => $file,
                'thumb_url' => $sf,
                'imgBig' => $fd
                );
            // 实例化Model类
            $gal = M('galary');
            // 添加商品图片
            $addResult = $gal->add($data);
            if(!$addResult){
                $this->error('上传失败');
            }else{
                $this->success('上传成功');
            }

        }
    }
    //获取商品图片
    public function pic(){
          // 引进第三方分页类,格式:  @.Class类名
        import('@.Class.Page');
        // 接收表单传过来的搜索值
        $search = I('get.search');
        $name = I('name');
        $id = I('id');
        // 实例化model类
        $gal = M('galary');
        $where = 'goods_id='.$id;
        // 查询符合条件的数据总数
        $count = $gal->where($where)->count();
        // 进行第三方分页类的配置
        $page = array(
            'total' => $count,//数据总数
            'url' => !empty($param['url']) ? $param['url'] : '' ,//配置url
            'max' => !empty($param['max']) ? $param['max'] : 20,//设置每页显示条数
            'url_model' => 1,//设置为url模式
            'ajax' => !empty($param['ajax']) ? true :false,//开启ajax分页
            'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
            'url_suffix' => true,//开启URL后缀
            'tags' => array('首页','上一页','下一页','尾页')
            );
        // 实例化分页类
        $p = new \Page($page);
        // 查询
        $pics = $gal->where($where)->limit($p->pagerows(),$p->maxrows())->select();
        // 分配变量
        $this->assign('pic',$pics);
        $this->assign('id',$id);
        $this->assign('name',$name);
        $this->assign('page',$p->get_page());
        $this->display();
    }

    //删除商品图片
    public function doPic() {
       $arr = I('i');
        // 组合删除条件
       $where['img_id'] = array('in',$arr);
       // 实例化Model类？
       $gal = M('galary');
       $info = $gal->where($where)->field('img_url,thumb_url,imgBig')->select();
       foreach($info as $val){
        unlink(ltrim($val['img_url'],'/Jd/'));
        unlink(ltrim($val['thumb_url'],'/Jd/'));
        unlink(ltrim($val['imgBig'],'/Jd/'));
       }
       $delResult = $gal->where($where)->delete();
       if(!$delResult){//删除失败
        $this->error('删除失败');
       }else{//删除成功
        $this->success('删除成功');
       }
    }

    // 添加商品
    public function doAdd() {
        // dump(I('post.'));die;
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
            $fd = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
            // 制作缩略图
            $sf = 'sf_'.$info['savename'];
            $mid = 'mid_'.$info['savename'];
            $image = new \Think\Image();
            $image->open('./shop_jd/Public/Uploads/'.$info['savepath'].$info['savename']);
            $image->thumb(54,54)->save('./shop_jd/Public/Uploads/'.$info['savepath'].$sf);
            $image->open('./shop_jd/Public/Uploads/'.$info['savepath'].$info['savename']);
            $image->thumb(350,350)->save('./shop_jd/Public/Uploads/'.$info['savepath'].$mid);
            $sf = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$sf;
            $file = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$mid;
            // 接收信息
            $name = I('name');
            $cat_id = I('type');
            $brand_id = I('brand');
            $price = I('price');
            $onsale = I('onsale');
            $new = I('new');
            $hot = I('hot');
            $best = I('best');
            $promote = I('promote');
            $desc = I('desc');
            $shop_price = I('shop_price');
            $num = I('num');
            $editor = I('editor');
            // 实例化Model类
            $good = M('goods');
            $time = time();
            $sn = time().uniqid();
            // 组合商品信息
            $data = array(
                'goods_sn' => $sn,
                'goods_name' => $name,
                'cat_id' => $cat_id,
                'brand_id' => $brand_id,
                'market_price' => $price,
                'is_onsale' => $onsale,
                'is_hot' => $hot,
                'is_new' => $new,
                'is_best' => $best,
                'is_promote' => $promote,
                'goods_brief' => $desc,
                'goods_sn' => $sn,
                'goods_img' => $file,
                'goods_thumb' => $sf,
                'goods_imgBig' => $fd,
                'shop_price' => $shop_price,
                'goods_number' => $num,
                'add_time' => $time,
                'sellers_id' => 1,
                'goods_desc' => $editor
                );
            // 添加商品
            $addResult = $good->add($data);

            // 添加图片到相册
            // 实例化Model类
            $gal = M('galary');
            // 组合数据
            $data = array(
                'goods_id' => $addResult,
                'img_url' => $file,
                'thumb_url' => $sf,
                'imgBig' => $fd
                );
            // 插入数据
            $result = $gal->add($data);

            // 添加商品属性
            // 实例化Model类
            $attr = M('goods_attr');
            // 获取属性
            $arr = I('post.');
            for($i = 0;$i < 13;$i++){
                array_shift($arr);
            }
            foreach($arr as $key=>$val){
                foreach($val as $v){
                    $addList[] = array(
                        'attr_name' => $key,
                        'attr_value' => $v,
                        'cat_id' => $cat_id,
                        'brand_id' => $brand_id,
                        'good_id' => $addResult
                        );
                }
            }
            // dump($addList);die;
            $result = $attr->addAll($addList);
            if(!$result){
                $this->error('添加失败');
            }else{
                $this->success('添加成功',U('add'));
            }


        }
    }


    //获取属性
    public function attr() {
        // 接收id
        $brand_id = I('brand_id');
        $cat_id = I('type');
        $where = array(
            'brand_id' => $brand_id,
            'cat_id' => $cat_id,
            'good_id' => 0
            );
        // 实例化Model类
        $attr = M('goods_attr');
        // 查询数据
        $attrResult = $attr->where($where)->field('attr_name,attr_value')->select();
        $str = '';
        foreach($attrResult as $val){
            $valueArr = explode('@',$val['attr_value']);
            $arr[$val['attr_name']] = $valueArr;
        }
        foreach($arr as $key=>$va){

            $str .= '<div>'.$key.'：';
            foreach($va as $v){
                $str .= '<label><input type="checkbox" value="'.$v.'" name="'.$key.'[]">'.$v.'</label>&nbsp;&nbsp;';
                
            }
            $str .= '</div><br/>';
        }
        if(!$attrResult){//获取失败
            $this->ajaxReturn(0);
        }else{//获取成功
            $this->ajaxReturn($str);
        }
    }


    // 添加品牌页面
    public function badd(){
    	// 实例化Model类
    	$cate = M('category');
    	$c = $cate->field(array('cat_id','is_show','cat_name','parent_id','path',"concat(path,cat_id)"=>'p'))->order('p')->select();
    	$disabled = array('disabled','');
    	foreach($c as $v){
    		$fid[] = $v['parent_id'];
    	}
  		foreach($c as &$val){
  			$num = substr_count($val['path'],',');
  			$rep = ($num-1)*6;
  			$nb = str_repeat('&nbsp;',$rep);
  			$str = $nb.$val['cat_name'];
  			$val['cat_name'] = $str;
  			$val['is_show'] = $disabled[$val['is_show']];
  			if(in_array($val['cat_id'],$fid)){
  				$val['disabled'] = 'disabled';
  			}
  		}
  		// 分配变量
  		$this->assign('cate',$c);
  		$this->display();
    }

    // 添加品牌
    public function doBadd() {
    	// 实例化文件上传类
    	$upload = new \Think\Upload();
    	$upload->maxSize = 3145728;//设置最大上传值
    	$upload->rootPath = './shop_jd/Public/Uploads/';//保存根路径
    	$upload->savePath = 'logo/';//保存目录
    	$upload->exts = array('jpeg','jpg','png','gif');//允许类型
    	$info = $upload->uploadOne($_FILES['logo']);//上传文件
    	if(!$info){//上传失败
    		$this->error($upload->getError());
    	}else{
    		// 组合logo名
    		$logo = __ROOT__.'/'.APP_NAME.'/Public/Uploads/'.$info['savepath'].$info['savename'];
	    	// 接收信息
	    	$name = I('name');
	    	$http = I('http');
	    	$desc = I('desc');
	    	$status = I('status');
	    	$num = I('num');
	    	$type = I('type');
	    	// 实例化Model类
	    	$brand = M('brand');
	    	// 组合信息
	    	$data = array(
	    		'brand_name' => $name,
	    		'url' => $http,
	    		'logo' => $logo,
	    		'brand_desc' => $desc,
	    		'sort_order' => $num,
	    		'is_show' => $status,
	    		'cat_id' => $type
	    		);
	    	// 添加品牌
	    	$addResult = $brand->add($data);
	    	if(!$addResult){//添加失败
	    		$this->error('添加失败');
	    	}else{
	    		$this->success('添加成功');
	    	}
    	}
    }

    // 添加属性页面
    public function sadd(){
    	// 实例化Model类
    	$cate = M('category');
    	$c = $cate->field(array('cat_id','is_show','cat_name','parent_id','path',"concat(path,cat_id)"=>'p'))->order('p')->select();
    	$disabled = array('disabled','');
    	foreach($c as $v){
    		$fid[] = $v['parent_id'];
    	}
  		foreach($c as &$val){
  			$num = substr_count($val['path'],',');
  			$rep = ($num-1)*6;
  			$nb = str_repeat('&nbsp;',$rep);
  			$str = $nb.$val['cat_name'];
  			$val['cat_name'] = $str;
  			$val['is_show'] = $disabled[$val['is_show']];
  			if(in_array($val['cat_id'],$fid)){
  				$val['disabled'] = 'disabled';
  			}
  		}
  		// 分配变量
  		$this->assign('cate',$c);
  		$this->display();
    }

    public function doSadd(){
    	// 接收信息
    	$type_id = I('type');
    	$attr_name = I('name');
    	$attr_value = I('val');
    	$brand_id = I('brand');
    	// 实例化Model类
    	$attr = M('goods_attr');
    	// 查询条件
    	$where['attr_name'] = $attr_name;
    	$where['cat_id'] = $type_id;
    	$where['brand_id'] = $brand_id;
    	// 查询是否存在该属性
    	$checkName = $attr->where($where)->field('attr_id,attr_value')->find();
    	if($checkName){
    		$data = array(
    			$checkName['attr_value'] = $checkName['attr_value'].'@'.$attr_value,
    			'attr_id' => $checkName['attr_id'],
    			'attr_value' => $checkName['attr_value']
    			);
    		// 修改商品属性
    		$upResult = $attr->save($data);
    		if(!$upResult){//修改失败
    			$this->error('追加失败');
    		}else{
    			$this->success('追加成功',U('sadd'));
    		}
    	}else{
	    	// 组合信息
	    	$data = array(
	    		'attr_name' => $attr_name,
	    		'brand_id' => $brand_id,
	    		'cat_id' => $type_id,
	    		'good_id' => 0,
	    		'attr_value' => $attr_value
	    		);
	    	// 添加属性
	    	$addResult = $attr->add($data);
	    	if(!$addResult){//添加失败
	    		$this->error('添加失败');
	    	}else{//添加成功
	    		$this->success('添加成功',U('sadd'));
	    	}
    		
    	}
    }




}