<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30
 * Time: 18:24
 */
header("content-Type: text/html; charset=utf-8");
/*
 * php中动态输出javascript脚本
 */
//使用定界符
$str_javascript = <<<start
<script type='text/javascript'>
alert("动态网页之美---php");
</script>
start;
echo $str_javascript;
