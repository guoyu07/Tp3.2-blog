<?php
namespace admin\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function _initialize(){
        $this->assign('title','后台管理');
        
    }
    
    public function index(){
        $p_Cond = array('if_deleted' => 0);
        $postNum = D('Post')->getCount($p_Cond);
        $c_Num = D('Columns')->getCount($p_Cond);
        $u_Num = D('User')->getCount();
        $m_Num = D('Message')->getCount();
        $count = array(
            'postNum' => $postNum,
            'columnNum' => $c_Num,
            'userNum' => $u_Num,
            'messageNum' => $m_Num
        );
        $order = "ctime desc";
        $posts = D('Post')->getlist($p_Cond,$fields = array(),$order,2);
        $this->assign('count',$count);
        $this->assign('posts',$posts['data']);
        $this->display();
    }
}