<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    use HasFactory;

    protected $table = "brosur";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'title',
        'image'
    ];

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
