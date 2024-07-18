<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.06_Cascading-Dropdown.cascading-dropdown');
    }

    public function changeContinent()
    {
        sleep(1);
        if ($this->selectedContinent !== '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
