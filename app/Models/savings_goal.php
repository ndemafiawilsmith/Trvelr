<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savings_goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'itinerary_id',
        'goal_amount',
        'saved_amount',
        'goal_deadline',
        'payment_schedule',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function itinerary()
    {
        return $this->belongsTo(itinerarie::class);
    }

    public function addSavings($amount, $id)
    {
        // Getting Previos Record
        $savings = savings_goal::findorfail($id)->get();
        // Adding New record plus previous record and saving
        $savings::update(['saved_amount', $amount + $savings->saved_amount]);
    }


}
