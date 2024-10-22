<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popularflightdestination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'first_class_price', 'business_class_price',
        'premier_economy_price', 'economy_price', 'status', 'user_id',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
