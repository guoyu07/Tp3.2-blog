<?php

namespace Admin\Model;

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

    public function login($data){
        if($data['username'] == "" || $data['password'] == ""){
            //用户名/密码为空
            return 0;
        }
        $cond = array('username' => $data['username']);
        $res = $this->getone($cond);
        if(!$res){
            //不存在的账户
            return 1;
        }elseif ($data['password'] != $res['password']) {
            //密码错误
            return 2;
        }

        //用户名密码正确
        $data = array(
            'last_login' => date('Y-m-d H:i:s',time()),
            'ip' => get_client_ip()
        );
        $cond = array('uid' => $res['uid']);
        $this->update($cond,$data);
        //存session
        SESSION('uid',$res['uid']);
        SESSION('username',$res['username']);
        return 3;
    }
}