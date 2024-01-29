<?php

namespace App\Livewire\Admin;


use App\Models\Slider as ModelsSlider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Slider extends Component
{
    use WithFileUploads;
    public $image;
    public $imagekey;

    public $modal=false;
    public $selected_id;
    public $description;

    public function render()
    {
       
        $sliders = ModelsSlider::all();
      
        return view('livewire.admin.slider', compact('sliders'))->layout('layouts.app') ;
    }

    public function create()
    {
        $rules['image']='required|mimes:jpg,jpeg,png';
        $this->validate($rules);
        $image = $this->image->store('slider');
        ModelsSlider::create([
            'image' => $image,
            'description' => $this->description,
        ]);

        $this->reset();
        $this->imagekey = rand();
    }

    public function delete(ModelsSlider $slider)
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
