<?php

namespace App\Livewire\User;

use App\Models\itinerarie;
use App\Models\savings_goal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Save extends Component
{
    public $savingsId;
    public $method = 'credit';
    public $amount;

    public function mount($id)
    {
        $this->dispatch('clickk', el: 'dashboard');
        $this->savingsId = $id;
    }


    #[Layout('layouts.dashboard')]
    public function render()
    {
        $savings = savings_goal::findorfail($this->savingsId);
        return view('livewire.user.save', with(compact('savings')));
    }

    public function changeMethod($meth)
    {
        $this->method = $meth;
    }

    public function save(savings_goal $savingsGoal)
    {
        $this->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        // Getting the Previous Record
        $savings = savings_goal::findOrFail($this->savingsId);

        // Adding New Amount to the Previous Saved Amount and Updating the Record
        $savings->update(['saved_amount' => $this->amount + $savings->saved_amount]);

        $this->dispatch('feedback', feedback: 'Savings added successfully');

        return redirect(route('savings'));
    }
}
