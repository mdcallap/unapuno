<?php

namespace App\Livewire\Web;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Video;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::all();
        $subcategories = Subcategory::whereHas('posts', function ($query) {
            $query->where('type','1')->where('status','1'); // Asumiendo que 0 es el valor para documentos
        })->get();
        $sliders=Slider::all();
        $documents= $subcategories;

        $posts = Post::where('type','0')->where('status','1')->take(4)->latest('id')->get();

        $videos=Video::take(3)->latest('id')->get();
        $galeries=Gallery::take(8)->latest('id')->get();
        $chunks= $galeries->chunk(2);

        return view('livewire.web.home',compact('documents','sliders','posts','videos','chunks') )->layout('layouts.web') ;
    }
}
