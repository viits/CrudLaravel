<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Mostrar</title>
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
            <div class="col-lg-4 mt-4">
                <div class="card">

                    <div class="card-body">
                        <p class="card-text"><b>#</b>{{$user->id}} </p>
                        <p class="card-text"><b>Nome:</b> {{ $user->name}} </p>
                        <p class="card-text"> <b>Email:</b>{{$user->email}} </p>
                    </div>
                    <div class="car-footer">
                        <form method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger w-100" type="submit" value={{$user->id}}>Deletar</button>

                        </form>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 align-items-center d-flex justify-content-center">

                <form method="POST">
                    @csrf
                    @method('PUT')
                    <h1 class="text-center">Editando informações</h1>

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
                        <label>Nome: </label> <input type="text" class="form-control" name="name" value="{{$user->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email: </label> <input type="email" class="form-control" name="email" value="{{$user->email}}" />
                    </div>
                    <div class="form-group">
                        <label>Senha: </label> <input type="password" class="form-control" name="password" value="{{$user->password}}" />
                    </div>

                    <button class="btn btn-warning w-100" type="submit">Editar</button>


                </form>



            </div>

        </div>




    </div>
</body>

</html>