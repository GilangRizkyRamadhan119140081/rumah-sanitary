<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;
    protected $table = "personal_statement";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'title',
        'image',
        'statement',
    ];
}
