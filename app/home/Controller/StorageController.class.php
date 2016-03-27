<?php
namespace Home\Controller;
use Think\Controller;
class StorageController extends CommonController {
    public function index(){
        $this->assign('title','存储|爱技术，爱生活');
        $this->display();
    }

    public function getlist()
    {
        //排序
        $order = 'ctime desc';
        $condition = array('if_deleted' => 0,'cid' => 2);
        $ret = D('Admin/Post')->getlist($condition,$fields = array(),$order);
        $i = 0;
        foreach ($ret['data'] as $k) {
            $k['cname'] = D('Columns','Service')->getColumnameById($k['cid']);
            $ret['data'][$i++] = $k;
        }
        $this->ajaxReturn(array('code' => 1,'msg' => '获取成功','data' => $ret));
    }
}