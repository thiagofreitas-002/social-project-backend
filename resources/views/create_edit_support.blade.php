@extends('layout.main')
@section('title', 'Criar suporte - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/create_edit_support.css') }}">
@endpush

@section('body')

<body class="d-flex justify-content-center flex-column align-items-center">

    @if(session('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
    @endif
    
    <div class="container d-flex justify-content-center flex-column align-items-center">

        <div class="content">
            <h1>Criar suporte</h1>
            <form class="mt-5">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Francisco">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nome@example.com">
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="(xx) xxxxx-xxxx">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="********">
                </div>
                <!-- Aqui, o nome do botão dependerá se a ação é de criar ou editar botão. Ou seja, "criar suporte"
                ou "salvar suporte" -->
                <button type="submit" class="btn">Criar suporte</button>
            </form>
        </div>

    </div>
</body>

@endsection