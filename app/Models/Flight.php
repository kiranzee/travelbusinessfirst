<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'destination',
        'start_date',
        'end_date',
        'airline',
        'logo',
        'route',
        'route2',
        'route3',
        'adult_fare',
        'status',
        'from_departure',
        'from_arrival',
        'from_duration',
        'to_departure',
        'to_arrival',
        'to_duration',
        'class',
        'refundable',
        'meal',
        'weight'
    ];
}
