<?php
	$sql_sel = sprintf("SELECT users.id,password,users.role_id,account,name,fullname FROM users INNER JOIN roles ON users.role_id=roles.id");
	$rs_sel = @mysqli_query($connect, $sql_sel);
?>
<div><a href="?m=user&act=list">Quản lí tài khoản</a></div>
<div>
	<p>Danh sách tài khoản</p>
	<a href="?m=users&act=add">Thêm</a> mới một tài khoản
	<form action="">
		<table cellpadding="10">
			<tr>
				<th>STT</th>
				<th>Tài khoản</th>
				<th>Quyền hạn</th>
				<th>Tên đầy đủ</th>
				<th>Hành động</th>
			</tr>
			<?php
			$stt = 0;
			while($row_sel = @mysqli_fetch_array($rs_sel)){
				$stt ++;
			?>
			<tr>
				<td><?php echo $stt ?></td>
				<td><?php echo $row_sel['account'] ?></td>
				<td><?php echo $row_sel['name'] ?></td>
				<td><?php echo $row_sel['fullname'] ?></td>
				<?php if($row_sel['role_id'] != 1 && $_SESSION['$role'] == 1){?>
				<td><a href="<?php echo '?m=users&act=edit&id='.$row_sel['id']?>">Edit</a> | <a href="<?php echo '?m=users&act=delete&id='.$row_sel['id']?>">Delete</a></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>