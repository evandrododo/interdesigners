<? 
	include_once 'config2.php';
	include "phpmailer/phpmailer.lang-br.php";
	include "phpmailer/class.smtp.php";
	include "phpmailer/class.phpmailer.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<style>
	td { text-transform:none;}
	th select { position:absolute; width:95px; height:20px; padding:0;}
</style>
<title>Inscrição - R Misto</title>
</head>
<body class='inscricao'>
<? include 'topo.php'?>
<div class='container'>
<table>
		<tr>
			<th>usuário</th>
			<th>pacotes</th>
			<th>valor</th>
			<th>comprovante</th>
			<th>camiseta</th>
			<th>
				<select>
					<option value=''>não pagos</option>
					<option value='sim'>pagos</option>
					<option value='todos'>todos</option>
				</select>
			</th>
		</tr>
		<tr>
<?
		if($_POST['statusid']!='') {
		mysql_query("UPDATE venda SET perguntas='".$_POST['status']."' WHERE id='".$_POST['statusid']."' ;");
			$snome = $_POST['snome'];
			$semail = utf8_decode($_POST['semail']);
			$spacotes = $_POST['spacotes'];
			
			$body = '';
			$body.= '<font face="Verdana">';
			$body.= 'Olá, '.$snome.'!<br/><br/>';
			$body.= 'Sua inscrição foi realizada com sucesso para os seguintes pacotes: '.$spacotes.'.<br/>';
			$body.= 'Caso queira comprar mais pacotes, faça o depósito com os respectivos valores até 31/10 e envie o comprovante por inbox para nossa integrante da frente de financeiro, <a href="https://www.facebook.com/juliayuri.landimgoya">Julia Yuri Landim Goya</a>.<br/><br/>';
			$body.= 'atenciosamente,<br/>';
			$body.= '<b>CORDe - Comissão Organizadora do R Design</b>,<br/><br/>';
			$body.= '<div style="background:url(http://www.rmisto.com.br/img/logo.png); width:75px; height:100px"></div>';
			$body.= '</font>';
			$mail = new PHPMailer();
			$mail->SetLanguage("br", "./phpMailer/language/");
			$mail->IsSMTP();
			$mail->IsHTML(true);
			$mail->SMTPAuth = true;
			$mail->Port		= 587;
			$mail->Host		= "mail.interdesigners.com.br";
			$mail->Username = "interdes";
			$mail->Password = "1nt3rd3s1gn3rs";
			$mail->From		= "contato@rmisto.com.br";
			$mail->FromName = "R Misto";
			$mail->AddAddress($semail,$snome);
			$mail->Subject	= utf8_decode('inscrição confirmada');
			$mail->Body		= utf8_decode($body);

			if($mail->Send()) {
				echo '';
			} else {
				echo $mail->ErrorInfo;
			}

		}
		$vendas = mysql_query("SELECT *,venda.id as vendaid FROM venda INNER JOIN usuario ON venda.usuarioid=usuario.id WHERE perguntas='pago' ;");
		if($_POST['filtro']=='sim') {
			$vendas = mysql_query("SELECT *,venda.id as vendaid FROM venda INNER JOIN usuario ON venda.usuarioid=usuario.id WHERE perguntas='pago' ;");		
		} else if($_POST['filtro']=='todos') {
			$vendas = mysql_query("SELECT *,venda.id as vendaid FROM venda INNER JOIN usuario ON venda.usuarioid=usuario.id ;");		
		}
		while( $venda = mysql_fetch_array($vendas) ) { 
		?>
			<td class="<?=$venda['id']?>">
				<?=$venda['nome']?>			</td>
			<td class='spacotes'>
				<?
				$pacotes = explode(', ',$venda['pacotes']);
				foreach ($pacotes as $pacote) {
					if($pacote=='pctRbasico') $pacote='';
					if($pacote=='pctRalmoco') $pacote='';
					if($pacote=='pctRaloja') $pacote='';
					if($pacote=='pctRfestas') $pacote='';
					if($pacote=='pctRcafe') $pacote='';
					if($pacote=='pctS') $pacote=', simpósio';
					if($pacote=='pctSposter') $pacote='';
					echo $pacote;
				}
				?>
			</td>
		</tr>
		<?
	}	
?>
<form id='mudastatus' action='inscricoessite.php' method='POST'>
	<input type='hidden' id='filtro' name='filtro'/>
	<input type='hidden' id='status' name='status'/>
	<input type='hidden' id='statusid' name='statusid'/>
	<input type='hidden' id='snome' name='snome'/>
	<input type='hidden' id='semail' name='semail'/>
	<input type='hidden' id='spacotes' name='spacotes'/>
</form>
</table>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){
		$('table input').click(function(){
			var venda = $(this).prop('name');
			var snome = $(this).closest('tr').find('[name=snome]').val();
			var semail = $(this).closest('tr').find('[name=semail]').val();
			var spacotes = $(this).closest('tr').find('td.spacotes').text();
			$(this).is(':checked') ? $('#status').val('pago') : $('#status').val('');
			$('#statusid').val(venda);
			$('#snome').val(snome);
			$('#semail').val(semail);
			$('#spacotes').val(spacotes);
			$('#mudastatus').submit();
		});
		$('select').change(function(){
			var filtro = $(this).val();
			$('#filtro').val(filtro);
			$('#mudastatus').submit();
		});
		<? if($_POST['filtro']=='sim') { ?>
			$('table select').val('sim');
			$('#filtro').val('sim');
		<? } else if($_POST['filtro']=='todos') { ?>
			$('table select').val('todos');
			$('#filtro').val('todos');
		<?}?>
});    
</script>
</body>
</html>