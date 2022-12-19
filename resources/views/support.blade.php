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
        <button class="btn mb-2">Adicionar notícia</button>
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
                    <tr>
                        <td scope="row">1</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">7</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">8</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>
                            <p class="description">Anunciamos o processo seletivo 2023</p>
                        </td>
                        <td>
                            <p class="description">Terá data de início no começo do mês de fevereiro e terminará no fim de março</p>
                        </td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="mt-5">Cardápios</h3>
        <button class="btn mb-2">Adicionar cardápio</button>
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
                    <tr>
                        <td scope="row">1</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">7</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">8</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>13/12/2022</td>
                        <td>Bolacha com suco</td>
                        <td>Isca de frango</td>
                        <td>Bolo confeitado</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

@endsection