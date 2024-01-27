<?php

namespace App\Livewire\Admin;

use App\Models\Post as ModelsPost;
use Livewire\Component;
use Livewire\WithPagination;

use Livewire\WithFileUploads;
class Post extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $search;
    public $cant=10;
    public $selected_id;
    public $modal=false;

    public $title,$content,$file,$status;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCant()
    {
        $this->resetPage();
    }

    public function render()
    {

        $posts=ModelsPost::where('id', 'like', '%'  . $this->search .'%')
        ->orWhere('title', 'like', '%'  . $this->search .'%')
        ->orWhere('content', 'like', '%'  . $this->search .'%')
        ->latest('id')
        ->paginate($this->cant);
        return view('livewire.admin.post',compact('posts'))->layout('layouts.app');
    }

    public function create()
    {
        
    }
}
