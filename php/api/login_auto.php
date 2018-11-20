<?php
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");
	
	$tel = $_POST["tel"];
	
	$sql = "select * from _user where tel=$tel";
	$res = mysql_query($sql);
	
	$arr = array();
	
	while($row = mysql_fetch_assoc($res)){
		array_push($arr,$row);
	}
	echo json_encode($arr);
	/*if($row){
		echo '{"code": 1}';
	}else{
		echo '{"code": 0}';
	}*/
	
	mysql_close();
?>