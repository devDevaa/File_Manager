<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFiles extends Component
{
    use WithFileUploads;
    public $title, $file;
    public function render()
    {
        return view('livewire.files.add-files');
    }
    public function store() {
        $this->validate([
            'title' =>'required|min:2|max:255',
            'file' =>'required|mimes:png,svg,jpg,jpeg,gif|image'
        ]);
        $user = Auth::guard('web')->user();
        $filename = $this->file->store("images_".$user->id);
        Files::create(["title" => $this->title, "file" => $filename, "user_id" => $user->id]);
        session()->flash('success',  'File uploaded successfully!');
        $this->redirectRoute('dashboard', navigate:true);
    }
}
