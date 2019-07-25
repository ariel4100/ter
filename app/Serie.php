<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image','family_id','brand_id','model_id','subfamily_id'
    ];

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function subfamily()
    {
        return $this->belongsTo('App\Subfamily');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function model()
    {
        return $this->belongsTo('App\Models');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
