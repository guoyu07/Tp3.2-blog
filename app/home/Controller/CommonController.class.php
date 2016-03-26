<?php

namespace home\Controller;

use Think\Controller;

class CommonController extends Controller{

    public function _initialize(){
        //热门文章
        $condition = array('if_deleted' => 0);
        $order = 'rnum desc';
        $hot = D('admin/Post')->getlist($condition,$fields = array(),$order,4);
        $this->assign('hot',$hot['data']);
        $this->assign('title','爱技术，爱生活');
    }
}