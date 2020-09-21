<!--Mo main - Res-480 bao gom: blocktrai va main content -->
<div id="bao-res" style="width:100%; background-color:#FFFFFF  ">
  		 <?php 
		$sql_page_gt="select * from pages where id='".$id_thank."'";
		$query_page_gt=@mysql_query($sql_page_gt);
		$row_page_gt=mysql_fetch_array($query_page_gt);
		?>		
		
			<div style="padding:15px;">
			  <div style=" text-align:left; font-family:Arial; font-size:16pt; color:#6f0b0d"><?=$row_page_gt['title']?></div>
			  <div style=" color:#000; font-size:11pt; margin-top:10px"><p align="justify">
			  <!-- Chen Noi dung o day -->
			  
			  <?=$row_page_gt['content']?>
			  
			  <!-- Dong Chen Noi dung o day -->
			  </div>
		   </div>
		    <div style="height:10px; clear:both"></div>
  		
</div>
<!--Dong main - Res bao gom: blocktrai va main content -->
