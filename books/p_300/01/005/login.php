<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 15:49
 */
header("content-Type: text/html; charset=utf-8");
if(isset($_POST)){
    $name = $_POST['userName'];
    $pwd = $_POST['userPwd'];
    if($name == 'myg' && $pwd == '123456'){
        echo '登录成功';
    }else{
        echo '登录失败';
    }
}