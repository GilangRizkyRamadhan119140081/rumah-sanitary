<?php

namespace App\Http\Livewire\Backend\KategoriProduk;

use App\Models\KategoriProduk;
use Livewire\Component;

class DetailKategoriProduk extends Component
{
    public $kategoriproduk;
    public function mount($slug)
    {
        $this->kategoriproduk = KategoriProduk::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.kategori-produk.detail-kategori-produk');
    }
}
