<?php

namespace App\Livewire\Web;

use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = \App\Models\Post::where('status','1')->latest('id');
        return view('livewire.web.posts',compact('posts'))->layout('layouts.web');
    }
}
