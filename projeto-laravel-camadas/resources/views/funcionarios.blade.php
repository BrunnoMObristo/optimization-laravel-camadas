<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Recursos Humanos</title>
</head>
<body>

	<?php echo View::make('navbar') ?>

	<section class="container mt-5 mb-5">

		<div class="row mb-3">
			<div class="col">
				<h1>Funcionários</h1>
			</div>
			<div class="col d-flex justify-content-end align-items-center">
				<a class="btn btn-success" href="funcionarios/novo">Adicionar</a>
			</div>
		</div>

		<table class="table table-hover table-dark">
			<thead class="table-dark">
				<tr>
					<th>Identificador</th>
					<th>Nome</th>
					<th>Cargo</th>
					<th>Departamento</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($funcionarios as $item) 
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->nome_completo}}</td>
						<td>{{$item->cargo}}</td>
						<td>{{$item->departamento}}</td>
						<td>
							<div class="btn-group" role="group">
								<a 
									href="{{ route('deletarFuncionario', $item->id) }}"
									type="button" 
									class="btn btn-outline-danger"
									onclick="">
									Excluir
								</a>								
								<a 
									href="{{ route('editarFuncionario', $item->id) }}" 
									onclick="" 
									class="btn btn-outline-warning">
									Editar
								</a>
								<a 
									href="{{ route('mostrarFuncionario', $item->id) }}" 
									class="btn btn-outline-info">
									Ver
								</a>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>