<?php
	$sql = "select * from news order by id desc";
	$rs = @mysqli_query($connect,$sql	);
?>
<div>
	<p id="power">DANH MỤC TIN</p>
	<!-- <p>Số bảng ghi: <?php echo $num_sel ?></p> -->
	<p><a href="?m=news&act=add">Thêm</a> mới một bài viết</p>
		<table cellpadding="10">
			<tr>
				<th>STT</th>
				<th>Title</th>
				<th>Description</th>
				<th>Image</th>				
				<th width="80px">Date Create</th>
				<th>User</th>
				<th width="80px">Action</th>
			</tr>
			<?php
			$stt = 0;
			while($row = @mysqli_fetch_array($rs)){
				$stt ++;
			?>
			<tr>
				<td><?php echo $stt ?></td>
				<td><a href="?m=news&act=view&id=<?php echo $row['id']?>">
						<?php echo $row['title'] ?>
					</a>
				</td>
				<td><?php echo $row['description'] ?></td>
				<td>
					<?php 
						if(!empty($row['image']))
						{
							echo "<img src='../images/news/{$row['image']}' alt='{$row['image']}' height='50px'>";
						}else
						{
							echo '';
						}			
					?>
				</td>
				<td><?php echo date('d-m-Y',strtotime($row['date_create']))?></td>
				<td>
					<!-- nguoi tao tin -->
					<?php
						$user_id = $row['user_id'];
						$sqlName = "SELECT * from users where id = '$user_id'";
						$rsName  = mysqli_query($connect,$sqlName);
						$rowName = mysqli_fetch_array($rsName);
						echo $rowName['fullname'];
					?>
				</td>
				<td><a href="<?php echo '?m=news&act=edit&id='.$row['id']?>"><img src="images/category_edit.png" alt="category_edit"></a> <a href="<?php echo '?m=news&act=delete&id='.$row['id']?>" onclick="return confirm('Ban muon xoa tin này?');"><img src="images/category_delete.png" alt="category_delete"></a></td>
				<?php } ?>
				
			</tr>
			
		</table>
</div>