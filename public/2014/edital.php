<? include_once 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php';?>
<?
$editais = mysql_query("SELECT * FROM edital WHERE slug='".@$_REQUEST['url']."';");
$qeditais = mysql_num_rows($editais);
if ($qeditais!=1) die('<script>window.location.href="erro"</script>');
while( $edital = mysql_fetch_array($editais) ) { 
	$edital_titulo = $edital['titulo'];
	$edital_subtitulo = $edital['subtitulo'];
	$edital_id = $edital['id'];
}
if (time() > strtotime('6 September 2014')) { 
	$expirou = true;
}
?>
<title><?=$edital_titulo?> - R Misto</title>
</head>
<body class='edital'>
<? include 'topo.php'?>
<div class='banner' style='background-image:url(uploads/editais/<?=@$_REQUEST['url']?>.jpg)'></div>
<div class='container texto'>
	<form id='edital_form' class='col' <?if(!$expirou) echo "action='edital_form.php'"?> method='post'>
		<h1>Submissão</h1>
			<?
				if (@$_REQUEST['submissao']!='') {
					$submissoes = mysql_query("SELECT * FROM submissao WHERE id='".$_REQUEST['submissao']."';");
					while( $submissao = mysql_fetch_array($submissoes) ) { 
					?>
					<h2>respostas</h2>
					<fieldset>
					<label><?=$submissao['nome']?></label>					
					<input name='nome' value='seu nome completo'/>
					<label><?=$submissao['email']?></label>
					<input name='email' value='seu e-mail'/>
					<?
						include 'edital_'.@$_REQUEST['url'].'.php';
					?>
					</fieldset>
					<h2>para uso da CORDE</h2>
					<fieldset class='avaliacao'>
					<select name='status'>
						<option>status</option>
						<option <?if($submissao['status']=='')echo'selected=selected'?> value=''>ainda não avaliada</option>
						<option <?if($submissao['status']=='em estudo')echo'selected=selected'?> value='em estudo'>em estudo</option>
						<option <?if($submissao['status']=='recusado')echo'selected=selected'?> value='recusado'>recusado</option>
						<option <?if($submissao['status']=='aprovado')echo'selected=selected'?> value='aprovado'>aprovado</option>
					</select>
					<label><?=$submissao['custo']?></label>
					<input name='custo' value='custo'/>
					<input name='id' value='<?=$_REQUEST['submissao']?>' type='hidden'/>
					<?
					}
				} else {
					?>
					<fieldset>
					<input name='nome' value='seu nome completo'/>
					<input name='email' value='seu e-mail'/>
					<?
					include 'edital_'.@$_REQUEST['url'].'.php';
				}
			?>
		</fieldset>
		<input type='hidden' name='edital_categoria' value='<?=$edital_id?>'/>
		<input type='hidden' name='edital_categoriat' value='<?=$edital_titulo?>'/>
		<a class='bt'>
			enviar
			<button type='submit'></button>
		</a>
		<strong class='aviso aviso_sucesso'>cadastro realizado! boa sorte, os resultados saem dia 14/9!</strong>
		<strong class='aviso aviso_erro'>erro</strong>
	</form>
	<?
		if (@$_REQUEST['acesso']=='sim') {
			$submissoes = mysql_query("SELECT * FROM submissao WHERE edital='".$edital_id."';");
			echo '<div class="col"><h1>'.$edital_subtitulo.'</h1><h2>'.$edital_titulo.'</h2><table>';
			$i = 1;
			while( $submissao = mysql_fetch_array($submissoes) ) { 
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td><a href="editais/'.$_GET['url'].'&acesso=sim&submissao='.$submissao['id'].'">'.$submissao['nome'].'</a><br/>'.$submissao['titulo'].'</td>';
				if ($submissao['status'] == 'em estudo') {
					$status_ico = "talvez";
				} elseif ($submissao['status'] == 'aprovado') {
					$status_ico = "sim";
				} elseif ($submissao['status'] == 'recusado') {
					$status_ico = "nao";
				}
				echo '<td style="background:#fff; width:31px"><img src="img/ico_'.$status_ico.'.png" title="'.$submissao['status'].'"/></td>';
				echo '</tr>';
				$i++;
			};
			echo '</table></div>';
		} else {
	?>
	<div>
		<h1><?=$edital_subtitulo?></h1>
		<h2><?=$edital_titulo?></h2>
		<p>
			Olá! Você, encontrista com potencial, tem interesse no edital de <strong><?=$edital_titulo?></strong>? Vamos dar uma olhada em como funciona essa bagaça!
		</p>
		<? include 'edital_des_'.@$_REQUEST['url'].'.php'?>
	</div>
	<div class='col'>
		<h2>prazos</h2>
		<p>As submissões deverão ser efetuadas até 23h59 do dia 05/09/2014. Alguns itens e propostas poderão ser discutidas juntamente com a CORDe, durante e após a submissão, e esses poderão estar sujeitos à modificações.</p>
		<p>
			Os resultados serão divulgados no dia 14/09/2014 através do site, e-mails e <a href='http://fb.com/rmistobauru' target='_blank'>página do R Misto no facebook</a>.
		</p>
	</div>
	<div class='col'>
		<h2>dúvidas sobre este edital?</h2>
		<form id='contato_form' action='contato_form.php' method='post' enctype="multipart/form-data">
			<fieldset>
				<input type='hidden' name='assunto' value='editais'/>
				<input type='hidden' name='detalhe' value='<?=$edital_titulo?>'/>
				<input name='nome' value='seu nome'/>
				<input name='email' value='seu e-mail'/>
				<textarea name='mensagem'>mensagem</textarea>
			</fieldset>
			<a class='bt'>
				enviar
				<button type='submit'></button>
			</a>
			<strong class='aviso aviso_sucesso'>mensagem enviada com sucesso!</strong>
			<strong class='aviso aviso_erro'>erro</strong>
		</form>
	</div>
	<?
		}
	?>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){

	<?if($expirou){?>
	//após data limite
	$('#edital_form h1').css('text-decoration','line-through').after('<h2>prazo encerrado</h2>');
	$('#edital_form :input').attr('disabled','disabled').css('opacity',0.5);
	$('#edital_form a.bt').remove();
	<?}?>
	
	//campos resumo
	$('.tweet').keyup(function(){
		if($(this).val().length>139) $(this).val($(this).val().substr(0,140));
	});

	//submit
	$('form').submit(function(e){
		e.preventDefault();
		$(this+' a.bt').click();
	});
	$('a.bt').click(function(){
		var formulario = $(this).closest('form');
		$(formulario).find('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		//campo checkbox
		$(formulario).find('div').each(function(){
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
		if($(formulario).find('.off').not('.on').length>0) { 
			$(formulario).find('.off').not('.on').addClass('erro');
			alert('preencha os campos obrigatórios');
			$(formulario).find('.off').first().focus();
			return;
		};
		//campo email
		var email = $(formulario).find('input[name=email]');
		if(!validaemail($(email).val())) {
			$(email).focus().addClass('erro');
			alert('E-mail inválido');
			return;
		};
		//campos opcionais
		$(formulario).find('.on').each(function(){
			if($(this).val()==this.defaultValue) $(this).val('');
		});
		$(formulario).find('xtextarea').each(function(){
				$(this).val(encodeURIComponent($(this).val())
					.replace(/%20/g,' ')
					.replace(/\-/g,'<m>')
					.replace(/\_/g,'<u>')
					.replace(/\./g,'<d>')
					.replace(/\!/g,'<e>')
					.replace(/\~/g,'<t>')
					.replace(/\*/g,'<a>')
					.replace(/\'/g,'<q>')
					.replace(/\%/g,'<p>')
				);
		});
		//envio
		$(this).text('enviando...').addClass('enviando');
		$.post($(formulario).attr('action'), $(formulario).serialize(), function(result){
			if(result == 'sent'){
				$(formulario).find('a.bt').fadeOut(function(){$(formulario).find('strong.aviso_sucesso').fadeIn()});
			} else{
				$(formulario).find('a.bt').fadeOut(function(){$(formulario).find('strong.aviso_erro').fadeIn()});
			}
		});
	});
	<? if (@$_REQUEST['acesso']=='sim') {	?>
		$('.menu_enc:last li a').attr('href',function(i,h){return h+'&acesso=sim'});
		$('.banner').remove();
	<? } if (@$_REQUEST['submissao']!='') {	?>
		$(':input').removeAttr('disabled').css('opacity',1);
		$('#edital_form').attr('action','edital_avaliacao.php').append('<a class="bt">alterar<button type="submit"></button></a>');
		$('#edital_form textarea,#edital_form input:text').each(function(){
			var label = $(this).val();
			var resposta = $(this).prev().text();
			$(this).val(resposta);
			$(this).prev().text(label);
		});
		$('#edital_form select').each(function(){
			var label = $(this).find('option').first().text();
			$(this).before('<label>'+label+'</label>');
		});
		$('textarea').each(function(){
			$(this).css('height','1em').height($(this).prop('scrollHeight'));
		});
		var tematicas = $('input[name=tematica]').val().split(', ');
		for (var i=1; i < tematicas.length; i++) {
			$('#tematica'+tematicas[i]).click();
		}
		if($('#quero').length>0) {
			var quero = $('#quero').val().split(', ');
			for (var i=1; i < quero.length; i++) {
				$('#quero'+quero[i]).click();
			}
		}
	<? } ?>
});    
</script>
</body>
</html>