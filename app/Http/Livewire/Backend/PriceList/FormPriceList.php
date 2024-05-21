<?php

namespace App\Http\Livewire\Backend\PriceList;

use App\Models\PriceList;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormPriceList extends Component
{
    use WithFileUploads;
    public PriceList $pricelist;
    public $image;


    protected $rules = [
        'pricelist.title'            => 'required',
        // 'pricelist.image'          => 'required',
    ];

    public function mount($id = null)
    {

        $this->pricelist = new PriceList();

        if ($id) {
            $this->pricelist = PriceList::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.pricelist.form-pricelist');
    }

    public function save()
    {
        $this->validate();
        if (!$this->pricelist->image) {
            $this->validate([
                'image'    => 'required|mimes:pdf|max:5000',
            ]);
        }
        if ($this->pricelist) {
            $gambarPath = $this->image->store('sanitary/pricelist', 's3');
            $this->pricelist->image = $gambarPath;
        }

        try {
            $this->pricelist->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

            redirect(route('data-pricelist'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }
}
