<?php
	session_start();
	include_once('includes/connect.inc');
	include_once('includes/security.php');
	$xacthuc = confirmlg($connect,$_SESSION['account'],$_SESSION['password']);
	if($xacthuc == false){
		header("Location: login.php");
	}else
	{
		$sql_sel = sprintf("SELECT * FROM users WHERE account='%s'", $_SESSION['account']);
		$rs_sel = @mysqli_query($connect, $sql_sel);
		$row_sel = @mysqli_fetch_array($rs_sel);

		$sql_sel_role = sprintf("SELECT * FROM roles WHERE id=%d",$_SESSION['$role']);
		$rs_sel_role = @mysqli_query($connect,$sql_sel_role);
		$row_sel_role = @mysqli_fetch_array($rs_sel_role);

		$time=getdate(date("U"));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lí</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="header-top"><h1>Website tin tức</h1></div>
			<div id="header-bottom">
				<div id="header-bottom-left"><a>Trang quản lí</a></div>
				<div id="header-bottom-right">
					<div>Xin chào: <a href="?m=users&act=profile" title="Xem thông tin cá nhân"><?php echo $_SESSION['nameUser']  ?></a> (<?php echo $row_sel_role['name'] ?>) | <a href="logout.php">Thoát</a></div>
					<div><?php echo "$time[weekday], $time[month] $time[mday], $time[year]" ?></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<hr>
		<div id="content">
			<div id="content-menu">
				<ul>
					<li><a href="?m=users&act=list">Quản lí tài khoản</a></li>
					<li><a href="?m=categories&act=list">Quản lí danh mục</a></li>
					<li><a href="?m=news&act=list">Quản lí tin tức</a></li>
				</ul>
			</div>
			<div id="content-main">
				<?php
					$m = isset($_GET['m'])? $_GET['m'] : FALSE;
					$act = isset($_GET['act'])? $_GET['act'] : 'index';
					
					if( $m & $act )
					{
						include 'modules/'.$m.'/'.$act.'.php';
					}
					else
					{
						$m = 'users';
						$act = 'list';
						include 'modules/'.$m.'/'.$act.'.php';
					}

					/**/
	/*				 $m = isset($_GET['m'])? $_GET['m'] : FALSE;
                
	                if( !$m )
	                {
	                    include 'Source/home.php';
	                }
	                else
	                {
	                    if( !is_dir('Source/'.$m) )
	                    {
	                        include 'Source/404.php';
	                    }
	                    else
	                    {
	                        $act = isset($_GET['act'])? (is_file('Source/'.$m.'/'.$_GET['act'].'.php')? $_GET['act'] : 'index') : 'index';
	                        
	                        include 'Source/'.$m.'/'.$act.'.php';
	                    }
	                }

*/
				?>
			</div>
		</div>
		<hr>
		<div id="footer">PHP cơ bản</div>
	</div>
	<script type="text/javascript" language="javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" language="javascript" src="js/news.js"></script>
</body>
</html>
<?php }?>