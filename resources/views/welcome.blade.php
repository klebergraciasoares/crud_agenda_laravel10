<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda de Contatos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="canonical" href="https://icons.getbootstrap.com/">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

        <!-- Bootstrap Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


    </head>
    <body>
        <div class="container mt-5">
            <form method="POST" action="/addcontact">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1">Email principal</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu melhor email">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Número de telefone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite seu telefone principal" >
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Nome completo</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite seu nome completo">
                </div>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </form>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contact) > 0)
                        @foreach ($contact as $cont)
                            <tr>
                                <th>{{ $cont->id }}</th>
                                <th>{{ $cont->name }}</th>
                                <th>{{ $cont->phone }}</th>
                                <th>{{ $cont->email }}</th>
                                <th><a href="/edit/{{ $cont->id }}" class="btn btn-primary"><span class="bi-pencil-square"></span>&nbsp;</a>
                                    <a href="/delete/{{ $cont->id }}" class="btn btn-danger"><span class="bi-trash3"></span>&nbsp;</a>
                                    <!-- <a type="button" class="btn btn-secondary"><span class="bi-search"></span>&nbsp;</a> -->

                                </th>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>

            <!-- Adicione esta linha ao final da sua tabela para exibir os links de paginação -->
            {!! $contact->links('pagination::bootstrap-5') !!}

        </div>


        <script type="text/javascript">
            $("#phone, #celular").mask("(00) 00000-0000");
        </script>



    </body>
</html>
