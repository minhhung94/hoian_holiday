<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="news">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<div class="module_about">NEWS</div>
        <div style="clear: both; height: 20px;"></div>
		<?php 
                    $ketnoi = "SELECT * FROM news";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) { 
                        $sanpham = $ketqua['title'];
                        $cont = $ketqua['description'];
                        $gia = $ketqua['price'];
                        $id = $ketqua['id'];
                ?>
           <div class="row">
                <div class="col-md-3 col-lg-3">
                <div class="news_anh">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="news_text1"><?=$sanpham?></div>
                <div class="news_text2"><?php echo substr($cont,0,200)."...";?></div>
                <div class="news_chitiet"><a href="<?=$path2?>/frontend/module/news/detail.php?id=<?=$id?>/#news_ct">READ MORE</a></div>
            </div>
            <div style="clear: both; height: 20px;"></div>
           </div>
            <?php } ?>

        </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>