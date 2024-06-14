<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countryDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'description',
        'name',
        'capital_city',
        'official_languages',
        'currency',
        'population',
        'time_zones',
        'flag',
    ];

    // Add Realtionships


}
