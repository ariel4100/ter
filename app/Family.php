<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image',
    ];


    public function brand()
    {
        return $this->hasMany('App\Brand');
    }

    public function subfamily()
    {
        return $this->hasMany('App\Subfamily');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
//
//    public function model()
//    {
//        return $this->hasMany('App\Models');
//    }
}
