<div class="" style="margin-top: 20px;">
    <div class="md_menu1">
        <!-- tieu de -->
        <div class="md_thanhtd" style="">
            <div style="font-size:18px; font-weight: bold; text-align: center; color:#fff; padding-top:6px">SUPPORT ONLINE</div>
        </div>
        <!-- dong tieu de -->
        <div style="height:10px; clear:both"></div>
			     <div style="width: 240px; height: 40px; border: none; clear: both;">
<div style="width: 40px; height: 27px; border: none; margin-left: 10px; float: left;"><img src="<?=$path?>/layout/images/phone.png" alt="" width="36" height="22"></div>
<div style="font-size: 10pt; padding-top: 5px;">Hotline: (+84) 0934 815 005</div>
</div>
<div style="width: 240px; height: 40px; border: none; clear: both;">
<div style="width: 40px; height: 27px; border: none; margin-left: 10px; float: left;"><img src="<?=$path?>/layout/images/skype.png" alt="" width="36" height="22"></div>
<div style="font-size: 10pt; padding-top: 5px;">Skype: <a href="skype:nguyengiatravel?chat">hoianholiday</a></div>
</div>
<div style="width: 240px; height: 40px; border: none; clear: both;">
<div style="width: 40px; height: 27px; border: none; margin-left: 10px; float: left;"><img src="<?=$path?>/layout/images/yahoo.png" alt="" width="36" height="22"></div>
<div style="font-size: 10pt; padding-top: 5px;">Yahoo: <span><a href="ymsgr:sendIM?nguyengiatravel">hoianholiday</a></span></div>
</div>
<div style="height: 30px; font-size: 12pt; color: #172f47; margin-left: 10px; padding-top: 5px;"><strong>Connect with us</strong></div>
<div style="height: 55px; border: none; margin: 0 auto; display: table; margin-top: 10px;">
<div class="zoom" style="float: left; margin-right: 5px;"><a href="https://www.facebook.com/my.hoian/" target="_blank"><img src="<?=$path?>/layout/images/fa.png" alt="" width="35" height="35"></a></div>
<div class="zoom" style="float: left; margin-right: 5px;"><a href="#"><img src="<?=$path?>/layout/images/g+.png" alt="" width="35" height="35"></a></div>
<div class="zoom" style="float: left; margin-right: 5px;"><a href="#"><img src="<?=$path?>/layout/images/you.png" alt="" width="35" height="35"></a></div>
<div class="zoom" style="float: left; margin-right: 5px;"><a href="#"><img src="<?=$path?>/layout/images/tw.png" alt="" width="35" height="35"></a></div>
<div class="zoom" style="float: left; margin-right: 5px;"><a href="#"><img src="<?=$path?>/layout/images/trip.png" alt="" width="35" height="35"></a></div>
</div>		    
    </div>
    <div style="clear: both; height: 20px;"></div>
    <!-- dong suport -->

    <!-- trip -->
    <div style="width:100%; border:none;">
        <!-- tieu de -->
        <div class="md_thanhtd" ">
            <div style="font-size:18px; font-weight: bold; text-align: center; color:#fff; padding-top:6px">TRIPADVISOR</div>
        </div>
        <!-- dong tieu de -->
        <div style=" margin-top: 10px;background: #3c763da8;">
            <img src="<?=$path?>/layout/images/tripadvisor.png" width="100%" height="255">
        </div>
    </div>
    <!--dong  trip -->
    <div style="height:20px; clear:both"></div>

    <!-- video -->
        <div style="width:100%; border:none; clear:both">
        <!-- tieu de --><?php 
                    $kn = "SELECT * FROM video";
                    $tv = mysql_query($kn);
                    $kq= mysql_fetch_array($tv); 
                        $video = $kq['description'];
                ?>
        <div class="md_thanhtd">
            <div style="font-size:18px; font-weight: bold; text-align: center; color:#fff; padding-top:6px">VIDEO</div>
        </div>
        <!-- dong tieu de -->
        <div style="margin-top:10px">
            
            <iframe width="100%" height="150px" src="<?=$video?>" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>
    <!--dong  video -->
    <div style="height:20px; clear:both"></div>

    <!-- face -->
    <!-- tieu de -->
    <div class="md_thanhtd">
        <div style="font-size:18px; font-weight: bold; text-align: center; color:#fff; padding-top:6px">FACEBOOK</div>
    </div>
    <!-- dong tieu de -->
    <div style="margin-top:10px">
			<!-- Load Facebook SDK for JavaScript -->
			<div class="fb-page" data-href="https://www.facebook.com/my.hoian/" data-tabs="timeline" data-width="263" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/my.hoian/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/my.hoian/">My Hoi An</a></blockquote></div>
    </div>
    <!-- dong face -->
    <div style="height:20px; clear:both"></div>

</div>