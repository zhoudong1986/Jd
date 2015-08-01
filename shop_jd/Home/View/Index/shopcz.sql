#创建数据库
create database shop_jd charset utf8;

#选择数据库
use shop_jd;

/*------------------------------------商品模块---------------------------------------*/
#创建商品类别表
create table jd_category(
	cat_id smallint unsigned not null auto_increment primary key comment '商品类别ID',
	cat_name varchar(30) not null default '' comment '商品类别名称',
	parent_id int unsigned not null default 0 comment '商品类别父ID',
	cat_desc varchar(255) not null default '' comment '商品类别描述',
	sort_order tinyint not null default 50 comment '排序依据',
	unit varchar(15) not null default '' comment '单位',
	is_show tinyint not null default 1 comment '是否显示，默认显示',
	index pid(parent_id)
)engine=MyISAM charset=utf8;


#创建商品品牌表
create table jd_brand(
	brand_id smallint unsigned not null auto_increment primary key comment '商品品牌ID',
	brand_name varchar(30) not null default '' comment '商品品牌名称',
	brand_desc varchar(255) not null default '' comment '商品品牌描述',
	url varchar(100) not null default '' comment '商品品牌网址',
	logo varchar(50) not null default '' comment '品牌logo',
	sort_order tinyint unsigned not null default 50 comment '商品品牌排序依据',
	is_show tinyint not null default 1 comment '是否显示，默认显示'	
)engine=MyISAM charset=utf8;

#创建商品类型表
create table jd_goods_type(
	type_id smallint unsigned not null auto_increment primary key comment '商品类型ID',
	type_name varchar(50) not null default '' comment '商品类型名称'
)engine=MyISAM charset=utf8;


#创建商品属性表
create table jd_attribute(
	attr_id smallint unsigned not null auto_increment primary key comment '商品属性ID',
	attr_name varchar(50) not null default '' comment '商品属性名称',
	type_id smallint not null default 0 comment '商品属性所属类型ID',
	attr_type tinyint not null default 1 comment '属性是否可选 0 为唯一，1为单选，2为多选',
	attr_input_type tinyint not null default 1 comment '属性录入方式 0为手工录入，1为从列表中选择，2为文本域',
	attr_value text comment '属性的值',
	sort_order tinyint not null default 50 comment '属性排序依据',
	index type_id(type_id)
)engine=MyISAM charset=utf8;

#创建商品表
create table jd_goods(
	goods_id int unsigned not null auto_increment primary key comment '商品ID',
	goods_sn varchar(30) not null default '' comment '商品货号',
	goods_name varchar(100) not null default '' comment '商品名称',
	goods_brief varchar(255) not null default '' comment '商品简单描述',
	goods_desc text comment '商品详情',
	cat_id smallint unsigned not null default 0 comment '商品所属类别ID',
	brand_id smallint unsigned not null default 0 comment '商品所属品牌ID',
	market_price decimal(10,2) not null default 0 comment '市场价',
	shop_price decimal(10,2) not null default 0 comment '本店价格',
	promote_price decimal(10,2) not null default 0 comment '促销价格',
	promote_start_time int unsigned not null default 0 comment '促销起始时间',
	promote_end_time int unsigned not null default 0 comment '促销截止时间',
	goods_img varchar(50) not null default '' comment '商品图片',
	goods_thumb varchar(50) not null default '' comment '商品缩略图',
	goods_number smallint unsigned not null default 0 comment '商品库存',
	click_count int unsigned not null default 0 comment '点击次数',
	type_id smallint unsigned not null default 0 comment '商品类型ID',
	is_promote tinyint unsigned not null default 0 comment '是否促销，默认为0不促销',
	is_best tinyint unsigned not null default 0 comment '是否精品,默认为0',
	is_new tinyint unsigned not null default 0 comment '是否新品，默认为0',
	is_hot tinyint unsigned not null default 0 comment '是否热卖,默认为0',
	is_onsale tinyint unsigned not null default 1 comment '是否上架,默认为1',
	add_time int unsigned not null default 0 comment '添加时间',
	index cat_id(cat_id),
	index brand_id(brand_id),
	index type_id(type_id)
)engine=MyISAM charset=utf8;

#创建商品属性对应表
create table jd_goods_attr(
	goods_attr_id int unsigned not null auto_increment primary key comment '编号ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	attr_id smallint unsigned not null default 0 comment '属性ID',
	attr_value varchar(255) not null default '' comment '属性值',
	attr_price decimal(10,2) not null default 0 comment '价格',
	index goods_id(goods_id),
	index attr_id(attr_id)
)engine=MyISAM charset=utf8;

