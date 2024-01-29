<?php

namespace App\Livewire\Admin;

use App\Models\Video as ModelsVideo;
use Livewire\Component;

class Video extends Component
{
   
    public $selected_id;
    public $modal=false;
    public $url,$description;

    public function render()
    {
        $videos=ModelsVideo::all();

        return view('livewire.admin.video',compact('videos'))->layout('layouts.app');
    }

    public function create()
    {
        $rules=[
            'url'=>'required',
           
        ];
        
        $this->validate($rules);
        ModelsVideo::create([
            'url'=>$this->url,
            'description'=>$this->description,
        ]);

        $this->closemodal();


    }


    public function closemodal()
    {   
        $this->reset([
            'modal',
            'url',
            'selected_id',
            'description',


        ]);
   
        $this->resetValidation();
    }
}
