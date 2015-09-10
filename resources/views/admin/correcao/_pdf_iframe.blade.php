<!-- <div class="col-sm-8">
	<iframe src="/public{{ $inscrito->arquivo }}" width="800px" height="650px" >
</div> -->
{!! Form::open(['url' => 'inscricao', 'files' => true ]) !!}
	@include('admin.correcao._form_avaliacao', ['btnSubmit' => 'AVALIAR'])
{!! Form::close() !!}
