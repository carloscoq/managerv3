<?php

require_once('../login/ControladorDeAcesso.php');
require_once('../dao/UsuarioDao.php');
require_once('../db/DB.php');

$controlador = new ControladorDeAcesso();


$email = $_REQUEST['email'];

//$retorno = $controlador->checaEmail($email);


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'phpMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->SMTPSecure = 'ssl';
//Set the hostname of the mail server
$mail->Host = "mx.sistemas.pa.gov.br";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "sbi@sistemas.pa.gov.br";
//Password to use for SMTP authentication
$mail->Password = "sbi201300";
//Set who the message is to be sent from
$mail->setFrom('contator@managerv3.com', 'ManagerV3');
//Set an alternative reply-to address
$mail->addReplyTo('contator@managerv3.com', 'ManagerV3');
//Set who the message is to be sent to
$mail->addAddress($email, 'Carlos Coqueiro');
//Set the subject line
$mail->Subject = 'Recuperar Senha';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('../../email/index.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'Recuperação de Senha';

//send the message, check for errors
if ($mail->send()) {
	echo "success";
} else {
	echo "fail";
}
?>