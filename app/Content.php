<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',
        'video' => 'array',
        'file' => 'array'
    ];

    protected $fillable = [
        'text', 'image', 'video','file','order','section'
    ];
}
