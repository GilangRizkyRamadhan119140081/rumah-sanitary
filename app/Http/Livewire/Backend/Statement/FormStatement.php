<?php

namespace App\Http\Livewire\Backend\Statement;

use App\Models\Statement;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormStatement extends Component
{
    use WithFileUploads;
    public Statement $statement;
    public $image;


    protected $rules = [
        'statement.name'            => '',
        'statement.title'           => '',
        'statement.statement'       => '',
        // 'statement.image'          => 'required',
    ];

    public function mount($id = null)
    {

        $this->statement = new Statement();

        if ($id) {
            $this->statement = Statement::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.statement.form-statement');
    }

    public function save()
    {
        $this->validate();
        if (!$this->statement->image) {
            $this->validate([
                'image'    => 'image|mimes:jpg,jpeg,png,webp|max:1000',
            ]);
        }
        if ($this->statement) {
            $gambarPath = $this->image->store('sanitary/statement', 's3');
            $this->statement->image = $gambarPath;
        }

        try {
            $this->statement->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

            redirect(route('data-statement'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }
}
