<?

include 'config2.php';

mysql_query("INSERT INTO usuario (nome,email,rg,cpf,nascimento,telefone,facebook,endereco,cidade,estado,faculdade,curso,ano) VALUES (
	'".@$_REQUEST['nome']."',
	'".@$_REQUEST['email']."',
	'".@$_REQUEST['rg']."',
	'".@$_REQUEST['cpf']."',
	'".@$_REQUEST['nascimento']."',
	'".@$_REQUEST['telefone']."',
	'".@$_REQUEST['facebook']."',
	'".@$_REQUEST['endereco']."',
	'".@$_REQUEST['cidade']."',
	'".@$_REQUEST['estado']."',
	'".@$_REQUEST['faculdade']."',
	'".@$_REQUEST['curso']."',
	'".@$_REQUEST['ano']."'
);");
$usuarioid = mysql_insert_id();
$envio = mysql_query("INSERT INTO venda (usuarioid,pacotes,valor,comprovante,almoco,camiseta,saude,perguntas) VALUES (
	'$usuarioid',
	'".@$_REQUEST['pacotes']."',
	'".@$_REQUEST['valor']."',
	'".@$_REQUEST['comprovante']."',
	'".@$_REQUEST['almoco']."',
	'".@$_REQUEST['camiseta']."',
	'".@$_REQUEST['saude']."',
	'".@$_REQUEST['perguntas']."'
);");
if($envio) echo 'sent';

?>