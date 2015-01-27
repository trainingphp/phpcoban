<?php
	session_start();
	unset($_SESSION['account']);
	unset($_SESSION['password']);
	header("location:login.php");
?>