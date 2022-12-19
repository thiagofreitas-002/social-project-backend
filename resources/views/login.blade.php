@extends('layout.main')
@section('title', 'Login - EEEP AFS')

@push('localcss')
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
@endpush

@section('body')

<body class="d-flex justify-content-center flex-column align-items-center">
    <div class="container d-flex justify-content-center flex-column align-items-center">
        @if(session('msg'))
            <div class="alert alert-success">
                {{session('msg')}}
            </div>
        @endif

        <div class="content">
            <h1>Login - Sistema EEEP AFS</h1>
            <form class="mt-5" method="POST" action="/login">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@example.com">
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                    @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn">Logar</button>
            </form>
        </div>

    </div>
</body>

@endsection
