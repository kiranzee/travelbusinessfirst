<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'flight_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'source',
        'destination',
        'departure_date',
        'return_date',
        'passengers',
        'class_type'
    ];

    // Relationship to the Flight model
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }
}