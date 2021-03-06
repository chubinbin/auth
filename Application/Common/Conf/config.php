<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_ACTION_ERROR'     =>  APP_PATH.'Admin/message.html', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  APP_PATH.'Admin/message.html', // 默认成功跳转对应的模板文件
    //数据库配置信息
    'DB_TYPE'                       => 'mysql', // 数据库类型
    'DB_HOST'                       => 'localhost', // 服务器地址
    'DB_NAME'                       => 'auth', // 数据库名
    'DB_USER'                       => 'XXXXXXXX', // 用户名
    'DB_PWD'                        => 'XXXXXXXX', // 密码
    'DB_PORT'                       =>  3306, // 端口
    'DB_CHARSET'                    =>  'utf8', // 字符集
    'DATA_CACHE_TIME'               =>  600,

	'SESSION_OPTIONS' => array(
		//和其他运行在同一个服务器的session进行隔离，避免相互干扰
		//'path' => '/session/tmp_s/',
		'expire' => 120,
	),
	
	'URL_MODEL'=>'2',
    'URL_ROUTER_ON' =>true,
);
