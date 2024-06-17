<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use App\Models\savings_goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{

    #[Layout('layouts.dashboard')]
    public function render()
    {
        // Get Total Budget
        $budget = 0;
        $planss = itinerarie::where('user_id', Auth::user()->id)->get();
        foreach($planss as $plan){
            $budget += $plan->budget;
        }

        // Get Total Savings
        $savings = savings_goal::where('user_id', Auth::user()->id)->get();
        $savedAmount = 0;
        foreach($savings as $saving){
            $savedAmount += $saving->saved_amount;
        }

        $plans = itinerarie::where('user_id', Auth::user()->id)->limit(5)->orderBy('created_at', 'desc')->get();
        return view('livewire.user.dashboard', with(compact('plans','budget', 'savedAmount')));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
