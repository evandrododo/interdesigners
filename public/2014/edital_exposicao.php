<label><?=$submissao['titulo']?></label>
<textarea name='titulo'>título(s) da(s) obra(s)</textarea>
<label><?=$submissao['tema']?></label>
<textarea name='tema'>qual a relação dela(s) com o conceito do evento?</textarea>
<label><?=$submissao['descricao']?></label>
<textarea name='descricao'>descreva brevemente cada obra, as técnicas e softwares utilizados</textarea>
<div>
	<p>a qual(is) área(s) pertence?</p>
		<input type='hidden' name='tematica' value='<?=$submissao[tematica]?>'/>
		<input type='checkbox' name='tematica' value='2'  id='tematica2' /><label for='tematica2'>Design de Produto</label><br/>
		<input type='checkbox' name='tematica' value='4'  id='tematica4' /><label for='tematica4'>Design Gráfico</label><br/>
		<input type='checkbox' name='tematica' value='1'  id='tematica1' /><label for='tematica1'>Fotografia</label><br/>
		<input type='checkbox' name='tematica' value='7'  id='tematica7' /><label for='tematica7'>Design de Moda</label><br/>
		<input type='checkbox' name='tematica' value='3'  id='tematica3' /><label for='tematica3'>Design de Ambientes</label><br/>
</div>
<label><?=$submissao['link']?></label>
<textarea name='link'>link(s) com imagem(ns) da(s) obra(s)</textarea>