<div class="tour_mt"><script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_16_slider_init = function() {

            var jssor_16_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 1,
              $SlideDuration: 160,
              $SlideWidth: 324,
              $SlideSpacing: 10,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_16_slider = new $JssorSlider$("jssor_16", jssor_16_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1300;

            function ScaleSlider() {
                var containerElement = jssor_16_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_16_slider.$ScaleWidth(expectedWidth);
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

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_16" style="position:relative;margin:0 auto;top:0px;left:0px;width:1000px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:480px;overflow:hidden;">
<?php 
                    $ketnoi = "SELECT * FROM produce";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) { 
                        $sanpham = $ketqua['tensp'];
                        $cont = $ketqua['description'];
                        $gia = $ketqua['price'];
                        $id = $ketqua['id'];
                ?>
            <div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
            <div class="anhh">
            <div class="anhtour">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
            </div>
            <div class="text1"><?=$sanpham?></div>
            <div class="text2"><?php echo substr($cont,0,120)."...";?></div>
            <div class="text3">Price:<?=$gia?>$ /pax</div>
            <div class="tleft"><a href="<?=$path2?>/frontend/module/tour/detail.php?id=<?=$id?>/#detail"> >> DETAILS</a></div>
            <div class="tright"><a href="<?=$path2?>/frontend/module/tour/book.php?id=<?=$id?>/#books"> >> BOOK NOW</a></div>
            
        </div>
        </div>
            <?php } ?>
        </div>
    </div>
    <script type="text/javascript">jssor_16_slider_init();</script></div>



    <div id="list_phonem">
    <div class="list_p_p">
      <!-- noidung-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/26.5.0/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_333_slider_init = function() {

            var jssor_333_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 140,
              $SlideWidth: 300,
              $SlideSpacing:0,
              $Cols: 1,
              $Align: 300,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_333_slider = new $JssorSlider$("jssor_333", jssor_333_options);

            /*#region responsive code begin*/

            var MAX_WIDTH =310;

            function ScaleSlider() {
                var containerElement = jssor_333_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_333_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
   
          
           
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;}

        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;stroke:#000;stroke-width:160;stroke-miterlimit:10;}
        .jssora073.jssora073ds {pointer-events:none;}
    </style>
    <div id="jssor_333" style="position:relative;margin:0 auto;top:0px;left:0px;width:300px;height:500px;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?=$path?>/Layout/images/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:300px;height:500px;">

  <?php 
                    $ketnoi = "SELECT * FROM produce";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) { 
                        $sanpham = $ketqua['tensp'];
                        $cont = $ketqua['description'];
                        $gia = $ketqua['price'];
                        $id = $ketqua['id'];
                ?>
            <div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
            <div class="anhh">
            <div class="anhtour">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
            </div>
            <div class="text1"><?=$sanpham?></div>
            <div class="text2"><?php echo substr($cont,0,120)."...";?></div>
            <div class="text3">Price:<?=$gia?>$ /pax</div>
            <div class="tleft"><a href="<?=$path2?>/frontend/module/tour/detail.php?id=<?=$id?>/#detail"> >> DETAILS</a></div>
            <div class="tright"><a href="<?=$path2?>/frontend/module/tour/book.php?id=<?=$id?>/#books"> >> BOOK NOW</a></div>
            
        </div>
        </div>
            <?php } ?>
        
        </div>
    </div>
    <script type="text/javascript">jssor_333_slider_init();</script>

    </div>
</div>