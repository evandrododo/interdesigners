<!-- <div class="col-sm-8">
	<iframe src="/public{{ $inscrito->arquivo }}" width="800px" height="650px" >
</div> -->

{!! Form::model($inscrito, array('route' => array('correcao.update', $inscrito->id), 'method' => 'PUT')) !!}
	@include('admin.correcao._form_avaliacao', ['btnSubmit' => 'AVALIAR'])
{!! Form::close() !!}
