<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreDestination extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'image_seo',
        'price',
        'status',
        'user_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}
