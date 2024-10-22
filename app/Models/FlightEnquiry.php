<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'passengers', 'class_type', 'customer_name', 'customer_email', 'customer_phone', 'customer_comments', 'latest_offers'
    ];

    public function flightDetailsEnquiry()
    {
        return $this->hasMany(FlightDetailsEnquiry::class, 'flight_enquiry_id');
    }
}
