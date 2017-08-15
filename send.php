<?php

if(!isset($_POST))
{
	header('Location: /');
	exit(0);
}

if(!(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['message_type']) && isset($_POST['message_body'])))
{
	header('Location: /');
	exit(0);
}

if(empty($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['message_type']) || empty($_POST['message_body']))
{
	header('Location: /?err=form#contact');
	exit(0);
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	header('Location: /?err=form#contact');
	exit(0);
}

$recipient = "jorandon@gmail.com";

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$message_body = $_POST['message_body'];

switch($_POST['message_type'])
{
	case 'question':
		$message_type = 'Question';
		break;
	case 'collaboration':
		$message_type = 'Collaboration';
		break;
	case 'commission':
		$message_type = 'Commission';
		break;
	default:
		$message_type = 'Autre';
		break;
}

$pseudo = filter_var($pseudo, FILTER_SANITIZE_STRING);
$email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
$message_body = filter_var($message_body, FILTER_SANITIZE_STRING);

$subject = "[CONTACT][" . $message_type . "]Message de zaziss.com";

$headers = 'From: ' . $pseudo . ' <' . $email . '>' . "\r\n";
$headers.= 'Reply-To: ' . $email . "\r\n";
$headers.= 'X-Mailer: PHP/' . phpversion();

$email_content = 'Pseudo : ' . $pseudo . "\n";
$email_content.= 'E-mail : ' . $email . "\n\n";
$email_content.= "Message :\n" . $message_body . "\n\n\n";

if(!($error = mail($recipient, $subject, $email_content, $headers)))
{
	header('location: /?err=send#contact');
	error_log('Mailer service failed.', 0);
	exit(0);
}

header('location: /?err=success#contact');
