<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer.php');
	require('SMTP.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();
$emailBody = "<div>" . $user["name"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "reset_password-student.php?username=" . $user["username"] . "'>" . PROJECT_HOME . "reset_password-student.php?username=" . $user["username"] ."  </a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$message = "Problem in Sending Password Recovery Email";
	echo "<script type='text/javascript'>alert('$message');location='login.php';</script> ";
} else {
	$message = "Please check your email to reset password!";
	echo "<script type='text/javascript'>alert('$message');location='login.php';</script> ";
}

?>
