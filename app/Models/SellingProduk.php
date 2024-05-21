<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingProduk extends Model
{
    use HasFactory;

    protected $table = "selling_produk";
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
