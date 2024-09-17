<?php

namespace App\Livewire;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Url;

class Dashboard extends Component
{
    #[Title('dashboard')]
    #[Url]
    public $search = '';
    public function render()
    {
        $user = Auth::guard('web')->user();
        $files = Files::select("*")->where('user_id', $user->id)->where('title', 'like', '%' . $this->search . '%' )->orderBy('id', 'desc')->paginate(6);
        return view('livewire.dashboard', compact('files'));
    }
}
