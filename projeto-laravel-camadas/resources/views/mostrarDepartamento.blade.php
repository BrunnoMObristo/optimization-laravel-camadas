<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Visualizar Departamento</title>
</head>
<body>

    <?php echo View::make('navbar') ?>
    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <h1>Visualizar Departamento</h1>
            </div>
        </div>

        <div class="mb-3">
            <h3>Nome</h3>
            <p>{{$departamentos[0]->nome}}</p>
        </div>

        <div class="mb-3">
            <h3>Responsabilidade</h3>
            <p>{{$departamentos[0]->responsabilidade}}</p>
        </div>

    </section>
</body>

</html>