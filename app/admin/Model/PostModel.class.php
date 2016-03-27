<?php

namespace Admin\Model;

class PostModel extends CommonModel{

    //表名
    protected $tableName = "post";
    //表字段
    protected $fieldsName = array(
        'aid' => '编号',
        'title' => '标题',
        'content' => '内容',
        'summary' => '摘要',
        'ctime' => '创建时间',
        'if_deleted' => '是否已删除',
        'cid' => '所属栏目编号',
        'rnum' => '阅读数'
    );
}