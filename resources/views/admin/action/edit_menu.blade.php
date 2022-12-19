@extends('layout.main')
@section('title', 'Editar cardápio - EEEP AFS')

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
            <h1>Editar cardápio</h1>
            <form class="mt-5" action="/admin/update/cardapio/{{ $cardapio->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="date" class="form-label">Data do cardápio</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy" value="{{$cardapio->date}}">
                    @error('date')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="breakfest" class="form-label">Café da manhã</label>
                    <input type="text" class="form-control" id="breakfest" name="breakfest" placeholder="Pão com café" value="{{$cardapio->breakfest}}">
                    @error('breakfest')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lunch" class="form-label">Almoço</label>
                    <input type="text" class="form-control" id="lunch" name="lunch" placeholder="Carne de gado" value="{{$cardapio->lunch}}">
                    @error('lunch')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="afternoon_snack" class="form-label">Merenda da tarde</label>
                    <input type="text" class="form-control" id="afternoon_snack" name="afternoon_snack" placeholder="Pão com café" value="{{$cardapio->afternoon_snack}}">
                    @error('afternoon_snack')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn">Salvar cardápio</button>
            </form>
        </div>

    </div>
</body>

@endsection
