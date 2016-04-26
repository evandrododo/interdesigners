<? include_once 'config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include_once 'head.php'?>
<title>Inscrição - R Misto</title>
</head>
<body class='inscricao'>
<? include 'topo.php'?>
<? $comprovante = time();?>
<div class='container'>
		<h1>Inscrição</h1>
	<form id='inscricao_form' action='inscricao_form.php' method='post' class='col texto'>
		<fieldset>
			<h2>formulário</h2>
			<select name='formapgto'>
				<option>forma de pagamento</option>
				<option value='1'>Depósito Bancário (sem juros)</option>
				<option value='2'>PagSeguro (em até 18x no cartão mais taxas e juros)</option>
			</select>
			<div class='pgtovista formapgto'>
				<br/>Os pagamentos por depósito estão encerrados. caso tenha feito pagamento e não enviou seu comprovante ainda traga no seu credenciamento.
				<!--
				<br/>Deposite o <a href='inscricao#valortotal'>valor total</a> (<span class='valortotal'>selecione um pacote</span>) para:
				<br/>
				<strong><br/>&bullet;</strong> Banco do Brasil (001)
				<strong><br/>&bullet;</strong> Agência: 6533-1
				<strong><br/>&bullet;</strong> Conta: 16931-5
				<strong><br/>&bullet;</strong> Variação: 51
				<strong><br/>&bullet;</strong> Titular: Julia Yuri Landim Goya
				<strong><br/>&bullet;</strong> CPF: 233504278-55
				<br/>
				<br/>Preencha-os campos abaixo somente após realizar o pagamento, pois será exigido o envio de comprovante do depósito primeiramente.
				<br/>
				<br/>Lembre-se de checar todos os pacotes que pagou para poder responder todos os formulários necessários.
				-->
			</div>
			<div class='pgtoprazo formapgto'>
				<br/>Após preencher os campos abaixo e enviar o formulário, você será redirecionado para o ambiente protegido do PagSeguro onde fará o pagamento do <a href='inscricao#valortotal'>valor total</a> (<span class='valortotal'>selecione um pacote</span>) mais taxas do PagSeugro<span class='valortaxas'></span> e juros de parcelamento.
				<br/>
				<br/>Lembre-se de checar todos os pacotes que pagou para poder responder todos os formulários necessários.
			</div>
		</fieldset>
		<fieldset class='dadospessoais'>
			<h2>dados básicos</h2>
