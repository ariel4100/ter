<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $casts = [
        'text' => 'array',

    ];

    protected $fillable = [
        'order', 'text', 'section','image',
    ];
}
