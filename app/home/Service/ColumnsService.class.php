<?php

namespace home\Service;

class ColumnsService{

    /**
     * 获取栏目名称
     * @param  [type] $cond   [description]
     * @param  [type] $fields [description]
     * @return [type]         [description]
     */
    public function getColumnameById($id){
        $condition = array('cid' => $id);
        $ret = D('admin/Columns')->getone($condition);
        return $ret;
    }
}