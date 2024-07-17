<div class="container">
    <h1 class="text-center">Lista de itens</h1>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-12 col-md-4">
            <input type="text" wire:model="itemText" wire:keydown.enter="addItem" placeholder="Informe um novo item"
                class="form-control">
        </div>
        <div class="col-12 col-md-2 mt-2 mt-md-0">
            <button class="btn btn-primary w-100" wire:click="addItem">Adicionar</button>
        </div>
    </div>

    <div class="py-3 w-100 w-md-50 border rounded-3 mt-3 mx-auto">
        @if (count($items) == 0)
            <p class="text-secondary text-center my-auto">Não há itens cadastrados</p>
        @endif

        @foreach($items as $index => $item)
        <div class="d-flex justify-content-between align-items-center py-2 px-3 border-bottom">
            <div class="d-flex align-items-center">
                <input type="checkbox" class="form-check-input me-2" {{$item->completed ? ' checked' : ''}} wire:change="toggleItem({{$item->id}})">
                <label class="mb-0">
                    {!! $item->completed ? "<s>{$item->item}</s>" : $item->item !!}
                </label>
            </div>
            <button wire:click="deleteItem({{$item->id}})" class="btn btn-danger btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                    <path
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                </svg>
            </button>
        </div>
        @endforeach

    </div>
</div>
