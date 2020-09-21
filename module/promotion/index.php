<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="promoti">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<?php 
					$getid = $_GET['id']; 
                    $ketn = "SELECT * FROM promotion where id='".$getid."'";
                    $truyv = mysql_query($ketn);
                    $ketq= mysql_fetch_array($truyv);
                        $sanp = $ketq['content'];
                        $sanpa = $ketq['tensp'];
                        $idi = $ketq['id'];
                	?>
		<div class="module_about"><?=$sanpa?></div>
                	<div class="anh_promo">
                		<img data-u="image" src="<?=$path2?>/admin/<?=$ketq['img_url']?>" />
                		<div><?=$sanp?></div>
                	</div>
    </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>