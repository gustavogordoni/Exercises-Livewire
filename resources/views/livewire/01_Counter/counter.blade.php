<div>
    <div class="text-center">
        <h1>{{ $title }}</h1>
        <h1>{{ $count }}</h1>
    </div>
    <nav class="d-flex justify-content-center">
        <button class="btn btn-secondary mx-1 rounded-pill" wire:click="increment">+</button>
        <button class="btn btn-secondary mx-1 rounded-pill" wire:click="decrement">-</button>
    </nav>
</div>