<!--			<iframe class='upload pgtovista formapgto' src='inscricao_comprovante.php'></iframe>
			<input id='nome_final' name='comprovante' class='formapgto pgtovista' readonly='readonly'/>-->
			<input id='nome_tempo' name='comprovante' class='formapgto pgtoprazo' type='hidden' value='<?=$comprovante?>00'/>
			<input name='nome' value='nome completo'/>
			<input name='email' value='e-mail'/>
			<input name='rg' value='RG'/>
			<input name='cpf' value='CPF'/>
			<input name='nascimento' value='data de nascimento'/>
			<input name='telefone' value='telefone(s)'/>
			<input name='facebook' value='facebook'/>
			<textarea name='endereco'>endereço completo (logradouro, nº, complemento, bairro, CEP)</textarea>
			<input name='cidade' value='cidade'/>
			<select name='estado'>
				<option>estado</option>
				<option value='AC'>Acre</option>
				<option value='AL'>Alagoas</option>
				<option value='AP'>Amapá</option>
				<option value='AM'>Amazonas</option>
				<option value='BA'>Bahia</option>
				<option value='CE'>Ceará</option>
				<option value='DF'>Distrito Federal</option>
				<option value='ES'>Espírito Santo</option>
				<option value='GO'>Goiás</option>
				<option value='MA'>Maranhão</option>
				<option value='MT'>Mato Grosso</option>
				<option value='MS'>Mato Grosso do Sul</option>
				<option value='MG'>Minas Gerais</option>
				<option value='PA'>Pará</option>
				<option value='PB'>Paraíba</option>
				<option value='PR'>Paraná</option>
				<option value='PE'>Pernambuco</option>
				<option value='PI'>Piauí</option>
				<option value='RJ'>Rio de Janeiro</option>
				<option value='RN'>Rio Grande do Norte</option>
				<option value='RS'>Rio Grande do Sul</option>
				<option value='RO'>Rondônia</option>
				<option value='RR'>Roraima</option>
				<option value='SC'>Santa Catarina</option>
				<option value='SP'>São Paulo</option>
				<option value='SE'>Sergipe</option>
				<option value='TO'>Tocantins</option>
			</select>
			<input name='faculdade' value='faculdade'/>
			<input name='curso' value='curso'/>
			<input name='ano' value='ano/termo'/>
		</fieldset>
		<fieldset class='pctRbasico'>
			<h2>pacote R Design</h2>
			<select name='camiseta'>
				<option>tamanho de camiseta</option>
				<optgroup label='feminina (baby look)'>
					<option value='fem P'>P</option>
					<option value='fem M'>M</option>
					<option value='fem G'>G</option>
					<option value='fem GG'>GG</option>
				</optgroup>
				<optgroup label='masculina'>
					<option value='masc P'>P</option>
					<option value='masc M'>M</option>
					<option value='masc G'>G</option>
					<option value='masc GG'>GG</option>
					<option value='masc XG'>Extra G</option>
				</optgroup>
			</select>
			<select>
				<option>tipo sanguíneo</option>
				<option value='AB+'>AB+</option>
				<option value='AB-'>AB+</option>
				<option value='A+'>A+</option>
				<option value='A-'>A-</option>
				<option value='B+'>B+</option>
				<option value='B-'>B-</option>
				<option value='O+'>O+</option>
				<option value='O-'>O-</option>
				<option value='não sei'>não sei</option>
			</select>
			<input class='on' value='portador de necessidade especiais? quais?'/>
			<input class='on' value='faz uso de medicações controladas? quais?'/>
			<input class='on' value='alergias? quais?'/>
			<input class='on' value='restrições alimentícias como diabetes ou outros?'/>
			<input value='contato de emergência (nome e telefone)'/>
			<div>
				<p>quais itens abaixo fizeram parte de sua trajetória acadêmica?</p>
				<input type="checkbox" value="1" id="perg1" ><label for="perg1">CA/DA</label><br>
				<input type="checkbox" value="2" id="perg2" ><label for="perg2">Representante discente</label><br>
				<input type="checkbox" value="3" id="perg3" ><label for="perg3">Representante de turma</label><br>
				<input type="checkbox" value="4" id="perg4" ><label for="perg4">Intercâmbio</label><br>
				<input type="checkbox" value="5" id="perg5" ><label for="perg5">Empresa Júnior</label><br>
				<input type="checkbox" value="6" id="perg6" ><label for="perg6">Iniciação Científica</label><br>
				<input type="checkbox" value="7" id="perg7" ><label for="perg7">Bolsista</label><br>
				<input type="checkbox" value="8" id="perg8" ><label for="perg8">Comissão de formatura</label><br>
				<input type="checkbox" value="9" id="perg9" ><label for="perg9">Organização de evento</label><br>
				<input type="checkbox" value="10" id="perg10" ><label for="perg10">Outro</label><input class='outraresp'/><br>
			</div>
			<input value='já foi a outro evento de design? Qual?'/>
			<div>
				<p>como virá para Bauru?</p>
				<input type="checkbox" value="1" id="transp1" ><label for="transp1">carro</label><br>
				<input type="checkbox" value="2" id="transp2" ><label for="transp2">avião</label><br>
				<input type="checkbox" value="3" id="transp3" ><label for="transp3">moro em Bauru</label><br>
				<input type="checkbox" value="4" id="transp4" ><label for="transp4">ônibus</label><br>
				<input type="checkbox" value="5" id="transp5" ><label for="transp5">Outro</label><input class='outraresp'/><br>
			</div>
		</fieldset>
		<fieldset class='pctRalmoco'>
		<h2>pacote almoço</h2>
			<select name='almoco'>
				<option>almoço</option>
				<option value='carnívoro'>carnívoro</option>
				<option value='vegetariano'>vegetariano</option>
				<option value='vegano'>vegano</option>
			</select>
		</fieldset>
		<input type='hidden' name='pacotes'/>
		<input type='hidden' name='valor'/>
		<strong class='aviso aviso_sucesso'>inscrição realizada com sucesso! aguarde nossa confirmação de pagamento por e-mail</strong>
		<strong class='aviso aviso_erro'>erro</strong>
		<a class='bt btinsc pgtoprazo' style='display:none'>
			enviar
			<button type='submit'></button>
		</a>
		<a class='bt btpagseguro' style='display:none'>
			pagar
			<button type='submit'></button>
		</a>
	</form>
	<div class='col texto'>
		<h2>orientações</h2>
		<p><strong>Valor:</strong> primeiramente selecione os pacotes desejados nas tabelas abaixo. Ao final, aparecerá o <a href='inscricao#valortotal'>valor total</a> de sua compra.</p>
		<p><strong>Formulários:</strong> ao checar os pacotes, os formulários ao lado serão habilitados.</p>
		<p><strong>Isenções:</strong> os aprovados em editais devem selecionar todos os pacotes desejados, mesmo os que tenham sido <a href='http://www.rmisto.com.br/#editais'>isentos por edital</a>, para nosso controle de estoque, porém devem pagar somente os pacotes sem isenção.</p>
	</div>
	<div class='col texto'>
		<h1>Pacotes</h1>
		<h2>R Design - 05 a 09/11</h2>
		<table class='pctR'>
			<thead>
				<tr style='text-decoration:line-through;'>
					<th>pacotes</th><th>até 20/10</th><th>até 27/10</th><th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type='checkbox' id='pctRbasico' name='pcts' value='80'/><label for='pctRbasico'>inscrição</label><span>atividades, kit e coffee breaks</span></td><td style='text-decoration:line-through;'>R$60</td><td style='text-decoration:line-through;'>R$70</td><td><strong>R$80<strong></td>
				</tr>
				<tr>
					<td><input type='checkbox' id='pctRaloja' name='pcts' value='30'/><label for='pctRaloja'>alojamento</label><span></span></td><td colspan='3'>R$30</td>
				</tr>
				<tr>
					<td><input type='checkbox' id='pctRcafe' name='pcts' value='12'/><label for='pctRcafe'>café da manhã</label><span>servido no alojamento</span></td><td colspan='3'>R$12</td>
				</tr>
				<tr>
					<td><input type='checkbox' id='pctRalmoco' name='pcts' value='40'/><label for='pctRalmoco'>almoço</label><span>servido no câmpus</span></td><td colspan='3'>R$40</td>
				</tr>
					<tr>
						<td><input type='checkbox' id='pctRfestas' name='pcts' value='40'/><label for='pctRfestas'>festas</label><span>2 festas (a 2ª é openbar!)</span></td><td colspan='3'>R$40</td>
					</tr>
					<tr>
						<td>transportes</label><span>venda no credenciamento</span></td><td colspan='3'>a definir</td>
					</tr>
			</tbody>
		</table>
		<h2>Simpósio Interdesigners -  03 a 05/11</h2>
		<table class='simposio'>
			<thead>
				<th>pacotes</th><th style='text-decoration:line-through;'>até 20/10</th><th style='text-decoration:line-through;'>até 27/10</th><th></th>
			</thead>
			<tbody>
				<tr>
					<td><input type='checkbox' name='pcts' id='pctS' value='50'/><label for='pctS'>inscrição</label><span>atividades, kit e coffe breaks</span></td><td style='text-decoration:line-through;'>R$30</td><td style='text-decoration:line-through;'>R$40</td><td><strong>R$50</strong></td>
				</tr>
				<tr>			
					<td><input type='checkbox' name='pcts' id='pctSposter' value='40'/><label for='pctSposter'>pôster</label><span>oferecemos o serviço opcional de impressão para evitar problemas</span></td><td colspan='2'>R$40,00</td>
				</tr>
				</tbody>
		</table>
		<p id='valortotal'>* para quem se inscrever nos 2 eventos haverá um desconto de R$10,00 no valor total.</p>
		<h2>valor total: <span class='valortotal'>selecione um pacote</span></h2>
			<form id='pagseguro' method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="contato@rmisto.com.br">  
        <input name="currency" type="hidden" value="BRL">  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
        <input name="itemId1" type="hidden" value="0001">  
        <input name="itemDescription1" type="hidden" value="Pacotes R Misto">  
        <input name="itemAmount1" type="hidden">
        <input name="itemQuantity1" type="hidden" value="1">  
        <input name="itemWeight1" type="hidden" value="0">
        <!-- Código de referência do pagamento no seu sistema (opcional) -->  
        <input name="encoding" type="hidden" value="UTF-8">  
        <input name="reference" type="hidden" value="<?=$comprovante?>">  
        <!-- Informações de frete (opcionais) -->  
        <input name="shippingType" type="hidden" value="3">  
        <input name="shippingAddressPostalCode" type="hidden" value='17033360'>  
        <input name="shippingAddressStreet" type="hidden" value="Av. Luiz Edmundo Carrijo Coube ">  
        <input name="shippingAddressNumber" type="hidden" value="14 01">
        <input name="shippingAddressComplement" type="hidden" value="Anfiteatro Guilhermão">  
        <input name="shippingAddressDistrict" type="hidden" value="UNESP">  
        <input name="shippingAddressCity" type="hidden" value="Bauru">  
        <input name="shippingAddressState" type="hidden" value="SP">  
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
        <!-- Dados do comprador (opcionais) -->  
        <input name="senderName" type="hidden">  
        <input name="senderAreaCode" type="hidden">  
        <input name="senderPhone" type="hidden">  
        <input name="senderEmail" type="hidden">  
			</form>
	</div>
