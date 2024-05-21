<?php

namespace App\Http\Livewire\Backend\SellingProduk;

use App\Models\SellingProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormSellingProduk extends Component
{
    use WithFileUploads;
    public SellingProduk $sellingproduk;
    public $gambar, $produk;

    protected $rules = [
        'sellingproduk.produk_id'  => 'required',
    ];

    public function mount($id = null)
    {

        $this->sellingproduk = new SellingProduk();
        if ($id) {
            $this->sellingproduk = SellingProduk::findOrFail($id);
        }

        $this->produk = Produk::get();
    }

    public function render()
    {
        return view('livewire.backend.sellingproduk.form-sellingproduk');
    }

    public function save()
    {
        $this->validate();

        try {
            $this->sellingproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Selling Produk berhasil ditambahkan"]);

            redirect(route('data-selling-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Selling produk tidak berhasil ditambahkan"]);
        }
    }
}
