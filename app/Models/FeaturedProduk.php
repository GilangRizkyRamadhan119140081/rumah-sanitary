<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProduk extends Model
{
    use HasFactory;

    protected $table = "featured_produk";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'produk_id',
    ];

    public function data_produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
