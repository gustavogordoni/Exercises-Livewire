<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Name extends Component
{
    public $color = "";
    public $title = "Livewire - Seu nome";
    #[Title('Your Name | Livewire')]

    public function background($color)
    {
        $this->color = "bg-" . $color;
    }
    public function render()
    {
        return view('livewire.03_Name.name');
    }
}
