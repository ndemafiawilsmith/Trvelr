<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Http\Request;

class Register extends Component
{
    public $fullName;
    public $email;
    public $password;
    public $passwordConfirmation;
    public $promo;
    public $allergie;

    protected $rules = [
        'fullName' => 'required|string|min:6',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'passwordConfirmation' => 'required|string|same:password',
    ];

    public function signup(Request $request)
    {
        $this->validate();

        $allergies = $this->allergie;

        // Split the string into an array
        $allergiesArray = explode(',', $allergies);

        // Convert the array to JSON
        $allergiesJson = json_encode($allergiesArray);

        $user = User::create([
            'name' => $this->fullName,
            'email' => $this->email,
            'allergies' => $allergiesJson,
            'password' => Hash::make($this->password),
            'ip_address' => $request->ip(),
        ]);

        $this->dispatch('feedback', feedback:"Account created sucessfully");

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
