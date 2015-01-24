<?php
	$sql_sel = sprintf("SELECT * FROM categories");
	$rs_sel = @mysqli_query($connect, $sql_sel);
	$num_sel = @mysqli_num_rows($rs_sel);
?>
<div>
	<p id="power">Danh sách chuyên mục</p>
	<p>Số chuyên mục: <?php echo $num_sel ?></p>
	<?php if($_SESSION['$role'] == 1 || $_SESSION['$role'] == 2)
	echo "<a href=\"?m=categories&act=add\">Thêm</a> mới một chuyên mục";
	?>
	<form action="">
		<table cellpadding="10">
			<tr>
				<th>STT</th>
				<th>Chuyên mục</th>
				<?php if($_SESSION['$role'] == 1 || $_SESSION['$role'] == 2)
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
				<td><?php echo $row_sel['name'] ?></td>
				<?php if($_SESSION['$role'] == 1 || $_SESSION['$role'] == 2){?>
				<td><a href="<?php echo '?m=categories&act=edit&id='.$row_sel['id']?>"><img src="images/category_edit.png" src="category_edit" alt=""></a></td>
				<td><a href="<?php echo '?m=categories&act=delete&id='.$row_sel['id']?>" onclick="return confirm('Những bài viết thuộc chuyên mục này sẽ bị xóa.\nBạn có muốn tiếp tục?');"><img src="images/category_delete.png" alt="category_delete"></a></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	</form>
</div>