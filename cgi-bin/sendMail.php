<?php

$fname = $_POST['name'];
// $lname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['no'];
$option = $_POST['option'];
$msg = $_POST['message'];
if($fname != "" && $email != "" && $phone != "" && $option != "")
{

require('class.phpmailer.php');
require('class.smtp.php');


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "gator3174.hostgator.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "info@flameberrystudioz.com";
$mail->Password = "welcomedata";
$mail->SetFrom("info@flameberrystudioz.com");
$mail->Subject = "Test";
$mail->Body = "<html><body><table><tr><th align = 'left'>".$fname." </th></tr>
<tr><th align = 'left'>".$email."</th></tr>
<tr><th align = 'left'>".$phone."</th></tr>
<tr><th align = 'left'>".$option."</th></tr>
<tr><td align = 'left'>".$msg."</td></tr>
</table></body></html>" ;
$mail->AddAddress("info@fbstudioz.com");

 if(!$mail->Send()) {
    echo "Failure";
 } else {
    echo "Success";
 }
}
else
{
	echo "No Data Found";
}
 ?>
