<?php
	session_start();
	include_once('includes/connect.inc');
	// include_once('includes/security.php');
	// if(confirm($con,$_SESSION['$account'], $_SESSION['$password']) == false){
	// 	header("Location: login.php");
	// }
	$_SESSION['$account'] = 'hvquyet';
	$_SESSION['$role'] = '1';
	$sql_sel = sprintf("SELECT * FROM users WHERE account='%s'", $_SESSION['$account']);
	$rs_sel = @mysqli_query($connect, $sql_sel);
	$row_sel = @mysqli_fetch_array($rs_sel);

	$time=getdate(date("U"));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lí</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="header-top"><h1>Website tin tức</h1></div>
			<div id="header-bottom">
				<div id="header-bottom-left"><a>Trang quản lí</a></div>
				<div id="header-bottom-right">
					<div>Xin chào: <a href="?m=users&act=profile" title="Xem thông tin cá nhân"><?php echo $row_sel['fullname']  ?></a> | <a href="logout.php">Thoát</a></div>
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