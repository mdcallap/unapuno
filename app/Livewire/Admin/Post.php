<?php

namespace App\Livewire\Admin;

use App\Models\Post as ModelsPost;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
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
    public $type, $doc;

    public $filekey;
    public $title,$content,$file,$status,$subcategory_id='';
    public $selectedTags=[];

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

        $subcategories=Subcategory::all();
        $tags=Tag::all();


        return view('livewire.admin.post',compact('posts','subcategories','tags'))->layout('layouts.app');
    }

    public function create()
    {
       
        $rules=[
            'title'=>'required',
            'content'=>'required',
            'status'=>'required',
            'subcategory_id'=>'required',
            'type'=>'required',
            'selectedTags'=>'required',



            
        ];
        if($this->type==1){
            $rules['file']='mimes:pdf,docx,xlsx,pptx,txt,zip,rar';

        }



        $this->validate($rules);
        

        $post = ModelsPost::create([
            'type'=>$this->type,
            'title'=>$this->title,
            'content'=>$this->content,
            
            'status'=>$this->status,
            'subcategory_id'=>$this->subcategory_id,
            'user_id'=>auth()->user()->id,
    
        ]);
        $post->tags()->attach($this->selectedTags);

        if($this->file){
            $post->file=$this->file->store('posts');
            $post->save();
        }
        $this->reset();
        $this->filekey = rand();

    }

    public function edit(ModelsPost $post)
    {
        $this->selected_id=$post->id;
        $this->title=$post->title;
        $this->content=$post->content;
        $this->status=$post->status;
        $this->subcategory_id=$post->subcategory_id;
        $this->type=$post->type;
   $this->selectedTags=$post->tags->pluck('id')->toArray();
        $this->doc=$post->file;
        $this->modal=true;
    }

    public function update()
    {
        $rules=[
            'title'=>'required',
            'content'=>'required',
            'status'=>'required',
            'subcategory_id'=>'required',
            'type'=>'required',
            'selectedTags'=>'required',
        ];


     

        $this->validate($rules);
        $post = ModelsPost::find($this->selected_id);
        $post->update([
            'type'=>$this->type,
            'title'=>$this->title,
            'content'=>$this->content,
            
            'status'=>$this->status,
            'subcategory_id'=>$this->subcategory_id,
            'user_id'=>auth()->user()->id,
    
        ]);
        $post->tags()->sync($this->selectedTags);

        if($this->file){
            Storage::delete([$post->file]);
            $post->file=$this->file->store('posts');
            $post->save();
        }

  
        $this->filekey = rand();
        $this->closemodal();
    
    }

    public function delete(ModelsPost $post)
    {
        Storage::delete([$post->file]);
        $post->delete();
    }


    public function closemodal()
    {   
        $this->reset([
            'modal',
       
            'selected_id',
            'title',
            'content',
            'status',
            'subcategory_id',
            'type',
            'selectedTags',
            'file',
            'filekey',
            
         
        ]);
        $this->filekey = rand();
        $this->resetValidation();
    }
}
