<? include_once 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'; ?>
<title>Contato - R Misto</title>
</head>
<body class='edital'>
<? include 'topo.php'?>
<div class='container contato'>
	<div class='col'>
		<h1>Contato</h1>
		<form id='contato_form' action='contato_form.php' method='post' enctype="multipart/form-data">
			<fieldset>
				<select name='assunto'>
					<option value=''>assunto</option>
					<option value='editais'>editais</option>
					<option value='simpósio'>simpósio</option>
					<option value='inscrição'>inscrição</option>
					<option value='contato'>geral</option>
				</select>
				<input name='nome' value='seu nome'/>
				<input name='email' value='seu e-mail'/>
				<textarea name='mensagem'>mensagem</textarea>
			</fieldset>
			<input type='hidden' name='edital_categoria' value='<?=$edital_id?>'/>
			<a class='bt'>
				enviar
				<button type='submit'></button>
			</a>
			<p id='erro'></p>
		</form>
	</div>
	<div class='col ico'>
		<a class='ico_r' href='mailto:contato@interdesigners.com.br'>contato@rmisto.com.br</a>
		<a class='ico_f' href='http://fb.com/rmistobauru' target='_blank'>fb.com/RmistoBauru</a>
		<a class='ico_s' href='mailto:simposio@interdesigners.com.br'>simposio@interdesigners.com.br</a>
		<a class='ico_f' href='http://fb.com/interdesigners' target='_blank'>fb.com/interdesigners</a>
	</div>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){

	//submit
	var formulario = '#contato_form'
	$(formulario).submit(function(e){
		e.preventDefault();
		$(formulario+' a.bt').click();
	});
	$(formulario+' a.bt').click(function(){
		$('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		//campos obrigatorios
		if($(formulario+' .off').not('.on').length>0) { 
			$(formulario+' .off').not('.on').addClass('erro');
			alert('preencha os campos obrigatórios');
			$('.off').first().focus();
			return;
		};
		//campo email
		var email = $('input[name=email]').val();
		if(!validaemail(email)) {
			$('input[name=email]').focus().addClass('erro');
			alert('E-mail inválido');
			return;
		};
		//envio
		$(this).text('enviando...').addClass('enviando');
		$.post("contato_form.php", decodeURI($(formulario).serialize()).replace(/["\']/g,'¨'), function(result){
			if(result == 'sent'){
				$(formulario+' a.bt').fadeOut(function(){$(this).text('mensagem enviada!').fadeIn()});
			} else{
				$('p#erro').text(result);
				$(formulario+' a.bt').fadeOut(function(){$(this).text('erro').addClass('erro').fadeIn()});
			}
		});
	});
});    
</script>
</body>
</html>
</html>