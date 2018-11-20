<?php
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");
	
	$user = $_POST["user"];
	$password = $_POST["password"];
	
	$sql = "select * from _user where tel=$user and password='$password'";
	$res = mysql_query($sql);
	$row = mysql_num_rows($res);
	
	if($row){
		echo '{"code": 1}';
	}else{
		echo '{"code": 0}';
	}
	
	mysql_close();
?>