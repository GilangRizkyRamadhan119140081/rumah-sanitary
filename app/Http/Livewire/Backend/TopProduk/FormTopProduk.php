<?php

namespace App\Http\Livewire\Backend\TopProduk;

use App\Models\TopProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormTopProduk extends Component
{
    use WithFileUploads;
    public TopProduk $topproduk;
    public $gambar, $produk;

    protected $rules = [
        'topproduk.produk_id'  => 'required',
    ];

    public function mount($id = null)
    {

        $this->topproduk = new TopProduk();
        if ($id) {
            $this->topproduk = TopProduk::findOrFail($id);
        }

        $this->produk = Produk::get();
    }

    public function render()
    {
        return view('livewire.backend.topproduk.form-topproduk');
    }

    public function save()
    {
        $this->validate();

        try {
            $this->topproduk->save();
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Top Produk berhasil ditambahkan"]);

            redirect(route('data-top-produk'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Top produk tidak berhasil ditambahkan"]);
        }
    }
}
