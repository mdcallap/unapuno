<?php

namespace App\Livewire\Web;
 
use App\Models\Category;
use App\Models\Family;
use App\Models\Subcategory;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $families = Family::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
/* 
        $categories1 = Category::where('family_id', 1)->get(); // (1) is the id of the family
        $categories2 = Category::where('family_id', 2)->get(); // (2) is the id of the family */

        return view('livewire.web.navigation',compact('families', 'categories','subcategories' ) );
    }
}
