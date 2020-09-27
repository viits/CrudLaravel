<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Listagem</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-items-center">

                <h1> Listagem de Usuario</h1>

            </div>

            <div class="col-lg-6 align-items-center">
                <form method="POST">
                    @csrf
                    @method('POST')

                    <div class="input-group mt-3">
                        <input type="text" name="name" placeholder="Pesquisa por Nome" />

                        <span class="input-group-append"> <button type="submit" class="btn btn-primary"> 🔎 </button> </span>
                    </div>

                    @if ($errors->any())
                    <div>
                        
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        
                    </div>
                    @endif

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="/" class="btn btn-success"> Novo Usuário</a>
            </div>
        </div>


        <div class="row">
            @foreach($usuario as $user)
            <div class="col-lg-4 mt-4">
                <div class="card">

                    <div class="card-body">
                        <p class="card-text"><b>#</b>{{$user->id}} </p>
                        <p class="card-text"><b>Nome:</b> {{ $user->name}} </p>
                        <p class="card-text"> <b>Email:</b>{{$user->email}} </p>
                    </div>
                    <div class="card-footer">
                        <a href="/user/{{$user->id}}" class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12 align-items-center d-flex justify-content-center mt-3">
                {{$usuario->links()}}
            </div>
        </div>


        <!-- <div>


            <ul>
                <li>  --- ---  -- <a href=> Editar </a> </li>
            </ul>
            
            
        </div> -->
    </div>
</body>

</html>