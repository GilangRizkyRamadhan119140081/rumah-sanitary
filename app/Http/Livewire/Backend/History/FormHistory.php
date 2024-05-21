<?php

namespace App\Http\Livewire\Backend\History;

use App\Models\History;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormHistory extends Component
{
    use WithFileUploads;
    public History $history;
    public $image;


    protected $rules = [
        'history.years'            => 'required',
        'history.title'            => 'required',
        // 'history.image'          => 'required',
    ];

    public function mount($id = null)
    {

        $this->history = new History();

        if ($id) {
            $this->history = History::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.history.form-history');
    }

    public function save()
    {
        $this->validate();
        if (!$this->history->image) {
            $this->validate([
                'image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:500',
            ]);
        }
        if ($this->history) {
            $gambarPath = $this->image->store('sanitary/history', 's3');
            $this->history->image = $gambarPath;
        }

        try {
            $this->history->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

            redirect(route('data-history'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }
}
