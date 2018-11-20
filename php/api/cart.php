<?php
	header("Access-Control-Allow-Origin:http://localhost:9999");
	include("../config/connect.php");
	
	$id = $_POST["id"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$num = $_POST["num"];
	
	$page = $_POST["page"];
	
	if($id){
		$sql = "select * from cart where id=$id";
		$res = mysql_query($sql);
		
		//该id已存在
		if(mysql_num_rows($res)){
			//如果page存在，执行删除操作
			if($page){
				$_sql = "delete from cart where id=$id";
			}else{
				if($price){
					$_sql = "update cart set num=($num+num) where id=$id";
				}else{
					$_sql = "update cart set num=$num where id=$id";
				}
			}
		}else{
			$_sql = "insert into cart (id,description,price,num) values ($id,'$description',$price,$num)";
		}
		
		$isSucc = mysql_query($_sql);
		
		//执行结束后返回数据
		if($isSucc){
			echo '{"code":1}';
		}
	}
	else{
		$msql = "select * from cart";
		$mres = mysql_query($msql);
		$arr = array();
		while($mrow = mysql_fetch_assoc($mres)){
			array_push($arr,$mrow);
		}
		echo json_encode($arr);
	}
	
	
	
	mysql_close();
?>