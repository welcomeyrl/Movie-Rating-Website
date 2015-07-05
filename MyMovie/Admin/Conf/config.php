<?php

//导入数据库公共配置文件
require("init.php");

// 后台Admin配置文件
$admin_config=array(

    // RBAC配置
    'RBAC_SUPERADMIN'  => 'admin',       // 超级管理员
    'ADMIN_AUTH_KEY'   => 'superadmin',  // 超级管理员识别
    
    'USER_AUTH_MODULE' => 'Auser',       // 用户表名称
    'USER_AUTH_ON'     => true,          // 是否开启权限认证
    'USER_AUTH_TYPE'   => 1,             // 验证类型（1：登录验证，2：实时验证）
    'USER_AUTH_KEY'    => 'uid',         // 用户认证识别号
    'NOT_AUTH_MODULE'  => 'Index',       // 无需认证的模块（控制器）
    'NOT_AUTH_ACTION'  => 'index,insert,update,updatestatus,insertpic,doupload,insertletter',       // 无需认证的方法
    'RBAC_ROLE_TABLE'  => 'mm_role',     // 角色表名称
    'RBAC_USER_TABLE'  => 'mm_role_user',// 角色与用户中间表
    'RBAC_ACCESS_TABLE'=> 'mm_access',   // 权限表名称
    'RBAC_NODE_TABLE'  => 'mm_node',     // 节点表名称  

    // USER_AUTH_ON 是否需要认证
    // USER_AUTH_TYPE 认证类型
    // USER_AUTH_KEY 认证识别号
    // REQUIRE_AUTH_MODULE  需要认证模块
    // NOT_AUTH_MODULE 无需认证模块
    // USER_AUTH_GATEWAY 认证网关
    // RBAC_DB_DSN  数据库连接DSN
    // RBAC_ROLE_TABLE 角色表名称
    // RBAC_USER_TABLE 用户表名称
    // RBAC_ACCESS_TABLE 权限表名称
    // RBAC_NODE_TABLE 节点表名称

    //'URL_HTML_SUFFIX'=>'.html',
    
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
    
    // 'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
    // 'SHOW_ERROR_MSG'=> true,
    // 自定义跳转页面
    'TMPL_ACTION_SUCCESS' => 'Public:jump',
    'TMPL_ACTION_ERROR' => 'Public:jump',

);
//连接后台和公共配置文件数组并返回
return array_merge($config,$admin_config);
?>