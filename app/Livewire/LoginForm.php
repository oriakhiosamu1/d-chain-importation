<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    #[Validate('required|email:filter')]
    public $email;

    #[Validate('required|min:6|max:20')]
    public $password;

    // LOGIN METHOD
    public function store(Request $request){
        $this->validate();

        $credentials =[
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(auth()->user()->isAdmin == true){
                return redirect()->route('admin.dashboard');
            }

            return redirect()->intended('/home')->with('message', 'Welcome back ' . auth()->user()->name);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
