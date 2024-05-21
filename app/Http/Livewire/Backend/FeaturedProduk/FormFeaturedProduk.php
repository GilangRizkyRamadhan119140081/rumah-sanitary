<?php

namespace App\Http\Livewire\Backend\FeaturedProduk;

use App\Models\FeaturedProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormFeaturedProduk extends Component
{
    use WithFileUploads;
    public FeaturedProduk $featuredproduk;
    public $gambar, $produk;

    protected $rules = [
        'featuredproduk.produk_id'  => 'required',
    ];

    public function mount($id = null)
    {

        $this->featuredproduk = new FeaturedProduk();
        if ($id) {
            $this->featuredproduk = FeaturedProduk::findOrFail($id);
        }

        $this->produk = Produk::get();
    }

    public function render()
    {
        return view('livewire.backend.featuredproduk.form-featuredproduk');
    }

    public function save()
    {
        $this->validate();

        try {
            $this->featuredproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Featured Produk berhasil ditambahkan"]);

            redirect(route('data-featured-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Featured produk tidak berhasil ditambahkan"]);
        }
    }
}
