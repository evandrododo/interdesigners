<?php
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$nome = $_POST['nome']; // required
$ra = $_POST['ra']; // required
$rg = $_POST['rg']; // required
$email = $_POST['email']; // required
$just = $_POST['just']; // required
$sexo = $_POST['sexo']; // required
$camiseta = $_POST['camiseta']; // required
$participou = $_POST['participou']; // required
$faculdade = $_POST['faculdade']; // required
$curso = $_POST['curso']; // required

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
$mensagem.= '<br/><strong>rg: </strong>';
$mensagem.= utf8_decode($rg). "\n";
$mensagem.= '<br/><strong>sexo: </strong>';
$mensagem.= utf8_decode($sexo). "\n";
$mensagem.= '<br/><strong>faculdade: </strong>';
$mensagem.= utf8_decode($faculdade). "\n";
$mensagem.= '<br/><strong>curso: </strong>';
$mensagem.= utf8_decode($curso). "\n";
$mensagem.= '<br/><strong>tamanho da camiseta: </strong>';
$mensagem.= utf8_decode($camiseta). "\n";
$mensagem.= '<br/><strong>participou de outros eventos: </strong>';
$mensagem.= utf8_decode($participou). "\n";
$mensagem.= '<br/><br/>';
$mensagem.= utf8_decode($just) . "\n";

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
$mail->Subject	= "[inter2012] Inscrição de apoio";
// MESANGEM
$mail->Body		= $mensagem;

if($mail->Send()) {
	echo 'sent';
} else {
	echo 'failed';
}
?>