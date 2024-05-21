<?php

namespace App\Http\Livewire\Backend\DiskonProduk;

use App\Models\DiskonProduk;
use Livewire\Component;

class DetailDiskonProduk extends Component
{
    public $diskonproduk;
    public function mount($id)
    {
        $this->diskonproduk = DiskonProduk::where('id', $id)->with('data_produk')->firstOrFail();
        info($this->diskonproduk);
    }

    public function render()
    {
        return view('livewire.backend.diskonproduk.detail-diskonproduk');
    }
}
