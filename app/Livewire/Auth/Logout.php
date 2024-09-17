<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }
    public function logout() {
        Auth::logout();
        session()->flash('success', 'You have been successfully logged out.');
        return $this->redirectRoute('login', navigate:true);
    }
}
