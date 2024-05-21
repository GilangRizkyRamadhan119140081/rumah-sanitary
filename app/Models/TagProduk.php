<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProduk extends Model
{
    use HasFactory;

    protected $table = "tag_produk";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'produk_id',
        'kategori_tags_produk_id'
    ];

    // public function blogs()
    // {
    //     return $this->belongsTo(Blog::class, 'blog_id');
    // }

    // public function kategori_tags()
    // {
    //     return $this->belongsTo(KategoriTags::class, 'kategori_tags_id');
    // }



    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
