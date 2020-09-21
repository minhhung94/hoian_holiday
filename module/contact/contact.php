<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>

<div class="container" id="contact">
    <div class="col-md-9 col-lg-9" style="padding-left: 0px;">
        <div class="module_about">Contact</div>
        <div style="height: 20px;"></div>
        <?php 
                $ketnoi = "SELECT * FROM pages where id='134'";
                $truyvan = mysql_query($ketnoi);
                $ketqua= mysql_fetch_array($truyvan);
                $sp = $ketqua['content'];
              ?>
              <div><?=$sp?></div>
        <div class="col-md-6">
            <?php include 'fromnhap.php' ?>
                
            </div>
        <div class="col-md-6"></div>
    </div>
    <div class="col-md-3 col-lg-3" style="padding-right: 0px;">
        <?php include '../menuright.php' ?>
    </div>
</div>
<?php include '../../template/footer/index.php' ?>
