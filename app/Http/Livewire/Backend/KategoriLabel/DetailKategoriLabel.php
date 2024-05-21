<?php

namespace App\Http\Livewire\Backend\KategoriLabel;

use App\Models\KategoriLabel;
use Livewire\Component;

class DetailKategoriLabel extends Component
{
    public $kategorilabel;
    public function mount($slug)
    {
        $this->kategorilabel = KategoriLabel::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.kategori-label.detail-kategori-label');
    }
}
