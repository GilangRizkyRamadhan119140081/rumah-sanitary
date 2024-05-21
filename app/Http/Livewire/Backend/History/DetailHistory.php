<?php

namespace App\Http\Livewire\Backend\History;

use App\Models\History;
use Livewire\Component;

class DetailHistory extends Component
{
    public $detailHistory;
    public function mount($id)
    {
        $this->detailHistory = History::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.history.detail-history');
    }
}
