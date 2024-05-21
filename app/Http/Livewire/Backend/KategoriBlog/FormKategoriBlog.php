<?php

namespace App\Http\Livewire\Backend\KategoriBlog;

use App\Models\KategoriBlog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class FormKategoriBlog extends Component
{
    use WithFileUploads;
    public KategoriBlog $kategoriblog;
    public $gambar;

    protected $rules = [
        'kategoriblog.title'        => 'required',
        // 'kategoriblog.excerpt'      => 'required',
        'kategoriblog.slug'         => 'required',
        // 'kategoriblog.deskripsi'      => '',
    ];

    public function mount($id = null)
    {

        $this->kategoriblog = new KategoriBlog();
        if ($id) {
            $this->kategoriblog = KategoriBlog::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-blog.form-kategori-blog');
    }

    public function updatedKategoriBlog($value, $key)
    {
        if ($key == 'title') {
            $this->kategoriblog->slug = Str::slug($value);
            $this->validateOnly('kategori-blog.slug');
        }
    }

    public function save()
    {
        $this->validate();
        if (!$this->kategoriblog->image) {
            $this->validate([
                'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:250',
            ]);
        }
        $this->validate([
            'kategoriblog.slug' => 'required|unique:kategori_blog,slug,' . $this->kategoriblog->id,
        ]);

        if ($this->gambar) {
            $gambarPath = $this->gambar->store('sanitary/kategoriblog', 's3');
            $this->kategoriblog->image = $gambarPath;
        }
        try {
            $this->kategoriblog->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Kategori Blog berhasil ditambahkan"]);

            redirect(route('data-kategori-blog'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Kategori Blog tidak berhasil ditambahkan"]);
        }
    }
}
