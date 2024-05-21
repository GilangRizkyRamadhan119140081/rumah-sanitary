<?php

namespace App\Http\Livewire\Backend\SocialMedia;

use App\Models\SocialMedia;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormSocialMedia extends Component
{
    use WithFileUploads;
    public SocialMedia $socialmedia;
    public $image;


    protected $rules = [
        'socialmedia.title'           => '',
        'socialmedia.link'            => '',
    ];

    public function mount($id = null)
    {

        $this->socialmedia = new SocialMedia();

        if ($id) {
            $this->socialmedia = SocialMedia::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.socialmedia.form-socialmedia');
    }

    public function save()
    {
        try {
            if ($this->socialmedia) {
                if ($this->image) {
                    $this->validate([
                        'image' => 'image|mimes:jpg,jpeg,png,webp|max:1000',
                    ]);
                    $gambarPath = $this->image->store('sanitary/socialmedia', 's3');
                    $this->socialmedia->image = $gambarPath;
                }
                $this->socialmedia->save();
                $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

                redirect(route('data-socialmedia'));
            }
        } catch (\Throwable $th) {
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }
}
