<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'source',
        'destination',
        'departure_date',
        'return_date',
        'customer_phone',
        'customer_email',
    ];
}
