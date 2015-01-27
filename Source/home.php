<?php
	//Xac dinh tong so hang
	$sql_tongsohang = sprintf("SELECT * FROM news");
	$result_tongsohang = @mysqli_query($connect, $sql_tongsohang);
	$tongsohang = @mysqli_num_rows($result_tongsohang);

	//So hang muon hien thi tren trang
	$sohanghienthi = 3;

	//So trang hien thi
	$sotranghienthi = 5;

	//Xac dinh tong so trang
	$tongsotrang = ceil($tongsohang / $sohanghienthi);

	//Xac dinh trang hien hanh
	$tranghienhanh = isset($_GET['page']) ? $_GET['page'] : 1;
	if($tranghienhanh < 1) { 
		header("Location: ?&act=home&page=1");
	} elseif ($tranghienhanh > $tongsotrang) {
		header("Location: ?&act=home&page=$tongsotrang");
	}

	//Xac dinh ban ghi bat dau theo trang hien hanh
	$banghibatdau = ($tranghienhanh - 1) * $sohanghienthi;

	$sql_sel_news = sprintf("SELECT * FROM news ORDER BY id DESC LIMIT %d,%d",$banghibatdau,$sohanghienthi);
	$rs_sel_news = @mysqli_query($connect, $sql_sel_news);
?>
<div class="row">
    <div class="col col-md-12">
                        
        <h2>Chào mừng đến với Botany</h2> 

        <div class="flexslider">
            <ul class="slides">
                <li><img src="images/templatemo_slide_1.jpg" alt="slide 1" /></li>
                <li><img src="images/templatemo_slide_2.jpg" alt="slide 2" /></li>
                <li><img src="images/templatemo_slide_3.jpg" alt="slide 3" /></li>
            </ul>
        </div>                            
    </div>
</div>
					
<?php
while($row_sel_news = @mysqli_fetch_array($rs_sel_news)){
?>
<article class="row">
	<div class="col col-md-12">
		<img src="images/news/<?php echo $row_sel_news['image'] ?>" alt="Picture" class="img-thumbnail img-responsive img_left" width=290px>
        <h3><?php echo $row_sel_news['title'] ?></h3> 
		<p><?php echo $row_sel_news['description'] ?></p>
		<p><a href="?act=view&id=<?php echo $row_sel_news['id']?>" class="btn btn-primary" role="button">View More</a></p>
	</div>								            
</article>
<?php } ?>
	<div id="paging" align="center">     	
		<?php
        
        
        if($tongsotrang <= $sotranghienthi ) 
        {
            for($t=1; $t <= $tongsotrang; $t++) {
                echo '<a href="?&act=home&page='.$t. '">'.$t. '</a> | ';
            }
        }
        else {
        
            $sotrangbatdau = 1; 
            $sotrangketthuc = $sotranghienthi; 
            
            if($tranghienhanh > $sotranghienthi / 2) {
                $sotrangbatdau = $tranghienhanh - ceil($sotranghienthi / 2) + 1;
                $sotrangketthuc = $tranghienhanh + ceil($sotranghienthi / 2);
                
                if($tranghienhanh >= $tongsotrang - ceil($sotranghienthi / 2)) 
                {
                    $sotrangbatdau = $tongsotrang - $sotranghienthi;
                    $sotrangketthuc = $tongsotrang;
                }
            }
        
            echo '[<a href="?act=home&page=1">Đầu</a>] ';
            echo '[<a href="?act=home&page='.($tranghienhanh - 1).'">Trước</a>] &nbsp; ';
            for($t=$sotrangbatdau; $t <= $sotrangketthuc; $t++) {
                if($t==$tranghienhanh) 
                {
                    echo '<a href="?&act=home&page='.$t. '" style="color:red"><b>'.$t. '</b></a> &nbsp; ';
                } else {
                    echo '<a href="?&act=home&page='.$t. '">'.$t. '</a> &nbsp; ';
                }
            }
            echo '[<a href="?&act=home&page='.($tranghienhanh + 1).'">Tiếp</a>] ';
            echo '[<a href="?&act=home&page='.$tongsotrang.'">Cuối</a>]';
        }
        ?>
     </div>