<label><?=$submissao['pg1']?></label>
<textarea name='pg1'>Já auxiliou de alguma forma algum evento? Qual? Como?</textarea>
<label><?=$submissao['pg2']?></label>
<textarea name='pg2'>Tem disponibilidade para chegar antes do evento? Quanto tempo?</textarea>
<label><?=$submissao['descricao']?></label>
<textarea name='descricao'>Por que você quer ser monitor? (gosta de ajudar? quer conhecer pessoas? precisa da isenção? )</textarea>
<label><?=$submissao['pg4']?></label>
<textarea name='pg4'>você fez alguma boa ação essa semana? conte-nos</textarea>
<p>existe alguém precisando de ajuda na rua, você está com pressa e é o único por perto:</p>
<select name='pg5'>
	<option value=''>você ajudaria?</option>
	<option <?if($submissao['pg5']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg5']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<p>e se você <strong>não</strong> estivesse com pressa mas existissem muitas outras pessoas na rua que poderiam ajudar:</p>
<select name='pg6'>
	<option value=''>você ajudaria?</option>
	<option <?if($submissao['pg6']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg6']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<select name='pg3'>
	<option value=''>gostaria de trabalhar nas festas?</option>
	<option <?if($submissao['pg3']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg3']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<div>
	<p>quais áreas prefere monitorar?</p>
	<input type='hidden' name='tematica' value='<?=$submissao['tematica']?>'/>
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
<label><?=$submissao['resumo']?></label>
<textarea name='resumo'>quais habilidade suas ajudariam a ser monitor? qual a mais importante?</textarea>
<label><?=$submissao['tema']?></label>
<textarea name='tema'>de que forma você pretende se misturar no evento?</textarea>
<label><?=$submissao['obs']?></label>
<textarea name='obs' class='on'>algo a acrescentar?</textarea>