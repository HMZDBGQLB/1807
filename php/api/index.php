<?php
	
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");

	$sql = "select * from _index limit 0,7";
	$res = mysql_query($sql);
	$arr = array();
	
	while($row = mysql_fetch_assoc($res)){
		array_push($arr,$row);
	}

	echo json_encode($arr);
	
	mysql_close();
?>