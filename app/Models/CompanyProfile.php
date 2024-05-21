<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $table = "company_profile";
    protected $primaryKey = "id";
    // protected $guarded = [];

    protected $fillable = [
        'title',
        'file'
    ];

    /**
     * Get the news associated with the Jenis Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
}
