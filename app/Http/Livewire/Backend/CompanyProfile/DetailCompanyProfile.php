<?php

namespace App\Http\Livewire\Backend\CompanyProfile;

use App\Models\CompanyProfile;
use Livewire\Component;

class DetailCompanyProfile extends Component
{
    public $detailCompanyProfile;
    public function mount($id)
    {
        $this->detailCompanyProfile = CompanyProfile::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.companyprofile.detail-companyprofile');
    }
}
