<div>
    <h1 class="text-center">{{$title}}</h1>

    <div class="row m-3 d-flex justify-content-center">
        <div class="col-2">
            <input type="number" wire:model="number1" class="form-control" placeholder="Number 1 ">
        </div>
        <div class="col-1">
            <select wire:model="action" class="form-select">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
        </div>
        <div class="col-2">
            <input type="number" wire:model="number2" class="form-control" placeholder="Number 2 ">
        </div>
        <div class="col-1">
            <button wire:click="calculate" class="py-1 px-3 bg-primary rounded-pill">
                = </button>
        </div>
    </div>

    <p class="display-5 text-center">{{$result}}</p>
</div>