<?php

namespace Admin\Controller;

use Think\Controller;

class MessageController extends CommonController{

    public function index(){
        $this->assign('title','留言管理');
        $this->display();
    }

    /**
     * 留言列表
     * @return [type] [description]
     */
    public function getlist(){
        $order = "mtime desc";
        $ret = D('Message')->getlist("",$fields = array(),$order);
        if(!is_array($ret)){
            $this->ajaxReturn(array('code' => 0,'msg' => '获取留言列表失败'));
        }
        $this->ajaxReturn(array('code' => 1,'data' => $ret,'msg' => '获取 留言列表成功'));
    }

    /**
     * 留言回复
     * @return [type] [description]
     */
    public function reply(){
        $mid = I('mid');
        if(empty($mid)){
            $this->error('参数错误','index',2);
        }
        $cond = array('mid' => $mid);
        $res = D('Message')->getone($cond);
        $this->assign('message',$res);
        $this->display();
    }

    public function doReply(){
        $mid = I('mid');
        if(empty($mid)){
            $this->error('参数错误','index',2);
        }
        $cond = array('mid' => $mid);
        $data['reply'] = I('reply');
        $data['is_reply'] = 1;
        $data['rtime'] = date('Y-m-d H:i:s',time());
        $ret = D('Message')->update($cond,$data);
        if(!$ret){
            $this->error('回复失败','index',2);
        }
        $this->success('回复成功','index',2);
    }

    /**
     * 删除留言
     * @return [type] [description]
     */
    public function deleteone(){
        $mid = I('mid');
        if(empty($mid)){
            $this->ajaxReturn(array('code' => -1,'msg' => '参数错误'));
        }

        $cond = array('mid' => $mid);
        $res = D('Message')->deleteEntity($cond);
        if(!$res){
            $this->ajaxReturn(array('code' => 0,'msg' => '删除失败'));
        }

        $this->ajaxReturn(array('code' => 1,'msg' => '删除成功'));
    }
}