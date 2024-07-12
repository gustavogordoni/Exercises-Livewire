<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Name extends Component
{
    public $name = "";
    public $age = 0;
    public $title = "Livewire - Seu nome";
    #[Title('Your Name | Livewire')]

    public function render()
    {
        return view('livewire.03_Name.name');
    }
    public function exibirInfo()
    {
        $name = $this->name;
        $age = $this->age;
    }
}
