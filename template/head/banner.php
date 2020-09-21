<div class="banner">
  <div class="slide">
<div id="carousel-id" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
       <a class="left carousel-control" href="#carousel-id" data-slide="prev" style="background:none;"> 
        <li data-target="#myCarousel" data-slide-to="3" class="" style="background:#14fffb;
        border:2px solid white;width:15px;height:15px;"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="" style="width:15px;height:15px;"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="" style="width:15px;height:15px;"></li></a>
    </ol>
    <!-- Indicators -->
    <div class="carousel-inner">        
               <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/IMG_6854.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/IMG_6933.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/_MG_5187.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item active">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/_MG_5277.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/IMG_6977.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/_MG_5088.jpg " class="img-responsive">
            </div>
        </div>
                 <div class="item">
            <div class="imgbaner">
                <img width="100%" alt="First slide" src="<?=$path?>/layout/images/banner/_MG_5056.jpg " class="img-responsive">
            </div>
        </div>
        </div>
</div>
  </div>
  <div class="about-slide">
        <?php
         $connect = "select * from pages where id='65'";
         $query = mysql_query($connect);
         $result = mysql_fetch_assoc($query);
           $noidung = $result['description'];
        ?>
            <div class="banner-about">
                                <!-- tiêu đề-->
                <div style="text-align:center;font-size:35px;font-style:italic;font-weight:bold;color:#08500A;"><font face="Times New Roman"> About Us</font></div>
                <!-- nooij dung-->
                <div style="font-size:18px;font-family:Time new roman;line-height:50px;margin-top:30px;">
                  <?php 
    echo substr($noidung, 0,400)."...";
    ?>
                </div>
                <div style="font-size:19px;float:right;margin-right:30px;">
                                    
                    <a style="color:green" href="#">Details...</a>
                
                </div>

            </div>
        </div>
</div>
<div class="spacial">
      <div class="spacial-off"></div>
      <div class="tex-special"><marquee>Discount 20% for all tours if you book on our website</marquee></div>
</div>