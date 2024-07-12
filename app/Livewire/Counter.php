<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $title = "Livewire - Counter";
    #[Title('Counter | Livewire')]

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.01_Counter.counter');
    }
}
