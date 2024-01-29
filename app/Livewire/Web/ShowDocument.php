<?php

namespace App\Livewire\Web;

use App\Models\Post;
use App\Models\Subcategory;
use Livewire\Component;

class ShowDocument extends Component
{

    public $document;
    public $area;
    function mount( $id )

    {
        $this->area=Subcategory::find($id);
        $document = Post::where('subcategory_id',$id)->where('type','1')->where('status','1')->get();
        $this->document = $document;
    }
    public function render()
    {
        return view('livewire.web.show-document')->layout('layouts.web');
    }
}
