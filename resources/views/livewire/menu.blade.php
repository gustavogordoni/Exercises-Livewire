<div>
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
    <a href="{{ route('cascading-dropdown') }}" class="link-underline link-underline-opacity-0">
        <ul class="list-group list-group-horizontal d-flex justify-content-center my-1">
            <li class="list-group-item col-1 text-center number-link">06</li>
            <li class="list-group-item col-5 text-link">Dropdown em cascata</li>
        </ul>
    </a>
</div>