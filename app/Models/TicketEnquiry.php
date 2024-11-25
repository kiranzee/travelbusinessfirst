<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketEnquiry extends Model
{
    use HasFactory;
    protected $table = 'ticket_enquiries';
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
        'class_type',
        'status',
        'sales_amount',
        'user_id'
    ];

    // Relationship to the Flight model
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}
