<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Documents extends Component
{
    public function render()
    {
        $docs = \App\Models\Post::where('type','1')->where('status','1')->latest('id')->get();
        return view('livewire.web.documents',compact('docs'))->layout('layouts.web');
    }
}
