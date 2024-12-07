<?php

namespace App\Livewire\Mtt;

use App\Models\country;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.3mtt')]
    public function render()
    {
        $countries = country::all();
        return view('livewire.mtt.home', with(compact('countries')));
    }

    public function plan()
    {
        // Select a random user from the database
        $user = User::inRandomOrder()->where('role','user')->first();

        if ($user) {
            // Authenticate the user
            auth()->login($user);

            // Optionally, you can redirect the authenticated user to another route
            return redirect()->route('add.plan'); // Replace 'dashboard' with your desired route name
        } else {
            // Handle the case where no user is found (this should be rare)
            return redirect()->back()->with('error', 'No users found in the database.');
        }
    }
}
