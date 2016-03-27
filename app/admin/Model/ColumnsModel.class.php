<?php

namespace Admin\Model;

class ColumnsModel extends CommonModel{

    //表名
    protected $tableName = "columns";
    //表字段
    protected $fieldsName = array(
        'cid' => '编号',
        'columname' => '栏目名',
        'ctime' => '创建时间',
        'if_deleted' => '是否已删除'
    );
}