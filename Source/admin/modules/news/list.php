<?php
require"../../connect.php";
$sqlChooseCate = "";

$sqlListNews = "select * from news";
$rsListNew = $con->query($sqlListNews);
?>
<div id="listtin">
	<!-- <div id="cateChoose">
		<select name="cateChoose">
			<option value=""></option>
		</select>
	</div> -->

	<div id="listNews">
		<table>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Image</td>
				<td>Description</td>
				<td>Date Create</td>
				<td>Date Update</td>
				<td>User create</td>
				<td>Action</td>
			</tr>
			<?php
			$i = 0;
				if($rsListNew->num_rows >0)
				{
					while($row = $rsListNew->fetch_assoc()){
						$i ++;
						?>
				<tr>
					<td><?php echo $i?></td>
					<td><?php echo $row['title']?></td>
					<td><?php echo $row['image']?></td>
					<td><?php echo $row['desc']?></td>
					<td><?php echo $row['date_create']?></td>
					<td><?php echo $row['date_update']?></td>
					<td>
					<?php 
						$user_id = $row['user_id'];
						$sqlFullName = "select id,fullname from users where id='$user_id'";
						$rsFullName = $con->query($sqlFullName);
						$rowFullName = $rsFullName->fetch_assoc();
						echo $rowFullName['fullname'];
					?>
					</td>
					<td><a href="?m=news&act=edit&id=<?php echo $row['id']?>">Edit</a> | <a href="?m=news&act=delete&id=<?php echo $row['id']?>">Dele</a></td>
				</tr>
						<?php }
				}
			?>
		</table>
	</div>
	<div>
		<p class="add"><a href="?m=news&act=edit">ADD NEWS</a></p>
	</div>
</div>