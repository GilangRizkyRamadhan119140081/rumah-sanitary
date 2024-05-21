<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = "about_us";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'about_us',
        'customer',
        'start_year',
        'product_order',
        'quality_product'
    ];
}
