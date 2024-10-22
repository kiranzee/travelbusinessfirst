<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airport extends Model
{
    use HasFactory;
    protected $fillable = [
        'airport_code',
        'airport_name',
        'city',
        'country_code'
    ];
}
