<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamily extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image','family_id',
    ];

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function serie()
    {
        return $this->hasMany('App\Serie');
    }
}
