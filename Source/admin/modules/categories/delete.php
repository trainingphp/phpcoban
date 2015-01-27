<?php
	function unlinkimg($img)
		{
			$url = '../images/news/'.$img;
			return unlink($url);
		}
	$sqlDe = sprintf("SELECT image,news.id,news.category_id,categories.id FROM news INNER JOIN categories ON news.category_id=categories.id WHERE categories.id=%d", $_GET['id']);
	$rsDe = mysqli_query($connect,$sqlDe);
	while($rowDe = mysqli_fetch_array($rsDe)){
		$img = $rowDe['image'];
		unlinkimg($img);
	}

	$sql_del_news = sprintf("DELETE FROM news WHERE category_id=%d", $_GET['id']);	
	@mysqli_query($connect,$sql_del_news);

	$sql_del_cate = sprintf("DELETE FROM categories WHERE id=%d", $_GET['id']);
	@mysqli_query($connect,$sql_del_cate);	
	header("Location: ?m=categories&act=list");
?>