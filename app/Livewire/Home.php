<?php

namespace App\Livewire;

use App\Models\country;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $countries = country::all();
        return view('livewire.home', with(compact('countries')));
    }
}
