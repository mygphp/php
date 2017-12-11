<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 18:45
 */
header("content-Type: text/html; charset=utf-8");
/*
 * 单引号和双引号的使用
 */
$abc = 'my name is tom<br/>';
echo '直接打印输出:'.$abc;
echo '在单引号内打印输出:'.'$abc';
echo '<br/>';
echo '在双引号内打印输出:'."$abc";
