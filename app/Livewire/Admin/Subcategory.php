<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Family;
use App\Models\Subcategory as ModelsSubcategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;


class Subcategory extends Component
{
    use WithPagination;
        public $search;
        public $cant=10;
        public $selected_id;
        public $modal=false;
        public $record;
    
        public $subcategory=[
            'family_id'=>'',
            'category_id'=>'',
            'name'=>'',
        ];


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

        $subcategories=ModelsSubcategory::where('id', 'like', '%'  . $this->search .'%')
        ->orWhere('name', 'like', '%'  . $this->search .'%')
        ->orWhereHas('category', function (Builder $query) {
            $query->where('name', 'like', '%'  . $this->search .'%' );
           })
        ->latest('id')
        ->paginate($this->cant);

        $categories=Category::all();

        $families=Family::all();

        
    
        return view('livewire.admin.subcategory', compact('subcategories','categories','families')) -> layout('layouts.app') ;
    }

    public function updatedSubcategoryFamilyId(){
        $this->subcategory['category_id']='';
        $this->subcategory['name']='';
    }

    public function edit(ModelsSubcategory $subcategory)
    {
       $record=$subcategory;

       $this->selected_id=$record->id;

       $this->subcategory=[
        'family_id'=>$record->category->family_id,
        'category_id'=>$record->category_id,
        'name'=>$record->name,
    ];
       
       $this->modal=true;
    }

    #[Computed()]
    public function categories(){
        return Category::where('family_id',$this->subcategory['family_id'])->get();
    }

    public function create(){
        $this->validate([
            'subcategory.family_id'=>'required|exists:families,id',
            'subcategory.category_id'=>'required|exists:categories,id',
            'subcategory.name'=>'required|unique:subcategories,name',
        ]);

        ModelsSubcategory::create([
            'category_id'=>$this->subcategory['category_id'],
            'name'=>$this->subcategory['name'],
        ]);

      
        $this->closemodal();
        $this->dispatch('success','Subcategoria creada con exito');
    }

   

   

    public function closemodal(){
        $this->reset(['subcategory','selected_id','modal']);
    }
}
