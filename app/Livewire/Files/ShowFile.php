<?php

namespace App\Livewire\Files;

use Livewire\Component;
use App\Models\Files;

class ShowFile extends Component
{
    public $id;
    public function mount($id) {
        $this->id = $id;
    }

    public function render()
    {
        $file = Files::find($this->id);
        return view('livewire.files.show-file', ["file" => $file]);
    }


}
