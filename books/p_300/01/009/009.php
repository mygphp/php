<?php
header("content-Type: text/html; charset=utf-8");
	/*
	模拟实现数据库的常用操作
	 */
	echo "常用原子操作:<br><br>";
	echo "<a href='check.php?action=add'>执行添加操作</a><br>";
	echo "<a href='check.php?action=del'>执行删除操作</a><br>";
	echo "<a href='check.php?action=search'>执行查找操作</a><br>";
	echo "<a href='check.php?action=update>执行更新操作</a>";
?>