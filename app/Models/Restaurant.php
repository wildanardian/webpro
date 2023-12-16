<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'address',
        'opening_day_from',
        'opening_day_to',
        'opening_hour_from',
        'opening_hour_to',
        'contact',
        'image',
    ];

    /**
     * Get the user that owns the restaurant.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
