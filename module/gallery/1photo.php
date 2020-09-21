<div class="col-lg-4 ">
    <?php
    if ($row_photo[img_url] == null) {
        echo "<div class=\"anhhover\" style=\"margin-top: 30px;\"><img  src=\"" . $path . "/admin/images/logo.png\" width=\"100%\" height=\"200px\" border=\"1\" style=\"border-color:#CCCCCC\"/></div>";
    } else {
        echo "<div class=\"anhhover\" style=\"margin-top: 30px;\"><a href=\"" . $path . "/admin/" . $row_photo['img_url'] . "\" data-lightbox=\"roadtrip\"  title=\" Photos: " . $row_photo['tensp'] . "\"><img  src=\"" . $path2 . "/admin/" . $row_photo['img_url'] . "\" width=\"100%\" height=\"180px\"  /></a></div>";
    }
    ?>
</div>

