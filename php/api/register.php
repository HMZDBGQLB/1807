<?php
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");
	
	$tel = $_POST["tel"];
	$password = $_POST["password"];
	//echo $tel;
	$checkSql = "select * from _user where tel=$tel";
	$checkRes = mysql_query($checkSql);
	$checkRow = mysql_num_rows($checkRes);
	//手机号已被注册
	if($checkRow > 0){
		echo '{"exit": true}';
	}else{
		$sql = "insert into _user (tel,password) values ($tel,'$password')";
		$isSucc = mysql_query($sql);
		
		if($isSucc){
			echo '{"code":1}';
		}else{
			echo '{"code":0}';
		}
	}
	
	mysql_close();
?>