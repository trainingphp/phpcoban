<?php
session_start();
require("connect.php");
include "security.php";
echo $_SESSION['account']."-".$_SESSION['password'];
$sc = new Security();
if($sc->confirm($con,$_SESSION['account'],$_SESSION['password']) == false){
	header("location:login.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf8" />
</head>
<body>
	<div id="block_trai">
           <?php
        
                $m = isset($_GET['m'])? $_GET['m'] : FALSE;
                
                if( !$m )
                {
                    include 'modules/trang_chu.php';
                }
                else
                {
                    if( !is_dir('modules/'.$m) )
                    {
                        include 'modules/404.php';
                    }
                    else
                    {
                        $act = isset($_GET['act'])? (is_file('modules/'.$m.'/'.$_GET['act'].'.php')? $_GET['act'] : 'index') : 'index';
                        
                        include 'modules/'.$m.'/'.$act.'.php';
                    }
                }
		?>
        </div>
        <div class="clrear"></div>
</body>
</html>
<?php
}
?>