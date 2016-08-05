<?php
namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser {
    const ROLE_USER = 30;   //普通用户
    const ROLE_ADMIN = 40;   //普通管理员
    const ROLE_SUPER_ADMIN = 50;   //超级管理员

    public function register()
    {

    }
}
