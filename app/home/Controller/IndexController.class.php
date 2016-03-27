<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController {
    public function index(){
        $this->display();
    }

    public function getlist()
    {
        //排序
        $order = 'ctime desc';
        $condition = array('if_deleted' => 0);
        $ret = D('Admin/Post')->getlist($condition,$fields = array(),$order);
        $i = 0;
        foreach ($ret['data'] as $k) {
            $k['cname'] = D('Columns','Service')->getColumnameById($k['cid']);
            $ret['data'][$i++] = $k;
        }
        $this->ajaxReturn(array('code' => 1,'msg' => '获取成功','data' => $ret));
    }

    /**
     * 获取某一篇具体的文章
     * @return [type] [description]
     */
    public function detail(){
        $aid = intval(I('aid'));
        if(empty($aid)){
            $this->ajaxReturn(array('code' => 0,'msg' => 'para error'));
        }

        $cond = array('aid' => $aid);
        $res = D('Admin/Post')->getone($cond);
        if(!$res){
            $this->error('页面错误',index,2);
        }
        //点击量＋1
        D('Admin/Post')->plusHit($cond,'rnum');
        $this->assign('title',$res['title']);
        $this->assign('post',$res);
        $this->display();
    }
}