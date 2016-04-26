<? include_once 'config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<title>1º Simpósio Interdesigners</title>
</head>
<body class='simposio'>
<? include 'topo.php'?>
<div class='container'>
	<div class='col texto'>
		<h1>Critérios</h1>
		<p>os critérios serão julgados de 1 a 10, sendo aprovados aqueles que obtiverem média aritmética dessas notas superior a 7 (sete).</p>
		<ul>
			<li>Título e resumo pertinentes ao conteúdo</li>
			<li>Apresentação das justificativas, questão da pesquisa e objetivo do trabalho na introdução</li>
			<li>Revisão bibliográfica pertinente e atualizada</li>
			<li>Materiais e métodos adequados</li>
			<li>Resultados relevantes</li>
			<li>Redação (permitido apenas em língua portuguesa)</li>
			<li>Contribuições para o conhecimento da área trazidas pelas conclusões</li>
			<li>Formatação (adequada ao <a href='uploads/artigos/modelo.doc' target='_blank' class='template'>template</a>)</li>
		</ul>
		<h1>Comitê</h1>
		<ul class='comite'>
			<li><a href='http://lattes.cnpq.br/6505808233970471' target='_blank'>Ana Beatriz Pereira de Andrade</a></li>
			<li><a href='http://lattes.cnpq.br/1534045638750216' target='_blank'>Cássia Letícia Carrara Domiciano</a></li>
			<li><a href='http://lattes.cnpq.br/2228445776401190' target='_blank'>Cláudio Roberto y Goya</a></li>
			<li><a href='http://lattes.cnpq.br/9128216674908032' target='_blank'>Dorival Campos Rossi</a></li>
			<li><a href='http://lattes.cnpq.br/6962871803093697' target='_blank'>Fausto Orsi Medola</a></li>
			<li><a href='http://lattes.cnpq.br/9960863826542088' target='_blank'>Fernanda Henriques</a></li>
			<li><a href='http://lattes.cnpq.br/3343211915374398' target='_blank'>Frederico Breslau dos Santos</a></li>
			<li><a href='http://lattes.cnpq.br/9424928643119660' target='_blank'>João Carlos Riccó Plácido da Silva</a></li>
			<li><a href='http://lattes.cnpq.br/8521603444193259' target='_blank'>Luis Carlos Paschoarelli</a></li>
			<li><a href='http://lattes.cnpq.br/3116262437076862' target='_blank'>Luiz Carlos Felisberto</a></li>
			<li><a href='http://lattes.cnpq.br/4760173147289270' target='_blank'>Marizilda Menezes</a></li>
			<li><a href='http://lattes.cnpq.br/5034451123099716' target='_blank'>Monica Cristina de Moura</a></li>
			<li><a href='http://lattes.cnpq.br/7037225941389554' target='_blank'>Osmar Vicente Rodrigues</a></li>
			<li><a href='http://lattes.cnpq.br/4943484003365191' target='_blank'>Paula da Cruz Landim</a></li>
			<li><a href='http://lattes.cnpq.br/9237058508812286' target='_blank'>Sérgio Luiz Busato</a></li>
			<li><a href='http://lattes.cnpq.br/6696694713875333' target='_blank'>Solange Maria Bigal </a></li>
			<li><a href='http://lattes.cnpq.br/7865768257571169' target='_blank'>Tomas Queiroz Ferreira Barata</a></li>
		</ul>
	</div>
	<form id='simposio_form' class='col' action='simposio_form.php' method='post' enctype="multipart/form-data">
		<h1>Submissão</h1>
		<fieldset>
			<legend>dados pessoais</legend>
			<input name='nome' value='nome completo'/>
			<input name='email' value='e-mail'/>
			<input name='cpf' value='CPF'/>
			<input name='telefone' value='telefone'/>
			<input name='instituicao' value='instituição de origem (curso, faculdade e universidade)'/>
		</fieldset>
		<fieldset>
			<legend class='template'>artigo <!--<a class='cordetexto'>+</a>--></legend>
			<iframe class='upload' src='simposio_arquivo.php'></iframe>
			<input id='nome_final' name='arquivo' readonly='readonly'/>
			<select name='tematica'>
				<option value=''>temática</option>
				<option value='1'>Comunicação Visual</option>
				<option value='2'>Design de Interiores</option>
				<option value='3'>Design de Produto</option>
				<option value='4'>Design Gráfico</option>
				<option value='5'>Design Inclusivo</option>
				<option value='6'>Design Informacional</option>
				<option value='7'>Design Textil/Vestuário</option>
				<option value='8'>Design Urbano</option>
				<option value='9'>Eco Design</option>
				<option value='10'>Ergonomia e Acessibilidade</option>
				<option value='11'>Fundamentos Teóricos</option>
				<option value='12'>Gestão em Design</option>
				<option value='13'>História do Design</option>
				<option value='14'>Materiais e processos</option>
				<option value='15'>Semiótica</option>
			</select>
			<input name='titulo' value='título'/>
			<input name='autor_1' value='autor principal (Ex: Silva, José da; Universidade Fictícia do Brasil)'/>
			<input name='autor_2' class='on off' value='demais autores'/> <a class='cordetexto'>+</a>
			<input name='autor_3' class='on autores' value='demais autores'/> <a class='cordetexto'>+</a>
			<input name='autor_4' class='on autores' value='demais autores'/> <a class='cordetexto'>+</a>
			<input name='autor_5' class='on autores' value='demais autores'/> <a class='cordetexto'>+</a>
			<input name='autor_6' class='on autores' value='demais autores'/>
			<textarea name='resumo'>resumo</textarea>
			<input name='palavras' value='palavras chave (separadas com ";")'/>
		</fieldset>
		<a class='bt'>enviar</a>
	</form>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){
	
	<?if (time() > strtotime('15 September 2014') && $_GET['a']!='a') {?>
	//após data limite
	$('h1:first').before('<h1 style="text-decoration:line-through">Submissão</h1><h2>prazo encerrado</h2>');
	$('#simposio_form').remove();	
	$('div.texto:first').after('<div class="texto movida col"></div>');
	$('div.movida').append($('ul.comite').prev());	
	$('div.movida').append($('ul.comite'));	
	<?}?>

	//autores
	$('input.autores').prev().click(function(){
		$(this).hide().next().show().removeClass('autores');
	});

	//autores
	$('input.autores').prev().click(function(){
		$(this).hide().next().show().removeClass('autores');
	});
	
	//submit
	var formulario = '#simposio_form'
	$(formulario+' a.bt').click(function(){
		$('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		//campos obrigatorios
		if($(formulario+' .off').not('.on').length>0) { 
			$(formulario+' .off').not('.on').addClass('erro');
			alert('preencha os campos obrigatórios');
			return;
		};
		//campo email
		var email = $('input[name=email]').val();
		if(!validaemail(email)) {
			$('input[name=email]').focus().addClass('erro');
			alert('E-mail inválido');
			return;
		};
		//campo cpf
		var cpf = $('input[name=cpf]').val().split('.').join('').split('-').join('');
		$('input[name=cpf]').val(cpf);
		if(!validacpf(cpf)) {
			$('input[name=cpf]').focus().addClass('erro');
			alert('CPF inválido');
			return;
		};
		//campos opcionais
		$('.on').each(function(){
			if($(this).val()==this.defaultValue) $(this).val('');
		});
		//envio
		$(this).text('enviando...').addClass('enviando');
		$.post("simposio_form.php", decodeURI($(formulario).serialize()).replace(/["\']/g,'¨'), function(result){
			if(result == 'sent'){
				$(formulario+' a.bt').fadeOut(function(){$(this).text('artigo enviado com sucesso!').fadeIn()});
			} else{
				$(formulario+' a.bt').fadeOut(function(){$(this).text('erro').addClass('erro').fadeIn()}).dblclick(function(){alert(result);});
			}
		});
	});
	
});    
</script>
</body>
</html>