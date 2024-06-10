<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function mount(){
        $isDemoMode = config('app.demo_mode');
        if($isDemoMode){
            $this->email = 'john.doe@example.com';
            $this->password = 'password';
        }
    }
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function submit()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended('dashboard');
        } else {
            // session()->flash('error', 'Invalid credentials');
            $this->dispatch('errfeedback', errfeedback:'Invalid credentials');
        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
