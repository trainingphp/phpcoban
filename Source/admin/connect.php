<?php
	$server = $_SERVER['SERVER_NAME'];
	$username = 'root';
	$pass = '';
	$db = 'newsphp';
	$con = new mysqli($server,$username,$pass,$db);
	if($con->connect_error)
	{
		die("Connect fail".$con->connect_error);
	}
	$con->query("SET NAEMS 'utf8'");
?>