#创建商品相册表
create table jd_galary(
	img_id int unsigned not null auto_increment primary key comment '图片编号',
	goods_id int unsigned not null default 0 comment '商品ID',
	img_url varchar(50) not null default '' comment '图片URL',
	thumb_url varchar(50) not null default '' comment '缩略图URL',
	img_desc varchar(50) not null default '' comment '图片描述',
	index goods_id(goods_id)
)engine=MyISAM charset=utf8;

/*------------------------------------商品模块 end-----------------------------------*/


/*------------------------------------用户模块---------------------------------------*/
#创建用户表
create table jd_user(
	user_id int unsigned not null auto_increment primary key comment '用户编号',
	user_name varchar(50) not null default '' comment '用户名',
  password char(32) not null default '' comment '用户密码,md5加密',
	level tinyint unsigned not null DEFAULT 1 comment '用户等级 1铜牌，2银牌，3金牌，4白金',
	status tinyint unsigned not null DEFAULT 1 comment '用户状态 1是正常登陆 0是禁止登陆'

)engine=MyISAM charset=utf8;

#创建用户信息详情表
create table jd_user_details(
  details_id int unsigned not null auto_increment primary key comment '用户详情表主id',
	email varchar(50) not null default '' comment '电子邮箱',
	reg_time int unsigned not null default 0 comment '用户注册时间',
	pic varchar(100) not null DEFAULT '' comment '头像',
  user_id int unsigned not null  comment '用户表id',
  sex tinyint unsigned not null default 1 comment '性别',
  birthDay varchar(8) not null DEFAULT '' comment '生日',
  name varchar(30) not null DEFAULT '' comment '真实姓名',
  hobbies varchar(100) not null DEFAULT '' comment '星期爱好',
  address varchar(255) not null DEFAULT '' comment '地址',
  id_card varchar(19) not null DEFAULT '' comment '身份证',
  marriage tinyint unsigned not null DEFAULT 3 comment '婚否 0未婚 1结婚 2保密 3未选着',
  educate tinyint unsigned not null DEFAULT 0 comment '教育程度 0未选择 1小学 2初中 3高中 4大学 5研究生 6博士 7其他',
	index user_id(user_id)
)engine=MyISAM charset=utf8;

#创建用户个人账户表
create table jd_user_account(
  account_id int unsigned not null auto_increment primary key comment '主ID',
  user_id int unsigned not null DEFAULT 0 comment '用户表ID',
  points int unsigned not null DEFAULT 0 comment '用户积分',
  balance decimal(10,2) not null default 0 comment '用户余额',
  index user_id(user_id)
)engine=MyISAM charset=utf8;

#创建用户收货地址表
create table jd_buy_address(
	address_id int unsigned not null auto_increment primary key comment '收货地址表主ID',
	user_id int unsigned not null default 0 comment '地址所属用户ID',
	consignee varchar(60) not null default '' comment '收货人姓名',
	province smallint unsigned not null default 0 comment '省份，保存是ID',
	city smallint unsigned not null default 0 comment '市',
	district smallint unsigned not null default 0 comment '区',
	street varchar(100) not null default '' comment '街道地址',
	zipcode varchar(10) not null default '' comment '邮政编码',
	telephone varchar(20) not null default '' comment '电话',
	mobile varchar(20) not null default '' comment '移动电话',
	alias varchar(30) not null DEFAULT '' comment '这个收货地址别名,为空的时候取收货人姓名+地区'
	index user_id(user_id)
)engine=MyISAM charset=utf8;

#创建地区表，包括省市区三级
create table jd_region(
	region_id smallint unsigned not null auto_increment primary key comment '地区ID',
	parent_id smallint unsigned not null default 0 comment '父ID',
	region_name varchar(30) not null default '' comment '地区名称',
	region_type tinyint unsigned not null default 1 comment '地区类型 1 省份 2 市 3 区(县) 4街道'
)engine=MyISAM charset=utf8;

