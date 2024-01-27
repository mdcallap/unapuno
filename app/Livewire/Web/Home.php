<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = \App\Models\Category::all();
        $subcategories = \App\Models\Subcategory::all();

        $documents= $categories->concat($subcategories);

        return view('livewire.web.home',compact('documents') )->layout('layouts.web') ;
    }
}
