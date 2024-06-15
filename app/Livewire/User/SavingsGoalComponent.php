<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SavingsGoalComponent extends Component
{
    public $itineraryId;
    public function mount($id){
        $this->dispatch('clickk', el: 'dashboard');
        $this->itineraryId = $id;
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $itinerary = itinerarie::findorfail($this->itineraryId);
        return view('livewire.user.savings-goal-component', with(compact('itinerary')));
    }


}
