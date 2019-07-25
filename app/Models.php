<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $table = 'models';

    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image','family_id','brand_id'
    ];

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function serie()
    {
        return $this->hasMany('App\Serie','model_id');
    }
}
