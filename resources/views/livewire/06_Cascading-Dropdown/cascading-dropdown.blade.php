<div class="container mt-4">
    <h1 class="text-center">Dropdown em cascata</h1>
    <div class="row justify-content-center">
        <div class="col-8 py-4">
            <select class="form-select" wire:model="selectedContinent" wire:change="changeContinent">
                <option value="-1">Selecione um continente</option>
                @foreach($continents as $continent)
                    <option value="{{$continent['id']}}">{{$continent['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <p wire:loading class="w-100 bg-white bg-opacity-50 py-2 px-3 text-center">
                Carregando...  
            </p>
            <select class="form-select" wire:model="selectedCountry">
                <option value="-1">Selecione um país</option>
                @foreach($countries as $country)
                    <option value="{{$country['id']}}">{{$country['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>