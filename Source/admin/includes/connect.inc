<?php
	$connect = @mysqli_connect($_SERVER['SERVER_NAME'], 'root', '');
	if(!$connect){
		die("Không thể kết nối đến Server");
	}
	else{
		$db = @mysqli_select_db($connect, 'newsphp');
		if(!$db){
			die('Không thể kết nối đến cơ sở dữ liệu');
		}
		else{
			@mysqli_query($connect, "set names 'UTF8'");
		}
	}
?>