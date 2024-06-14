<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itinerarie extends Model
{
    use HasFactory;

     // Define the fillable properties to allow mass assignment
     protected $fillable = [
        'user_id',
        'title',
        'destination',
        'budget',
        'start_date',
        'end_date',
        'activities',
        'travel_companions'
    ];

    // Cast the JSON columns to arrays
    protected $casts = [
        'start_date',
        'end_date',
        'activities' => 'array',
        'travel_companions' => 'array',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(country::class, 'destination');
    }
}
