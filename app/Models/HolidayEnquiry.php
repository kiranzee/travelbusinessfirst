<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'best_of_activity_id','holiday_date','customer_name', 'customer_email', 'customer_phone', 'customer_comments', 'latest_offers','status'
    ];

    public function bestofactivity()
    {
        return $this->belongsTo(BestOfActivity::class, 'best_of_activity_id');
    }
}
