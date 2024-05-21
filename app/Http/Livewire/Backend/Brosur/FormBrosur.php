<?php

namespace App\Http\Livewire\Backend\Brosur;

use App\Models\Brosur;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormBrosur extends Component
{
    use WithFileUploads;
    public Brosur $brosur;
    public $image;


    protected $rules = [
        'brosur.title'            => 'required',
        // 'brosur.image'          => 'required',
    ];

    public function mount($id = null)
    {

        $this->brosur = new Brosur();

        if ($id) {
            $this->brosur = Brosur::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.brosur.form-brosur');
    }

    public function save()
    {
        $this->validate();
        if (!$this->brosur->image) {
            $this->validate([
                'image'    => 'required|mimes:pdf|max:5000',
            ]);
        }
        if ($this->brosur) {
            $gambarPath = $this->image->store('sanitary/brosur', 's3');
            $this->brosur->image = $gambarPath;
        }

        try {
            $this->brosur->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

            redirect(route('data-brosur'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }

}
