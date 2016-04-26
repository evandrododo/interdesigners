<?

include 'config2.php';

mysql_query("INSERT INTO usuario (nome,email,cpf,telefone,instituicao) VALUES ('".@$_REQUEST['nome']."','".@$_REQUEST['email']."','".@$_REQUEST['cpf']."','".@$_REQUEST['telefone']."','".@$_REQUEST['instituicao']."');");
$usuario_id = mysql_insert_id();
$envio = mysql_query("INSERT INTO artigo (usuario_id,arquivo,tematica,titulo,autor_1,autor_2,autor_3,autor_4,autor_5,autor_6,resumo,palavras) VALUES ('$usuario_id','".@$_REQUEST['arquivo']."','".@$_REQUEST['tematica']."','".@$_REQUEST['titulo']."','".@$_REQUEST['autor_1']."','".@$_REQUEST['autor_2']."','".@$_REQUEST['autor_3']."','".@$_REQUEST['autor_4']."','".@$_REQUEST['autor_5']."','".@$_REQUEST['autor_6']."','".@$_REQUEST['resumo']."','".@$_REQUEST['palavras']."');");
if($envio) echo 'sent';

?>