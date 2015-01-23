<?php
	session_start();
	require("connect.php");
	$kt = 0;
	if(isset($_POST['btn']))
	{
		$us = isset($_POST['acount']) ? $_POST['acount'] : '';
		$pass = isset($_POST['password']) ? $_POST['password'] : '';
		$sql = "select * from users where account='$us' and password='$pass'";
		$rs = $con->query($sql);	
		if($rs->num_rows > 0)
		{
			$row = $rs->fetch_assoc();
			$_SESSION['account'] = $us;
			$_SESSION['password'] = $pass;
			$_SESSION['role'] = 
			$kt = 1;
		}
	}
	if($kt == 1){
		header("Location:index.php");
	}else{
?>
<html>
<head>
	<title>LOGIN SYSTEM</title>
	<link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<div id="wrapper">
	<div id="login">
	<form method="post" action="">
		<ul>
			<li class="input"><input type="text" name="acount" value="" placeholder="Enter acount"></li>
			<li class="input"><input type="password" name="password" value="" placeholder="Enter PassWord"></li>
			<li class="input"><input type="submit" name="btn" value="Login Now"></li>
		</ul>
	</form>
	</div>
</div>
</body>
</html>
<?php $con->close()}?>