<?php

namespace App\Http\Livewire\Backend\Brosur;

use App\Models\Brosur;
use Livewire\Component;

class DetailBrosur extends Component
{
    public $detailBrosur;
    public function mount($id)
    {
        $this->detailBrosur = Brosur::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.brosur.detail-brosur');
    }
}
