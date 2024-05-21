<?php

namespace App\Http\Livewire\Backend\KategoriTagsProduk;

use App\Models\KategoriTagsProduk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormKategoriTagsProduk extends Component
{
    use WithFileUploads;
    public KategoriTagsProduk $kategoritagsproduk;

    protected $rules = [
        'kategoritagsproduk.title'        => 'required',
        'kategoritagsproduk.slug'         => 'required',
    ];

    public function mount($id = null)
    {

        $this->kategoritagsproduk = new KategoriTagsProduk();
        if ($id) {
            $this->kategoritagsproduk = KategoriTagsProduk::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-tags-produk.form-kategori-tags-produk');
    }

    public function updatedKategoriTagsProduk($value, $key)
    {
        if ($key == 'title') {
            $this->kategoritagsproduk->slug = Str::slug($value);
            $this->validateOnly('kategori-tags-produk.slug');
        }
    }

    public function save()
    {

        $this->validate();


        $this->validate([
            'kategoritagsproduk.slug' => 'required|unique:kategori_blog,slug,' . $this->kategoritagsproduk->id,
        ]);
        try {
            $this->kategoritagsproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Kategori Blog berhasil ditambahkan"]);

            redirect(route('data-kategori-tags-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Kategori Blog tidak berhasil ditambahkan"]);
        }
    }
}
