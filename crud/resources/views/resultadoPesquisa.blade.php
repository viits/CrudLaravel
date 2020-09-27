<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "> <a href="/user">Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 align-items-center">
                <h1 class="text-center">Resultado da Pesquisa</h1>
            </div>
        </div>

        <div class="row">
            @foreach($post as $name)
            <div class="col-lg-4 mt-4">
                <div class="card">

                    <div class="card-body">
                        <p class="card-text"><b>#</b>{{$name->id}} </p>
                        <p class="card-text"><b>Nome:</b> {{ $name->name}} </p>
                        <p class="card-text"> <b>Email:</b>{{$name->email}} </p>
                    </div>
                    <div class="card-footer">
                        <a href="/user/{{$name->id}}" class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        

    </div>
</body>

</html>