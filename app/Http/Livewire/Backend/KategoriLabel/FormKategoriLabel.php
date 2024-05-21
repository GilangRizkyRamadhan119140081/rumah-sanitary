<?php

namespace App\Http\Livewire\Backend\KategoriLabel;

use App\Models\KategoriLabel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormKategoriLabel extends Component
{
    use WithFileUploads;
    public KategoriLabel $kategorilabel;
    public $gambar;

    protected $rules = [
        'kategorilabel.title'        => 'required',
        'kategorilabel.slug'         => 'required',
    ];

    public function mount($id = null)
    {

        $this->kategorilabel = new KategoriLabel();
        if ($id) {
            $this->kategorilabel = KategoriLabel::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-label.form-kategori-label');
    }

    public function updatedKategoriLabel($value, $key)
    {
        if ($key == 'title') {
            $this->kategorilabel->slug = Str::slug($value);
            $this->validateOnly('label-produk.slug');
        }
    }

    public function save()
    {
        $this->validate();

        $this->validate([
            'kategorilabel.slug' => 'required|unique:label_produk,slug,' . $this->kategorilabel->id,
        ]);

        $this->validate();
        if (!$this->kategorilabel->image) {
            $this->validate([
                'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:500',
            ]);
        }
        if ($this->gambar) {
            $gambarPath = $this->gambar->store('sanitary/kategorilabel', 's3');
            $this->kategorilabel->image = $gambarPath;
        }

        try {
            $this->kategorilabel->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Kategori Label berhasil ditambahkan"]);

            redirect(route('data-kategori-label'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Kategori Produk tidak berhasil ditambahkan"]);
        }
    }
}
