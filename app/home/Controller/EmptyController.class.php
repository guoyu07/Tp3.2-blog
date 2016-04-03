<?php

/**
 * 404页面设置
 */

namespace Home\Controller;

use Think\Controller;

class EmptyController extends Controller{

    function _empty(){
        header("HTTP/1.0 404 NOT Found");

        $this->display('Empty:404');
    }

    function index(){
        header("HTTP/1.0 404 NOT Found");
        $this->assign('title','页面错误');
        $this->display('Empty:404');
    }
}