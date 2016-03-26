<?php

namespace admin\Model;

/**
* 用户模型
*/
class UserModel extends CommonModel
{
    
    //表名
    protected $tableName = "user";
    //表字段
    protected $fieldsName = array(
        'uid' => '编号',
        'username' => '用户名',
        'password' => '密码',
        'realname' => '真实姓名',
        'last_login' => '上次登录时间',
        'ctime' => '创建时间',
        'token' => 'token值',
        'ip' => '登录ip',
        'email' => '邮箱'
    );
}