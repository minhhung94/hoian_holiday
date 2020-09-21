<header>
<div class="banner"> <?php include'banner.php' ?> 
	<div class="container">
	<div class="row metop">
		<div class="menuhome">
			<div class="lienhe">
				<div class="lhright">
				<img src="<?=$path?>/layout/images/mail.png">
				<span class="sp_email"> hoianholiday18@gmail.com </span>
				<span class="sp_dt"> (+84) 0934 815 005</span>
				</div>
			</div>
			<div class="col-md-3"> 
				<div class="logo">
					<div><a href="<?=$path?>/index.php"><img src="<?=$path?>/layout/images/logo.png"></a></div>
					<div><a href="<?=$path?>/index.php"><img src="<?=$path?>/layout/images/hoianholidaytravel.png" id="lgimg"></a></div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="timkiem">
                    <form action="<?=$path?>/index.php" method="post">
                        <input type="search" name="tk" value="" size="25" required="required" placeholder="Search..." class="input1">&nbsp;
                        <input type="submit" name="search" value="" style="background:url(<?=$path?>/layout/images/icon-search.png); width: 17px; height: 18px; border: none;">
                    </form>
				</div>
				<div style="clear: both;"></div>
                <div class="menudt">
    <!------ Include the above in your HEAD tag ---------->

 <nav class="navbar navbar-default" style="background:no-repeat;border: none;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="fb_dt"><img src="<?=$path?>/layout/images/fb.png"></a>
      <a class="tp_dt"><img src="<?=$path?>/layout/images/tp.png"></a>
      <a class="navbar-brand" style="float:right;color:white;" href="#">Click Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="<?=$path?>/index.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> HOME</a></li>
         <li><a href="<?=$path2?>/frontend/module/about/#abo">ABOUT US</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TOURS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php 
                    $kn2 = "SELECT * FROM produce";
                    $tv2 = mysql_query($kn2);
                     while ($kq2= mysql_fetch_array($tv2)) { 
                        $sp2 = $kq2['tensp'];
                        $id2 = $kq2['id'];
                ?>
            <li><a style="color:white;" href="<?=$path2?>/frontend/module/tour/detail.php?id=<?=$id2?>/#detail"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span><?=$sp2?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="<?=$path2?>/frontend/module/news/#news">NEWS</a></li>
        <li><a href="<?=$path2?>/frontend/module/promotion/list.php/#promotion">PROMOTION</a></li>
        <li><a href="<?=$path2?>/frontend/module/gallery/#galler">GALLERY</a></li>
      <li><a href="<?=$path2?>/frontend/module/contact/contact.php?lang=en#contact">CONTACT</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
				<div class="thanhmenu">
					<ul class="nav">
					   <li><a href="<?=$path?>/index.php">HOME</a></li>
					   <li><a href="<?=$path2?>/frontend/module/about/#abo">ABOUT</a></li>
					   <li>
					     <a href="<?=$path2?>/frontend/module/tour/#tours">TOURS</a>
					     <ul class="sub-menu">
					     	 <?php 
                    $kn2 = "SELECT * FROM produce";
                    $tv2 = mysql_query($kn2);
                     while ($kq2= mysql_fetch_array($tv2)) { 
                        $sp2 = $kq2['tensp'];
                        $id2 = $kq2['id'];
                ?>
					        <li><a href="<?=$path2?>/frontend/module/tour/detail.php?id=<?=$id2?>/#detail"><?=$sp2?></a></li>
					       <?php } ?>
					           <!--<ul class="sub-menu">
					               <li><a href="#">Menu số 2.2.1</a></li>
					               <li><a href="#">Menu số 2.2.2</a></li>
					               <li><a href="#">Menu số 2.2.3</a></li>
					           </ul> -->
					     </ul>
					   </li>
					   <li><a href="<?=$path2?>/frontend/module/news/#news">NEWS</a></li>
					   <li><a href="<?=$path2?>/frontend/module/promotion/list.php/#promotion">PROMOTION</a></li>
					   <li><a href="<?=$path2?>/frontend/module/gallery/#galler">GALLERY</a></li>
					   <li><a href="<?=$path2?>/frontend/module/contact/contact.php?lang=en#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!--banerdt-->
<div class="kc_banner"></div>
<div class="banner_dienth">
    <script src="<?=$path?>/layout/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_12_slider_init = function() {

            var jssor_12_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_12_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_12_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_12_slider = new $JssorSlider$("jssor_12", jssor_12_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 2000;

            function ScaleSlider() {
                var containerElement = jssor_12_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_12_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_12" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?=$path?>/layout/images/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:600px;overflow:hidden;">
            <?php 
                    $ketnoi = "SELECT * FROM banner";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) { 
                        $sp = $ketqua['title'];
                        $id = $ketqua['id'];
                ?>
            <div data-p="170.00">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
                <div u="thumb"><?=$sp?></div>
            </div>
            <?php
      }
      ?>
        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0px;left:0px;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size: 22px;padding-left:65px;box-sizing:border-box;color: #EDE859;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
    </div>
    <script type="text/javascript">jssor_12_slider_init();</script>

</div>
</header>
