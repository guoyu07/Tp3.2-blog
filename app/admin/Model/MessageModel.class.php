<?php

namespace admin\Model;

/**
* 留言模型
*/
class MessageModel extends CommonModel
{
    //表名
    protected $tableName = "message";
    //表字段
    protected $fieldsName = array(
        'mid' => '编号',
        'message' => '留言内容',
        'mtime' => '留言时间',
        'nickname' => '昵称',
        'reply' => '回复内容',
        'rtime' => '回复时间',
        'is_reply' => '是否已回复',
        'email' => '邮箱'
    );
}