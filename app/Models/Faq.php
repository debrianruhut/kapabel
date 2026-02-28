<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['category', 'qa_list'];

    protected $casts = [
        'qa_list' => 'array',
    ];
}
