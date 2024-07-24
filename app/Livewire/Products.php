<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Product;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        $query = Product::query();
        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%");
        }

        return view('livewire.07_Products.products', [
            'products' => $query->paginate(20)
        ]);
    }

    public function updated($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }
}
