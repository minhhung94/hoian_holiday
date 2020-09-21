<div class="footer">
		<?php 
                $ketnoi = "SELECT * FROM pages where id='134'";
                $truyvan = mysql_query($ketnoi);
                $ketqua= mysql_fetch_array($truyvan);
                $sp = $ketqua['content'];
              ?>
	<div class="footer_text">
		<?=$sp?>
		<div>
			<img src="<?=$path?>/layout/images/fb.png">
			<img src="<?=$path?>/layout/images/gg.png">
			<img src="<?=$path?>/layout/images/cm.png">
			<img src="<?=$path?>/layout/images/tp.png">
		</div>
		<div class="footer_logo">
			<div class="gach_left"></div>
			<img src="<?=$path?>/layout/images/logo.png">
			<div class="gach_right"></div>
		</div>
		<div class="footer_cr">Copyright 2018 hoianholidaytravel.vn - Designed by: <a href="http://myhoian.com/">myhoian.com</a></div> 
	</div>
	
</div>
 <script src="<?=$path?>/layout/js/lightbox-plus-jquery.min.js"></script>
 <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 </body>
 </html>