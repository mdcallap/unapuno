<?php

namespace App\Livewire\Web;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Feature extends Component
{
    public function render()
    {
        return view('livewire.web.feature')->layout('layouts.web');
    }
}
