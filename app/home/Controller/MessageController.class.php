<?php

namespace Home\Controller;

use Think\Controller;

class MessageController extends CommonController{


    public function index(){
        $this->assign('title','留言板|爱技术，爱生活');
        $this->display();
    }

    public function getlist(){
        $order = 'mtime desc';
        $ret = D('Admin/Message')->getlist($condition,$fields = array(),$order);
        if(!$ret){
            $this->ajaxReturn(array('code' => 0,'msg' => '获取失败'));
        }
        $i = 0;
        foreach ($ret['data'] as $k) {
            $k['mtime'] = formatTime($k['mtime']);
            $k['rtime'] = formatTime($k['rtime']);
            $ret['data'][$i++] = $k;
        }
        $this->ajaxReturn(array('code' => 1,'msg' => '获取成功','data' => $ret));
    }

    public function addone(){
        $data = I('data');
        if($data == "" || $data['nickname'] == "" || $data['email'] == "" || $data['message'] == ""){
            $this->ajaxReturn(array('code' => 0,'msg' => '有未填项'));
        }
        $data['mtime'] = date('Y-m-d H:i:s',time());
        $data['head'] = getRandHead();
        $ret = D('Admin/Message')->addone($data);
        if(!$ret){
            $this->ajaxReturn(array('code' => 0,'msg' => '留言失败'));
        }

        $this->ajaxReturn(array('code' => 1,'msg' => '留言成功'));
    }
}