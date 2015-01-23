<?php
	$sql_sel_role = sprintf("SELECT * FROM roles");
	$rs_sel_role = @mysqli_query($connect, $sql_sel_role);
	if(isset($_POST['btnAdd'])){
		$account = isset($_POST['txtAcc']) ? $_POST['txtAcc'] : '';
		$role_id = isset($_POST['txtRole']) ? $_POST['txtRole'] : '';
		$password = isset($_POST['txtPass']) ? $_POST['txtPass'] : '';
		$fulname = isset($_POST['txtFullname']) ? $_POST['txtFullname'] : '';

		$sql_check = sprintf("SELECT * FROM users WHERE account='%s", $account);
		$rs_check = @mysqli_query($connect, $sql_check);
		if(@mysqli_num_rows($rs_check) == 0 && $account != '' && $role_id != '' && $password != '' && $fulname != ''){
			$sql_ins_user = sprintf("INSERT INTO users(role_id,account,password,fullname)
				VALUES(%d,'%s','%s','%s')",
				$role_id,$account,$password,$fulname);
			@mysqli_query($connect, $sql_ins_user);
			header("Location: ?m=users&act=list");
		}
		else{
			echo "<script>alert('Thêm không thành công. Vui lòng kiểm tra lại thông tin!');</script>";
		}
	}
?>
<div>
	<p id="power">Thêm tài khoản mới</p>
	<fieldset>
		<legend>Nhập thông tin tài khoản</legend>
		<p>(*) Thông tin bắt buộc</p>
		<form action="" method="POST" id="frmAdd" name="frmAdd">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Tài khoản(*)</label></td>
					<td><input type="text" id="txtAcc" name="txtAcc"></td>
				</tr>
				<tr>
					<td><label for="txtRole">Quyền hạn(*)</label></td>
					<td><select name="txtRole" id="txtRole">
						<?php while($row_sel_role = @mysqli_fetch_array($rs_sel_role)){?>
							<option value="<?php echo $row_sel_role['id'] ?>"><?php echo $row_sel_role['name'] ?></option>
						<?php } ?>
					</select></td>
				</tr>
				<tr>
					<td><label for="txtPass">Mật khẩu(*)</label></td>
					<td><input type="password" id="txtPass" name="txtPass"></td>
				</tr>
				<tr>
					<td><label for="txtConfPass">Xác nhận mật khẩu(*)</label></td>
					<td><input type="password" id="txtConfPass" name="txtConfPass"></td>
				</tr>
				<tr>
					<td><label for="txtFullname">Tên đầy đủ(*)</label></td>
					<td><input type="text" id="txtFullname" name="txtFullname"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="btnAdd" name="btnAdd" value="Thêm" onclick="return confirm('Thêm?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>