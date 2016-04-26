<? 
include "config2.php";
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

$nota = $_POST['nota'.$_POST['numero']];
$notan = 'nota'.$_POST['numero'];
$obs = htmlspecialchars($_POST['obs'.$_POST['numero']], ENT_QUOTES);
$obsn = 'obs'.$_POST['numero'];

$envio = mysql_query("UPDATE artigo SET
	".$notan."	=	'$nota',
	 ".$obsn."	=	'$obs'
			 WHERE id = '".$_POST['id']."'
");

if($envio) {
	echo 'sent';	
}
?>