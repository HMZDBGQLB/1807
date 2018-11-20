<?php
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");
	$id = $_POST['id'];
	
	if($id){
		$detailSql = "select * from nike where id = $id";
		$detailRes = mysql_query($detailSql);
		$detailArr = array();
		while($detailRow = mysql_fetch_assoc($detailRes)){
			array_push($detailArr,$detailRow);
		}
		echo json_encode($detailArr);
	}else{
		$sql = "select * from nike";
		$res = mysql_query($sql);
		$arr = array();
		while($row = mysql_fetch_assoc($res)){
			array_push($arr,$row);
		}
		
		echo json_encode($arr);
	}
	
	
	
	mysql_close();
?>