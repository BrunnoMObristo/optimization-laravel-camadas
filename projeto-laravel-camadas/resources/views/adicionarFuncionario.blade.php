<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
    <title>Adicionar Funcionário</title>
</head>
<body>
   
    <section class="container mt-5 mb-5">        
        <div class="row mb-3">
            <div class="col">
                <h1>Adicionar Funcionário</h1>
            </div>
        </div>

        <form action="{{ route('insertF') }}" method="POST">
            @csrf            

            <div class="mb-3">
                <label for="nome_completo" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome do funcionário">
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo do funcionário">
            </div>

            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento</label>
                <select class="form-control" id="departamento" name="departamento">
                        <option value="Departamento A">Departamento A</option>
                        <option value="Departamento B">Departamento B</option>
                        <option value="Departamento C">Departamento C</option>                                                                 
                </select>
            </div>



            <a href="/projeto-laravel-camadas/public/funcionarios" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
    </section>

</body>

</html>