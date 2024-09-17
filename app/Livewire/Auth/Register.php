<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register() {
        $validate = $this->validate([
            'name' =>'required|min:3|max:30',
            'email' =>'required|email|unique:users',
            'password' => 'required|min:6|max:40|confirmed',
        ]);
        $validate["password"] = Hash::make($validate["password"]);
        // dd($validate);
        User::create($validate);
        session()->flash('success', "Account Created Successfully! Please login now . . .");
        $this->redirectRoute('login', navigate:true);
    }
}
