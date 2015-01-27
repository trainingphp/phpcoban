<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$sql = "select * from news where id='$id'";
	$rs = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($rs);
?>
<div id="viewNews">
		<!-- <img src="images/news/templatemo_flower2.jpg" alt="templatemo_flower2.jpg" width="200px" height="200px"> -->
		<p class="title"><?php echo $row['title']?>
		<p class="anh">
			<?php
				if(!empty($row['image']))
				{
					echo "<img src='../images/news/{$row['image']}' alt='{$row['image']}' width='200px' height='200px'>";
				}else{
					echo '';
				}
			?>
		</p>
		<p class="ngaydang"><?php echo date('l d-m-Y',strtotime($row['date_create']))?></p>
		<p class="description"><b><?php echo $row['description']?></b></p>
		<p class="content"><?php echo $row['cont']?></p>
</div>
<?php mysqli_close($connect)?>