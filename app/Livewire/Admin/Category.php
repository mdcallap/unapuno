<?php

namespace App\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use App\Models\Family;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Category extends Component
{

    use WithPagination;
    public $search;
    public $cant=10;
    public $selected_id;
    public $modal=false;
    public $name,$family_id;


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

        $categories=ModelsCategory::where('id', 'like', '%'  . $this->search .'%')
        ->orWhere('name', 'like', '%'  . $this->search .'%')
        ->orWhereHas('family', function (Builder $query) {
            $query->where('name', 'like', '%'  . $this->search .'%' );
           })
        ->latest('id')
        ->paginate($this->cant);

        $family=Family::all();
        return view('livewire.admin.category',compact('categories','family'))->layout('layouts.app') ;
    }

    public function create(){
        $rules=[
            'name'=>'required|unique:categories,name',
            'family_id'=>'required',
        ];

        $this->validate($rules);
        ModelsCategory::create([
            'name'=>$this->name,
            'family_id'=>$this->family_id,
        ]);

        $this->closemodal();
        $this->dispatch('success','Categoria creada Correctamente');
    }

    public function edit(ModelsCategory $category){
        $this->selected_id=$category->id;
        $this->name=$category->name;
        $this->family_id=$category->family_id;
        $this->modal=true;
    }

    public function update(){
        $rules=[
            'name'=>"required|unique:categories,name,{$this->selected_id}",
            'family_id'=>'required',
        ];

        $this->validate($rules);
        $category=ModelsCategory::find($this->selected_id);
        $category->update([
            'name'=>$this->name,
            'family_id'=>$this->family_id,
        ]);

        $this->closemodal();
        $this->dispatch('success','Categoria actualizada Correctamente');
    }

    public function delete(ModelsCategory $categoryId){
        $categoryId->delete();
        $this->dispatch('success','Categoria eliminada Correctamente');
    }


    public function closemodal()
    {   
        $this->reset([
            'modal',
            'name',
            'selected_id',
            'family_id'
        ]);
        $this->resetValidation();
    }
}
