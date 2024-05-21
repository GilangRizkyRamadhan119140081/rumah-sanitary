<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = "tags";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'blog_id',
        'kategori_tags_id'
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
