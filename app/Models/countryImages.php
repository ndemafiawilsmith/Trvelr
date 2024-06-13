<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countryImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'previewURL',
        'imageURL',
        'tags',
        'status',
        'type'
    ];
}