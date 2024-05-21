<?php

namespace App\Http\Livewire\Backend\Brand;

use App\Models\Brand;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\KategoriBrand;

class FormBrand extends Component
{
    use WithFileUploads;
    public Brand $brand;
    public $gambar, $kategori;

    protected $rules = [
        'brand.title'        => 'required',
        'brand.excerpt'      => 'required',
        'brand.slug'         => 'required',
        'brand.deskripsi'      => '',
    ];

    public function mount($id = null)
    {

        $this->brand = new Brand();
        if ($id) {
            $this->brand = Brand::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.brand.form-brand');
    }

    public function updatedBrand($value, $key)
    {
        if ($key == 'title') {
            $this->brand->slug = Str::slug($value);
            $this->validateOnly('brand.slug');
        }
    }

    public function save()
    {
        $this->validate();
        if (!$this->brand->image) {
            $this->validate([
                'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:250',
            ]);
        }
        $this->validate([
            'brand.slug' => 'required|unique:brand,slug,' . $this->brand->id,
        ]);

        if ($this->gambar) {            
            $gambarPath = $this->gambar->store('sanitary/brand', 's3');
            $this->brand->image = $gambarPath;      
        }
        try {
            $this->brand->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Brand berhasil ditambahkan"]);

            redirect(route('data-brand'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Brand tidak berhasil ditambahkan"]);
        }
    }
}
