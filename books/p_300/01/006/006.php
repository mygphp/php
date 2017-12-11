<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31
 * Time: 18:23
 */
/*
 * 获取当前文件的名
 */
echo "006.php<br>";

echo "__FILE__:".__FILE__."<br>";//文件的完整路径

echo "REQUEST_URI:".$_SERVER['REQUEST_URI'].'<br>';//通过浏览器请求的地址获取文件的目录名

echo "SCRIPT_NAME:".$_SERVER['SCRIPT_NAME'].'<br>';//只得到文件名而不包括路径
echo "PHP_SELF:".$_SERVER['PHP_SELF'].'<br>';///只得到文件名而不包括路径

echo "SCRIPT_FILENAME".$_SERVER['SCRIPT_FILENAME'].'<br>';//通过服务器数组获取文件的完整路径
