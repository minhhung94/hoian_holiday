<div class="tripad">
	<div>
		<div class="col-md-4"><a href="">
			<div class="tripadvisor"></div>
		</a></div>
		<div class="col-md-3" style="width: 21%; padding-left: 0px;">
			<div class="gachcheo"></div>
		</div>
		<div class="col-md-5">
			<div class="discor_border">
				<div class="discor_nen">
					<?php 
                    $ketn = "SELECT * FROM promotion";
                    $truyv = mysql_query($ketn);
                    $ketq= mysql_fetch_array($truyv);
                        $sanp = $ketq['content'];
                        $sanpa = $ketq['tensp'];
                        $idi = $ketq['id'];
                	?>
					<div class="discor_text"><?=$sanpa?></div>
					<div class="discor_text2"><?=$sanp?></div>
					<div class="discor_rm"><a href="<?=$path2?>/frontend/module/promotion/index.php?id=<?=$idi?>"> >>READ MORE</a></div>
				</div>
			</div>
		</div>
	</div>
</div>