#创建购物车表
create table jd_cart(
	cart_id int unsigned not null auto_increment primary key comment '购物车ID',
	user_id int unsigned not null default 0 comment '用户ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	goods_name varchar(100) not null default '' comment '商品名称',
	goods_img varchar(50) not null default '' comment '商品图片',
	goods_attr varchar(255) not null default '' comment '商品属性',
	goods_number smallint unsigned not null default 1 comment '商品数量',
	market_price decimal(10,2) not null default 0 comment '市场价格',
	goods_price decimal(10,2) not null default 0 comment '成交价格',
	subtotal decimal(10,2) not null default 0 comment '小计'
)engine=MyISAM charset=utf8;

#创建推送信息表
create table jd_letter(
  letter_id int unsigned not null auto_increment primary key comment '信息表主ID',
  from_id INT unsigned not null DEFAULT 0 comment '发信人ID',
  content VARCHAR(255) NOT NULL DEFAULT '' COMMENT '私信内容' ,
  time VARCHAR (12)  NOT NULL DEFAULT '' COMMENT '私信发送时间' ,
  user_id INT unsigned not null DEFAULT 0 comment '收信人ID',
  type tinyint unsigned not null DEFAULT 1 comment '私信类型 1:系统通知 2:社区提醒 3:京东公告',
  status tinyint unsigned not null DEFAULT 1 comment '状态 1:未读,2:以读'
)engine=MyISAM charset=utf8;

/*------------------------------------用户模块 end-----------------------------------*/




/*------------------------------------订单模块---------------------------------------*/
#创建送货方式表
create table jd_shipping(
	shipping_id tinyint unsigned not null auto_increment primary key comment '表主ID',
	shipping_name varchar(30) not null default '' comment '送货方式名称',
	shipping_desc varchar(255) not null default '' comment '送货方式描述',
	shipping_fee decimal(10,2) not null default 0 comment '送货费用',
	enabled tinyint unsigned not null default 1 comment '是否启用，默认启用'
)engine=MyISAM charset=utf8;


#创建支付方式表
create table jd_payment(
	pay_id int unsigned not null auto_increment primary key comment '支付方式表主ID',
	pay_name varchar(30) not null default '' comment '支付方式名称',
	pay_desc varchar(255) not null default '' comment '支付方式描述',
	enabled tinyint unsigned not null default 1 comment '是否启用，默认启用'
)engine=MyISAM charset=utf8;


#创建订单表
create table jd_order(
	order_id int unsigned not null auto_increment primary key comment '订单ID',
	order_sn varchar(30) not null default '' comment '订单号',
	user_id int unsigned not null default 0 comment '用户ID',
	address_id int unsigned not null default 0 comment '收货地址id',
	postscripts varchar(255) not null default '' comment '订单附言',
	shipping_id tinyint not null default 0 comment '送货方式ID 1、快递 2、上门自提',
	pay_id tinyint not null default 0 comment '支付方式ID 1、在线支付，2、到付',
	goods_amount decimal(10,2) not null default 0 comment '商品总金额',
	order_amount decimal(10,2) not null default 0 comment '订单总金额',
	order_time int unsigned not null default 0 comment '下单时间',
  order_status tinyint unsigned not null default 1 comment '订单状态 1 待付款 2 待发货 3 已发货 4 已完成 5已取消'
	index (user_id),
	index address_id(address_id),
	index pay_id(pay_id),
	index shipping_id(shipping_id)
)engine=MyISAM charset=utf8;


#创建订单明细表,即商品订单关系表（多对多）
create table jd_order_goods(
	rec_id int unsigned not null auto_increment primary key comment '主ID',
	order_id int unsigned not null default 0 comment '订单ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	goods_name varchar(100) not null default '' comment '商品名称',
	goods_img varchar(50) not null default '' comment '商品图片',
	shop_price decimal(10,2) not null default 0 comment '商品价格',
	goods_price decimal(10,2) not null default 0 comment '成交价格',
	goods_number smallint unsigned not null default 1 comment '购买数量',
	goods_attr varchar(255) not null default '' comment '商品属性',
	subtotal decimal(10,2) not null default 0 comment '商品小计',
  sellers_id int unsigned not null DEFAULT 0 comment '商家店铺ID'
)engine=MyISAM charset=utf8;

/*------------------------------------订单模块 end-----------------------------------*/



#创建后台管理员表
create table jd_admin(
	admin_id int unsigned not null auto_increment primary key comment '管理员表ID',
	admin_name varchar(30) not null default '' comment '管理员名称',
	password char(32) not null default '' comment '管理员密码',
	email varchar(50) not null default '' comment '管理员邮箱',
	add_time varchar(13) not null default '' comment '添加时间',
	role int unsigned not null default 1 comment '管理员角色 0超级管理员 1普通管理员 2网络编辑',
	status tinyint unsigned not null default 1 comment '管理员状态 1能正常登陆 0不能正常登陆'
)engine=MyISAM charset=utf8;

