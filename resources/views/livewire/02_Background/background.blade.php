<div class="{{ $color }}" style="height: 100vh">
    <h1 class="text-center">{{ $title }}</h1>
    <nav class="d-flex justify-content-center">
        <button wire:click="background('primary')" class="btn mx-1 btn-primary border border-dark">Blue</button>
        <button wire:click="background('secondary')" class="btn mx-1 btn-secondary border border-dark">Gray</button>
        <button wire:click="background('success')" class="btn mx-1 btn-success border border-dark">Green</button>
        <button wire:click="background('danger')" class="btn mx-1 btn-danger border border-dark">Red</button>
        <button wire:click="background('warning')" class="btn mx-1 btn-warning border border-dark">Yellow</button>
        <button wire:click="background('info')" class="btn mx-1 btn-info border border-dark">Cyan</button>
        <button wire:click="background('light')" class="btn mx-1 btn-light border border-dark">White</button>
        <button wire:click="background('dark')" class="btn mx-1 btn-dark border border-dark">Black</button>
    </nav>
</div>