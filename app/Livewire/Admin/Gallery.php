<?php

namespace App\Livewire\Admin;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Gallery extends Component
{
    use WithFileUploads;
    public $image;
    public $imagekey;

    public $modal=false;
    public $selected_id;
    public $description;
    public function render()
    {
        
        $galeries=ModelsGallery::all();
        return view('livewire.admin.gallery',compact('galeries'))->layout('layouts.app');
    }

    public function create()
    {
        $rules['image']='required|mimes:jpg,jpeg,png';
        $this->validate($rules);
        $image = $this->image->store('gallery');
        ModelsGallery::create([
            'image' => $image,
            'description' => $this->description,
        ]);

        $this->closemodal();
        $this->imagekey = rand();
    }

    public function delete(ModelsGallery $slider)
    {
        Storage::delete([$slider->image]);
        $slider->delete();
    }

    public function closemodal()
    {   
        $this->reset([
            'modal',
            'image',
            'selected_id',
            'description',

        ]);
        $this->imagekey = rand();
        $this->resetValidation();
    }
}
