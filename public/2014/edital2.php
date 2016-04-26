<? include_once 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php';?>
<?
$editais = mysql_query("SELECT * FROM edital_categoria WHERE slug='".@$_REQUEST['url']."';");
$qeditais = mysql_num_rows($editais);
if ($qeditais!=1) die('<script>window.location.href="erro"</script>');
while( $edital = mysql_fetch_array($editais) ) { 
	$edital_titulo = $edital['titulo'];
	$edital_subtitulo = $edital['subtitulo'];
	$edital_id = $edital['id'];
}
?>
<title><?=$edital_titulo?> - R Misto</title>
</head>
<body class='edital'>
<? include 'topo.php'?>
<div class='container'>
	<form id='edital_form' class='col' action='edital_form.php' method='post' enctype="multipart/form-data">
		<h1>Submissão</h1>
		<fieldset>
			<input name='nome' value='seu nome completo'/>
			<input name='email' value='seu e-mail'/>
		</fieldset>
		<input type='hidden' name='edital_categoria' value='<?=$edital_id?>'/>
		<input type='hidden' name='edital_categoriat' value='<?=$edital_titulo?>'/>
		<a class='bt'>enviar</a>
	</form>
	<div class='texto'>
		<h1><?=$edital_subtitulo?></h1>
		<h2><?=$edital_titulo?></h2>
		<p>
			Olá! Você, encontrista com potencial, tem interesse no edital de <strong><?=$edital_titulo?></strong>? Vamos dar uma olhada em como funciona essa bagaça!
		</p>
		<? include 'edital_des_'.@$_REQUEST['url'].'.php'?>
	</div>
	<div class='texto'>
		<h2>prazos</h2>
		<p>As submissões deverão ser efetuadas até 23h59 do dia 05/09/2014. Alguns itens e propostas poderão ser discutidas juntamente com a CORDe, durante e após a submissão, e esses poderão estar sujeitos à modificações.</p>
		<p>
			Os resultados serão divulgados no dia 14/09/2014 através do site, e-mails e <a href='http://fb.com/rmistobauru' target='_blank'>página do R Misto no facebook</a>.
			Em caso de dúvidas e sugestões mande um e-mail para editais@rmisto.com.br com o assunto [<?=$edital_titulo?>].
		</p>
	</div>
</div>
<script>
$(document).ready(function(){
	//campos resumo
	$('.tweet').keyup(function(){
		if($(this).val().length>139) $(this).val($(this).val().substr(0,140));
	});

	//submit
	var formulario = '#edital_form'
	$(formulario+' a.bt').click(function(){
		$('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		/*/campo checkbox
		$(formulario+' div').each(function(){
			if( !$(this).find('input:checked').length>0 ){
				$(this).addClass('erro').focus().find(':checkbox').addClass('off');
			} else {
				$(this).removeClass('erro').find(':checkbox').removeClass('off');
			}
			var valor = '';
			$(this).find('input:checked').each(function(){
				valor = valor+', '+$(this).val();
				$(this).closest('div').find('input:hidden').val(valor);
			});
		});
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
		//campos opcionais
		$('.on').each(function(){
			if($(this).val()==this.defaultValue) $(this).val('');
		});
		//envio*/
		$(this).text('enviando...').addClass('xenviando');
		$.post("edital_form2.php", decodeURI($(formulario).serialize()).replace(/["\']/g,'¨'), function(result){
			if(result == 'sent'){
				$(formulario+' a.bt').fadeOut(function(){$(this).text('cadastro realizado! os resultados saem dia 5/9, fique esperto!').fadeIn()});
			} else{
				$(formulario+' a.bt').text(result);
			}
		});
	});
});    
</script>
</body>
</html>