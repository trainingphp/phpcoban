<?php
	$sql_sel = sprintf("SELECT users.id,role_id,account,name,fullname 
			FROM users INNER JOIN roles ON users.role_id=roles.id 
			WHERE account='%s'", $_SESSION['$account']);
	$rs_sel = @mysqli_query($connect, $sql_sel);
	$row_sel = @mysqli_fetch_array($rs_sel);
?>
<div>
	<div>
		<fieldset>
			<legend>Thông tin tài khoản</legend>
				<table cellpadding="5">
					<tr>
						<td><label for="txtAcc">Tài khoản:</label></td>
						<td><?php echo $row_sel['account'] ?></td>
					</tr>
					<tr>
						<td><label for="txtRole">Quyền hạn:</label></td>
						<td><?php echo $row_sel['name'] ?></td>
					</tr>					
					<tr>
						<td><label for="txtFullname">Tên đầy đủ:</label></td>
						<td><?php echo $row_sel['fullname'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="?m=users&act=editprofile">Thay đổi thông tin tài khoản</a></td>
					</tr>
				</table>
		</fieldset>
	</div>
</div>