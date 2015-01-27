<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	function unlinkimg($img)
		{
			$url = '../images/news/'.$img;
			return unlink($url);
		}

	$sqlDe = "select image,id from news where id='$id'";
	$rsDe = mysqli_query($connect,$sqlDe);
	$rowDe = mysqli_fetch_array($rsDe);
	$img = $rowDe['image'];
	unlinkimg($img);


	$sql = "DELETE FROM news where id = '$id'";
	$rs = @mysqli_query($connect,$sql);
	header("Location: ?m=news&act=list");
?>