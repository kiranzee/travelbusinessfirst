<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightPartner extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'status',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
