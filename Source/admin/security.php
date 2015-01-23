<?php
/**
* 
*/
class Security
{
	
	public function logout($a,$p)
	{
		unset($a);
		unset($b);
		return header("location:login.php");
	}
	public function confirm($con,$a,$p)
	{
		$sql = "select * from users where account='$a' and password='$p'";
		$rs = $con->query($sql);
		if($rs->num_rows > 0){
			return true;
		}
		return false;
	}
}
?>