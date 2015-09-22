<div class="panel-body col-md-12">
	<div class="row">
	    <div class="col-sm-8">
            <h2 class="title"><i class="fa fa-info-circle"></i>  Informações do participante</h1>
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
	            <label class="form-label">E-mail</label>
	            <div class="input-group">
	                <span class="input-group-addon">@</span>
	                <input value="{{ $inscrito->email }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">CPF</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
	                <input value="{{ $inscrito->cpf }}" class="form-control" disabled>
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
	            <label class="form-label">Instituição de Origem</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-university"></i></span>
	                <input value="{{ $inscrito->instituicao_de_origem }}" class="form-control" disabled>
	            </div>
	        </div>
		</div>
	</div>
	<div class="col-sm-4 img-comprovante">
        <h4 class="title"><i class="fa fa-picture-o"></i>  Comprovante de pagamento</h1>
	    <a href="{{ $inscrito->comprovante }}">
			<img src="{{ $inscrito->comprovante }}" alt="Comprovante de Pagamento">
		</a>
	</div>
	<div class="row">
	    <div class="col-sm-8">
            <h2 class="title"><i class="fa fa-info-circle"></i>  Informações do trabalho submetido ao simpósio</h1>
        </div>
	</div>
	<div class="row">
		
        <div class="col-sm-8">
            <label class="form-label">Título</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input value="{{ $inscrito->titulo }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-sm-8">
            <label class="form-label">Temática</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-server"></i></span>
                <input value="{{ $inscrito->tematica }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-sm-8">
            <label class="form-label">Autores</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <input value="{{ $inscrito->autor1 }}, {{ $inscrito->autor2 }}, {{ $inscrito->autor3 }}, {{ $inscrito->autor4 }}, {{ $inscrito->autor5 }}, {{ $inscrito->autor6 }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-sm-8">
            <label class="form-label">Resumo</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-quote-left"></i></span>
                <textarea value="" class="form-control" style="height: 75px;" disabled>{{ $inscrito->resumo }}</textarea>                
            </div>
        </div>
	</div>
</div>