<?php

namespace App\Http\Livewire\Backend\KategoriProduk;

use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormKategoriProduk extends Component
{
    use WithFileUploads;
    public KategoriProduk $kategoriproduk;
    public $gambar;

    protected $rules = [
        'kategoriproduk.title'        => 'required',
        'kategoriproduk.excerpt'      => 'required',
        'kategoriproduk.slug'         => 'required',
        'kategoriproduk.deskripsi'      => '',
    ];

    public function mount($id = null)
    {

        $this->kategoriproduk = new KategoriProduk();
        if ($id) {
            $this->kategoriproduk = KategoriProduk::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-produk.form-kategori-produk');
    }

    public function updatedKategoriProduk($value, $key)
    {
        if ($key == 'title') {
            $this->kategoriproduk->slug = Str::slug($value);
            $this->validateOnly('kategori-produk.slug');
        }
    }

    public function save()
    {
        $this->validate();
        if (!$this->kategoriproduk->image) {
            $this->validate([
                'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:250',
            ]);
        }
        $this->validate([
            'kategoriproduk.slug' => 'required|unique:kategori_produk,slug,' . $this->kategoriproduk->id,
        ]);

        if ($this->gambar) {            
            $gambarPath = $this->gambar->store('sanitary/kategoriproduk', 's3');
            $this->kategoriproduk->image = $gambarPath;      
        }
        try {
            $this->kategoriproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Kategori Produk berhasil ditambahkan"]);

            redirect(route('data-kategori-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Kategori Produk tidak berhasil ditambahkan"]);
        }
    }
}
