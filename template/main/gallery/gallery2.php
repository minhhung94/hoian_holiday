<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_18_slider_init = function() {

            var jssor_18_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 1,
              $SlideDuration: 160,
              $SlideWidth: 300,
              $SlideSpacing: 30,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_18_slider = new $JssorSlider$("jssor_18", jssor_18_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 700;

            function ScaleSlider() {
                var containerElement = jssor_18_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_18_slider.$ScaleWidth(expectedWidth);
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
    <div id="jssor_18" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:300px;overflow:hidden;">
        	<?php 
                    $knoi = "SELECT * FROM photos order by id desc";
                    $tvan = mysql_query($knoi);
                     while ($kqua= mysql_fetch_array($tvan)) { 
                        $sp1 = $kqua['title'];
                        $id1 = $kqua['id'];
                ?>
            <div >
                <a class="example-image-link" href="<?=$path2?>/admin/<?=$kqua['img_url']?>" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img style="height: 300px;" class="example-image" src="<?=$path2?>/admin/<?=$kqua['img_url']?>" alt="" /></a>
            </div>
            <?php } ?>
        </div>
        <!-- Bullet Navigator -->
        
    </div>
    <script type="text/javascript">jssor_18_slider_init();</script>