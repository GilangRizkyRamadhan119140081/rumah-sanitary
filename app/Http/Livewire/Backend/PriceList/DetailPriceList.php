<?php

namespace App\Http\Livewire\Backend\PriceList;

use App\Models\PriceList;
use Livewire\Component;

class DetailPriceList extends Component
{
    public $detailPriceList;
    public function mount($id)
    {
        $this->detailPriceList = PriceList::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.pricelist.detail-pricelist');
    }
}
