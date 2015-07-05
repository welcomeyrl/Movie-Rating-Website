<?php

//数据库公共配置文件

$config=array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
    'DB_TYPE'     => 'mysql',     // 数据库类型
    'DB_HOST'     => 'localhost', // 服务器地址
   	 
    'DB_NAME'     => 'mymovie',   // 数据库名
    'DB_USER'     => 'root',      // 用户名
    'DB_PWD'      => 'root',          // 密码
    'DB_PORT'     => '8889',          // 端口
    'DB_PREFIX'   => 'mm_',       // 数据库表前缀
	

    // 自定义SESSION 数据库存储
    // 'SESSION_TYPE' => 'Db',

    // 自定义上传路径
    'TMPL_PARSE_STRING'  =>array(
        '__UPLOAD__' => 'Uploads', // 增加新的上传路径替换规则
    )
    
)
?>