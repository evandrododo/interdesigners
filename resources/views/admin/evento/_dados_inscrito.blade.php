<div class="panel-body col-md-12">
	<div class="row">
	    <div class="col-sm-8">
            <h2 class="title"><i class="fa fa-info-circle"></i>  Informações do participante</h2>
        </div>
	</div>
	<div class="col-sm-8">
		<div class="row">
	        <div class="col-sm-12">
	            <label class="form-label">Nome</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                <input value="{{ $inscrito->nome }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Pacote</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-ticket"></i></span>
	                <input value="{{ $inscrito->pacote }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">RG</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
	                <input value="{{ $inscrito->rg }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">CPF</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
	                <input value="{{ $inscrito->cpf }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Data de nascimento</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                <input value="{{ $inscrito->dob }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Tipo sanguineo</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
	                <input value="{{ $inscrito->tiposanguineo }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Necessidade Especiais</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-wheelchair"></i></span>
	                <input value="{{ $inscrito->necessecidades_especiais == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Medicação Controlada</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
	                <input value="{{ $inscrito->medicacao_controlada == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Alergias</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
	                <input value="{{ $inscrito->alergias == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Restrições Alimentícias</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
	                <input value="{{ $inscrito->restricoes_alimenticias == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">E-mail</label>
	            <div class="input-group">
	                <span class="input-group-addon">@</span>
	                <input value="{{ $inscrito->email }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Telefone</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
	                <input value="{{ $inscrito->telefone }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Facebook</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
	                <input value="{{ $inscrito->facebook }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Contato de emergência</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
	                <input value="{{ $inscrito->contatoemergencia }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Telefone do contato de emergência</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
	                <input value="{{ $inscrito->telefoneemergencia }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Cidade e Estado</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
	                <input value="{{ $inscrito->cidadeestado }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Instituição de Origem</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-university"></i></span>
	                <input value="{{ $inscrito->instituicao_de_origem }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Curso</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
	                <input value="{{ $inscrito->curso }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Ano/Termo</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
	                <input value="{{ $inscrito->anotermo }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Outro congresso</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-plus-square"></i></span>
	                <input value="{{ $inscrito->outrocongresso }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Camiseta</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
	                <input value="{{ $inscrito->camiseta }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Alimentação</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
	                <input value="{{ $inscrito->alimentacao == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        @if($inscrito->alimentacao == true)
	        <div class="col-sm-12">
	            <label class="form-label">Tipo de comida</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-bars"></i></span>
	                <input value="{{ $inscrito->tipo_comida }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Tamanho da comida</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
	                <input value="{{ $inscrito->tamanho_comida }}" class="form-control" disabled>
	            </div>
	        </div>
	        @endif
		</div>
	</div>
	<div class="col-sm-4 img-comprovante">
        <h4 class="title"><i class="fa fa-picture-o"></i>  Comprovante de pagamento</h4>
	    <a href="{{ $inscrito->comprovante }}">
			<img src="{{ $inscrito->comprovante }}" alt="Comprovante de Pagamento">
		</a>
	</div>
