<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use App\Models\savings_goal;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SavingsGoalComponent extends Component
{
    public $itineraryId;
    public $goal_amount;
    public $goal_deadline;
    public $payment_schedule;
    public $itinerary_id;

    protected $rules = [
        'goal_amount' => 'required|numeric|min:0',
        'goal_deadline' => 'required|date|after:today',
        'payment_schedule' => 'required|in:monthly,weekly,daily',
    ];

    public function mount($id){
        $this->dispatch('clickk', el: 'dashboard');
        $this->itineraryId = $id;

        $saving = savings_goal::where('itinerary_id',$id)->count();
        if($saving > 0){
            $this->dispatch('feedback', feedback:'Goal already exist');
            return redirect(route('plans'));
        }
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $itinerary = itinerarie::findorfail($this->itineraryId);
        $this->goal_amount = "$".(int)$itinerary->budget;
        return view('livewire.user.savings-goal-component', with(compact('itinerary')));
    }

    public function addGoal()
    {
        $this->validate();

        savings_goal::create([
            'user_id' => Auth::id(),
            'itinerary_id' => $this->itineraryId,
            'goal_amount' => $this->goal_amount,
            'goal_deadline' => $this->goal_deadline,
            'payment_schedule' => $this->payment_schedule,
        ]);


        $this->dispatch('feedback', feedback:"Savings goal created successfully.");

        return redirect()->route('plans');
    }


}
