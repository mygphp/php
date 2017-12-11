<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 18:37
 */
/*
 * 随机打印出字符串
 */
$str = '0123456789abcdefghijklmnopqrstuvwxyz';//字符串的合集
$n = 8;//随机字符串的长度
$len = strlen($str) - 1;//生成随机数最大的范围
$s = '';
for($i = 0;$i<$n; $i++){
    $s .= $str[rand(0,$len)];
}
echo $s . "<br/>";