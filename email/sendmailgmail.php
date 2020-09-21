<?php
session_start();

include'../template/config/database.php';
include'../template/config/config.php';

?>
<html>
<head>
<title>PHPMailer - SMTP test</title>
</head>
<body>

<?
require_once('class.phpmailer.php');


//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();


$lang1=$_GET["lang"];
if($lang1!=null)
  {
  $lang=$lang1;
  }

$id=$_GET["id"];
$makh=$_GET["makh"];
$sql="select * from room where id in ($makh)";
$query=mysql_query($sql);
$tensp='';
while($row=mysql_fetch_array($query))
		{
		$str=$row['tensp'];
		$tensp.=$str.',';
		}
		

$content=$_GET["content"];
$subject='Booking of Green Boutique Villa';
$mail_to = $_GET["email"];
$name=$_GET["name"];
$body             = $_GET["content"];
$toemail = 'nguyenvu.edp@gmail.com';




$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mailhoianfuntravel@gmail.com" ;  // GMAIL username
$mail->Password   = "hungnutrahoa";            // GMAIL password
$mail->SMTPSecure = 'ssl';  

$mail->SetFrom("mailhoianfuntravel@gmail.com",$fromemail);
$mail->Subject    = $subject;



$mail->MsgHTML($body);

$address = $toemail;
$mail->AddAddress($address, "Guest");



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  //echo "Message sent!";
  redirect("thanks.php?lang=$lang&sm2=2");
}

?>

</body>
</html>
