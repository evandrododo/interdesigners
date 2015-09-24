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
	            <label class="form-label">Artigo</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
	                <input value="{{ $inscrito->artigo == false ? 'Não' : 'Sim' }}" class="form-control" disabled>
	            </div>
	        </div>
	        @if($inscrito->artigo == true)
	        <div class="col-sm-12">
	            <label class="form-label">Título do Artigo</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
	                <input value="{{ $inscrito->tituloartigo }}" class="form-control" disabled>
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
</div>
