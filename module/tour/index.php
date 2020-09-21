<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="tours">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<div class="module_about">TOUR</div>
        <div style="height: 20px;"></div>
		<?php 
                    $ketnoi = "SELECT * FROM produce";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) { 
                        $sanpham = $ketqua['tensp'];
                        $cont = $ketqua['description'];
                        $gia = $ketqua['price'];
                        $id = $ketqua['id'];
                ?>
            <div class="col-md-6">
            <div class="anhh">
            <div class="anhtour">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
            </div>
            <div class="text1"><?=$sanpham?></div>
            <div class="text2"><?php echo substr($cont,0,120)."...";?></div>
            <div class="text3">Price:<?=$gia?>$ /pax</div>
            <div class="tleft"><a href="<?=$path2?>/frontend/module/tour/detail.php?id=<?=$id?>/#detail"> >> DETAILS</a></div>
            <div class="tright"><a href="<?=$path2?>/frontend/module/tour/book.php?id=<?=$id?>/#books"> >> BOOK NOW</a></div>
            </div>
            <div style="clear:both;height: 20px;"></div>
        </div>
            <?php } ?>
        </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include 'menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>