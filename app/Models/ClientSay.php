<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSay extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'comments',
        'rating',
        'image',
        'status',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
