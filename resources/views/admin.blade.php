<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - EEEP AFS</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">

    <script src="https://kit.fontawesome.com/14524bfe53.js" crossorigin="anonymous"></script>

</head>

<body class="d-flex">
    <img src="{{ URL::asset('img/img_bg.png') }}" style="position: fixed" />
    <div class="container">
        <!-- Aqui, será o nome da pessoa que se logará no sistema -->
        <h1 class="mt-5"><span>Olá,</span> Artur</h1>
        <h2>Seja bem-vindo a parte administrativa do sistema da EEEP AFS</h2>

        <h3 class="mt-5">Suportes</h3>
        <div class="table-responsive table-container" id="suportes-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">7</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">8</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td scope="row">9</td>
                        <td>Artur</td>
                        <td>arturjuliao20@gmail.com</td>
                        <td>(85) 99203-5703</td>
                        <td><i class="fa-regular fa-pen-to-square"></i></td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3 class="mt-5">Notícias</h3>
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

</html>
