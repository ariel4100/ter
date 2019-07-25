<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image','family_id'
    ];

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function model()
    {
        return $this->hasMany('App\Models');
    }
}
