<?php

namespace App\Http\Livewire\Backend\SocialMedia;

use App\Models\SocialMedia;
use Livewire\Component;

class DetailSocialMedia extends Component
{
    public $detailSocialMedia;
    public function mount($id)
    {
        $this->detailSocialMedia = SocialMedia::where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.socialmedia.detail-socialmedia');
    }
}
