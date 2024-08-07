<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Background extends Component
{
    public $color = "";
    public $title = "Livewire - Background";
    #[Title('Background | Livewire')]

    public function background($color)
    {
        $this->color = "bg-" . $color;
    }
    public function render()
    {
        return view('livewire.02_Background.background');
    }
}
