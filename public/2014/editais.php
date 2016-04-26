<? include_once 'config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<title>1º Simpósio Interdesigners</title>
</head>
<body>
<? include 'topo.php'?>
<div class='container'>
	<div class='col'>
		<h1>Editais</h1>
		<p>O <a href='simposio'>simpósio</a> ocorrerá na UNESP, em Bauru-SP e terá por propósito geral despertar o interesse acadêmico nos alunos de graduação, promovendo a disseminação do conhecimento gerado por projetos de Iniciação Científica na área do Design e do contato com diversos grupos e linhas de pesquisa do meio universitário.</p>
		<p>Em sua tentativa de superar o habitual, o evento pretende transformar paradigmas ao estimular o pensamento científico em meio ao Encontro Regional, propondo o conhecimento científico e as demais parcelas da vivência acadêmica não mais como imiscíveis, mas complementares.</p>
		<h1>Deadlines e Preços</h1>
		<table>
			<tr>
				<td>submissão</td>
				<td>gratuita</td>
				<td>7/8 à 7/9</td>
			</tr>
			<tr>
				<td>aprovação<span>correção iniciada ao submeter</span></td>
				<td>gratuita</td>
				<td rowspan='2'>até 13/10</td>
			</tr>
			<tr>			
				<td>inscrição<span>coffee breaks e atividades</span><span>1º pacote / quantia limitada</span></td>
				<td>R$30,00</td>
			</tr>
			<tr>			
				<td>pôster<span>opcional</span></td>
				<td>R$40,00</td>
				<td>até 20/10</td>
			</tr>
		</table>
	</div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
<script type="text/javascript" src="js/scripts.js" ></script>
<script>
$(document).ready(function(){

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
		$.post("simposio_form.php", $(formulario).serialize(),function(result){
			if(result == 'sent'){
				$(formulario+' a.bt').fadeOut(function(){$(this).text('artigo enviado com sucesso').css('background','#fff').fadeIn()});
				$(formulario+' fieldset').slideUp();
			} else{
				$(formulario+' a.bt').fadeOut(function(){$(this).text('erro: conexão com problemas').css('background','#ffbbbb').fadeIn().removeClass('enviando')});
			}
		});
	});
	
});    
</script>
</body>
</html>