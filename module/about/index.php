<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="abo">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<div class="module_about">ABOUT US</div>
		<?php 
                    $ketnoi = "SELECT * FROM pages where id='136'";
                    $truyvan = mysql_query($ketnoi);
                    $ketqua= mysql_fetch_array($truyvan); 
                        $cont = $ketqua['content'];
                        $tieude = $ketqua['title'];
                        $id = $ketqua['id'];
                ?>
			<div class="tieude2"><?=$tieude?></div>
			<div class="content2"><?=$cont ?></div>
			<div class="" style="padding-top: 50px;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5272.65235615919!2d108.33414852381732!3d15.878837064795148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1522757836312" width="100%" height="408" frameborder="0" style="" allowfullscreen></iframe>
</div>
	</div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>

<?php include '../../template/footer/index.php' ?>