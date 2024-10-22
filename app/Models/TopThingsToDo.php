<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopThingsToDo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'image_seo',
        'short_description',
        'price',
        'rating',
        'long_description',
        'status',
        'user_id'
    ];
}
