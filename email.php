<?php
	require('PHPMailer.php');
	$mail = new PHPMailer();
	$subject = "Test Mail using PHP mailer";
	$content = "<b>This is a test mail using PHP mailer class.</b>";
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port     = 587;  
	$mail->Username = "your email";
	$mail->Password = "your password";
	$mail->Host     = "smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SetFrom("ghanshyam2894323@gmail.com", "PHPPot");
	$mail->AddReplyTo("gbehera674@gmail.com", "PHPPot");
	$mail->AddAddress("gbehera674@gmail.com");
	$mail->Subject = $subject;
	$mail->WordWrap   = 80;
	$mail->MsgHTML($content);
	$mail->IsHTML(true);

	if(!$mail->Send()) 
		echo "Problem on sending mail";
	else 
	echo "Mail sent";
?>
