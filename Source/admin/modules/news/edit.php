<?php
	require("../../connect.php");
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$sqlEditNew = "select * from news where id='$id'";
	$rsEditNew = $con->query($sqlEditNew);
	if($rsEditNew->num_rows > 0)
	{
		$rowEditNew = $rsEditNew->fetch_assoc();
	}
?>
<div id="editnews">
	<form method="post" action="">
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="<?php echo $rowEditNew['title']?>"></td>
			</tr>

			<tr>
				<td>Description</td>
				<td><input type="text" name="desc" value="<?php echo $rowEditNew['desc']?>"></td>
			</tr>

			<tr>
				<td>image small</td>
				<td></td>
			</tr>

			<tr>
				<td>image big</td>
				<td></td>
			</tr>

			<tr>
				<td>Content</td>
				<td><textarea name="content"><?php echo $rowEditNew['content']?></textarea></td>
			</tr>

			<tr>
				<td>Choose Category</td>
				<td>
					<select name="chooseCate" >
						<?php
							//lis ra danh muc
						?>
						<option value=""><></option>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>Save Now</td>
			</tr>
		</table>
	</form>
</div>