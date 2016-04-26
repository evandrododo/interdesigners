<?php

include "config.php";
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$assunto = $_POST['assunto'];
$detalhe = $_POST['detalhe'];
$nome = $_POST['nome'];
$email = utf8_decode($_POST['email']);
$mensagem = $_POST['mensagem'];

$body = '';
$body.= $mensagem."\n";
$body.= "<br/><br/>";
$body.= '<strong>nome: </strong>';
$body.= $nome."\n";
$body.= '<br/><strong>e-mail: </strong>';
$body.= $email."\n";

$mail = new PHPMailer();
$mail->SetLanguage("br", "./phpMailer/language/");
$mail->IsSMTP();
$mail->IsHTML(true);
$mail->SMTPAuth = true;
$mail->Port		= 587;
$mail->Host		= "mail.interdesigners.com.br";
$mail->Username = "interdes";
$mail->Password = "1nt3rd3s1gn3rs";
$mail->From		= "interdes@interdesigners.com.br"; //não pode ser igual as contas do gmail se não "reply to" falha
$mail->FromName = utf8_decode($nome);
if($assunto=='simpósio') 	$mail->AddAddress("simposio@interdesigners.com.br");
if($assunto=='editais') 	$mail->AddAddress("editais@rmisto.com.br");
if($assunto=='inscrição') $mail->AddAddress("contato@rmisto.com.br");
if($assunto=='contato') 	$mail->AddAddress("contato@rmisto.com.br");
$mail->AddReplyTo($email,utf8_decode($nome));
$mail->Subject	= utf8_decode('site:'.$assunto.':'.$detalhe);
$mail->Body		= $body;

if($mail->Send()) {
	echo 'sent';
} else {
	echo $mail->ErrorInfo;
}
?>