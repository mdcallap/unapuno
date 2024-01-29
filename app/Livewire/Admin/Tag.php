<?php

namespace App\Livewire\Admin;

use App\Models\Tag as ModelsTag;
use Livewire\Component;
use Livewire\WithPagination;

class Tag extends Component
{

    use WithPagination;

    public $search;
    public $cant=10;
    public $selected_id;
    public $modal=false;

    public $name,$color;


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
        $tags=ModelsTag::where('id', 'like', '%'  . $this->search .'%')
        ->orWhere('name', 'like', '%'  . $this->search .'%')
    ->latest('id')
    ->paginate($this->cant);
        return view('livewire.admin.tag',compact("tags"))->layout('layouts.app') ;
    }

    public function create(){

        $rules=[
            'name'=>'required|unique:families,name',
            'color'=>'required',
        ];
        $this->validate($rules);
        ModelsTag::create([
            'name'=>$this->name,
            'color'=>$this->color,
        ]);
        $this->closemodal();

    }

    public function closemodal()
    {   
        $this->reset([
            'modal',
       
            'selected_id',
            'name',
            'color',

            
            
         
        ]);
        $this->resetValidation();
    }

    public function edit(ModelsTag $tag)
    {
        $this->selected_id=$tag->id;
        $this->name=$tag->name;
        $this->color=$tag->color;
        $this->modal=true;
    }

    public function update()
    {
        $rules=[
            'name'=>'required|unique:families,name,'.$this->selected_id,
            'color'=>'required',
        ];
        $this->validate($rules);
        $tag=ModelsTag::find($this->selected_id);
        $tag->update([
            'name'=>$this->name,
            'color'=>$this->color,
        ]);
        $this->closemodal();
 
    }
}
