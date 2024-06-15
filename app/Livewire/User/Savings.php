<?php

namespace App\Livewire\User;

use App\Models\savings_goal;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Savings extends Component
{
    #[Layout('layouts.dashboard')]
    public function render()
    {
        $savings = savings_goal::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.savings', with(compact('savings')));
    }
}
