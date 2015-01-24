<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if($id != ''){
		$sql_edit_cate = sprintf("SELECT * 
			FROM categories
			WHERE id=%d",$id);
		$rs_edit_cate = @mysqli_query($connect, $sql_edit_cate);
		$row_edit_cate = @mysqli_fetch_array($rs_edit_cate);
	}

	if(isset($_POST['btnUpdate'])){
		$name = isset($_POST['txtName']) ? $_POST['txtName'] : '';

		if($name != ''){
			$sql_upd_cate = sprintf("UPDATE categories 
				SET name='%s' WHERE id=%d",$name,$id);
			@mysqli_query($connect, $sql_upd_cate);
			header("Location: ?m=categories&act=list");
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
					<td><label for="txtName">Tài khoản(*):</label></td>
					<td><input type="text" id="txtName" name="txtName" value="<?php echo $row_edit_cate['name'] ?>"></input></td>
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" id="btnUpdate" name="btnUpdate" value="Cập nhật" onclick="return confirm('Cập nhật?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>