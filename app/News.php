<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',
    ];

    protected $fillable = [
        'text','order','category_id','image'
    ];

    public function Category(){
        return $this->belongsTo('App\Category');
    }
}
