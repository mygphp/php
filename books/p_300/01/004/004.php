<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30
 * Time: 18:32
 */
header("content-Type: text/html; charset=utf-8");
/*
 * 输出隔行换色的列表
 */
$color = '';
echo '变色列表';
echo '<ul>';
for($i = 1;$i <= 5; $i++){
    if($i%2 == 0){
        $color = 'red';
    }else{
        $color = 'yellow';
    }
    echo '<li style="background-color: '.$color.';width:200">第'.$i.'行的内容';
}
echo '</ul>';