<table style="width: 100%;" aria-describedby="inscritos-simposio_info" role="grid" id="inscritos-simposio" class="display dataTable" cellspacing="0" width="100%">
	<thead>
		<tr role="row">
			<th>Nome</th>
			<th>Email</th>
			<th>Instituiçao de Origem</th>
			<th>Data de Inscriçao</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		@forelse($inscritos as $inscrito)
	    	<tr id="inscrito-{{ $inscrito->id }}">
	            <td>{{ $inscrito->nome }}</td>
	            <td>{{ $inscrito->email }}</td>
	            <td>{{ $inscrito->instituicao_de_origem }}</td>
	            <td>{{ $inscrito->created_at }}</td>
	            <td>{!! $inscrito->acoes !!}</td>
	    	</tr>
	    @empty
	        
	    @endforelse
	</tbody>
</table>