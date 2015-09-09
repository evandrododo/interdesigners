<table style="width: 100%;" aria-describedby="inscritos-simposio_info" role="grid" id="inscritos-simposio" class="display dataTable" cellspacing="0" width="100%">
	<thead>
		<tr role="row">
			<th>Titulo</th>
			<th>Temática</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		@forelse($inscritos as $inscrito)
	    	<tr id="inscrito-{{ $inscrito->id }}">
	            <td>{{ $inscrito->titulo }}</td>
	            <td>{{ $inscrito->tematica }}</td>
	            <td>{!! $inscrito->acoes !!}</td>
	    	</tr>
	    @empty
	        
	    @endforelse
	</tbody>
</table>