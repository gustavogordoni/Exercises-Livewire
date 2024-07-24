
<div class="container py-4">
    <h1 class="text-center">Produtos</h1>
    <div class="mb-3 d-flex align-items-center">
        <input type="text" class="form-control flex-grow-1 me-2" wire:model.lazy="search" placeholder="Pesquisar produtos">
        <button class="btn btn-primary" wire:click="search">Pesquisar</button>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="bg-light">
                <tr>
                    <th class="py-2 px-3 text-center">ID</th>
                    <th class="py-2 px-3 text-center">Imagem</th>
                    <th class="py-2 px-3 text-left">Título</th>
                    <th class="py-2 px-3 text-center">Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="py-2 px-3 text-center">{{$product->id}}</td>
                    <td class="py-2 px-3 text-center"><img class="img-fluid" src="{{$product->image}}" style="max-width: 100px;"></td>
                    <td class="py-2 px-3">{{$product->title}}</td>
                    <td class="py-2 px-3 text-center">R$ {{$product->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="">
        {{-- {{$products->links()}} --}}
        {{ $products->links('components.layouts.pagination') }}
    </div>
</div>
