<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller{

    public function _initialize(){
        $this->_user = session('username');
        if(strtolower(CONTROLLER_NAME) != "sign" && strtolower(CONTROLLER_NAME) != "public"){
            if(empty($this->_user)){
                $this->redirect('Sign/index');
            }

            $this->assign('admin',$this->_user);
        }

        //检查sesssion
        if(!isset($_SESSION['uid']) && !isset($_SESSION['username'])){
            $this->redirect('Sign/index');
        }

        $this->username = session('username');
        $this->uid = session('uid');
    }
}