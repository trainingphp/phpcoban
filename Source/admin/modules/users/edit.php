<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
?>
<div>
	<fieldset>
		<legend>Cập nhật thông tin tài khoản</legend>
		<form action="" method="POST" id="frmAdd" name="frmAdd">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Tài khoản(*):</label></td>
					<td><input type="text" id="txtAcc" name="txtAcc"></td>
				</tr>
				<tr>
					<td><label for="txtRole">Quyền hạn(*):</label></td>
					<td><select name="txtRole" id="txtRole">
						<?php while($row_sel_role = @mysqli_fetch_array($rs_sel_role)){?>
							<option value="<?php echo $row_sel_role['id'] ?>"><?php echo $row_sel_role['name'] ?></option>
						<?php } ?>
					</select></td>
				</tr>
				<tr>
					<td><label for="txtPass">Mật khẩu(*):</label></td>
					<td><input type="password" id="txtPass" name="txtPass"></td>
				</tr>
				<tr>
					<td><label for="txtConfPass">Xác nhận mật khẩu(*):</label></td>
					<td><input type="password" id="txtConfPass" name="txtConfPass"></td>
				</tr>
				<tr>
					<td><label for="txtFullname">Tên đầy đủ(*):</label></td>
					<td><input type="text" id="txtFullname" name="txtFullname"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="btnAdd" name="btnAdd" value="Add"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>