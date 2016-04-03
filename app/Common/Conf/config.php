<?php

define(Head_Path, 'Public/images/head/');
return array(
	//数据库配置
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'mantisme_blog',
    'DB_USER' => 'mantisme_virtual',
    'DB_PWD' => 'TNiDvM9cZ9^Z',
    'DB_PORT' => 3306,
    'DB_PREFIX' => 'web_',
    'DB_CHARSET' => 'utf8',
    //开启调试
    //'DB_BUG' => TRUE,

    'MODULE_ALLOW_LIST' => array('Home','admin'),
    'DEFAULT_MODULE' => 'Home',//默认模块
    'DEFAULT_ACTION' => 'index',//默认操作
    'URL_HTML_SUFFIX' => '',//开启伪静态,消除.html

    //模版文件
    'LAYOUT_ON' => TRUE,
    'LAYOUT_NAME' => 'layout',
    //忽略大小写
    'URL_CASE_INSENSITIVE' => true,
    //去除url中index.php
    'URL_MODEL'=>'2',

    //定义错误页面
    'ERROR_PAGE' => 'Home/Empty/404.html'
);