<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $casts = [
        'text' => 'array',
    ];
    protected $fillable = [
        'section', 'text',
    ];
}