</div>
<? include 'rodape.php'?>
<script>
$(document).ready(function(){

	//forms desabilitados
	function desabilita(fieldset){
		if($('#'+fieldset).is(':checked')) {
			$('.'+fieldset).css('opacity',1)
			$('.'+fieldset+' :input').prop('disabled',false)
		} else {
			$('.'+fieldset).css('opacity',0.5)
			$('.'+fieldset+' :input').prop('disabled',true)
		}
	}
	desabilita('pctRbasico');
	desabilita('pctRalmoco');
	
	//pacotes
	$('table :checkbox').change(function(){
		if( $('table.pctR :checked:not(#pctRfestas)').length > 0 ) {
			//checa pacote inscrição do R
			if( !$('#pctRbasico').is(':checked') && !$(this).is('#pctRfestas') ) {
				$('#pctRbasico').attr('checked',true);
				alert('O pacote INSCRIÇÃO é indispensável para que se compre os outros pacotes')
			}
			//checa pacote aloja e café
			if( $('#pctRcafe').is(':checked') && !$('#pctRaloja').is(':checked') ) {
				if($(this).is('#pctRaloja')) {
					$('#pctRcafe').attr('checked',false);
				} else {
					$('#pctRaloja').attr('checked',true);
				}
				alert('O pacote CAFÉ DA MANHÃ só pode ser comprado junto com o pacote ALOJAMENTO')
			}
		}
		if( $('table:last :checked').length > 0 ) {
			//checa pacote inscrição do R
			if( !$('#pctS').is(':checked') ) {
				$('#pctS').attr('checked',true);
				alert('O pacote INSCRIÇÃO é indispensável para que se compre o pôster')
			}
		}
		var valortotal = '';
		var nomepacotes = '';
		$('table :checked').each(function(){
			valortotal = valortotal-(-$(this).val());
			nomepacotes = nomepacotes+', '+$(this).attr('id');
		});
		if( $('#pctS').is(':checked') && $('#pctRbasico').is(':checked') ) valortotal -= 10; //desconto
		if (valortotal==0) valortotal = 'selecione um pacote';
		$('.valortotal').text(valortotal); //valor total
		$('input[name=valor]').val(valortotal); //valor total
		$('input[name=itemAmount1]').val(valortotal+'.00'); //valor total
		if( $('table :checked').length>0 ) {
			$('.btinsc').show();
		} else {
			$('.btinsc').hide();
		}
		$('input[name=pacotes]').val(nomepacotes); //registro dos pacotes
		desabilita('pctRbasico');
		desabilita('pctRalmoco');
	});
	
	//forma de pagamento
	$('.formapgto').hide().prop('disabled',true);
	var pagseguro = false;
	$('[name=formapgto]').change(function(){
		if($(this).val()=='1') {
			$('.pgtovista').slideDown().prop('disabled',false);
			$('.pgtoprazo').slideUp().prop('disabled',true);
			pagseguro = false;
		} else if($(this).val()=='2') { 
			$('.pgtoprazo').slideDown().prop('disabled',false);
			$('.pgtovista').slideUp().prop('disabled',true);
			pagseguro = true;
		} else {
			$('.pgtoprazo').slideUp().prop('disabled',true);
			$('.pgtovista').slideUp().prop('disabled',true);
			pagseguro = false;
		}
	});
	
	//campos "outro"
	$('.outraresp').prev().prev().change(function(){
		if($(this).is(':checked')) {
			$(this).next().next().show()
		} else {
			$(this).next().next().hide();
		}
	});
	
	//submit
	$('form:not(#pagseguro)').submit(function(e){
		e.preventDefault();
		$(this+' a.btinsc').click();
	});
	$('form a.btinsc').click(function(){
		var formulario = '#'+$(this).closest('form').attr('id');
		$(formulario).find('strong.aviso').fadeOut();
		$('.erro').removeClass('erro');
		if($(this).hasClass('enviando')) return;
		//campo checkbox
		$(formulario).find('div').each(function(){
			var valor = '';
			$(this).find('input:checked, input[type=text]').each(function(){
				valor = valor+', '+$(this).val();
				$(this).closest('div').find('input:hidden').val(valor);
			});
		});
		//campos obrigatorios
		if($(formulario+' .off').not('.on').not(':disabled').length>0) { 
			$(formulario+' .off').not('.on').not(':disabled').addClass('erro');
			alert('preencha os campos obrigatórios');
			$(formulario).find('.off').first().focus();
			return;
		};
		//campo email
		var email = $(formulario).find('input[name=email]');
		if(email==true && !validaemail($(email).val())) {
			$(email).focus().addClass('erro');
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
		$.post($(formulario).attr('action'), $(formulario).serialize(), function(result){
			if(result == 'sent'){
				$(formulario).find('a.btinsc').fadeOut(function(){$(formulario).find('strong.aviso_sucesso').fadeIn()});
				if(pagseguro==true) {
					$('[name=senderName]').val($('[name=nome]').val());
					$('[name=senderEmail]').val($('[name=email]').val());
					$(formulario).find('strong.aviso_sucesso').text('formulário preenchido com sucesso, agora você pode pagar no ambiente protegido do PagSeguro').css('font-size','15px');
					$('.btpagseguro').show();
				}
			} else{
				$(formulario).find('a.btinsc').fadeOut(function(){$(formulario).find('strong.aviso_erro').fadeIn()});
			}
		});
	});
	$('.btpagseguro').click(function(){
		$('#pagseguro').submit();
		$(this).slideUp();
	});
	
});    
</script>
</body>
</html>