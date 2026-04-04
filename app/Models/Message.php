<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'service_interest',
        'message',
        'is_read',
        'is_replied',
        'phone',
        'company',
        'budget',
        'timeline',
        'how_did_you_hear',
    ];
}
