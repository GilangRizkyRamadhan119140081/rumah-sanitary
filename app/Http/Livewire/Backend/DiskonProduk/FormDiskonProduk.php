<?php

namespace App\Http\Livewire\Backend\DiskonProduk;

use App\Models\DiskonProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormDiskonProduk extends Component
{
    use WithFileUploads;
    public DiskonProduk $diskonproduk;
    public $gambar, $produk;

    protected $rules = [
        'diskonproduk.produk_id'  => 'required',
    ];

    public function mount($id = null)
    {

        $this->diskonproduk = new DiskonProduk();
        if ($id) {
            $this->diskonproduk = DiskonProduk::findOrFail($id);
        }

        $this->produk = Produk::get();
    }

    public function render()
    {
        return view('livewire.backend.diskonproduk.form-diskonproduk');
    }

    public function save()
    {
        $this->validate();

        try {
            $this->diskonproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Diskon Produk berhasil ditambahkan"]);

            redirect(route('data-diskon-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Diskon produk tidak berhasil ditambahkan"]);
        }
    }
}
