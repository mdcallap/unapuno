<?php

namespace App\Livewire\Web;

use App\Models\Gallery;
use Livewire\Component;

class ShowGaleries extends Component
{
    public function render()
    {
        $images=Gallery::all();
        $galeries=Gallery::latest('id')->get();
        $chunks= $galeries->chunk(4);
        return view('livewire.web.show-galeries',compact('chunks'))->layout('layouts.web');
    }
}
