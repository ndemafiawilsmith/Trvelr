<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Save extends Component
{
    public $itineraryId;
    public $method= 'bank';

    public function mount($id){
        $this->dispatch('clickk', el: 'dashboard');
        $this->itineraryId = $id;
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $itinerary = itinerarie::findorfail($this->itineraryId);
        return view('livewire.user.save', with(compact('itinerary')));
    }

    public function changeMethod($meth){
        $this->method = $meth;
    }
}
