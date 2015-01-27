<?php 
	session_start();
	require("includes/connect.inc");
	include "includes/security.php";
	$kt = 0;
	$tb = '';
	if(isset($_POST['lg'])){
		if(login($connect,$_POST['acount'],$_POST['password']) == true)
			$kt = 1;
		else{
			$tb = "Tai khoan khong chinh xac";
		}
	}
	if($kt == 1){
		header("location:index.php");
	}
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styleLogin.css" rel="stylesheet" type="text/css">
<script src="js/js_login.js" type="text/jscript" language="javascript"></script>
<title>Login</title>
</head>

<body>
<div id="wrapper">
	<!---->
    <div id="lg">
    	<div id="title">
        	<div class="anh">
            <img src="images/lock_48.png" alt="login">
            </div>
            <div class="tieude"><h1>Login hệ thống</h1></div>
            <span><?php
				echo $tb;
            ?></span>
            <div class="clear"></div>
        </div>
        <div id="fr">
        	<form method="post" action="" onSubmit="return check()">
            	<table>
                	<tr>
                    	<td></td>
                        <td><input class="input" type="acount" id="acount" placeholder="Enter acount" name="acount">
                        </td>
                        <span class="span" id="acount"></span>
                    </tr>
                    <tr>
                    	
                    	<td></td>
                        <td><input class="input" type="password" id="pass" placeholder="Enter PassWord" name="password">
                        </td>
                         <span id="check_pass" class="span"></span>
                    </tr>
                    <tr>
                    	<td>&nbsp</td>
                        <td><a href="#">Quên mật khẩu</a></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                        <td><input type="submit"  name="lg" value="Login" style="font-size:18px"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <!---->
</div>
</body>
</html>


<?php
	/*session_start();
	require("includes/connect.inc");
	include "includes/security.php";
	$kt = 0;
	if(isset($_POST['btn']))
	{
		if(login($connect,$_POST['acount'],$_POST['password']) == true)
			$kt = 1;
	}
	if($kt == 1){
		header("Location:index.php");
	}*/
?>
<!-- <html>
<head>
	<title>LOGIN SYSTEM</title>
	<link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<div id="wrapper">
	<div id="login">
		<div id="icon">
			<ul>
				<li class="image">
					<img src="images/security.png" alt="Login" height="100px">
				</li>
				<li class="title">LOGIN SYSTEM</li>
			</ul>
		</div>
		<div>
			<form method="post" action="">
			<ul>
				<li class="input"><input type="text" name="acount" value="" placeholder="Enter acount"></li>
				<li class="input"><input type="password" name="password" value="" placeholder="Enter PassWord"></li>
				<li class="btn"><input type="submit" name="btn" value="Login Now"></li>
			</ul>
		</form>
		</div>
	</div>
</div>
</body>
</html> -->
<?php mysqli_close($connect);?>