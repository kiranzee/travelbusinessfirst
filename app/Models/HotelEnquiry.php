<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelEnquiry extends Model
{
    use HasFactory;
    protected $fillable =[        
        'destination',
        'checkin',
        'checkout',
        'noofnightstay',
        'starhotel',
        'Roomtype',
        'adultcount',
        'childcount',
        'infantcount',
        'noofrooms',
        'customer_name',
        'customer_phone',
        'customer_email',
        'customer_comments'
    ];
}
