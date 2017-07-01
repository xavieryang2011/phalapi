<?php
/**
 * Created by PhpStorm.
 * User: yangxh
 * Date: 17/7/1
 * Time: 18:15
 */
class Model_MyUser extends PhalApi_Model_NotORM{
    public function getMyUserInfoById($userId){
        return $this->getORM()
            ->select('*')
            ->where('id=?',$userId)
            ->fetch();
    }
}