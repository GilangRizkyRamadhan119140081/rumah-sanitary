<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = "kontaks";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'alamat',
        'lat',
        'lng',
        'alamat_cabang',
        'lat_2',
        'lng_2',
        'email',
        'phone_tr_1',
        'overview'
    ];
}
