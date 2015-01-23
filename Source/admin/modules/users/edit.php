<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if($id != ''){
		$sql_edit_user = sprintf("SELECT users.id,password,role_id,account,name,fullname 
			FROM users INNER JOIN roles ON users.role_id=roles.id
			WHERE users.id=%d",$id);
		$rs_edit_user = @mysqli_query($connect, $sql_edit_user);
		$row_edit_user = @mysqli_fetch_array($rs_edit_user);
	}

	$sql_sel_role = sprintf("SELECT * FROM roles");
	$rs_sel_role = @mysqli_query($connect, $sql_sel_role);

	if(isset($_POST['btnUpdate'])){
		$role_id = isset($_POST['txtRole']) ? $_POST['txtRole'] : '';

		if($role_id != ''){
			$sql_upd_user = sprintf("UPDATE users 
				SET role_id=%d WHERE id=%d",$role_id,$id);
			@mysqli_query($connect, $sql_upd_user);
			header("Location: ?m=users&act=list");
		}
		else{
			echo "<script>alert('Cập nhật không thành công. Vui lòng kiểm tra lại thông tin!');</script>";
		}
	}
?>
<div>
	<p id="power">Cập nhật quyền cho tài khoản</p>
	<fieldset>
		<legend>Cập nhật thông tin</legend>
		<p>(*) Thông tin bắt buộc</p>
		<form action="" method="POST" id="frmAdd" name="frmAdd">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Tài khoản:</label></td>
					<td><?php echo $row_edit_user['account'] ?></td>
				</tr>
				<tr>
					<td><label for="txtRole">Quyền hạn(*):</label></td>
					<td><select name="txtRole" id="txtRole">
						<?php while($row_sel_role = @mysqli_fetch_array($rs_sel_role)){
						if($row_sel_role['id'] == $row_edit_user['role_id']){ ?>
							<option selected="selected" value="<?php echo $row_sel_role['id'] ?>"><?php echo $row_sel_role['name'] ?></option>
						<?php }else{ ?>
							<option value="<?php echo $row_sel_role['id'] ?>"><?php echo $row_sel_role['name'] ?></option>
						<?php }} ?>
					</select></td>
				</tr>				
				<tr>
					<td></td>
					<td><input type="submit" id="btnUpdate" name="btnUpdate" value="Cập nhật" onclick="return confirm('Cập nhật?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>