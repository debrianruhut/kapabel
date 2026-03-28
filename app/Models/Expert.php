<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expert extends Model
{

use SoftDeletes;
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
