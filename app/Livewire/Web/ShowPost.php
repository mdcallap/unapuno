<?php

namespace App\Livewire\Web;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;
    function mount( $id )
    {
        $post = Post::find($id);
        $this->post = $post;
    }
   
    public function render()
    {
        $posts = Post::where('status','1')->take(4)->latest('id')->get();
        return view('livewire.web.show-post',compact('posts'))->layout('layouts.web');
    }
}
