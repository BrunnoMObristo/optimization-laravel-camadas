<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Editar Departamento</title>
</head>

<body>

   <?php echo View::make('navbar') ?>
    <section class="container mt-5 mb-5">

       <div class="row mb-3">
            <div class="col">
                <h1>Editar departamento</h1>
            </div>
        </div>

        <form action="{{ route('updateD', $departamentos[0]->id) }}" method="POST">
            @csrf
             <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" value="{{$departamentos[0]->nome}}" id="nome" name="nome" placeholder="Nome do departamento">
            </div>

            <div class="mb-3">
                <label for="responsabilidade" class="form-label">Responsabilidade</label>
                <textarea type="text" class="form-control" id="responsabilidade" name="responsabilidade">{{$departamentos[0]->responsabilidade}}</textarea>
            </div>

            <a href="" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
    </section>

</body>

</html>