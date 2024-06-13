<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('email:filter|required|unique:users')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    #[Validate('required_with:password|same:password|min:6')]
    public $password_confirmation = '';

    public function store(){
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice')->with('message', 'Please check your mail for verification');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
