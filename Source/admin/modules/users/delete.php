<?php
	$sql_del_user = sprintf("DELETE FROM users WHERE id=%d", $_GET['id']);
	@mysqli_query($connect,$sql_del_user);
	header("Location: ?m=users&act=list");
?>