<?php

namespace admin\Controller;

use Think\Controller;

class SignController extends Controller{
    //登录页面
    public function sign(){
        $this->assign('title','后台登录');
        $this->display();
    }
}