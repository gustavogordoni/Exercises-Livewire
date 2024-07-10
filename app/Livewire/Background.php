<?php

namespace App\Livewire;

use Livewire\Component;

class Background extends Component
{
    public $color = "";   
    public $title = "Livewire - Background";   
    
    public function background($color)
    {
        $this->color = "bg-" . $color;
    }
    public function render()
    {
        return view('livewire.02_Background.background');
    }
}
