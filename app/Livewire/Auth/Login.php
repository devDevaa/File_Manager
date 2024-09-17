<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    public $email, $password;
    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login() {
        $validate = $this->validate([
            "email" => "email | required",
            "password" => "required"
        ]);
        if (Auth::attempt($validate)) {
            session()->regenerate();
            session()->flash('success', 'Login successfull!');
            return $this->redirectRoute('dashboard', navigate:true);
        } else {
            $this->addError('email', 'Invalid email or password');
        }
    }
}
