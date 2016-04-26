<?php
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$nome = $_POST['nome']; // required
$ra = $_POST['ra']; // required
$email = $_POST['email']; // required
$curso = $_POST['curso']; // required
$produtos = $_POST['produtos']; // required

//if($nome == '') {
//	die();
//}

$mensagem = '';
$mensagem.= '<strong>nome: </strong>';
$mensagem.= utf8_decode($nome) . "\n";
$mensagem.= '<br/><strong>e-mail: </strong>';
$mensagem.= " $email\n";
$mensagem.= '<br/><strong>ra: </strong>';
$mensagem.= utf8_decode($ra). "\n";
$mensagem.= '<br/><strong>curso: </strong>';
$mensagem.= utf8_decode($curso). "\n";
$mensagem.= '<br/><strong>produtos: </strong>';
$mensagem.= utf8_decode($produtos) . "\n";

$mail = new PHPMailer();
// CONFIGURAÇOES SERVIDOR
$mail->IsSMTP();
$mail->IsHTML(true);
$mail->SMTPAuth = true;
$mail->Port		= 25;
$mail->Host		= "mail.interdesigners.com.br";
$mail->Username = "contato@interdesigners.com.br";
$mail->Password = "interdis";

// DE
$mail->FromName = "Interdesigners";
$mail->From		= "contato@interdesigners.com.br";
// PARA
$mail->AddAddress("contato@interdesigners.com.br", "Interdesigners");
// ASSUNTO
$mail->Subject	= "[inter2012] Inscrição de Bazar";
// MESANGEM
$mail->Body		= $mensagem;

if($mail->Send()) {
	echo 'sent';
} else {
	echo 'failed';
}
?>