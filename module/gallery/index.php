<?php include '../../template/header.php' ?>
<?php include '../../template/head/index.php' ?>
<div class="container" id="galler">
	<div class="col-md-9 col-lg-9" style="padding-left: 0px;">
		<div class="module_about">GALLERY</div>
        <div style="clear: both; height: 20px;"></div>
		<?php
        $sql_page = "SELECT * FROM photos WHERE Home='1' order by id desc";
        $query_page = mysql_query($sql_page);
        while ($row_page = mysql_fetch_array($query_page)) {

            ?>      
                    <div class="col-md-3">
                        <div class="galle_anh">
                            <a class="example-image-link" href="<?=$path2?>/admin/<?=$row_page['img_url']?>" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="<?=$path2?>/admin/<?=$row_page['img_url']?>" alt="" /></a>
                        </div>
                      <div style="height: 20px;"></div>
                  </div>

      <?php
  } ?>
      
    </div>
	<div class="col-md-3 col-lg-3" style="padding-right: 0px;">
		<?php include '../menuright.php' ?>
	</div>
</div>
<?php include '../../template/footer/index.php' ?>