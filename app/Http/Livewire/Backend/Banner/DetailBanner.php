<?php

namespace App\Http\Livewire\Backend\Banner;

use App\Models\Banner;
use Livewire\Component;

class DetailBanner extends Component
{
    public $detailBanner;
    public function mount($id)
    {
        $this->detailBanner = Banner::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.banner.detail-banner');
    }
}
