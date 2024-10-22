<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetailsEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'flight_enquiry_id', 'from', 'to', 'departure_date', 'return_date'
    ];

    public function flightEnquiry()
    {
        return $this->belongsTo(FlightEnquiry::class, 'flight_enquiry_id');
    }
}
