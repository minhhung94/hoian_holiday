<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="serv_detail">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
        <?php 
                    $getid = $_GET['id']; 
                    $ketnoi = "SELECT * FROM restaurant where id='".$getid."'";
                    $truyvan = mysql_query($ketnoi);
                    $ketqua= mysql_fetch_array($truyvan); 
                        $sanpham = $ketqua['tensp'];
                        $cont = $ketqua['content'];
                        $id = $ketqua['id'];
                ?>
		<div class="module_about"><?=$sanpham?></div>
		
            <div class="anhh">
            <div class="detai_anhtour">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
            </div>
            <div class="detai_text2"><?=$cont?></div>
        </div>
          
        </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>