<?php

namespace App\Http\Livewire\Backend\KategoriTags;

use App\Models\KategoriTags;
use Livewire\Component;

class DetailKategoriTags extends Component
{
    public $kategoritags;
    public function mount($slug)
    {
        $this->kategoritags = KategoriTags::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.kategori-tags.detail-kategori-tags');
    }
}
