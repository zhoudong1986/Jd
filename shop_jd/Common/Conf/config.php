<?php
return array(
	'MODULE_ALLOW_LIST'     =>  array('Home','Admin','Seller'),

	'DB_HOST' => 'localhost',//主机配置
	'DB_NAME' => 'shop_jd',//数据库名
	'DB_USER' => 'root',//用户名
	'DB_PWD' => '',//密码

	'DB_PORT' => 3306,//数据库端口号
	'DB_TYPE' => 'mysql',//数据库类型
	'DB_PREFIX' => 'jd_',
	'DB_PARAMS'   =>  array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),//连接数组形式连接数据库
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'DB_LITE'    =>  false,    // 使用数据库Lite模式
	'DB_FIELDS_CACHE'   =>  false,        // 启用字段缓存
	'DB_DEPLOY_TYPE'  =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'SHOW_PAGE_TRACE' => true,
	'TMPL_L_DELIM' => '<{',
	'TMPL_R_DELIM' => '}>',

  // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.qq.com',
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'77135016@qq.com',
    'MAIL_FROM' =>'77135016@qq.com',
    'MAIL_FROMNAME' =>'yoyo',
    'MAIL_PASSWORD' =>'22413082285957',
    'MAIL_CHARSET' =>'utf-8',
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);