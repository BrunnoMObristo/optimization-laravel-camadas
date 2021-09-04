<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>Departamentos</title>
</head>
<body>

	<?php echo View::make('navbar') ?>
	<section class="container mt-5 mb-5">		

		<div class="row mb-3">
			<div class="col">
				<h1>Departamentos</h1>
			</div>
			<div class="col d-flex justify-content-end align-items-center">
				<a class="btn btn-success" href="departamentos/novo">Adicionar</a>
			</div>
		</div>

		<table class="table table-hover table-dark">
			<thead class="table-dark">
				<tr>
					<th>Identificador</th>
					<th>Nome</th>
					<th>Responsabilidade</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($departamentos as $item) 
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->nome}}</td>
						<td>{{$item->responsabilidade}}</td>
						<td>
							<div class="btn-group" role="group">
								<a 
									href="{{ route('deletarDepartamento', $item->id) }}" 							
									class="btn btn-outline-danger"
									onclick="">
									Excluir
								</a>
								<a 
									href="{{ route('editarDepartamento', $item->id) }}" 
									class="btn btn-outline-warning">
									Editar
								</a>
								<a 
									href="{{ route('mostrarDepartamento', $item->id) }}" 
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