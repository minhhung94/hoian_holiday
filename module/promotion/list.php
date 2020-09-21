<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="promotion">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<div class="module_about">PROMOTION</div>
		<?php 
                    $ketn = "SELECT * FROM promotion";
                    $truyv = mysql_query($ketn);
                    while ($ketq= mysql_fetch_array($truyv)) {
                        $sanp = $ketq['content'];
                        $sanpa = $ketq['tensp'];
                        $mota = $ketq['description'];
                        $id = $ketq['id'];
                	?>
                    <div class="col-md-12">
                    <div class="col-md-6">
                	<div class="anh_promotion">
                        <div class="promotion_tensp"><?=$sanpa?></div>
                		<img data-u="image" src="<?=$path2?>/admin/<?=$ketq['img_url']?>" />
                	</div></div>
                    <div class="col-md-6">
                        <div class="promotion_mota"><?=$mota?></div>
                        <div style="height: 50px;"></div>
                        <div class="news_chitiet"><a href="<?=$path2?>/frontend/module/promotion/index.php?id=<?=$id?>/#promoti">READ MORE</a></div>
                    </div></div>
                    <div style="clear: both;height: 20px;"></div>
                    <?php } ?>
    </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>