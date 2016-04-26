<?php

include "config.php";
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$envio = mysql_query("INSERT INTO edital (nome,email,titulo,tema,tematica,descricao,resumo,link,obs,pg1,pg2,pg3,pg4,pg5,pg6,pg7,edital_categoria) VALUES (
	'".@$_REQUEST['nome']."',
	'".@$_REQUEST['email']."',
	'".@$_REQUEST['titulo']."',
	'".@$_REQUEST['tema']."',
	'".@$_REQUEST['tematica']."',
	'".@$_REQUEST['descricao']."',
	'".@$_REQUEST['resumo']."',
	'".@$_REQUEST['link']."',
	'".@$_REQUEST['obs']."',
	'".@$_REQUEST['pg1']."',
	'".@$_REQUEST['pg2']."',
	'".@$_REQUEST['pg3']."',
	'".@$_REQUEST['pg4']."',
	'".@$_REQUEST['pg5']."',
	'".@$_REQUEST['pg6']."',
	'".@$_REQUEST['pg7']."',
	'".@$_REQUEST['edital_categoria']."'
);");
if($envio) {
	echo 'sent';	

	$assunto = $_POST['edital_categoriat'];
	$nome = $_POST['nome'];
	$email = utf8_decode($_POST['email']);

	$body = '';
	$body.= '<font face="Verdana">';
	$body.= 'Olá, '.$nome.'!<br/><br/>';
	$body.= 'Agradecemos sua inscrição no edital de '.$assunto.'.<br/>';
	$body.= 'Dia 14/09 enviaremos os resultados, até lá e boa sorte!<br/><br/>';
	$body.= 'atenciosamente,<br/>';
	$body.= '<b>CORDe - Comissão Organizadora do R Design</b>,<br/><br/>';
	$body.= '<div style="background:url(http://www.rmisto.com.br/img/logo.png); width:75px; height:100px"></div>';
	$body.= '</font>';

	$mail = new PHPMailer();
	$mail->SetLanguage("br", "./phpMailer/language/");
	$mail->IsSMTP();
	$mail->IsHTML(true);
	$mail->SMTPAuth = true;
	$mail->Port		= 587;
	$mail->Host		= "mail.interdesigners.com.br";
	$mail->Username = "interdes";
	$mail->Password = "1nt3rd3s1gn3rs";
	$mail->From		= "editais@rmisto.com.br"; //não pode ser igual as contas do gmail se não "reply to" falha
	$mail->FromName = "R Misto";
	$mail->AddAddress($email,utf8_decode($nome));
	$mail->Subject	= utf8_decode('site:editais:'.$assunto);
	$mail->Body		= $body;

	if($mail->Send()) {
	} else {
		echo $mail->ErrorInfo;
	}
	
}
?>