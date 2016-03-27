<?php

namespace Admin\Controller;

use Think\Controller;

/**
* desc:文章业务逻辑控制器
* date:2016-03-05
* author:tangchunlinit@163.com
*/
class PostController extends CommonController
{
    /**
     * @return array [获取文章列表]
     */
    public function index(){
        $this->assign('title','文章管理');
        $this->display();
    }

    public function getlist(){
        $condition = array('if_deleted' => 0);
        $order = "ctime desc";
        $ret = D('Post')->getlist($condition,$fields = array(),$order);
        if(!is_array($ret)){
            $this->ajaxReturn(array('code' => 0,'msg' => '获取文章列表失败'));
        }
        $i = 0;
        $fields = array('columname');
        foreach ($ret['data'] as $k) {
            $k['columname'] = D('Columns','Service')->getColumnameById($k['cid'],$fields);
            $ret['data'][$i++] = $k;
        }
        $this->ajaxReturn(array('code' => 1,'data' => $ret,'msg' => '获取文章列表成功'));
    }

    public function create(){
        $this->assign('title','创建文章');
        $cond = array('if_deleted' => 0);
        $columns = D('Columns')->getlist($cond);
        $this->assign('columns',$columns['data']);
        $this->display();
    }

    /**
     * 新建文章
     * @return [array] [description]
     */
    public function addone(){
        $data = I('data');
        $data['ctime'] = date('Y:m:d H:i:s',time());
        $title = $data['title'];
        $summary = $data['summary'];
        $content = $data['content'];
        if($title == "" || $summary == "" || $content == ""){
            $this->ajaxReturn(array('code' => -1,'msg' => '文章添加失败'));
        }
        $ret = D('Post')->addone($data);
        if(!$ret){
            $this->ajaxReturn(array('code' => 0,'msg' => '文章添加失败'));
        }

        $this->ajaxReturn(array('code' => 1,'msg' => '文章添加成功'));
    }

    /**
     * 删除文章
     */
    public function deleteone(){
        $aid = I('aid');
        if(empty($aid)){
            $this->ajaxReturn(array('code' => -1,'msg' => '参数错误'));
        }

        $cond = array('aid' => $aid);
        $res = D('Post')->logicDelete($cond);
        if(!$res){
            $this->ajaxReturn(array('code' => 0,'msg' => '删除失败'));
        }

        $this->ajaxReturn(array('code' => 1,'msg' => '删除成功'));
    }

    /**
    *修改文章页面
    */
    /**public function edit(){
        $aid = I('aid');
        if(empty($aid)){
            $this->error('参数错误','index',2);
        }
        $cond = array('aid' => $aid);
        $res = D('Post')->getone($cond);
        $this->assign('post',$res);
        $this->display();
    }*/
}
