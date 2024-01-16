<?php

namespace App\Livewire\Admin;

use App\Models\Family as ModelsFamily;
use Livewire\Component;
use Livewire\WithPagination;
class Family extends Component
{

    use WithPagination;

    public $search;
    public $cant=10;
    public $selected_id;
    public $modal=false;

    public $name;


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

        $families=ModelsFamily::where('id', 'like', '%'  . $this->search .'%')
        ->orWhere('name', 'like', '%'  . $this->search .'%') 
    ->latest('id')
    ->paginate($this->cant);
        return view('livewire.admin.family',compact("families"))->layout('layouts.app') ;
    }

    public function create(){
        $rules=[
            'name'=>'required|unique:families,name',
        ];

        $this->validate($rules);
        ModelsFamily::create([
            'name'=>$this->name,
        ]);

        $this->closemodal();

    }

    public function edit(ModelsFamily $family)
    {
       $record=$family;

       $this->selected_id=$record->id;

       $this->name=$record->name;
        $this->modal=true;
    }

    public function update()
    {
        $rules=[

            'name'=>'required|unique:families,name,'.$this->selected_id,
           
         ];
     
       $this->validate($rules);

       $family=ModelsFamily::findOrFail($this->selected_id);
       $family->update([

        'name'=>$this->name,

    ]);
        $family->save();
        $this->closemodal();
    }

    public function delete(ModelsFamily $familyId)
    {
       
      $familyId->delete();
    }


    public function closemodal()
    {   
        $this->reset([
            'modal',
            'name',
            'selected_id'
        ]);
        $this->resetValidation();
    }
}
