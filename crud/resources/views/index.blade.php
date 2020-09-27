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

            <div class="col-lg-12 align-items-center d-flex justify-content-center">

                <form method="POST">
                    @csrf
                    @method('POST')

                    <h1 class="text-center"> Cadastro de Usuário </h1>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">

                        <label> Nome: </label> <input type="text" class="form-control" name="name" required />

                    </div>
                    <div class="form-group">

                        <label> Email: </label><input type="email" id="email" class="form-control @error('email') is-invalid @enderror " name="email" required />



                    </div>
                    <div class="form-group">

                        <label> Senha: </label> <input type="password" class="form-control" name="password" required />

                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="/user" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>