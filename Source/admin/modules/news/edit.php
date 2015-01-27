<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$sqlEdit = "select * from news where id='$id'";
	$rsEdit = mysqli_query($connect,$sqlEdit);
	$rowEdit = mysqli_fetch_array($rsEdit);

	$tb = '';
    
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
	$filename = '';
	$ktanh = true;
	$message_error = array();
	$messForm = array();
	if(isset($_POST['btnEdit']))
	{
		$title = isset($_POST['title']) ? $_POST['title'] : '';
		$des = isset($_POST['description']) ? $_POST['description'] : '';
		$cont = isset($_POST['cont']) ? $_POST['cont'] : '';

	$udDateTin = "UPDATE news SET title='$title',description='$des',cont='$cont' WHERE id='$id'";
			
			$kq =  "<script>alert('Sửa tin thành công');</script>";
			
			if(mysqli_query($connect,$udDateTin)){
				echo $kq;
				header("Location: ?m=news&act=list");
			}

	}
?>
<div>
	<p id="power">Cập nhật bài viết</p>
	<fieldset>
		<legend>Nhập thông tin bài viết</legend>
		<p>(*) Thông tin bắt buộc</p>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Title(*)</label></td>
					<td><input type="text" id="txtAcc" name="title" value="<?php echo $rowEdit['title']?>"></td>
				</tr>

				<tr>
					<td><label for="txtRole">Description(*)</label></td>
					<td><textarea name="description"><?php echo $rowEdit['description']?></textarea></td>
				</tr>
				
				<tr>
					<td><label for="txtPass">Content(*)</label></td>
					<td><textarea name="cont"><?php echo $rowEdit['cont']?></textarea></td>
				</tr>

				<tr>
					<td><label for="">Anh dai dien</label></td>
					<td class="anh">
						<p class="anh">
							<?php 
								if(!empty($rowEdit['image']))
								{
									echo "<img src='../images/news/{$rowEdit['image']}' alt='{$rowEdit['image']}' width='200px' height='200px'>";
								}else
								{
									echo '';
								}			
							?>
						</p>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" id="btnAdd" name="btnEdit" value="Save Now" onclick="return confirm('SAVE?');"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>
<?php mysqli_close($connect);?>