#创建平台日志表
create table jd_log(
	log_id int unsigned not null auto_increment primary key comment '日志表主ID',
	log_name varchar(30) not null default '' comment '登陆平台的管理员名称',
	login_time varchar(13) not null default '' comment '登陆平台时间',
	login_ip varchar(16) not null default ''comment '登陆Ip'
)engine=MyISAM charset=utf8;

#创建评论表
create table jd_comments(
	comments_id int unsigned not null auto_increment primary key comment '评论表主ID',
	goods_id int unsigned not null default 0 comment '商品表ID',
	content varchar(255) not null default '' comment '评论内容',
	impress varchar(43) not null default '' comment '对商品的印象',
	comments_type Tinyint unsigned not null default 1 comment '1是好评 2是中评 0是差评',
	start tinyint unsigned not null default 1 comment '星级 1-5星',
	add_time varchar(13) not null default '' comment '新增评论时间',
	praise int unsigned not null default 0 comment '被赞数',
	index goods_id(goods_id)
)engine=MyISAM charset=utf8;

#创建回复表
create table jd_replays(
	replays_id int unsigned not null auto_increment primary key comment '回复表主ID',
	comments_id int unsigned not null comment '评论表id',
	users_id int unsigned not null default 0 comment '用户ID',
	add_time varchar(13) not null default '' comment '回复添加时间',
	contents varchar(255) not null default '' comment '回复内容',
	index comments_id(comments_id)
)engine=MyISAM charset=utf8;

#创建兴趣爱好表
create table jd_hobul(
	hobul_id int unsigned not null auto_increment primary key comment '兴趣爱好表主ID',
	hobul_name varchar(60)not null DEFAULT '' comment '兴趣爱好名称',
  hobul_value tinyint unsigned not null DEFAULT 0 comment '兴趣爱好的值'
)engine=MyISAM charset=utf8;

#创建店铺模板表风格1
create table jd_OneStyle(
	oid int unsigned not null auto_increment primary key comment '表主ID',
	img varchar(100)not null DEFAULT '' comment '图片路径',
  section tinyint unsigned not null DEFAULT 0 comment '版块ID',
  templet_id INT unsigned not null DEFAULT 0 comment '模板ID',
  shop_id int unsigned not null DEFAULT 0 comment '店铺ID',
  sort tinyint unsigned not null DEFAULT 1 comment '模块排序',
  index shop_id(shop_id),
  index module_id(module_id)
)engine=MyISAM charset=utf8;

/*-------------------------------------------京东客服————————————————————————————————————*/
#创建监听表
create table jd_monitor(
  mid int unsigned not null auto_increment primary key comment '表主ID',
  user_id int unsigned not null DEFAULT 0 comment '用户ID',
  status tinyint unsigned not null DEFAULT 0 comment '状态1、在等待 0、是被接待了',
  cid int unsigned not null DEFAULT 0 comment '客服ID',
  index user_id(user_id)
)engine=MyISAM charset=utf8;

#创建京东客服表
create table jd_custorm(
  cid int unsigned not null auto_increment primary key comment '表主ID',
  user_name varchar(30) not null DEFAULT '' COMMENT '账户名',
  pwd char(32) not null DEFAULT '' COMMENT '密码',
  role int unsigned not null default 1 comment '客服角色 1、普通客服 2、客服组长 3、客服主管',
	status tinyint unsigned not null default 1 comment '管理员状态 1能正常登陆 0不能正常登陆'
)engine=MyISAM charset=utf8;

#创建聊天内容表
create table jd_talks_record(
  rid int unsigned not null auto_increment primary key comment '表主ID',
  content  text comment '聊天内容',
  time varchar(12) not null DEFAULT '' comment '时间',
  cid int unsigned not null DEFAULT 0 comment '客服ID',
  user_id int unsigned not null DEFAULT 0 comment '用户ID'
)engine=MyISAM charset=utf8;

/*-------------------------------------------京东客服end———————————————————————————————————*/
#插入一条记录作为管理员 用户名和密码均为admin
insert into jd_admin(admin_name,password,email) values('admin','21232f297a57a5a743894a0e4a801fc3','admin@itcast.cn');