<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ViewPlans extends Component
{
    #[Layout('layouts.dashboard')]

    public function mount(){
        // $plabs
    }
    public function render()
    {
        $plans = itinerarie::orderBy('created_at', 'asc')->where('user_id', Auth::user()->id)->get();
        return view('livewire.user.view-plans', with(compact('plans')));
    }
}
