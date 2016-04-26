<? include_once 'config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class='simposio_arquivo'>
<head>
<? include_once 'head.php'?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
</head>
<body>
<p class='texto'>
<?

include 'config.php';

ini_set('upload_max_filesize','tamanho');
ini_set('post_max_size', 'tamanho');

$_UP['pasta'] = 'uploads/comprovantes/';
$_UP['tamanho'] = 1024 * 1024 * 10;
$_UP['extensoes'] = array('jpg', 'jpeg', 'tiff', 'pdf', 'bmp', 'gif', 'png', 'gif');
$_UP['renomeia'] = true;
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'o arquivo excede <strong>10mb</strong>';
$_UP['erros'][2] = 'o arquivo excede <strong>10mb</strong>';
$_UP['erros'][3] = 'tente novamente';
$_UP['erros'][4] = 'tente novamente';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
	echo "Não foi possível fazer o upload, " . $_UP['erros'][$_FILES['arquivo']['error']];
} else { // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

	// Faz a verificação da extensão do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
	
	if($_POST['foi']!='foi') echo 'envie uma <strong>imagem</strong> do comprovante de pagamento';
	
	else if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "o arquivo enviado não é uma <strong>imagem</strong>, tente novamente";
	}

	// Faz a verificação do tamanho do arquivo
	else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
		echo "O arquivo enviado excede <strong>10mb</strong>, tente novamente.";
	}

	// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
	else {
		// Primeiro verifica se deve trocar o nome do arquivo
		if ($_UP['renomeia'] == true) {
			// Cria um nome baseado no UNIX TIMESTAMP
			$nome_final = time().'.'.$extensao;
		} else {
			// Mantém o nome original do arquivo
			$nome_final = $_FILES['arquivo']['name'];
		}

		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
			// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
			echo 'arquivo enviado, <a href="' . $_UP['pasta'] . $nome_final . '" target="_blank">confira aqui</a>';
			echo '<script>window.top.document.getElementById("nome_final").value="'.$nome_final.'"</script>';
			echo '<script>window.top.document.getElementById("nome_final").className=""</script>';
			$oculta = 'style="display:none;"';
		} else {
			// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			echo "Não foi possível enviar o arquivo, tente novamente";
		}
		
	}

}

?>
</p>
<img src='img/loading.gif' <?=$oculta?> alt='enviando' class='loading' title='enviando'/>
<form id='simposio_form' <?=$oculta?> action='inscricao_comprovante.php' method='post' enctype="multipart/form-data">
		<input id='arquivoup' type='file' name='arquivo'/>
		<input type='hidden' name='foi' value='foi'/>
</form>
<script>
$(document).ready(function(){
	function colore(){
		$('body').removeClass('cor1 cor2 cor3 cor4').addClass(window.top.document.body.className);
	};
	$(window.top.document.body).find('a.logo').click(function(){
		colore();
	});
	colore();
	$('input').change(function(){
		$('img').css('position','static');
		$('form').submit();
	});
	
});    
</script>
</body>
</html>