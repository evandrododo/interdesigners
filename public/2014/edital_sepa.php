<label><?=$submissao['titulo']?></label>
<input name='titulo' value='título do seminário'/>
<label><?=$submissao['tema']?></label>
<textarea name='tema'>qual a relação dele com o conceito do evento?</textarea>
<label><?=$submissao['descricao']?></label>
<textarea name='descricao'>descreva sua produção, suas intenções, metodologia, resultados etc</textarea>
<select name='pg1'>
	<option value=''>produção acadêmica ou profissional?</option>
	<option <?if($submissao['pg1']=='acadêmica')echo'selected=selected'?> value='acadêmicam'>acadêmica</option>
	<option <?if($submissao['pg1']=='profissional')echo'selected=selected'?> value='profissional'>profissional</option>
</select>
<div>
	<p>quais as áreas da produção?</p>
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
<label><?=$submissao['pg2']?></label>
<textarea name='pg2'>quais os materiais/equipamentos necessários? especifique quantidades e quais você pode trazer</textarea>
<select name='pg3'>
	<option value=''>precisará de monitoria durante o seminário?</option>
	<option <?if($submissao['pg3']=='sim')echo'selected=selected'?> value='sim'>sim</option>
	<option <?if($submissao['pg3']=='não')echo'selected=selected'?> value='não'>não</option>
</select>
<label><?=$submissao['resumo']?></label>
<textarea name='resumo' class='tweet'>digite um resumo de 140 caracteres para divulgação</textarea>
<label><?=$submissao['obs']?></label>
<textarea name='obs' class='on'>algo a acrescentar?</textarea>