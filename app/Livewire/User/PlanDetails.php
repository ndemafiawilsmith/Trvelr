<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PlanDetails extends Component
{
    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.user.plan-details');
    }
}
