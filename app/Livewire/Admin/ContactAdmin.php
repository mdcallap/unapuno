<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class ContactAdmin extends Component
{
  
    public $selected_id;
    public $name;
    public $email;
    public $phone;
    public $message;
    public $modal=false;

    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contact-admin',compact('contacts'))->layout('layouts.app');
    }

    public function view(Contact $contact)
    {
        $this->modal=true;

        $this->selected_id = $contact->id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->message = $contact->message;

        
    }

    public function closemodal()
    {   
        $this->reset([
            'modal',
            'name',
            'selected_id',
            'email',
            'phone',
            'message',

        ]);
        $this->resetValidation();
    }
}
