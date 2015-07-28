<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING' => array(
        '__HOMEPUBLIC__' => __ROOT__.'/'.APP_NAME.'/Home/Public',
        '__CSS__' => __ROOT__.'/'.APP_NAME.'/Home/Public/css',
        '__JS__' => __ROOT__.'/'.APP_NAME.'/Home/Public/js',
        '__IMAGE__' => __ROOT__.'/'.APP_NAME.'/Home/Public/images',
        '__APPPUBLIC__' => __ROOT__.'/'.APP_NAME.'/Public'
    ),
    'DATA_CACHE_TYPE'=>'Memcache',
    'MEMCACHE_HOST'=>'127.0.0.1',
    'MEMCACHE_PORT'=>11211,
);