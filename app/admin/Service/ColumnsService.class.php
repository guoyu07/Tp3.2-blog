<?php

namespace Admin\Service;

class ColumnsService{

    /**
     * 获取栏目名称
     * @param  [type] $cond   [description]
     * @param  [type] $fields [description]
     * @return [type]         [description]
     */
    public function getColumnameById($id,$fields){
        $condition = array('cid' => $id);
        $ret = D('Columns')->getone($condition,$fields);
        return $ret;
    }
}