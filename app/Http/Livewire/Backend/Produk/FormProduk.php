<?php

namespace App\Http\Livewire\Backend\Produk;

use App\Http\Livewire\Backend\Produk\Produk as ProdukProduk;
use App\Models\Produk;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\KategoriProduk;
use App\Models\Brand;
use App\Models\KategoriLabel;
use App\Models\KategoriTagsProduk;
use App\Models\TagProduk;
use App\Models\User;

class FormProduk extends Component
{
    use WithFileUploads;
    public Produk $produk;
    public $gambar, $kategori, $label, $brand, $user, $rating, $kategoriLayanan, $tag_produk;
    public $kategoritagsproduk;
    public $selectedTags;
    // public $market = [];
    public $informasi = [];

    protected $rules = [
        'produk.title'        => 'required',
        'produk.excerpt'      => 'required',
        'produk.slug'         => 'required',
        'produk.deskripsi'      => '',
        'produk.price'        => '',
        'produk.price_disc'   => '',
        'produk.kategori_id'  => 'required',
        'produk.label_id'  => '',
        'produk.brand_id'  => '',
        'produk.users_id'  => '',
        // 'market.*.title' => '',
        // 'market.*.url' => '',
        'produk.rating' => 'required|integer|min:1|max:5',
        'produk.informasi' => '',
        'informasi.*.name' => '',
        'informasi.*.value' => '',
    ];

    public function mount($id = null)
    {
        $this->produk = new Produk();
        $this->kategoriLayanan = KategoriTagsProduk::get();
        if ($id) {
            $this->produk = Produk::with('fasilitas')->findOrFail($id);
            if ($this->produk->informasi) {
                $this->informasi = json_decode($this->produk->informasi, true);
            }
        }else{
            $this->informasi = [];
        }

        info($this->informasi);

        $this->kategori = KategoriProduk::get();
        $this->label = KategoriLabel::get();
        $this->brand = Brand::get();
        $this->user = User::whereHas('roles', function ($query) {
            $query->where('id', 2); // Menambahkan kriteria filter untuk role_id = 2
        })->get();
    }

    public function addInfo()
    {
        if (empty($this->informasi)) {
            $this->informasi[] = ['name' => '', 'value' => ''];
        } else {
            // Jika $informasi tidak kosong, tambahkan elemen baru setelah elemen terakhir
            $this->informasi[] = ['name' => '', 'value' => ''];
        }
    }

    public function removeInfo($index)
    {
        unset($this->informasi[$index]);
    }

    private function calculateDiscountPercentage($price, $price_disc)
    {
        if ($price > 0) {
            return (($price - $price_disc) / $price) * 100;
        } else {
            return 0;
        }
    }
    // public function addMarket()
    // {
    //     if (empty($this->market)) {
    //         $this->market[] = ['title' => '', 'url' => ''];
    //     } else {
    //         $this->market[] = ['title' => '', 'url' => ''];
    //     }
    // }

    // public function removeMarket($index)
    // {
    //     unset($this->market[$index]);
    // }

    public function render()
    {
        return view('livewire.backend.produk.form-produk');
    }

    public function updatedProduk($value, $key)
    {
        if ($key == 'title') {
            $this->produk->slug = Str::slug($value);
            $this->validateOnly('produk.slug');
        }
    }

    public function save()
{
    info($this->produk);
    info($this->informasi);
    if ($this->produk['brand_id'] === '') {
        $this->produk['brand_id'] = null;
    }
    if ($this->produk['users_id'] === '') {
        $this->produk['users_id'] = null;
    }
    $this->validate();

    // Validasi hanya jika ada file gambar yang diunggah
    if ($this->gambar) {
        $this->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:250',
        ]);
    }

    $this->validate([
        'produk.slug' => 'required|unique:produk,slug,' . $this->produk->id,
    ]);

    $this->produk->informasi = $this->informasi ? json_encode($this->informasi) : null;
    // $this->produk->diskon = $this->calculateDiscountPercentage($this->produk->price, $this->produk->price_disc);

    // Hanya menyimpan gambar jika ada file gambar yang diunggah
    if ($this->gambar) {
        $gambarPath = $this->gambar->store('sanitary/produk', 's3');
        $this->produk->image = $gambarPath;
    }

    try {
        $this->produk->save();
        if ($this->rating) {
            Produk::updateOrCreate(
                // ['produk_id' => $this->produk->id],
                ['rating' => $this->rating]
            );
        }
        if ($this->tag_produk) {
            TagProduk::where('produk_id', $this->produk->id)->delete();
            $this->produk->fasilitas()->attach($this->tag_produk);
        }
        $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Produk berhasil ditambahkan"]);

        redirect(route('data-produk'));
    } catch (\Throwable $th) {
        Log::error($th);
        $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Produk tidak berhasil ditambahkan"]);
    }
}

}
