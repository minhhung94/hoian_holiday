<?php include '../../template/header.php' ?>
<?php include '../../template/head/menu.php' ?>
<div style="">
        <?php
        $title_all = $photo;
//$ma=$_GET['ma'];
        $page = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
$rows_per_page = 12; //So luong phan trang
$page_start = ( $page - 1 ) * $rows_per_page;
$page_end = $page * $rows_per_page;
$sql_query = mysql_query("select * from photos where home='1' order by id desc");
$number_of_page = ceil(mysql_num_rows($sql_query) / $rows_per_page);
if ($number_of_page > 1) {
  $list_page = "<td>  </td>";
  for ($i = 1; $i <= $number_of_page; $i++) {
    if ($i == $page) {
      $list_page .= " <td><div style=\"width:15px; height:25px; border:none; padding-top:5px; background-repeat:no-repeat; clear:both\"><font style=\"color:#FF0000; font-size:12pt \">&nbsp<b>$i</b> &nbsp;</font></div></td>";
    } else {
      $list_page .= "<td><div style=\"width:25px; height:25px; border:none; padding-top:5px; background-repeat:no-repeat; clear:both\"><a  style=\"color:#000; font-size:12pt \" href='$path3/module/gallery/index.php?lang=$lang&page={$i}&#rs'>&nbsp; {$i}&nbsp; </a></div></td>";
    }
  }
}
$i = 0;

$i = '0';
while ($row_photo = mysql_fetch_array($sql_query)) {
  if ($i >= $page_start) {

    $ma_pro = $row_photo["ma"];
    $tit_pro = $row_photo['tensp'];
    $titpro = $row_photo['tensp'];
    $titpro = stripUnicode($titpro);
    $titpro = str_replace(" ", "-", "$titpro");

    include("1photo.php");
  }
  $i++;
  if ($i >= $page_end) {
    break;
  }
}
?>                                      
<div style="display: table; margin: 0 auto; clear: both;"><table><?= $list_page ?></table></div>
</div>