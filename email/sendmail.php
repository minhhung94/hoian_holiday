<html>
<head>
<title>PHPMailer - SMTP test</title>
</head>
<body>

<?
require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = $_POST["comment"];
$fromemail = $_POST["fromemail"];
$passfrom = $_POST["passfrom"];
$toemail = $_POST["toemail"];
$subject = $_POST["subject"];
$mailserver = $_POST["mailserver"];


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = $mailserver; // SMTP server
$mail->Port       = 25;                   // set the SMTP port for the GMAIL server
$mail->Username   = $fromemail ;  // GMAIL username
$mail->Password   = $passfrom;            // GMAIL password

$mail->SetFrom($fromemail,$fromemail);
$mail->Subject    = $subject;



$mail->MsgHTML($body);

$address = $toemail;
$mail->AddAddress($address, "TEST");



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
