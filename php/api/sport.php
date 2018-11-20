<?php
	
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");

	$sql = "select * from sport limit 0,2";
	$res = mysql_query($sql);
	$arr = array();
	
	while($row = mysql_fetch_assoc($res)){
		array_push($arr,$row);
	}

	echo json_encode($arr);
	
	mysql_close();
?>