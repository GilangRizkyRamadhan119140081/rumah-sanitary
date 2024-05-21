<?php

namespace App\Http\Livewire\Backend\Brand;

use App\Models\Brand;
use Livewire\Component;

class DetailBrand extends Component
{
    public $brand;
    public function mount($slug)
    {
        $this->brand = Brand::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.brand.detail-brand');
    }
}
