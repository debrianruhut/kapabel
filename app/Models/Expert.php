<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
protected $fillable = [
        'name',
        'position',
        'bio',
        'photo',
        'linkedin',
        'email',
        'is_active',
        'order',
        'certifications',
        'experiences',
    ];

    // Cast JSON menjadi array agar terbaca oleh Repeater
    protected $casts = [
        'is_active' => 'boolean',
        'certifications' => 'array',
        'experiences' => 'array',
    ];
}
