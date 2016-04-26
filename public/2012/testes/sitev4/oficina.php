<?php
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$nomeoficineiro = $_POST['nomeoficineiro']; // required
$email = $_POST['email']; // required
$o_title = $_POST['o_title']; // required
$n_oficineiros = $_POST['n_oficineiros']; // required
$theme = $_POST['theme']; // required
$limit = $_POST['limit']; // required
$time = $_POST['time']; // required
$materials = $_POST['materials']; // required
$comments = $_POST['comments']; // required

//if($nome == '') {
//	die();
//}

$mensagem = '';
$mensagem.= '<br/><strong>Oficineiro: </strong>';
$mensagem.= utf8_decode($nomeoficineiro). "\n";
$mensagem.= '<br/><strong>e-mail: </strong>';
$mensagem.= " $email\n";
$mensagem.= '<br/><strong>título da oficina: </strong>';
$mensagem.= utf8_decode($o_title). "\n";
$mensagem.= '<br/><strong>nº de oficineiros: </strong>';
$mensagem.= utf8_decode($n_oficineiros). "\n";
$mensagem.= '<br/><strong>tema: </strong>';
$mensagem.= utf8_decode($theme). "\n";
$mensagem.= '<br/><strong>limite de participantes: </strong>';
$mensagem.= utf8_decode($limit). "\n";
$mensagem.= '<br/><strong>duração: </strong>';
$mensagem.= utf8_decode($time). "\n";
$mensagem.= '<br/><strong>materiais: </strong>';
$mensagem.= utf8_decode($materials). "\n";
$mensagem.= '<br/><strong>descrição: </strong>';
$mensagem.= utf8_decode($comments). "\n";

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
$mail->Subject	= "[inter2012] Inscrição de oficina";
// MESANGEM
$mail->Body		= $mensagem;

if($mail->Send()) {
	echo 'sent';
} else {
	echo 'failed';
}
?>