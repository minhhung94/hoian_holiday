<div style="clear: both; height: 50px;"></div>
<div class="about">
	<div class="container">
		<div class="col-md-7">
			<?php 
                    $ketnoi = "SELECT * FROM pages where id='136'";
                    $truyvan = mysql_query($ketnoi);
                    $ketqua= mysql_fetch_array($truyvan); 
                        $cont = $ketqua['content'];
                        $tieude = $ketqua['title'];
                        $id = $ketqua['id'];
                ?>
			<div class="tieude"><?=$tieude?></div>
			<div class="content"><div class="content_dt"><?php echo substr($cont,0,450)."...";?></div></div>
	<div class="readmore"><a href="<?=$path2?>/frontend/module/about/#abo">>> READ MORE</a></div>
		</div>
		<div class="col-md-5" style="margin-top: 30px;">
			<div class="gachdung"></div>
			<div class="abvideo">
				<?php 
                    $kn = "SELECT * FROM video";
                    $tv = mysql_query($kn);
                    $kq= mysql_fetch_array($tv); 
                        $video = $kq['description'];
                ?>
				<div class="khungvideo">
					<iframe width="100%" height="320" src="<?=$video?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			
		</div>
	</div>
</div>