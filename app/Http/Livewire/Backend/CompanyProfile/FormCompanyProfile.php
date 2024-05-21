<?php

namespace App\Http\Livewire\Backend\CompanyProfile;

use App\Models\CompanyProfile;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class FormCompanyProfile extends Component
{
    use WithFileUploads;
    public CompanyProfile $companyprofile;
    public $file;

    protected $rules = [
        'companyprofile.title'            => 'required',
        // 'companyprofile.file'          => 'required',
    ];

    public function mount($id = null)
    {

        $this->companyprofile = new CompanyProfile();

        if ($id) {
            $this->companyprofile = CompanyProfile::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.backend.companyprofile.form-companyprofile');
    }

    public function save()
    {
        $this->validate();
        if (!$this->companyprofile->file) {
            $this->validate([
                'file'    => 'required|mimes:pdf|max:5000',
            ]);
        }
        if ($this->companyprofile) {
            $gambarPath = $this->file->store('sanitary/companyprofile', 's3');
            $this->companyprofile->file = $gambarPath;
        }

        try {
            $this->companyprofile->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data berhasil ditambahkan"]);

            redirect(route('data-companyprofile'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Data tidak berhasil ditambahkan"]);
        }
    }
}
