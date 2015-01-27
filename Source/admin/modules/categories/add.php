<?php
	if(isset($_POST['btnAdd'])){
		$name = isset($_POST['txtName']) ? $_POST['txtName'] : '';

		$sql_check = sprintf("SELECT * FROM categories WHERE name='%s", $name);
		$rs_check = @mysqli_query($connect, $sql_check);
		if(@mysqli_num_rows($rs_check) != 0 && $name != ''){
			$sql_ins_cate = sprintf("INSERT INTO categories(name)
				VALUES('%s')",$name);
			@mysqli_query($connect, $sql_ins_cate);
			header("Location: ?m=categories&act=list");
		}
		else{
			echo "<script>alert('Thêm không thành công. Vui lòng kiểm tra lại thông tin!');</script>";
		}
	}
?>
<div>
	<p id="power">Thêm chuyên mục</p>
	<fieldset>
		<legend>Nhập chuyên mục mới</legend>
		<p>(*) Thông tin bắt buộc</p>
		<form action="" method="POST" id="frmAdd" name="frmAdd">
			<table cellpadding="5">
				<tr>
					<td><label for="txtName">Chuyên mục(*)</label></td>
					<td><input type="text" id="txtName" name="txtName"></td>
				</tr>				
				<tr>
					<td></td>
					<td><input type="submit" id="btnAdd" name="btnAdd" value="Thêm" onclick="return confirm('Thêm?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>