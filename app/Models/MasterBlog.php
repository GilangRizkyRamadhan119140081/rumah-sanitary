<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBlog extends Model
{
    use HasFactory;

    protected $table = "relation_blog";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'blog_id',
        'kategori_id'
    ];

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
