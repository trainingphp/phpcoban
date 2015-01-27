<?php 
	$idCate = isset($_GET['id']) ? $_GET['id'] : '';
	echo $idCate;
	//Lay ten category
	$sqlCate = "select * from categories where id='$idCate'";
	$rscate = mysqli_query($connect,$sqlCate);
	$rowCate = mysqli_fetch_array($rscate);
	//Lay list tin theo category
	$sql = "select * from news where category_id='$idCate' order by id desc";
	$rs = mysqli_query($connect,$sql);
	

?>


<div class="row">
    <div class="col col-md-12">
        <h2><?php echo $rowCate['name']?></h2>
    </div>
</div>
                    
<article class="row">
	<?php
		while($row = mysqli_fetch_array($rs)){
	?>
	<div class="col col-md-6">							
		<!-- <img src="images/templatemo_tn_1.jpg" alt="Pic 1" class="img-thumbnail img-responsive"> -->
		<!-- <img src="admin/images/news/<?php echo $row['image']?>" alt="<?php echo $row['image']?>" class="img-thumbnail img-responsive"> -->
		<?php 
				if(!empty($row['image']))
				{
					echo "<img src='images/news/{$row['image']}' alt='{$row['image']}'  height='100px' class='img-thumbnail img-responsive'>";
				}else
				{
					echo '';
				}			
			?>
		<h4><?php echo $row['title']?></h4>
		<p><?php echo $row['description']?></p>
		<p><a href="?act=view&id=<?php echo $row['id']?>" class="btn btn-primary" role="button">View</a></p>
	</div>
	<?php }?>

	<!-- 
	<div class="col col-md-6">
		<img src="images/templatemo_tn_2.jpg" alt="Pic 2" class="img-thumbnail img-responsive">
		<h4>Etiam pharetra</h4>
		<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat.</p>
		<p><a href="#" class="btn btn-primary" role="button">View</a></p>
	</div>	           
</article> 	
<article class="row">
	<div class="col col-md-6">							
		<img src="images/templatemo_tn_3.jpg" alt="Pic 3" class="img-thumbnail img-responsive">
		<h4>Proin gravida</h4>
		<p>Fusce feugiat dignissim pharetra. Vivamus blandit velit sapien, ac venenatis eros venenatis nec. Sed nec ligula ut arcu bibendum euismod ac eget velit. In hac habitasse platea dictumst. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
		<p><a href="#" class="btn btn-primary" role="button">View</a></p>
	</div>
	<div class="col col-md-6">							
		<img src="images/templatemo_tn_4.jpg" alt="Pic 4" class="img-thumbnail img-responsive">
		<h4>Duis sed odio</h4>
		<p>Curabitur blandit, velit a rutrum cursus, mi massa porta nulla, nec ornare nunc leo sit amet ligula. Praesent risus purus, ultrices ac sollicitudin in, lacinia id ligula. Morbi in dictum nunc.</p>
		<p><a href="#" class="btn btn-primary" role="button">View</a></p>
	</div>	            -->
</article>