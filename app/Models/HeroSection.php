<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'description',
        'image',
        'status',
        'user_id'
    ];
}
