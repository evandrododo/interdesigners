<? include_once 'config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<style>
	td { text-transform:none;}
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
			<th>pago?</th>
		</tr>
		<tr>
<?
		if($_POST['statusid']!='') {
			mysql_query("UPDATE venda SET perguntas='".$_POST['status']."' WHERE id='".$_POST['statusid']."' ;");
		}
		$vendas = mysql_query("SELECT *,venda.id as vendaid FROM venda INNER JOIN usuario ON venda.usuarioid=usuario.id WHERE usuario.id<119 ;");
		while( $venda = mysql_fetch_array($vendas) ) { 
		?>
			<td>
				<?=$venda['nome']?><br/>
				<?=$venda['email']?><br/>
				<?=$venda['telefone']?><br/>
			</td>
			<td>
				<?
				$pacotes = explode(', ',$venda['pacotes']);
				foreach ($pacotes as $pacote) {
					if($pacote=='pctRbasico') $pacote='R básico';
					if($pacote=='pctRalmoco') $pacote='almoço<br/>('.$venda['almoco'].')';
					if($pacote=='pctRaloja') $pacote='aloja';
					if($pacote=='pctRfestas') $pacote='festas';
					if($pacote=='pctRcafe') $pacote='café';
					if($pacote=='pctS') $pacote='simpósio';
					if($pacote=='pctSposter') $pacote='pôster';
					echo $pacote.'<br/>';
				}
				?>
			</td>
			<td><?=$venda['valor']?></td>
			<td style='text-align:center;'><a href="uploads/comprovantes/<?=$venda['comprovante']?>" target='_blank'><img src='img/ico_editais.png'/></a></td>
			<td><?=$venda['camiseta']?></td>
			<td>
				<?=$venda['perguntas']?>
			</td>
		</tr>
		<?
	}	
?>
</table>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){
		$('td:first-child').next().not(":contains('festas')").closest('tr').remove();
});    
</script>
</body>
</html>