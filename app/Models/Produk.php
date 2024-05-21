<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = "produk";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'title',
        'slug',
        'image',
        'deskripsi',
        'excerpt',
        'price',
        'price_disc',
        'users_id',
        'kategori_id',
        'brand_id',
        'label_id',
        'rating'
    ];

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_id');
    }

    public function label_produk()
    {
        return $this->belongsTo(KategoriLabel::class, 'label_id');
    }

    public function brand_produk()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function sales_produk()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function relatedProducts()
    {
        return $this->hasMany(Produk::class, 'kategori_id', 'kategori_id')->limit(10);
    }
    public function fasilitas()
    {
        return $this->belongsToMany(KategoriTagsProduk::class, 'tag_produk', 'produk_id', 'kategori_tags_produk_id');
    }

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
