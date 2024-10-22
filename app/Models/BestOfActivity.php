<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestOfActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'image_seo',
        'price',
        'rating',
        'rating_count',
        'long_description',
        'cancellation',
        'package_heading',
        'status',
        'user_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}
