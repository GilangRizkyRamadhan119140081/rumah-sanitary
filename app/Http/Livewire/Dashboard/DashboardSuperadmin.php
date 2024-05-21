<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Blog;
use App\Models\Produk;
use Livewire\Component;

class DashboardSuperadmin extends Component
{

    public $layanan, $produk, $blogs;

    public function mount()
    {
        $this->produk = Produk::get();
        $this->blogs = Blog::get();
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-superadmin');
    }
}
