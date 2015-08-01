<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
  public $pArr = array();
  //首页
  public function index(){
    // 判断是否登录
    if($_SESSION['login_info']['isLogin']){
      $uid = $_SESSION['login_info']['uid'];
      $info = M('user')->where(array('user_id'=>$uid))->field('user_id,user_name')->find();//取用户基本信息
      $this->assign('login_info',$info);
    }

    /*
     遍历菜单栏
     */
    // 实例化Model类
    $typeArr = $this->getType();
    // dump($typeArr);die;
    $this->assign('typeArr',$typeArr);

    $this->display();
  }

  /*
  获取分类
   */
  public function getType($pid = 0) {
    $cate = M('category');
    $result = $cate->where('parent_id='.$pid)->field('cat_name,cat_id')->select();
    if($result){
      foreach($result as $val){
        $val['list'] = $this->getType($val['cat_id']);
        $arr[] = $val;
      }
      return $arr;
    }
  }

  // 订单
  public function order() {
    $arrP = I('post.');
    for($i = 0;$i < 5;$i++){
      array_shift($arrP);
    }
    $str = implode(',',$arrP);
    $idStr = I('id');
    $user_id = $_SESSION['login_info']['uid'];
    // 加入订单
    $order = M('order');
    $sn = time().uniqid();
    $data = array(
        'order_sn' => $sn,
        'shipping_id' => $str,
        'address_id' => I('address'),
        'user_id' => $user_id,
        'postscripts' => I('text'),
        'pay_id' => I('pay'),
        'goods_amount' => I('total'),
        'order_amount' => I('total'),
        'order_time' => time()
    );
    $result = $order->add($data);
    if(!$result){
      $this->error('下单失败');
    }else{
      // 查询用户的购物车清单
      $cart = M('cart');
      $cartInfo = $cart->where('cart_id in('.$idStr.')')->field('goods_id,goods_name,goods_img,market_price,goods_price,goods_number,goods_attr,subtotal,sellers_id')->select();
      foreach($cartInfo as $val){
        $val['order_id'] = $result;
        $orderGoods = M('order_goods');
        $orderGoods->add($val);
      }
      $cart->where('cart_id in('.$idStr.')')->delete();
      $this->redirect('Member/myOrder',array('uid'=>$user_id));
    }
  }

  // 结算页面
  public function jiesuan() {
    $idArr = I('post.id');
    $idStr = implode(',',$idArr);
    $user_id = $_SESSION['login_info']['uid'];
    // 查询用户的收货地址
    $address = M('buy_address');
    $addressInfo = $address->where('user_id=1')->select();
    // 查询送货方式表
    $ship = M('shipping');
    $shipInfo = $ship->select();
    // 查询支付方式表
    $pay = M('payment');
    $payInfo = $pay->select();
    // 查询用户的购物车清单
    $cartInfo = M()->table(array('jd_cart'=>'c','jd_sellers'=>'s'))->where('c.user_id=1 and c.sellers_id=s.sellers_id and c.cart_id in('.$idStr.')')->field('c.*,s.sname')->select();
    foreach($cartInfo as $val){
      $sname[] = $val['sname'];
    }
    $sname = array_unique($sname);
    foreach($cartInfo as $val){
      foreach($sname as $v){
        if($v == $val['sname']){
          $arr[$v][] = $val;
        }
      }
    }
    // 分配变量
    $this->assign('cart',$arr);
    $this->assign('idStr',$idStr);
    $this->assign('pay',$payInfo);
    $this->assign('ship',$shipInfo);
    $this->assign('address',$addressInfo);
    $this->display();
  }

  // 商品详情页面
  public function detail() {
    // 接收商品id
    $goods_id = I('good_id');
    // 查询商品详情
    $where = "g.goods_id={$goods_id} and g.brand_id=b.brand_id and g.sellers_id=s.sellers_id";
    $table = array(
        'jd_goods' => 'g',
        'jd_brand' => 'b',
        'jd_sellers' => 's'
    );
    $goodInfo = M()->table($table)->where($where)->field('g.*,b.brand_name,b.brand_id,s.sellers_id,s.sname,b.logo')->find();
    // dump($goodInfo);die;
    $gal = M('galary');
    $where = "goods_id={$goods_id}";
    $galInfo = $gal->where($where)->select();
    $attr = M('goods_attr');
    $where = "good_id={$goods_id} and attr_name != '价格'";
    $field = array(
        'attr_name',
        'group_concat(attr_id)' => 'id',
        'group_concat(attr_value)' => 'value'
    );
    $attrInfo = $attr->where($where)->field($field)->group('attr_name')->select();
    // dump($attrInfo);die;
    $this->pArr = array();
    $this->pArr[] = $goodInfo['goods_name'];
    $this->parents($goodInfo['cat_id']);
    // dump($this->pArr);die;
    // 分配变量
    $this->assign('goodInfo',$goodInfo);
    $this->assign('galInfo',$galInfo);
    $this->assign('attrInfo',$attrInfo);
    $this->assign('pArr',$this->pArr);
    $this->display();
  }

  // 删除购物车中的商品
  public function cartDel() {
    // 接收id
    $cart_id = I('id');
    // 删除购物车表中的商品信息
    $cart = M('cart');
    $result = $cart->delete($cart_id);
    if(!$result){
      $this->ajaxReturn(0);
    }else{
      $this->ajaxReturn(1);
    }
  }

  // 减少购物车商品数量
  public function jian() {
    // 接收信息
    $num = I('num');
    $price = I('price');
    $id = I('id');
    $cart_id = I('cart');
    $num -= 1;
    $subtotal = $num * $price;
    // 修改购物车表中的信息
    $cart = M('cart');
    $data = array(
        'cart_id' => $cart_id,
        'goods_number' => $num,
        'subtotal' => $subtotal
    );
    $cart->save($data);
    $this->ajaxReturn($subtotal);
  }

  // 增加购物车商品数量
  public function jia() {
    // 接收信息
    $num = I('num');
    $price = I('price');
    $id = I('id');
    $cart_id = I('cart');
    $total = I('total');
    // 查询商品库存
    $good = M('goods');
    $number = $good->where('goods_id='.$id)->field('goods_number')->find();
    if($num >= $number['goods_number']){
      $this->ajaxReturn($total);
    }else{
      $num += 1;
      $subtotal = $num * $price;
      // 修改购物车表中的信息
      $cart = M('cart');
      $data = array(
          'cart_id' => $cart_id,
          'goods_number' => $num,
          'subtotal' => $subtotal
      );
      $cart->save($data);
      $this->ajaxReturn($subtotal);
    }

  }

  // 购物车页面
  public function mycar() {
    //获取 买家id
    $uid = $_SESSION['login_info']['uid'];
    // 查询买家的购物车信息
    $table = array(
        'jd_cart' => 'c',
        'jd_sellers' => 's'
    );
    $cartInfo = M()->table($table)->where('c.user_id=1 and s.sellers_id=c.sellers_id')->select();
    // 分配变量
    $this->assign('cart',$cartInfo);
    $this->display();
  }

  // 加入购物车
  public function cart(){
    // 接收信息
    $goods_id = I('goods_id');
    $value = I('str');
    $num = I('num');
    // 实例化Model类
    $good = M('goods');
    $goodInfo = $good->where('goods_id='.$goods_id)->field('goods_name,goods_img,market_price,shop_price,sellers_id')->find();
    $uid = $_SESSION['login_info']['uid'];
    $total = $goodInfo['shop_price'] * $num;
    // 查询是否存在相同商品的购物车信息
    // 实例化Model类
    $cart = M('cart');
    $result = $cart->where('user_id=1'.' and goods_id='.$goods_id)->field('cart_id,goods_number,subtotal')->find();
    $cart_id = $result['cart_id'];
    $number = $result['goods_number'] + $num;
    $subtotal = $result['subtotal'] + $total;
    if($result){//存在
      // 修改购物车表中的信息
      $data = array(
          'cart_id' => $cart_id,
          'goods_number' => $number,
          'subtotal' => $subtotal,
      );
      $result = $cart->save($data);
      if(!$result){
        $this->ajaxReturn(0);
      }else{
        $this->ajaxReturn(1);
      }
    }else{//不存在
      // 插入购物车表
      // 组合信息
      $data = array(
          'goods_id' => $goods_id,
          'user_id' => $uid,
          'goods_attr' => $value,
          'goods_name' => $goodInfo['goods_name'],
          'goods_img' => $goodInfo['goods_img'],
          'goods_number' => $num,
          'market_price' => $goodInfo['market_price'],
          'goods_price' => $goodInfo['shop_price'],
          'sellers_id' => $goodInfo['sellers_id'],
          'subtotal' => $total
      );
//       dump($data);die;
      $cartResult = $cart->add($data);
      if(!$cartResult){//添加失败
        $this->ajaxReturn(0);
      }else{
        $this->ajaxReturn(1);
      }
    }
  }

  // 递归获取父类
  public function parents($cat_id = '15') {
    // 实例化Model类
    $cate = M('category');
    $result = $cate->where('cat_id='.$cat_id)->field('cat_name,parent_id')->find();
    if($result['parent_id'] != '0'){
      $this->pArr[] = $result['cat_name'];
      $this->parents($result['parent_id']);
    }
  }
  // 商品页面
  public function catList() {

    $this->parents(I('cat_id'));
    $this->pArr = array_reverse($this->pArr);
    // 接收信息
    $arr = I('get.');
    // dump($arr);die;
    $string = '';
    foreach($arr as $key=>$val){
      if($key == 'p'){
        $val = 0;
      }
      $string .= $key.'='.$val.'&';
    }
    // dump($arr);die;
    $cat_id = I('cat_id');
    // 删除分类id跟品牌id
    unset($arr['cat_id']);
    unset($arr['p']);
    $valueArr = $arr;
    unset($arr['品牌']);
    unset($arr['brand_id']);
    $where2 = '';
    $flag = empty($arr);
    // 接收品牌id
    $brand_id = I('brand_id');
    if($brand_id != ''){
      $where2 .= 'g.brand_id='.$brand_id.' and ';
      $brandInfo = '';
    }else{
      // 查询品牌
      $brand = M('brand');
      $brandInfo = $brand->where('cat_id='.$cat_id)->select();
      // dump($brandInfo);die;
    }
    // 实例化Model类
    $attr = M('goods_attr');
    // 查询属性
    $field = array(
        'attr_name',
        "group_concat(attr_value separator '@')" => 'v'
    );
    $where = "cat_id={$cat_id} and good_id=0";
    $attrInfo = $attr->where($where)->field($field)->group('attr_name')->select();
//    dump($attrInfo);
//    die;
    if(!$flag){
      $i = 1;
      foreach($arr as $key=>$val){
        $good_idArr = array();
        $str = "attr_name='{$key}' and attr_value='{$val}'";

        if($i == 1){
          $str .= " and good_id != '0'";
        }else{
          $str .= " and good_id in ({$id})";
        }
        $arr = $attr->where($str)->field('good_id')->select();
        foreach($arr as $val){
          $good_idArr[] = $val['good_id'];
        }
        $id = implode(',',$good_idArr);
        $i++;
      }
      if(!empty($id)){
        $where2 .= "goods_id in ($id) and ";
      }else{
        $where2 .= "goods_id in (0) and ";
      }
    }
    // dump($attrInfo);die;
    // 引进第三方分页类,格式:  @.Class类名
    import('@.Class.Page');
    // 表数组
    $table = array(
        'jd_goods' => 'g',
        'jd_sellers' => 's',
        'jd_brand' => 'b'
    );
    // 条件
    $where2 .= "g.cat_id={$cat_id}";
    // 查询符合条件的数据总数
    $count = M()->table(array('jd_goods'=>'g'))->where($where2)->count();
    // 进行第三方分页类的配置
    $page = array(
        'total' => $count,//数据总数
        'url' => !empty($param['url']) ? $param['url'] : '' ,//配置url
        'max' => !empty($param['max']) ? $param['max'] : 1,//设置每页显示条数
        'url_model' => 1,//设置为url模式
        'ajax' => !empty($param['ajax']) ? true :false,//开启ajax分页
        'out' => !empty($param['out']) ? $param['out'] : false,//输出设置
        'url_suffix' => true,//开启URL后缀
        'tags' => array('首页','上一页','下一页','尾页')
    );
    // 字段数组
    $field = array(
        'g.goods_name',
        'g.market_price',
        'g.goods_brief',
        'g.goods_id',
        'g.goods_img',
        's.sname',
        'b.brand_name'
    );
    $where2 .= ' and g.sellers_id=s.sellers_id and b.brand_id=g.brand_id';
    // 实例化分页类
    $p = new \Page($page);
    $goodInfo = M()->table($table)->where($where2)->field($field)->limit($p->pagerows(),$p->maxrows())->select();
    // dump($goodInfo);die;
    $arr = I('get.');
    $brandStr = '&brand_id='.I('brand_id').'&品牌='.I('品牌');
    $this->assign('cat_id',$cat_id);
    $this->assign('goodInfo',$goodInfo);
    $this->assign('brandInfo',$brandInfo);
    $this->assign('attrInfo',$attrInfo);
    $this->assign('str',$string);
    $this->assign('arr',$valueArr);
    $this->assign('brandStr',$brandStr);
    $this->assign('pArr',$this->pArr);
    $this->assign('page',$p->get_page());
    $this->display();
  }

    //免费注册
    public function register(){
      $this->display();
    }
    //生成验证码
    public function verify(){
      $config = array(
          'fontSize' => '50px',
          'useNoise' => 'false',
          'length' => 4
      );
      $verify = new \Think\Verify($config);
      $verify->entry(1);
    }
  //生成验证码（邮箱）2
  public function verify2(){
    $config = array(
        'fontSize' => '50px',
        'useNoise' => 'false',
        'length' => 4
    );
    $verify = new \Think\Verify($config);
    $verify->entry(2);
  }

