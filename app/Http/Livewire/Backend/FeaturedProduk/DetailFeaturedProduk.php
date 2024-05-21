<?php

namespace App\Http\Livewire\Backend\FeaturedProduk;

use App\Models\FeaturedProduk;
use Livewire\Component;

class DetailFeaturedProduk extends Component
{
    public $featuredproduk;
    public function mount($id)
    {
        $this->featuredproduk = FeaturedProduk::where('id', $id)->with('data_produk')->firstOrFail();
        info($this->featuredproduk);
    }

    public function render()
    {
        return view('livewire.backend.featuredproduk.detail-featuredproduk');
    }
}
