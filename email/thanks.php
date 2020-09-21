<?php
  include'../template/header.php';
 ?>
 <?php
  include'../template/Head/index.php';
 ?>
<?php
if($lang=='en'){
 ?>
<?php  
$sql_page_gt="select * from pages where id='68'";
$query = mysql_query($sql_page_gt);
$result = mysql_fetch_array($query);
 ?>

 <?php } ?>

 <?php
if($lang=='vi'){
 ?>
<?php  
$sql_page_gt="select * from pages where id='151'"; 
$query = mysql_query($sql_page_gt);
$result = mysql_fetch_array($query);
?>

 <?php } ?>
<?php if($lang=='en'){ ?>
<div class="container">
	<!-- nội dung-->

	<div class="row">
		<div class="col-md-8">
				<div class="abtrong" id="accommo">
					<div class="tenabtrong">
						<span style="margin-right:30px;" class="gachl">&nbsp&nbsp&nbsp</span>Thank you
					</div>
				</div>
		<div class="phannoidung_trong">
				<div class="tiudong">INDOCHINE HOI AN RIVERSIDE HOTEL & SPA</div>
				<div class="text_trong">
					<?=$result['content']?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
<?php } ?>
<?php if($lang=='vi'){ ?>
<div class="container">
	<!-- nội dung-->

	<div class="row">
		<div class="col-md-8">
				<div class="abtrong" id="accommo">
					<div class="tenabtrong" style="font-family: sans-serif; letter-spacing: 5px;">
						<span style="margin-right:30px;" class="gachl">&nbsp&nbsp&nbsp</span>Cảm ơn
					</div>
				</div>
		<div class="phannoidung_trong">
				<div class="tiudong">KHÁCH SẠN INDOCHINE HỘI AN RIVERSIDE VÀ SPA</div>
				<div class="text_trong" style="font-family: serif;">
					<?=$result['content']?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>
<?php } ?>

 <?php include'../Template/Footer/index.php' ?>