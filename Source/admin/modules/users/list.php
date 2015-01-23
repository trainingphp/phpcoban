<?php
	$sql_sel = sprintf("SELECT users.id,password,role_id,account,name,fullname FROM users INNER JOIN roles ON users.role_id=roles.id");
	$rs_sel = @mysqli_query($connect, $sql_sel);
	$num_sel = @mysqli_num_rows($rs_sel);
?>
<div>
	<p id="power">Danh sách tài khoản</p>
	<p>Số bảng ghi: <?php echo $num_sel ?></p>
	<?php if($_SESSION['$role'] == 1)
	echo "<a href=\"?m=users&act=add\">Thêm</a> mới một tài khoản";
	?>
	<form action="">
		<table cellpadding="10">
			<tr>
				<th>STT</th>
				<th>Tài khoản</th>
				<th>Quyền hạn</th>
				<th>Tên đầy đủ</th>
				<?php if($_SESSION['$role'] == 1)
				echo "<th colspan=\"2\">Hành động</th>";
				?>
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
				<td><a href="<?php echo '?m=users&act=edit&id='.$row_sel['id']?>"><img src="images/user_edit.png" src="user_edit" alt=""></a></td>
				<td><a href="<?php echo '?m=users&act=delete&id='.$row_sel['id']?>" onclick="return confirm('Xóa tài khoản này?');"><img src="images/user_delete.png" alt="user_delete"></a></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>