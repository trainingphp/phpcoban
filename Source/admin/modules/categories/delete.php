<?php
	$sql_del_news = sprintf("DELETE FROM news WHERE category_id=%d", $_GET['id']);
	@mysqli_query($connect,$sql_del_news);

	$sql_del_cate = sprintf("DELETE FROM categories WHERE id=%d", $_GET['id']);
	@mysqli_query($connect,$sql_del_cate);
	header("Location: ?m=categories&act=list");
?>