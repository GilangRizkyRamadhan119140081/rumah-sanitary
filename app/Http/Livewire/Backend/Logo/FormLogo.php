<?php

namespace App\Http\Livewire\Backend\Logo;

use App\Models\Logo;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormLogo extends Component
{
    use WithFileUploads;
    public $logo, $logoFooter, $favicon;
    public Logo $photo;

    protected $rules = [
        'logo' => 'image|mimes:jpg,jpeg,png,webp|max:700',
        'logoFooter' => 'image|mimes:jpg,jpeg,png,webp|max:700',
        'favicon' => 'image|mimes:jpg,jpeg,png,webp|max:700',
    ];

    public function mount($id = null)
    {

        $this->photo = new Logo();
        if ($id) {
            $this->photo = Logo::findOrFail($id);
        }
    }


    public function render()
    {
        return view('livewire.backend.logo.form-logo');
    }

    public function save()
    {
        // $this->validate();

        if ($this->logo) {
            $this->validate([
                'logo' => 'image|mimes:jpg,jpeg,png,webp|max:700',
            ]);

            $logo = $this->logo->store('sanitary/logo', 's3');
            $this->photo->logo = $logo;
        }

        if ($this->logoFooter) {
            $this->validate([
                'logoFooter' => 'image|mimes:jpg,jpeg,png,webp|max:700',
            ]);

            $logoFooter = $this->logoFooter->store('sanitary/logo', 's3');
            $this->photo->logo_footer = $logoFooter;
        }

        if ($this->favicon) {
            $this->validate([
                'favicon' => 'image|mimes:jpg,jpeg,png,webp|max:700',
            ]);

            $favicon = $this->favicon->store('sanitary/logo', 's3');
            $this->photo->favicon = $favicon;
        }

        try {
            $this->photo->save();

            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "logo berhasil ditambahkan"]);

            redirect(route('data-logo'));
        } catch (\Throwable $th) {
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "logo tidak berhasil ditambahkan"]);
        }
    }
}
