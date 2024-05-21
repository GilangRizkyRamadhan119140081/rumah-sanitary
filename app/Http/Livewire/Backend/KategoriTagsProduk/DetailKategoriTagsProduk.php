<?php

namespace App\Http\Livewire\Backend\KategoriTagsProduk;

use App\Models\KategoriTagsProduk;
use Livewire\Component;

class DetailKategoriTagsProduk extends Component
{
    public $kategoritagsproduk;
    public function mount($slug)
    {
        $this->kategoritagsproduk = KategoriTagsProduk::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.kategori-tags-produk.detail-kategori-tags-produk');
    }
}
