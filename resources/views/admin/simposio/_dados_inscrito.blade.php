<div class="modal fade modal-avaliacao" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="col-sm-12">
			@forelse($inscrito->json_avaliacao as $avaliacao)
				<h4 class="title"><i class="fa fa-graduation-cap"></i>  Avaliação do Professor: {{ $avaliacao->professor }}</h4>
			@empty
			@endforelse
			</div>
		</div>
	</div>
</div>
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
        <h4 class="title"><i class="fa fa-picture-o"></i>  Comprovante de pagamento</h4>
	    <a href="{{ $inscrito->comprovante }}">
			<img src="{{ $inscrito->comprovante }}" alt="Comprovante de Pagamento">
		</a>
	</div>
	<div class="row">
	    <div class="col-sm-12">
            <h2 class="title"><i class="fa fa-info-circle"></i>  Informações do trabalho submetido ao simpósio</h2>
        </div>
	</div>
	<div class="col-sm-8">
		<div class="row">
	        <div class="col-sm-12">
	            <label class="form-label">Título</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
	                <input value="{{ $inscrito->titulo }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Temática</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-server"></i></span>
	                <input value="{{ $inscrito->tematica }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Autores</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                <input value="{{ $inscrito->autor1 }}{{ $inscrito->autor2 or '' }}{{ $inscrito->autor3 or '' }}{{ $inscrito->autor4 or '' }}{{ $inscrito->autor5 or '' }}{{ $inscrito->autor6 or '' }}" class="form-control" disabled>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <label class="form-label">Resumo</label>
	            <div class="input-group">
	                <span class="input-group-addon"><i class="fa fa-quote-left"></i></span>
	                <textarea value="" class="form-control" style="height: 75px;" disabled>{{ $inscrito->resumo }}</textarea>                
	            </div>
	        </div>
		</div>
	</div>
	<div class="col-sm-4 nota-participante">
        <h4 class="title"><i class="fa fa-graduation-cap"></i>  Avaliação do Participante</h4>
        <div class="col-sm-12">
            <label class="form-label">Nota</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <input value="{{ $inscrito->decimal_nota }}" class="form-control" disabled>
                <div class="input-group-btn">
                	<!-- <button class="btn btn-success" data-toggle="modal" data-target=".modal-"><i class="fa fa-comment"></i>&nbsp;Visualizar Comentários</button> -->
            	</div>
            </div>
        </div>
	</div>
</div>
