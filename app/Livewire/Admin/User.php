<?php

namespace App\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $search;
    public $selected_id;
    public $name;
    public $email;
    public $password;

    public $modal=false;

    public function render()
    {
        $users=ModelsUser::all();
        return view('livewire.admin.user',compact('users'))->layout('layouts.app');
    }

    public function  create()
    {
        $rules=[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8'
        ];
        $this->validate($rules);
        ModelsUser::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password)
        ]);
        $this->closemodal();
        
    }

    public function closemodal()
    {   
        $this->reset([
            'modal',
       
            'selected_id',
            'name',
            'email',
            'password'


            
            
         
        ]);
        $this->resetValidation();
    }

    public function edit(ModelsUser $user)
    {
        $this->selected_id=$user->id;
        $this->name=$user->name;
        $this->email=$user->email;
        $this->modal=true;
    }

    public function update()
    {
        $rules=[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email,'.$this->selected_id,
            'password'=>'required|min:8'
        ];
        $this->validate($rules);
        $user=ModelsUser::find($this->selected_id);
        $user->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password)
        ]);
        $this->closemodal();
    }

    
   
}
