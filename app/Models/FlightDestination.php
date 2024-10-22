<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDestination extends Model
{
    use HasFactory;
    protected $fillable = [
        'region',
        'title',
        'image',
        'image_seo',
        'banner_image',
        'banner_image_seo',
        'first_class_price',
        'business_class_price',
        'premier_economy_price',
        'economy_price',
        'link_name',
        'heading',
        'airline_image1',
        'airline_image2',
        'airline_image3',
        'airline_image4',
        'airline_image5',
        'airline_from1',
        'airline_to1',
        'airline_from2',
        'airline_to2',
        'airline_from3',
        'airline_to3',
        'airline_from4',
        'airline_to4',
        'airline_from5',
        'airline_to5',
        'airline1_price',
        'airline2_price',
        'airline3_price',
        'airline4_price',
        'airline5_price',
        'long_description',
        'status',
        'user_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}

