<? 
include "config.php";
include "phpmailer/phpmailer.lang-br.php";
include "phpmailer/class.smtp.php";
include "phpmailer/class.phpmailer.php";

if ($_POST['logout']=='logout') {
	unset($_SESSION['usu4r10']);
	die('logout');
};
$usuarios = mysql_query("SELECT email,senha FROM usuario WHERE email='".$_POST['email']."' AND senha='".$_POST['senha']."' ;");
$qusuarios = mysql_num_rows($usuarios);
if ($qusuarios==1) {
	while( $usuario = mysql_fetch_array($usuarios) ) { 
		$_SESSION['usu4r10'] = $usuario['email'];
	}
	echo 'sent';		
}
?>