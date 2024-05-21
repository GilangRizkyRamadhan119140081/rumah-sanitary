<?php

namespace App\Http\Livewire\Backend\KategoriBlog;

use App\Models\KategoriBlog;
use Livewire\Component;

class DetailKategoriBlog extends Component
{
    public $kategoriblog;
    public function mount($slug)
    {
        $this->kategoriblog = KategoriBlog::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.backend.kategori-blog.detail-kategori-blog');
    }
}
