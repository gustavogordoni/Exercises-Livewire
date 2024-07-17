<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;
use Illuminate\Support\Str;


class Items extends Component
{
    public $items;
    public string $itemText = '';
    
    public function render()
    {
        return view('livewire.05_Items.items');
    }

    public function mount()
    {
        $this->selectItems();
    }

    public function addItem()
    {
        $item = new Item();
        $item->item = $this->itemText;
        $item->completed = false;
        $item->save();

        $this->itemText = '';
        $this->selectItems();
    }

    public function toggleItem($id)
    {
        $item = Item::where('id', $id)->first();
        if (!$item) {
            return;
        }
        $item->completed = !$item->completed;
        $item->save();
        $this->selectItems();
    }

    public function deleteItem($id)
    {
        $item = Item::where('id', $id)->first();
        if (!$item) {
            return;
        }
        $item->delete();
        $this->selectItems();
    }

    public function selectItems()
    {
        $this->items = Item::orderBy('created_at', 'DESC')->get()->map(function ($item) {
            $item->item = Str::limit($item->item, 40);
            return $item;
        });    
    }
}
