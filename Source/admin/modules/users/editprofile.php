<?php
	$sql_edit_user = sprintf("SELECT users.id,account,password,role_id,name,fullname 
			FROM users INNER JOIN roles ON users.role_id=roles.id 
			WHERE account='%s'", $_SESSION['account']);
	$rs_edit_user = @mysqli_query($connect, $sql_edit_user);
	$row_edit_user = @mysqli_fetch_array($rs_edit_user);
	

	$sql_sel_role = sprintf("SELECT * FROM roles");
	$rs_sel_role = @mysqli_query($connect, $sql_sel_role);

	if(isset($_POST['btnUpdate'])){
		$passold = isset($_POST['txtPassOld']) ? $_POST['txtPassOld'] : '';
		$password = isset($_POST['txtPass']) ? $_POST['txtPass'] : '';
		$fullname = isset($_POST['txtFullname']) ? $_POST['txtFullname'] : '';
		$sql_chk_pass = sprintf("SELECT password FROM users WHERE password='%s'",$passold);
		$rs_chk_pass = @mysqli_query($connect, $sql_chk_pass);
		if(@mysqli_num_rows($rs_chk_pass) == 0){
			echo "<script>alert('Mật khẩu hiện tại không đúng!');</script>";
		}
		else if($passold == $password){
			echo "<script>alert('Mật khẩu mới trùng với mật khẩu hiện tại. Vui lòng nhập mật khẩu mới!');</script>";
		}
		else if($password != '' && $fullname != ''){
			$sql_upd_user = sprintf("UPDATE users 
				SET password='%s',fullname='%s' 
				WHERE account='%s'",$password,$fullname,$_SESSION['account']);
			@mysqli_query($connect, $sql_upd_user);
			header("Location: ?m=users&act=profile");
		}
		else{
			echo "<script>alert('Cập nhật không thành công. Vui lòng kiểm tra lại thông tin!');</script>";
		}
	}
?>
<div>
	<fieldset>
		<legend>Cập nhật thông tin tài khoản</legend>
		<form action="" method="POST" id="frmAdd" name="frmAdd">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Tài khoản:</label></td>
					<td><?php echo $row_edit_user['account'] ?></td>
				</tr>
				<tr>
					<td><label for="txtRole">Quyền hạn:</label></td>
					<td><?php echo $row_edit_user['name'] ?></td>
				</tr>
				<tr>
					<td><label for="txtPassOld">Mật khẩu hiện tại(*):</label></td>
					<td><input type="password" id="txtPassOld" name="txtPassOld"></td>
				</tr>
				<tr>
					<td><label for="txtPass">Mật khẩu mới(*):</label></td>
					<td><input type="password" id="txtPass" name="txtPass"></td>
				</tr>
				<tr>
					<td><label for="txtConfPass">Xác nhận mật khẩu(*):</label></td>
					<td><input type="password" id="txtConfPass" name="txtConfPass"></td>
				</tr>
				<tr>
					<td><label for="txtFullname">Tên đầy đủ(*):</label></td>
					<td><input type="text" id="txtFullname" name="txtFullname" value="<?php echo $row_edit_user['fullname']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="btnUpdate" name="btnUpdate" value="Cập nhật" onclick="return confirm('Cập nhật?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>