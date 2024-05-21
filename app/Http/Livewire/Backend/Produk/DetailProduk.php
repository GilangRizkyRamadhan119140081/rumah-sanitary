<?php

namespace App\Http\Livewire\Backend\Produk;

use App\Models\Produk;
use Livewire\Component;

class DetailProduk extends Component
{
    public $produk;
    public function mount($slug)
    {
        $this->produk = Produk::where('slug', $slug)->firstOrFail();

        $this->produk->diskon = $this->calculateDiscountPercentage($this->produk->price, $this->produk->price_disc);

    }

    private function calculateDiscountPercentage($price, $price_disc)
    {
        if ($price > 0) {
            return (($price - $price_disc) / $price) * 100;
        } else {
            return 0;
        }
    }

    public function render()
    {
        return view('livewire.backend.produk.detail-produk');
    }
}
