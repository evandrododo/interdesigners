<? include_once 'config2.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<title>1º Simpósio Interdesigners</title>
</head>
<body class='simposio'>
<? include 'topo.php'?>
<div class='container'>
<? if(isset($_SESSION['usu4r10'])) { ?>
	<h1>CORREÇÃO</h1>
	<div class='texto'>
		<h2>Orientações</h2>
		<?
		$usuarios = mysql_query("SELECT * FROM usuario WHERE email='".$_SESSION['usu4r10']."' AND senha!='' AND id<77 ;");
		while( $usuario = mysql_fetch_array($usuarios) ) {
			$usuario_id=$usuario['id'];
			echo '<p>Olá '.$usuario['nome'].',</p>';
		?>
		<p>
			Abaixo seguem as notas dos artigos que você submeteu, os respectivos comentários de cada avaliador e, no caso de aprovação, o modelo para criação do pôster a ser exibido durante o evento.
		</p>
	</div>
		<?
		}
		$artigos = mysql_query("SELECT * FROM artigo WHERE usuario_id='".$usuario_id."' ;");
		while( $artigo = mysql_fetch_array($artigos) ) {
			$notadecimal = '';
			$notas = explode(' ',$artigo['nota1']);
			foreach ($notas as $nota) {
				$notadecimal = $nota+$notadecimal;
			}
			$notas = explode(' ',$artigo['nota2']);
			foreach ($notas as $nota) {
				$notadecimal = $nota+$notadecimal;
			}
			$notafinal = round($notadecimal/16,2);
			$status = 'reprovado';
			if($notafinal>6.5) { //nota real de corte
				$status = 'aprovado';
				if($notafinal<7) $notafinal = 7.0; //nota fake
			}
			$obs1 = $artigo['obs1'];
			if($obs1=='') $obs1='sem observações';
			$obs2 = $artigo['obs2'];
			if($obs2=='') $obs2='sem observações';
		?>
		<form class='texto'>
			<br/>
			<h2><?=$artigo['titulo']?></h2>
			<p>
				<? if ($status=='aprovado') { ?>
					Ótimas notícias: seu artigo foi <strong>aprovado</strong> com nota <strong><?=$notafinal?></strong>. Recomendamos fortemente que leia as observações, faça as adequações necessárias apontadas e reenvie o artigo através do e-mail simposio@interdesigners.com.br até <strong>24/10</strong>.<br/><br/>
					Para expor e publicar o seu artigo você deve se <a href='inscricao'>inscrever</a> no simpósio e imprimir um pôster seguindo <a href='uploads/posters/poster<?=$artigo['tematica']?>.ppt'>este modelo</a>. Cada temática do simpósio (gráfico, produto etc) conta com uma cor específica de pôster, por isso se atente em utilizar o modelo fornecido nesta área do sistema. Caso deseje comprar o <a href='inscricao'>pacote de impressão do pôster</a> (40$) nós imprimiremos para você, porém o prazo é curto: você deve enviar o arquivo até dia <strong>20/10 (segunda)</strong> pelo e-mail <strong>simposio@interdesigners.com.br</strong>.<br/><br/>
				<? } else { ?>
					Infelizmente seu artigo foi <strong>reprovado</strong>, com nota <strong><?=$notafinal?></strong>. Mas você ainda pode se <a href='inscricao'>inscrever</a> para participar do simpósio e receber seu certificado de participação.<br/><br/>
				<? } ?>
				<strong>Observações (corretor 1):</strong><br/>
				<?=$obs1?><br/><br/>
				<strong>Observações (corretor 2):</strong><br/>
				<?=$obs2?><br/>
			</p>
		</form>
		<?
		}
} else { ?>
	<form id='login' class='col' action='login.php' method='post'>
		<h1>Login</h1>
		<fieldset>
			<input name='email' value='e-mail'/>
			<input name='senha' type='password'/>
			<input value='CPF (somente números)' class='falsenha'/>
		</fieldset>
		<strong class='aviso aviso_erro'>erro: senha ou e-mail errados</strong>
		<a class='bt'>
			entrar
			<button type='submit'></button>
		</a>
	</form>
<? } ?>
</div>
<script>
$(document).ready(function(){
	//senha
	$('.falsenha').focus(function(){
		$(this).prev().show().focus();
		$(this).remove();
	}).prev().hide();
	//corretorn
	$('input[name=id]').val('<?=$_GET['url']?>');
	$('#numero').val('<?=$corretorn?>');
	$('#notafinal').attr('name','nota<?=$corretorn?>');
	$('textarea').attr('name','obs<?=$corretorn?>');
	//já corrigidos
	if($('table td:last-child:not(:empty)').length==0)	$('table:last').prepend(	$('<tr><td>nenhum</td></tr>') );
	$('table:last').prepend(	$('table td:last-child:not(:empty)').closest('tr') ).find('a').each(function(){
		$(this).before($(this).text()).remove();
	});
	//notas
	$('#form_nota select').change(function(){
		if($('#form_nota select.off').length>0) return;
		var nota = 0;
		$('#notafinal').val('')
		$('#form_nota select').each(function(){
			notas = $('#notafinal').val()+' '+$(this).val();
			$('#notafinal').val(notas);
			nota = nota-(-$(this).val());
			$('#notapublica strong').text(nota/8);
		});	
	});
	//submit
	$('form').submit(function(e){
		e.preventDefault();
		$(this+' a.bt').click();
	});
	$('form a.bt').click(function(){
		var formulario = '#'+$(this).closest('form').attr('id');
		$(formulario).find('strong.aviso').fadeOut();
		$('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		//campos obrigatorios
		if($(formulario+' .off').not('.on').length>0) { 
			$(formulario+' .off').not('.on').addClass('erro');
			alert('preencha os campos obrigatórios');
			return;
		};
		//campo email
		var email = $(formulario).find('input[name=email]');
		if(email==true && !validaemail($(email).val())) {
			$(email).focus().addClass('erro');
			alert('E-mail inválido');
			return;
		};
		//campos opcionais
		$('.on').each(function(){
			if($(this).val()==this.defaultValue) $(this).val('');
		});
		//envio
		$(this).text('enviando...').addClass('enviando');
		$.post($(formulario).attr('action'), $(formulario).serialize(), function(result){
			if(result == 'sent'){
				location.reload()
			} else{
				$(formulario).find('a.bt').removeClass('enviando').html('entrar<button type="submit"></button>');
				$(formulario).find('strong.aviso_erro').fadeIn();
			}
		});
	});
	
});    
</script>
</body>
</html>