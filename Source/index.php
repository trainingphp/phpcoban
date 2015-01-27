<?php
	include_once('includes/connect.inc');
	$sql_sel = sprintf("SELECT * FROM categories");
	$rs_sel = @mysqli_query($connect, $sql_sel);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Tin tức</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
    <<link rel="stylesheet" href="css/styleindex.css">
  	<script src="slider/modernizr.js"></script>
</head>
<body class="templatemo_juice_bg">
	<div id="main_container">
		<div class="container" id="home">
			<div class="row col-wrap">			 
				<div id="left_container" class="col col-md-3 col-sm-12">
                	<div class="templatemo_logo">
						<a href="index.php"><img src="images/templatemo_logo.png" alt="Botany Theme"></a>
					</div>
					<nav id="main_nav">
						<ul class="nav">
							<li class="active"><a href="index.php">Home</a></li>
							<?php
							while($row_sel = @mysqli_fetch_array($rs_sel)){
							?>
							<li><a href="<?php echo '?act=categories&id='.$row_sel['id']; ?>"><?php echo $row_sel['name'] ?></a></li>
							<?php } ?>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav> <!-- nav -->	
					<form  action="#" method="get" class="navbar-form" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Tìm kiếm" id="keyword" name="keyword" title="Chức năng này chưa xây dựng!">
						</div>
						<button type="submit" class="btn btn-primary" name="Search">Go</button>
					</form>
					<div>
						<a href="#"><img src="images/facebook.png" alt="Like us on Facebook"></a>
						<a href="#"><img src="images/twitter.png" alt="Follow us on Twitter"></a>
						<a href="#"><img src="images/rss.png" alt="RSS feeds"></a>
					</div>
				</div>
				<div id="right_container" class="col col-md-9 col-sm-12">
                	<?php
						$act = isset($_GET['act'])? $_GET['act'] : '';						
						if($act )
						{
							include $act.'.php';
						}
						else
						{
							$act = 'home';
							include $act.'.php';
						}
                	?>					               
				</div>
			</div>
			<footer class="row credit">
				<div class="col col-md-12">
					<div id="templatemo_footer">
						Copyright © 2084 <a href="#">Company Name</a>
					</div>
				</div>
			</footer>
		</div>		
	</div>
    
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="slider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- templatemo 391 botany -->
</body>
</html>