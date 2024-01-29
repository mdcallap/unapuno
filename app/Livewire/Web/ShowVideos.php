<?php

namespace App\Livewire\Web;

use App\Models\Video;
use Livewire\Component;

class ShowVideos extends Component
{
    public function render()
    {
        $videos=Video::all();
        return view('livewire.web.show-videos',compact('videos'))->layout('layouts.web');
    }
}
