<div class="other">
<div class="servces">
	<div class="container">
		<div class="row">
			<div class="oth_ser">OTHER SERVCES</div>
			<div class="gachduoi2"></div>
            <div style="clear: both; height: 30px;"></div>
            <div class="servces_mt">
			<script src="<?= $path ?>/layout/js/jssor.slider-22.0.15.min.js" type="text/javascript" data-library="jssor.slider" data-version="22.0.15"></script>
<script type="text/javascript">
    jssor_15_slider_init = function () {

        var jssor_15_options = {
            $AutoPlay: true,
            $AutoPlaySteps: 2,
            $SlideDuration: 160,
            $SlideWidth: 670,
            $SlideSpacing: 40,
            $Cols:2,
            $Align: 700,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
            }
        };

        var jssor_15_slider = new $JssorSlider$("jssor_15", jssor_15_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_15_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1370);
                jssor_15_slider.$ScaleWidth(refSize);
            } else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>
<style>
/* jssor slider bullet navigator skin 03 css */
    /*
    .jssorb03 div           (normal)
    .jssorb03 div:hover     (normal mouseover)
    .jssorb03 .av           (active)
    .jssorb03 .av:hover     (active mouseover)
    .jssorb03 .dn           (mousedown)
    */
    .jssorb03 {
        position: absolute;
    }
    .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
        position: absolute;
        /* size of bullet elment */
        width: 21px;
        height: 21px;
        text-align: center;
        line-height: 21px;
        color: white;
        font-size: 12px;
        background: url('<?= $path ?>/images/photo/b03.png') no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb03 div { background-position: -5px -4px; }
    .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
    .jssorb03 .av { background-position: -65px -4px; }
    .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

    /* jssor slider arrow navigator skin 03 css */
    /*
    .jssora03l                  (normal)
    .jssora03r                  (normal)
    .jssora03l:hover            (normal mouseover)
    .jssora03r:hover            (normal mouseover)
    .jssora03l.jssora03ldn      (mousedown)
    .jssora03r.jssora03rdn      (mousedown)
    .jssora03l.jssora03ldn      (disabled)
    .jssora03r.jssora03rdn      (disabled)
    */
    .jssora03l, .jssora03r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url('<?= $path ?>/images/photo/a03.png') no-repeat;
        overflow: hidden;
    }
    .jssora03l { background-position: -3px -33px; }
    .jssora03r { background-position: -63px -33px; }
    .jssora03l:hover { background-position: -123px -33px; }
    .jssora03r:hover { background-position: -183px -33px; }
    .jssora03l.jssora03ldn { background-position: -243px -33px; }
    .jssora03r.jssora03rdn { background-position: -303px -33px; }
    .jssora03l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
    .jssora03r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }

</style>
<div id="jssor_15" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1370px; height: 400px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('<?= $path ?>/images/photo/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1370px; height: 400px; overflow: hidden;">

        <?php
        $sql_page = "SELECT * FROM restaurant";
        $query_page = mysql_query($sql_page);
        while ($row_page = mysql_fetch_array($query_page)) {
                        $masp = $row_page['masp'];
                        $sanpham = $row_page['tensp'];
                        $id = $row_page['id'];
            ?>
                    <div class="khungdv" style="background-image: url('<?=$path2?>/admin/<?=$row_page['img_url']?>');">
                     <div class="modv">
                     	<div class="col-md-8">
                     		<div class="modv_text1"><?=$sanpham?></div>
                     		<div class="modv_text2"><?=$masp?></div>
                     	</div>
                     	<div class="col-md-4">
                            <div style="height:45px;"></div>
                     		<div class="modv_detail"><a href="<?=$path2?>/frontend/module/servces/detail.php?id=<?=$id?>/#serv_detail"> >> DETAILS</a></div>
                     	</div>
                     </div>
                  </div>

      <?php
  }
  ?>

</div>

</div>
<script type="text/javascript">jssor_15_slider_init();</script>
</div>
<div class="servces_dt">
<script src="<?=$path?>/layout/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_122_slider_init = function() {

            var jssor_122_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_122_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_122_SlideshowTransitions,
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

            var jssor_122_slider = new $JssorSlider$("jssor_122", jssor_122_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 2000;

            function ScaleSlider() {
                var containerElement = jssor_122_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_122_slider.$ScaleWidth(expectedWidth);
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
    <div id="jssor_122" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:470px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?=$path?>/layout/images/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:470px;overflow:hidden;">
            <?php 
                    $ketnoi = "SELECT * FROM restaurant";
                    $truyvan = mysql_query($ketnoi);
                     while ($ketqua= mysql_fetch_array($truyvan)) {
                        $masp = $ketqua['masp']; 
                        $sp = $ketqua['title'];
                        $id = $ketqua['id'];
                ?>
            <div data-p="170.00">
                <img data-u="image" src="<?=$path2?>/admin/<?=$ketqua['img_url']?>" />
                <div u="thumb">
                    <div class="modv_dt">
                        <div class="col-md-8">
                            <div class="modv_text1"><?=$sanpham?></div>
                            <div class="modv_text2"><?=$masp?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="modv_detail"><a href="<?=$path2?>/frontend/module/servces/detail.php?id=<?=$id?>/#serv_detail"> >> DETAILS</a></div>
                        </div>
                     </div>
                </div>
            </div>
            <?php
      }
      ?>
        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:120px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0px;left:0px;width:980px;height:120px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:120px;font-family:arial,helvetica,verdana;font-weight:normal;font-size:16px;box-sizing:border-box;color: #EDE859;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
    </div>
    <script type="text/javascript">jssor_122_slider_init();</script>
    </div>
		</div>
	</div>
</div>
</div>