<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTagsProduk extends Model
{
    use HasFactory;

    protected $table = "kategori_tag_produk";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'title',
        'slug',
    ];

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'tag_produk', 'produk_id', 'kategori_tags_produk_id');
    }

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
