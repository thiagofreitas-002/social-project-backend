<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - EEEP AFS</title>

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
    <link rel="stylesheet" href="{{ URL::asset('css/create_edit_menu.css') }}">

</head>

<body class="d-flex justify-content-center flex-column align-items-center">
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

</html>
