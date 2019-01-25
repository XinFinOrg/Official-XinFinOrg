<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require 'mail/PHPMailerAutoload.php';

	$applicationLogoUrl		= (isset($_POST['applicationLogoUrl'])?$_POST['applicationLogoUrl']:"");
	$name					= (isset($_POST['name'])?$_POST['name']:"");
	$applicationUrl			= (isset($_POST['applicationUrl'])?$_POST['applicationUrl']:"");
	$githubUrl				= (isset($_POST['githubUrl'])?$_POST['githubUrl']:"");
	$description			= (isset($_POST['description'])?$_POST['description']:"");
	$apiUrl					= (isset($_POST['apiUrl'])?$_POST['apiUrl']:"");
	$youtubeUrl				= (isset($_POST['youtubeUrl'])?$_POST['youtubeUrl']:"");
	$briefIndustryBenefits	= (isset($_POST['briefIndustryBenefits'])?$_POST['briefIndustryBenefits']:"");
	$email					= (isset($_POST['email'])?$_POST['email']:"");
	$subject				= "Application Listing Enquiry | Xinfin";
	$subject_to_user		= "Thank You for Contacting Us | Xinfin";

	$message = "<div>
		<b><h3>Application Listing Enquiry | Xinfin</h3></b>
		<h4><u>APPLICATION DETAILS</u></h4><br>
		<p style='font-weight: normal;'>
			<b>Application Logo Url</b>			: $applicationLogoUrl <br><br>
			<b>Application Name</b>				: $name <br><br>
			<b>Application Url</b>				: $applicationUrl <br><br>
			<b>GitHub Url</b>					: $githubUrl <br><br>
			<b>Description</b>					: $description <br><br>
			<b>API Url</b>						: $apiUrl <br><br>
			<b>YouTube Video Url</b>			: $youtubeUrl <br><br>
			<b>Brief with industry benefits</b>	: $briefIndustryBenefits <br><br>
			<b>Email</b>						: $email
		</p>
	</div>";
	
	$message_to_user = "<div>
		<p style='font-weight: normal;'>Hello, $name</p>
		<p style='font-weight: normal;'>Thank you for contacting us! We will get back to you soon.</p>
		<p style='font-weight: normal;'>Team Xinfin</p>
	</div>";
	
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = "mail-b01.cloudmailbox.in"; /* your mail host here */
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 25;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	

	$mail_to_user = new PHPMailer;
	$mail_to_user->isSMTP();
	$mail_to_user->SMTPDebug = 0;
	$mail_to_user->Debugoutput = 'html';
	$mail_to_user->Host = "mail-b01.cloudmailbox.in";
	$mail_to_user->Port = 25;
	$mail_to_user->SMTPAuth = true;

	try{
		//Username to use for SMTP authentication
		$mail->Username = "xinfinweb@mail-b01.cloudmailbox.in";  /* your username here */
		//Password to use for SMTP authentication
		$mail->Password = "Xin$#5stF45dg";  /* your password here */
		//Set who the message is to be sent from
		$mail->setFrom("info@xinfin.org" ,"Application Listing Enquiry | Xinfin");
		//Set an alternative reply-to address
		$mail->addReplyTo($email, $name);
		//Set who the message is to be sent to
		//$mail->addAddress('dattatrayh@gmail.com', 'Admin');
		$mail->addAddress('info@xinfin.org', 'Admin');
		
		//Set the subject line
		$mail->Subject = $subject;
		$body = '<html>
			<body>
				<div><br /> 
					<b> '.$message.'</b><br />
				</div>
			</body>
			</html>
			';
		//Read an HTML message body from an external file, convert referenced images to embedded,		
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($body);
		if ($mail->send()) {
			echo "mailsent";
		}else{
			echo "failed";
		}

		//Username to use for SMTP authentication
		$mail_to_user->Username = "xinfinweb@mail-b01.cloudmailbox.in";	/* your username here */
		//Password to use for SMTP authentication
		$mail_to_user->Password = "Xin$#5stF45dg";   /* your password here */
		$mail_to_user->setFrom("info@xinfin.org" ,"Application Listing Enquiry | Xinfin");
		$mail_to_user->addReplyTo($email, $name);
		$mail_to_user->addAddress($email, 'User');
		//$mail_to_user->addAddress('dattatrayh@gmail.com', 'Admin');
		$mail_to_user->Subject = $subject_to_user;
		$body = '<html>
			<body>
				<div><br /> 
					<b> '.$message_to_user.'</b><br />
				</div>
			</body>
			</html>
			';
		
		
		
		$mail_to_user->msgHTML($body);
		if ($mail_to_user->send()) {
			echo "mailsent";
		}else{
			echo "failed";
		}
	}catch(phpmailerException $e){
		echo $mail->errorMessage(); //Pretty error messages from PHPMailer
		echo $mail_to_user->errorMessage(); //Pretty error messages from PHPMailer
	}
}

?>