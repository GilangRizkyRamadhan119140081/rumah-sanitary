<?php

namespace App\Http\Livewire\Backend\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormBanner extends Component
{
    use WithFileUploads;
    public $gambarweb, $gambarmobile;
    public Banner $photo;

    protected $rules = [
        'photo.posisi'        => 'required',
    ];

    public function mount($id = null)
    {

        $this->photo = new Banner();
        if ($id) {
            $this->photo = Banner::findOrFail($id);
        }
    }


    public function render()
    {
        return view('livewire.backend.banner.form-banner');
    }

    public function save()
    {
        $this->validate();
        if (!$this->photo->imageweb) {
            $this->validate([
                'gambarweb'    => 'required|image|mimes:jpg,jpeg,png,webp|max:700',            
            ]);
        }

        if (!$this->photo->imagemobile) {
            $this->validate([
                'gambarmobile'    => 'required|image|mimes:jpg,jpeg,png,webp|max:700',            
            ]);
        }

        if ($this->gambarweb) {        
            $gambarWeb = $this->gambarweb->store('sanitary/banner', 's3');
            $this->photo->imageweb = $gambarWeb;            
        }
        if ($this->gambarmobile) {        
            $gambarMobile = $this->gambarmobile->store('sanitary/banner', 's3');
            $this->photo->imagemobile = $gambarMobile;            
        }
        try {
            $this->photo->save();

            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Banner berhasil ditambahkan"]);

            redirect(route('data-banner'));
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Banner tidak berhasil ditambahkan"]);
        }
    }
}
