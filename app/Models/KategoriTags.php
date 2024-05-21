<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTags extends Model
{
    use HasFactory;

    protected $table = "kategori_tags";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'title',
        'slug',
        // 'blog_id'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'tags', 'blog_id', 'kategori_tags_id');
    }

    // public function blogs()
    // {
    //     return $this->belongsTo(Blog::class, 'blog_id');
    // }

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
