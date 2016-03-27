<?php

namespace Admin\Model;

use Think\Model\RelationModel;

class CommonModel extends RelationModel{
    //表名
    protected $tableName = "";
    //表字段
    protected $fieldsName = array();

    /**
     * 创建实体
     * @param [type] $data [description]
     */
    public function addone($data)
    {
        $realdata = array();
        foreach ($data as $key => $value) {
            if(array_key_exists($key,$this->fieldsName)){
                $realdata[$key] = $value;
            }
        }
        $ret = $this->add($realdata);
        return $ret;
    }

    /**
     * 获取一个实体信息
     * @param  [type] $condition [description]
     * @param  array  $fields    [description]
     * @return [type]            [description]
     */
    public function getone($condition,$fields = array(),$order)
    {
        if($fields){
            $fields = array_intersect($fields, array_keys($this->fieldsName));
        }else{
            $fields = array_keys($this->fieldsName);
        }

        $ret = $this
        ->field($fields)
        ->where($condition)
        ->find();
        return $ret;
    }

    /**
     * 获取列表
     * @param  [type]  $condition   [description]
     * @param  array   $fields      [description]
     * @param  integer $currentpage [description]
     * @param  integer $perpage     [description]
     * @param  [type]  $order       [description]
     * @return [type]               [description]
     */
    public function getlist($condition,$fields = array(),$order,$limit,$embed = false)
    {
        if($fields){
            $fields = array_intersect($fields,array_keys($this->fieldsName));
        }else{
            $fields = array_keys($this->fieldsName);
        }

        $ret = $this
        ->field($fields)
        ->relation(true,$embed)
        ->where($condition)
        ->limit($limit)
        ->order($order)
        ->select();

        $count = $this->where($condition)->count();

        return array(
            'count' => $count,
            'data' => $ret
        );
    }

    /**
     * 逻辑删除
     * @param  [type] $condition [description]
     * @return [type]            [description]
     */
    public function logicDelete($condition)
    {
        $data = array("if_deleted" => 1);
        $res = $this->where($condition)->data($data)->save();
        return $res;
    }
    /**
     * 物理删除操作
     * @param  [type] $condition [description]
     * @return [type]            [description]
     */
    public function deleteEntity($condition)
    {
        $res = $this->where($condition)->delete();
        return $res;
    }

    /**
     * 更新操作
     * @param  [type] $condition [description]
     * @param  [type] $data      [description]
     * @return [type]            [description]
     */
    public function update($condition,$data)
    {
        if(!$condition){
            return;
        }
        $res = $this->where($condition)->save($data);
        return $res;
    }

    /**
     * 访问量同步＋1
     * @param  [type] $condition [description]
     * @param  [type] $data      [description]
     * @return [type]            [description]
     */
    public function plusHit($condition,$field)
    {
        $res = $this->where($condition)->setInc($field,1);
        return $res;
    }

    /**
     * 信息统计
     * @return [type] [description]
     */
    public function getCount($condition)
    {
        $count = $this->where($condition)->count();
        return $count;
    }
}