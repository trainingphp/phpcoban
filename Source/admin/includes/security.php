<?php
	function logout($a,$p)
	{
		unset($a);
		unset($b);
		return header("location:login.php");
	}
	function confirmlg($con,$a,$p)
	{
		$sql = "select * from users where account='$a' and password='$p'";
		$rs =mysqli_query($con,$sql);
		if(mysqli_num_rows($rs) == 1){
			return true;
		}
		return false;
	}
	function login($c,$a,$p)	
	{
		$sql = "select * from users where account='$a' and password='$p'";
		$rs = mysqli_query($c,$sql);
		if(mysqli_num_rows($rs) > 0)
		{
			$row = mysqli_fetch_array($rs);
			$_SESSION['account']  = $a;
			$_SESSION['password'] = $p;
			$_SESSION['$role']    = $row['role_id'];
			$_SESSION['nameUser'] = $row['fullname'];
			$_SESSION['user_id']  = $row['id'];
			return true;
		}
		return false;
	}
?>