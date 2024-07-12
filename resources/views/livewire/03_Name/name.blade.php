<div>
    <h1 class="text-center">{{ $title }}</h1>

    <div class="row d-flex justify-content-center">
        <button class="btn btn-primary col-1" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Seu nome</button>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Seu nome</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name">Informe seu nome:</label>
                    <input type="text" id="name" class="form-control" wire:model="name">
    
                    <label for="age" class="mt-2">Informe sua idade:</label>
                    <input type="number" id="age" class="form-control" wire:model="age">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" data-bs-toggle="modal" wire:click>Enviar</button>
                </div>
            </div>
        </div>
    </div>   

</div>