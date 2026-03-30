<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Expert extends Model
{

use SoftDeletes;
protected $fillable = [
        'name',
        'slug',
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
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    // Cast JSON menjadi array agar terbaca oleh Repeater
    protected $casts = [
        'is_active' => 'boolean',
        'certifications' => 'array',
        'experiences' => 'array',
    ];
}
