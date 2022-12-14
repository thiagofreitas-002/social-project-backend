@extends('layout.main')
@section('title', 'Suporte - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
@endpush

@push('scripts')
    <script src="https://kit.fontawesome.com/14524bfe53.js" crossorigin="anonymous"></script>
@endpush

@section('body')

<body class="d-flex">
    @if(session('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
    @endif

    <img src="{{ URL::asset('img/img_bg.png') }}" style="position: fixed" />
    <div class="container">
        <!-- Aqui, será o nome da pessoa que se logará no sistema -->
        <h1 class="mt-5"><span>Olá,</span> {{ $user->name }}</h1>
        <h2>Seja bem-vindo a parte administrativa do sistema da EEEP AFS</h2>

        <h3 class="mt-5">Notícias</h3>
        <button class="btn mb-2"><a href="/suporte/criar/noticia">Adicionar Notícias</a></button>
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
                            <form action="/suporte/edit/noticia/{{ $noticia->id }}" method="GET">
                                @csrf
                                <a href="/suporte/edit/noticia/{{ $noticia->id }}" 
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();
                                 ">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </a>
                            </form>
                        </td>
                        <td>
                            <form action="/suporte/noticia/delete/{{$noticia->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/suporte/noticia/delete/{{$noticia->id}}"  
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();
                                    ">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
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
        <button class="btn mb-2"><a href="/suporte/criar/cardapio">Adicionar Cardápio</a></button>
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
                            <form action="/suporte/edit/cardapio/{{ $cardapio->id }}" method="GET">
                                @csrf
                                <a href="/suporte/edit/cardapio/{{ $cardapio->id }}" 
                                   onclick="event.preventDefault();
                                   this.closest('form').submit();
                                 ">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </a>
                            </form>
                        </td>
                        <td>
                            <form action="/suporte/cardapio/delete/{{$cardapio->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/suporte/cardapio/delete/{{$cardapio->id}}"  
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