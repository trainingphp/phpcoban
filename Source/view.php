<?php
	$id = isset($_GET['id'])  ? $_GET['id'] : '';
	$sql = "select * from news where id='$id'";
	$rs = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($rs);
?>
<article class="row">							
	<div class="col col-md-12">
		<p class="title"><?php echo $row['title']?></p>
		<p class="day">
			<?php 
				 echo date('l d-m-Y h : i : A ',strtotime($row['date_update']));
			?>
		</p>
		
		<p class="description"><?php echo $row['description']?></p>	
		<p class="anh">
			<?php 
				if(!empty($row['image']))
				{
					echo "<img src='images/news/{$row['image']}' alt='{$row['image']}' height='250px'>";
				}else
				{
					echo '';
				}			
			?>
		</p>		
		<p><?php echo $row['cont']?></p>								
	</div>														            
</article>