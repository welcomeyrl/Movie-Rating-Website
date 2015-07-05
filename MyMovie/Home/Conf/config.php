<?php
//导入数据库公共配置文件
require("init.php");

$config2=array(
	//'配置项'=>'配置值'
	//播放器路径配置
	"VIDEO_PLAY_PATH"		=>"192.168.140.98__ROOT__",
	
	//登录用户常量配置
	"USER_AUTH_KEY"			=>"loginuser",
	
	/*Smarty模板的配置*/
	//开启Smarty模板的支持
	//使用的模板引擎名
	'TMPL_ENGINE_TYPE'     => 'Smarty',
	//url不区分大小写
	//'URL_CASE_INSENSITIVE' => true,
	//模板引擎相关的设置
	'TMPL_ENGINE_CONFIG'   => array(
		//是否缓存模板
		'caching'          => false,
		//模板目录
		'template_dir'     => TMPL_PATH,
		//模板编译目录
		'compile_dir'      => CACHE_PATH,
		//缓存目录
		'cache_dir'        => TEMP_PATH,
		//左定界符
		'left_delimiter'   => '{',
		//右定界符
		'right_delimiter'  => '}',
	),
	//自定义跳转页面
	'TMPL_ACTION_SUCCESS' => 'Public:jump',
	'TMPL_ACTION_ERROR' => 'Public:jump',
	
	
	// 'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	//'SHOW_ERROR_MSG'=> true,
	
);

return array_merge($config,$config2);
?>