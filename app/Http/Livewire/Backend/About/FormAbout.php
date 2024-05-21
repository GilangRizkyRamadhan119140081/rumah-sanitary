<?php

namespace App\Http\Livewire\Backend\About;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormAbout extends Component
{
    use WithFileUploads;
    public About $about;


    protected $rules = [
        'about.about_us'            => 'required',
        'about.customer'            => 'required',
        'about.start_year'          => 'required',
        'about.product_order'       => 'required',
        'about.quality_product'     => 'required',
        'about.history'             => 'required',
    ];

    public function mount($id = null)
    {

        $this->about = new About();

        if ($id) {
            $this->about = About::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.about.form-about');
    }

    public function save()
    {
        $this->validate();

        try {
            $this->about->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data Kontak berhasil ditambahkan"]);

            redirect(route('data-about'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data Kontak tidak berhasil ditambahkan"]);
        }
    }
}
