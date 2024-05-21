<?php

namespace App\Http\Livewire\Backend\About;

use App\Models\About;
use Livewire\Component;

class DetailAbout extends Component
{
    public $detailAbout;
    public function mount($id)
    {
        $this->detailAbout = About::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.about.detail-about');
    }
}
