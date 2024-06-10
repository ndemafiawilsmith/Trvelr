<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    protected $table = 'country';

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'countrycode',
        'countryname',
        'code'
    ];


     // Define the relationship with the Itinerary model
     public function itineraries()
     {
         return $this->hasMany(itinerarie::class, 'destination');
     }

}
