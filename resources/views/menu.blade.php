<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://files.svgcdn.io/devicon/livewire.png">
    <title>{{ $title ?? 'Livewire' }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .number-link && .text-link {
            text-decoration: none;
            color: inherit;
        }

        .number-link {
            color: #fb70a9;
            border: 1px solid #fb70a9;
        }

        .text-link:hover {
            color: #4e56a6;
            border: 1px solid #4e56a6;
        }
    </style>

</head>

<body class="container-fluid">
    <nav class="row d-flex justify-content-center">
        <header class="col-4 text-center">
            <h1>Menu de atividades:</h1>
            <h4>Primeiras atividades utilizado Livewire</h4>
        </header>
        <figure class="col-1 my-auto">
            <img src="https://files.svgcdn.io/devicon/livewire.png" alt="" width="75vh" class="d-block mx-auto">
        </figure>
    </nav>

    <hr>

    <a href="{{ route('counter') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">01</li>
            <li class="list-group-item col-5 text-link">Contador</li>
        </ul>
    </a>
    <a href="{{ route('background') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">02</li>
            <li class="list-group-item col-5 text-link">Background</li>
        </ul>
    </a>
    <a href="{{ route('name') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">03</li>
            <li class="list-group-item col-5 text-link">Seu nome</li>
        </ul>
    </a>
    <a href="{{ route('calculator') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">04</li>
            <li class="list-group-item col-5 text-link">Calculadora</li>
        </ul>
    </a>
    <a href="{{ route('items') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">05</li>
            <li class="list-group-item col-5 text-link">Lista de itens</li>
        </ul>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>