<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['group_name', 'properties'];

    protected $casts = [
        'properties' => 'array',
    ];
}
