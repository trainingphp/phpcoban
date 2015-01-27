<?php
	 // $path = "../images/news/"; // file lưu vào thư mục data
	
	$tb = '';
    
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
	$filename = '';
	$ktanh = true;
	$message_error = array();
	$messForm = array();
	if(isset($_POST['btnAdd']))
	{
		$filename = $_FILES['file']['name'];
		$title = isset($_POST['title']) ? $_POST['title'] : '';
		$des = isset($_POST['description']) ? $_POST['description'] : '';
		$cont = isset($_POST['cont']) ? $_POST['cont'] : '';
		$choo = isset($_POST['choo']) ? $_POST['choo'] : '';
		$sql = "insert into news(title,description,cont,date_create,date_update,user_id,category_id,image) values('$title','$des','$cont',NOW(),NOW(),'$user_id','$choo','$filename')";



		if( $filename != '' )
			{
				$file = explode('.', $filename);
				$file_ext = end($file);
				
				$allow_file_ext = array('png', 'jpg', 'gif'); // Các file có đuôi được upload
						
				if( count($file) < 2 ||  !in_array($file_ext, $allow_file_ext) ||  $_FILES['file']['size'] > 2*1024*1024 )
				{
					$message_error['file']  = 'Chỉ được phép upload ảnh (png, jpg, gif) và nhỏ hơn 2MB';
					$ktanh = FALSE;	
				}
				else
				{
					// Nếu upload ảnh đúng yêu cầu thì chuyển file từ folder tạm sang folder image chính thức
				move_uploaded_file($_FILES['file']['tmp_name'], '../images/news/'.$_FILES['file']['name']);
				}
			}


		if(($ktanh == true) || ($title != '' && $des != '' && $cont != ''))
		// if($title != '' && $des != '' && $cont != '')
		{
			if(@mysqli_query($connect,$sql) == true){


				echo "<script>alert('Thêm tin thanh cong');</script>";
			}else{
				echo "<script>alert('Thêm không thành công. Vui lòng kiểm tra lại thông tin!');</script>";
			}
		}else
		{
			$tb = 'Cac gia tri khong duoc rong';
		}
		//echo $filename;

	}
?>
<div>
	<p id="power">Thêm bài viết mới</p>
	<fieldset>
		<legend>Nhập thông tin bài viết</legend>
		<p>(*) Thông tin bắt buộc</p>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="5">
				<tr>
					<td><label for="txtAcc">Title(*)</label></td>
					<td><input type="text" id="txtAcc" name="title"></td>
				</tr>

				<tr>
					<td><label for="txtRole">Description(*)</label></td>
					<td><textarea name="description"></textarea></td>
				</tr>
				
				<tr>
					<td><label for="txtPass">Content(*)</label></td>
					<td><textarea name="cont"></textarea></td>
				</tr>

				<tr>
					<td><label for=""></label></td>
					<td><input type="file" name="file" size="20"></td>
				</tr>

				<tr>
					<td><label for="">Choose Category</label></td>
					<td>
						<select name="choo">
						
						<?php 
							$sqlChoo = "select * from categories";
							$rsChoo = mysqli_query($connect,$sqlChoo);
							while($rowChoo = mysqli_fetch_array($rsChoo)){
						?>
							<option value="<?php echo $rowChoo['id']?>"><?php echo $rowChoo['name']?></option>}
							option
						<?php }?>
						</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" id="btnAdd" name="btnAdd" value="Thêm"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</div>
<?php mysqli_close($connect);?>