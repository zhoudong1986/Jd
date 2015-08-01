<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
    
    // 订单列表
    public function index(){
        // 引进第三方分页类,格式:  @.Class类名
        import('@.Class.Page');
        // 接收表单传过来的搜索值
        $search = I('get.search');
        // 制作查询条件、
        $where['order_sn'] = array('like','%'.$search.'%');
        $where['recycle'] = '1';
        // 实例化model类
        $order = M('order');
        // 查询符合条件的数据总数
        $count = $order->where($where)->count();
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
        $orderInfo = $order->where($where)->limit($p->pagerows(),$p->maxrows())->select();
        $orderGoods = M('order_goods');
        foreach($orderInfo as &$val){
            $val['list'] = $orderGoods->where('order_id='.$val['order_id'])->field('goods_name,goods_img,goods_price,goods_number,goods_attr')->select();
        }
        // dump($orderInfo);
        // 分配变量
        $this->assign('search',$search);
        $this->assign('order',$orderInfo);
        $this->assign('page',$p->get_page());
        $this->display();
    }


    // 回收站订单列表
    public function recycle(){
        // 引进第三方分页类,格式:  @.Class类名
        import('@.Class.Page');
        // 接收表单传过来的搜索值
        $search = I('get.search');
        // 制作查询条件、
        $where['order_sn'] = array('like','%'.$search.'%');
        $where['recycle'] = '0';
        // 实例化model类
        $order = M('order');
        // 查询符合条件的数据总数
        $count = $order->where($where)->count();
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
        $orderInfo = $order->where($where)->limit($p->pagerows(),$p->maxrows())->select();
        $orderGoods = M('order_goods');
        foreach($orderInfo as &$val){
            $val['list'] = $orderGoods->where('order_id='.$val['order_id'])->field('goods_name,goods_img,goods_price,goods_number,goods_attr')->select();
        }
        // dump($orderInfo);
        // 分配变量
        $this->assign('search',$search);
        $this->assign('order',$orderInfo);
        $this->assign('page',$p->get_page());
        $this->display();
    }

    // 恢复订单
    public function recover() {
        // 接收订单id
        $order_id = I('id');
        // 实例化Model类
        $order = M('order');
        // 组合修改信息
        $data = array(
            'order_id' => $order_id,
            'recycle' => 1
            );
        $result = $order->save($data);
        if(!$result){//修改失败
            $this->error('操作失败');
        }else{//修改成功
            $this->success('操作成功');
        }
    }

    // 删除订单
    public function del() {
        // 接收订单id
        $order_id = I('id');
        // 实例化Model类
        $order = M('order');
        $result = $order->delete($order_id);
        $orderGoods = M('order_goods');
        $result2 = $orderGoods->where('order_id='.$order_id)->delete();
        if(!$result || !$result2){//修改失败
            $this->error('操作失败');
        }else{//修改成功
            $this->success('操作成功');
        }
    }

    // 放入回收站
    public function doRecycle() {
        // 接收订单id
        $order_id = I('id');
        // 实例化Model类
        $order = M('order');
        // 组合修改信息
        $data = array(
            'order_id' => $order_id,
            'recycle' => 0
            );
        $result = $order->save($data);
        if(!$result){//修改失败
            $this->error('操作失败');
        }else{//修改成功
            $this->success('操作成功');
        }
    }

    // 发货
    public function fahuo() {
        // 接收订单id
        $order_id = I('id');
        // 实例化Model类
        $order = M('order');
        // 组合修改信息
        $data = array(
            'order_id' => $order_id,
            'order_status' => 3
            );
        $result = $order->save($data);
        if(!$result){//修改失败
            $this->ajaxReturn(0);
        }else{//修改成功
            $this->ajaxReturn(1);
        }
    }

    // 取消订单
    public function cacel() {
        // 接收订单id
        $order_id = I('id');
        // 实例化Model类
        $order = M('order');
        // 组合修改信息
        $data = array(
            'order_id' => $order_id,
            'order_status' => 5
            );
        $result = $order->save($data);
        if(!$result){//修改失败
            $this->error('取消订单失败');
        }else{//修改成功
            $this->success('取消订单成功');
        }
    }
   

   


}