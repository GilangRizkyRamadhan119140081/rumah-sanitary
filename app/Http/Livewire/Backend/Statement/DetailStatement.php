<?php

namespace App\Http\Livewire\Backend\Statement;

use App\Models\Statement;
use Livewire\Component;

class DetailStatement extends Component
{
    public $detailStatement;
    public function mount($id)
    {
        $this->detailStatement = Statement::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.statement.detail-statement');
    }
}
