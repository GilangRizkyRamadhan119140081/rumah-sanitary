<?php

namespace App\Http\Livewire\Backend\KategoriTags;

use App\Models\KategoriTags;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormKategoriTags extends Component
{
    use WithFileUploads;
    public KategoriTags $kategoritags;

    protected $rules = [
        'kategoritags.title'        => 'required',
        'kategoritags.slug'         => 'required',
    ];

    public function mount($id = null)
    {

        $this->kategoritags = new KategoriTags();
        if ($id) {
            $this->kategoritags = KategoriTags::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-tags.form-kategori-tags');
    }

    public function updatedKategoriTags($value, $key)
    {
        if ($key == 'title') {
            $this->kategoritags->slug = Str::slug($value);
            $this->validateOnly('kategori-tags.slug');
        }
    }

    public function save()
    {

        $this->validate();


        $this->validate([
            'kategoritags.slug' => 'required|unique:kategori_blog,slug,' . $this->kategoritags->id,
        ]);
        try {
            $this->kategoritags->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Kategori Blog berhasil ditambahkan"]);

            redirect(route('data-kategori-tags'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Kategori Blog tidak berhasil ditambahkan"]);
        }
    }
}
