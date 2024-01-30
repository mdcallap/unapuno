<?php

namespace App\Livewire\Web;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function render()
    {
        return view('livewire.web.contact')->layout('layouts.web');
    }
    public function send() {
        $rules = [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'phone' => 'required|min:9',
            'message' => 'required|min:10'

        ];

        $customMessages = [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre debe tener al menos 6 caracteres',
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email debe ser un email valido',
            'phone.required' => 'El campo telefono es requerido',
            'phone.min' => 'El campo telefono debe tener al menos 10 caracteres',
            'message.required' => 'El campo mensaje es requerido',
            'message.min' => 'El campo mensaje debe tener al menos 10 caracteres'

        ];

        $this->validate($rules, $customMessages);

        ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' =>$this->message
        ]);

        $this->reset(['name', 'email', 'phone', 'message']);
        session()->flash('status');
        }
        
    
}
