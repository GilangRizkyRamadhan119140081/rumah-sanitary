<?php

namespace App\Http\Livewire\Backend\Logo;

use App\Models\Logo;
use Livewire\Component;

class DetailLogo extends Component
{
    public $detailLogo;
    public function mount($id)
    {
        $this->detailLogo = Logo::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.logo.detail-logo');
    }
}
