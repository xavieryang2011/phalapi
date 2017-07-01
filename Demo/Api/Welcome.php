<?php
/**
 * welcome接口
 * User: yangxh
 * Date: 17/6/30
 * Time: 15:34
 */
class Api_Welcome extends PhalApi_Api{
    /**
     * sayhello 接口
     * @desc 返回sayhello内容
     * @return array
     */
   public function say(){
       $rs=array();
       $rs['title']='hello world!';
       $rs['content']='everybody';
       return $rs;
    }
}