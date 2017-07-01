<?php

/**
 * Created by PhpStorm.
 * User: yangxh
 * Date: 17/7/1
 * Time: 17:04
 */
class API_MYUSER extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'getMyUserInfo' => array(
                'userId' => array('name' => 'user_id', 'type' => 'int', 'min' => 1, 'des' => '用户ID', 'require' => true),
            )
        );
    }

    /**
     * 得到我的用户信息
     * @desc code 1:用户不存在
     */
    public function getMyUserInfo()
    {
        $rs = array('code' => 0, 'msg' => '', 'info' => array());
        $domain = new Domain_MyUser();
        $info = $domain->getUserInfo($this->userId);
        if(empty($info)){
            DI()->logger->debug('usser not found',$this->userId);
            $rs['code']=1;
            $rs['msg']='user not exist';
            return $rs;
        }
        $rs['info']=$info;
        return $rs;

    }
}