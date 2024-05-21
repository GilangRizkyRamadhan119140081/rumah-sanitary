<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'excerpt',
        'image',
        'kategori_id',
        'tags_id',
        'status',
        'published_at',
        'created_by'
    ];

    public function author(){
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function fasilitas()
    {
        return $this->belongsToMany(KategoriTags::class, 'tags', 'blog_id', 'kategori_tags_id');
    }

    public function kategori_blog()
    {
        return $this->belongsTo(KategoriBlog::class, 'kategori_id');
    }

    public function tags()
    {
        return $this->belongsTo(Tags::class, 'tags_id');
    }

}
