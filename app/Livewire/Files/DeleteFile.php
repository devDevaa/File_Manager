<?php

namespace App\Livewire\Files;

use Livewire\Component;
use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DeleteFile extends Component
{
    public $id;
    public function mount($id) {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.files.delete-file');
    }

    public function deleteFile() {
        try {
            $file = Files::findOrFail($this->id);
            if($file->user_id !== Auth::user()->id) {
                session()->flash('error', 'Your are not authorized to do this!');
                return $this->redirectRoute('dashboard', navigate:true);
            }
            Storage::delete($file->file);
            Files::where("id", $this->id)->delete();
            session()->flash('success', 'File deleted successfully!');
            return $this->redirectRoute('dashboard', navigate:true);
        } catch (\Exception $err) {
            session()->flash('error', "Something went wrong!");
            return $this->redirectRoute('dashboard', navigate:true);
        }
    }
}