//检验验证码2(邮箱验证)
  public function checkVerify1(){
    $code = I('code'); //前台AJAX过来的验证码
    $verify = new \Think\Verify(); //实例化验证码类
    if($verify->check($code, '1')){
      $this->ajaxReturn('1');
    }else{
      $this->ajaxReturn('2');
    }
  }

  //检验验证码2(邮箱验证)
  public function checkVerify2(){
    $code = I('code'); //前台AJAX过来的验证码
    $verify = new \Think\Verify(); //实例化验证码类
    if($verify->check($code, '2')){
        $this->ajaxReturn('1');
    }else{
        $this->ajaxReturn('2');
    }
  }

  //验证注册用户名
    public function checkRegister(){
      $userName = I('userName');
      //组装where条件
      $where = array(
        'user_name'=>$userName
      );
      //去数据库查询是否有重名
     $result =  D('user')->where($where)->getField('user_id');
      if(!$result){
        //数据库没有改用户名
        $this->ajaxReturn('1');
      }else{
        //用户名已经注册过了
        $this->ajaxReturn('0');
      }
    }

    //验证邮箱有没有被绑定过
    function checkMail(){
      $mail = I('mail');
      $result = M()->table(array('jd_user'=>'user','jd_user_details'=>'user_details'))->field('user.user_name')->where("user.user_id=user_details.user_id AND user_details.email='{$mail}'")->select();
      if(!$result){//邮箱没被注册过
          $this->ajaxReturn('1');
      }else{
          $this->ajaxReturn('2');
      }
    }

    //发送邮件验证
    public function setMail(){
      $userName = I('userName'); //用户名
      $pwd  = I('password','','md5'); //密码
      $mail = I('mail'); //邮箱
      $serialize = serialize($userName.','.$pwd.','.$mail);
      $url = U('finishMailCheck',array('serialize'=>$serialize));
      sendMail($mail,"仿京东：邮件验证","内容:请点击以下链接以完成验证:<a href='http://".'127.0.0.1/'."$url'>".date('ymdhis').rand(00000-99999)."</a>");
      //发送成功后
      $this->ajaxReturn(1);
    }

  //完成邮箱验证
  public  function finishMailCheck(){
    $tmp = I('serialize','','unserialize');//获得传参
    $arr = explode(',',$tmp);//组装参数为数组
    $userName = $arr[0];//用户名
    $pwd = $arr[1];//密码
    $email = $arr[2];//邮箱
    //组装添加数组
    $addArr = array(
      'user_name'=>$userName,
      'password'=>$pwd
    );
    //链接数据库，添加注册新用户
    $lastInsertId = M('user')->add($addArr);
    if($lastInsertId){
      $data['email'] =$email;
      $data['user_id']= $lastInsertId;
      $data['flag']='1';
      M('user_details')->add($data);
      $this->assign('uid',$lastInsertId);
      $this->display('mailSuccess');
    }else{
      $this->error('添加失败','Index/index');
    }

  }
  //处理表单提交
  public function actionRegister(){
    //组装注册数组
    $data = array(
      'user_name'=>I('regName'),
      'pwd'=>I('pwd','','md5'),
      'pwdRepeat'=>I('pwdRepeat','','md5')
    );
    //检测两次输入密码是否一致
    if($data['pwd']!==$data['pwdRepeat']){
      $this->error('两次输入的密码不一致');
    }
    //注册
    $id = M('user')->add($data);
    if($id){
      $arr = array(
        'user_id'=>$id,
        'email'=>I('phone')
      );

      if(!D('user_details')->add($arr)){
        $this->error('插入详情表出错');
      }else{
        //别刚注册的人写到session里面
        $_SESSION['login_info']=array(
          'isLogin'=>true,
          'uid'=>$id,
          'user_name'=>$data['user_name']
        );
        $this->redirect('Index/index', '', 1, '页面跳转中...');
      }
    }else{
      $this->error('操作有误');
    }
  }
}