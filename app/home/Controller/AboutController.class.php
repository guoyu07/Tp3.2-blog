<?php

namespace home\Controller;

use Think\Controller;

class AboutController extends Controller{

    public function _initialize(){

        $this->assign('title','关于我');
    }

    public function index(){
        $this->display();
    }
}