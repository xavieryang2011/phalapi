<?php
/**
 * Created by PhpStorm.
 * User: yangxh
 * Date: 17/7/1
 * Time: 18:08
 */
class Domain_MyUser{
    public function getUserInfo($userId){
        $rs=array();

        $userId=intval($userId);
        if($userId<=0){
            return $rs;
        }

        $model=new Model_MyUser();
        $rs=$model->getMyUserInfoById($userId);
        return $rs;
    }
}