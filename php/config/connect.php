<?php
	include("config.php");
	//连接数据库
	mysql_connect($config["host"], $config["username"], $config["password"]);
	//查找表格
	mysql_select_db($config["dbname"]);
	//设置编码格式
	mysql_query("set charset 'utf8'");
	mysql_query("set charcater set 'utf8'");
?>