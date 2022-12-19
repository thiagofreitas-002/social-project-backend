@extends('layout.main')
@section('title', 'Admin - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
@endpush

@push('scripts')
    <script src="https://kit.fontawesome.com/14524bfe53.js" crossorigin="anonymous"></script>
@endpush

@section('body')

<body class="d-flex">
    
    @if(session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif

    <img src="{{ URL::asset('img/img_bg.png') }}" style="position: fixed" />
    <div class="container">
        <h1 class="mt-5">
            <span>Olá,</span> {{ $user->name }}
        </h1>
        <h2>Seja bem-vindo a parte administrativa do sistema da EEEP AFS</h2>

        <h3 class="mt-5">Suportes</h3>
        <button class="btn mb-2"><a href="/criar/suporte">Adicionar Suporte</a></button>
        <div class="table-responsive table-container" id="suportes-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @if($suportes->count() >= 1)
                    @foreach($suportes as $suporte)
                    <tr>
                        <td scope="row">{{ $suporte->id }}</td>
                        <td>{{ $suporte->name }}</td>
                        <td>{{ $suporte->email }}</td>
                        <td>{{ $suporte->telephone }}</td>

                        <td>
                            <form action="/admin/edit/suporte/{{ $suporte->id }}" method="GET">
                                @csrf
                                <a href="/admin/edit/suporte/{{ $suporte->id }}" 
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();
                                 ">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </a>
                            </form>
                        </td>
                        <td>
                            <form action="/admin/suporte/delete/{{$suporte->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/admin/suporte/delete/{{$suporte->id}}"  
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();
                                    ">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td scope="row">-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <h3 class="mt-5">Notícias</h3>
        <button class="btn mb-2"><a href="/criar/noticia">Adicionar Notícias</a></button>
        <div class="table-responsive table-container" id="noticias-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @if($noticias->count() >= 1)
                    @foreach($noticias as $noticia)
                    <tr>
                        <td scope="row">{{ $noticia->id }}</td>
                        <td><p class="description">{{ $noticia->title }}</p></td>
                        <td><p class="description">{{ $noticia->description }}</p></td>

                        <td>
                            <form action="/admin/edit/noticia/{{ $noticia->id }}" method="GET">
                                @csrf
                                <a href="/admin/edit/noticia/{{ $noticia->id }}" 
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();
                                 ">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </a>
                            </form>
                        </td>
                        <td>
                            <form action="/admin/noticia/delete/{{$noticia->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/admin/noticia/delete/{{$noticia->id}}"  
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();
                                    ">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td scope="row">-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <h3 class="mt-5">Cardápios</h3>
        <button class="btn mb-2"><a href="/criar/cardapio">Adicionar Cardápio</a></button>
        <div class="table-responsive table-container" id="cardapios-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Data</th>
                        <th scope="col">Café da manhã</th>
                        <th scope="col">Almoço</th>
                        <th scope="col">Merenda da tarde</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cardapio->count() >= 1)
                    @foreach($cardapio as $cardapio)
                    <tr>
                        <td scope="row">{{ $cardapio->id }}</td>
                        <td>{{ $cardapio->date }}</td>
                        <td>{{ $cardapio->breakfest}}</td>
                        <td>{{ $cardapio->lunch }}</td>
                        <td>{{ $cardapio->afternoon_snack }}</td>

                        <td>
                            <form action="/admin/edit/cardapio/{{ $cardapio->id }}" method="GET">
                                @csrf
                                <a href="/admin/edit/cardapio/{{ $cardapio->id }}" 
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();
                                 ">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </a>
                            </form>
                        </td>
                        <td>
                            <form action="/admin/cardapio/delete/{{$cardapio->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/admin/cardapio/delete/{{$cardapio->id}}"  
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();
                                    ">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td scope="row">-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>

@endsection
