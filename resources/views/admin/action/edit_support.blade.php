@extends('layout.main')
@section('title', 'Editar suporte - EEEP AFS')

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
            <h1>Editar suporte</h1>
            <form class="mt-5" action="/admin/update/suporte/{{ $suporte->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Francisco" value="{{ $suporte->name }}">
                    @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@example.com" value="{{ $suporte->email }}">
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="(xx) xxxxx-xxxx" value="{{ $suporte->telephone }}">
                    @error('telephone')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********" value="{{ $suporte->password }}">
                    @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn">Salvar suporte</button>
            </form>
        </div>

    </div>
</body>

@endsection