<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Client extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'slug',
        'company_name',
        'company_email',
        'company_phone',
        'position',
        'company_industry',
    ];
    public function setCompanyNameAttribute($value)
    {
        $this->attributes['company_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
