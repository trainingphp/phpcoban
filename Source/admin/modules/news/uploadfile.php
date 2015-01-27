<?php
	$filename = '';
	if(isset($_POST['add']))
	{

		if(isset($_POST['anh'])){
			$filename = $_FILE['anh']['name'];
			if($filename != NULL){
				if($_FILE['anh']['type'] == image/jpg || $_FILE['anh']['type'] == image/png || $_FILE['anh']['type'] == image/gif)
				{
					if($_FILE['anh']['size'] > 1048600)

						echo "File khong duoc lon hon 1m"
				}else{
					
				}
			}
		}
	}
?>