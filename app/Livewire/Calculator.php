<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Calculator extends Component
{
    public $title = "Livewire - Calculadora";
    #[Title('Calculator | Livewire')]
    
    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';
    public float $result = 0;

    public function render()
    {
        return view('livewire.04_Calculator.calculator');
    }
    
    public function calculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;
        if ($this->action === '-') {
            $this->result = $num1 - $num2;
        } else if ($this->action === '+') {
            $this->result = $num1 + $num2;
        } else if ($this->action === '*') {
            $this->result = $num1 * $num2;
        } else if ($this->action === '/') {
            $this->result = $num1 / $num2;
        } else if ($this->action === '%') {
            $this->result = $num1 / 100 * $num2;
        }
    }
}
