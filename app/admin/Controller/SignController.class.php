<?php

namespace Admin\Controller;

use Think\Controller;

class SignController extends Controller{
    //登录页面
    public function index(){
        $this->assign('title','后台登录');
        $this->display();
    }

    public function loginHandel(){
        $username = I('username');
        $password = sha1(md5(I('password')));
        $data = array('username' => $username,'password' => $password);
        $row = D('User')->login($data);
        if($row == 3){
            $this->redirect('Index/index');
        }elseif($row == 1){
            $this->assign('umessage','用户名不存在');
            $this->display('index');
        }elseif ($row == 2) {
            $this->assign('pmessage','密码错误');
            $this->display('index');
        }else{
            $this->assign('unmessage','未知错误');
            $this->display('index');
        }
    }

    public function logout()
    {
        session(null);
        $this->redirect('Sign/index');
    }
}