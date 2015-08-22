<table style="width: 100%;" aria-describedby="example_info" role="grid" id="example" class="display dataTable" cellspacing="0" width="100%">
	<thead>
		<tr role="row">
			<th>Nome</th>
			<th>Email</th>
			<th>CPF</th>
			<th>Telefone</th>
			<th>Instituiçao de Origem</th>
			<th>Arquivo</th>
			<th>Comprovante</th>
			<th>Titulo</th>
			<th>Autor 1</th>
			<th>Data de Inscriçao</th>
		</tr>
	</thead>

	<tbody>
		@forelse($inscritos as $inscrito)
	    	<tr id="inscrito-{{ $inscrito->id }}">
	            <td>{{ $inscrito->nome }}</td>
	            <td>{{ $inscrito->email }}</td>
	            <td>{{ $inscrito->cpf }}</td>
	            <td>{{ $inscrito->telefone }}</td>
	            <td>{{ $inscrito->instituicao_de_origem }}</td>
	            <td>{{ $inscrito->arquivo }}</td>
	            <td>{{ $inscrito->comprovante }}</td>
	            <td>{{ $inscrito->titulo }}</td>
	            <td>{{ $inscrito->autor1 }}</td>
	            <td>{{ $inscrito->created_at }}</td>
	    	</tr>
	    @empty
	        
	    @endforelse
	</tbody>
</table>