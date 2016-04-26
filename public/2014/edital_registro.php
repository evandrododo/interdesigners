<label><?=$submissao['pg1']?></label>
<textarea name='pg1'>Já trabalhou como registro em algum evento? Qual? Como foi?</textarea>
<label><?=$submissao['pg2']?></label>
<textarea name='pg2'>Tem disponibilidade para chegar antes do evento? Quanto tempo?</textarea>
<label><?=$submissao['descricao']?></label>
<textarea name='descricao'>Por que você quer ser monitor do R Misto? Descreva suas motivações e os ganhos esperados</textarea>
<div>
	<p>
		<input type='hidden' name='pg3' id='quero' value='<?=$submissao[pg3]?>'/>
		<input type='checkbox' value='1' id='quero1'><label for='quero1'>quero isenção senão não consigo pagar o evento</label><br/>
		<input type='checkbox' value='2' id='quero2'><label for='quero2'>quero isenção porque tá teno e tá sobrano</label><br/>
		<input type='checkbox' value='3' id='quero3'><label for='quero3'>porque aproveito melhor o evento dessa forma</label><br/>
		<input type='checkbox' value='4' id='quero4'><label for='quero4'>gosto de ajudar</label><br/>
		<input type='checkbox' value='5' id='quero5'><label for='quero5'>quero conhecer novas pessoas</label><br/>
	</p>
</div>
<select name='pg4'>
	<option value=''>emprestaria seu equipamento para um monitor de registro?</option>
	<option <?if($submissao['pg4']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg4']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<select name='pg5'>
	<option value=''>se precisar de vídeo, você filma?</option>
	<option <?if($submissao['pg5']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg5']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<select name='pg6'>
	<option value=''>gostaria de trabalhar nas festas?</option>
	<option <?if($submissao['pg6']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg6']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<div>
	<p>quais áreas prefere registrar?</p>
	<input type='hidden' name='tematica' value='<?=$submissao[tematica]?>'/>
	<input type='checkbox' value='1'  id='tematica1' /><label for='tematica1'>Comunicação Visual</label><br/>
	<input type='checkbox' value='2'  id='tematica2' /><label for='tematica2'>Design de Produto</label><br/>
	<input type='checkbox' value='3'  id='tematica3' /><label for='tematica3'>Design de Interiores</label><br/>
	<input type='checkbox' value='4'  id='tematica4' /><label for='tematica4'>Design Gráfico</label><br/>
	<input type='checkbox' value='5'  id='tematica5' /><label for='tematica5'>Design Inclusivo</label><br/>
	<input type='checkbox' value='6'  id='tematica6' /><label for='tematica6'>Design Informacional</label><br/>
	<input type='checkbox' value='7'  id='tematica7' /><label for='tematica7'>Design Textil/Vestuário</label><br/>
	<input type='checkbox' value='8'  id='tematica8' /><label for='tematica8'>Design Urbano</label><br/>
	<input type='checkbox' value='9'  id='tematica9' /><label for='tematica9'>Eco Design</label><br/>
	<input type='checkbox' value='10' id='tematica10'/><label for='tematica10'>Ergonomia e Acessibilidade</label><br/>
	<input type='checkbox' value='11' id='tematica11'/><label for='tematica11'>Fundamentos Teóricos</label><br/>
	<input type='checkbox' value='12' id='tematica12'/><label for='tematica12'>Gestão em Design</label><br/>
	<input type='checkbox' value='13' id='tematica13'/><label for='tematica13'>História do Design</label><br/>
	<input type='checkbox' value='14' id='tematica14'/><label for='tematica14'>Materiais e processos</label><br/>
	<input type='checkbox' value='15' id='tematica15'/><label for='tematica15'>Semiótica</label><br/>
</div>
<label><?=$submissao['link']?></label>
<textarea name='link'>algum link para portfólio?</textarea>
<label><?=$submissao['resumo']?></label>
<textarea name='resumo'>qual equipamento fotográfico você vai trazer?</textarea>
<label><?=$submissao['obs']?></label>
<textarea name='obs' class='on'>algo a acrescentar?</textarea>