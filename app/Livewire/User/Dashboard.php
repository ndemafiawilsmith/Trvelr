<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{

    #[Layout('layouts.dashboard')]
    public function render()
    {
        $plans = itinerarie::limit(5)->orderBy('created_at', 'desc')->get();
        return view('livewire.user.dashboard', with(compact('plans')));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
