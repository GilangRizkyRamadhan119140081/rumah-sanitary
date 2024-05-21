<?php

namespace App\Http\Livewire\Backend\SellingProduk;

use App\Models\SellingProduk;
use Livewire\Component;

class DetailSellingProduk extends Component
{
    public $sellingproduk;
    public function mount($id)
    {
        $this->sellingproduk = SellingProduk::where('id', $id)->with('data_produk')->firstOrFail();
        info($this->sellingproduk);
    }

    public function render()
    {
        return view('livewire.backend.sellingproduk.detail-sellingproduk');
    }
}
