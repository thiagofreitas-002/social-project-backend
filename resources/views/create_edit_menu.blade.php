@extends('layout.main')
@section('title', 'Criar cardápio - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/create_edit_menu.css') }}">
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
            <h1>Criar cardápio</h1>
            <form class="mt-5">
                <div class="mb-3">
                    <label for="date" class="form-label">Data do cardápio</label>
                    <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy">
                </div>
                <div class="mb-3">
                    <label for="breakfest" class="form-label">Café da manhã</label>
                    <input type="text" class="form-control" id="breakfest" placeholder="Pão com café">
                </div>
                <div class="mb-3">
                    <label for="lunch" class="form-label">Almoço</label>
                    <input type="text" class="form-control" id="lunch" placeholder="Carne de gado">
                </div>
                <div class="mb-3">
                    <label for="afternoon_snack" class="form-label">Merenda da tarde</label>
                    <input type="text" class="form-control" id="afternoon_snack" placeholder="Pão com café">
                </div>
                <!-- Aqui, o nome do botão dependerá se a ação é de criar ou editar botão. Ou seja, "criar cardápio"
                ou "salvar cardápio" -->
                <button type="submit" class="btn">Criar cardápio</button>
            </form>
        </div>

    </div>
</body>

@endsection
