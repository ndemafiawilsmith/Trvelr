<?php

namespace App\Livewire\User;

use App\Models\country;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddPlans extends Component
{
    #[Layout('layouts.dashboard')]


    public function render()
    {
        $countries = country::all();
        return view('livewire.user.add-plans', with(compact('countries')));
    }
}
