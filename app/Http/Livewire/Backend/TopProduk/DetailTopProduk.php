<?php

namespace App\Http\Livewire\Backend\TopProduk;

use App\Models\TopProduk;
use Livewire\Component;

class DetailTopProduk extends Component
{
    public $topproduk;
    public function mount($id)
    {
        $this->topproduk = TopProduk::where('id', $id)->with('data_produk')->firstOrFail();
        info($this->topproduk);
    }

    public function render()
    {
        return view('livewire.backend.topproduk.detail-topproduk');
    }
}
