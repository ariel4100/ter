<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',

    ];

    protected $fillable = [
        'order', 'text','image','family_id','brand_id','mode_id','serie_id','subfamily_id'
    ];

    public function subfamily()
    {
        return $this->belongsTo('App\Subfamily');
    }

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function model()
    {
        return $this->belongsTo('App\Models');
    }

    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    public function related() {
        return $this->belongsToMany('App\Product','related_products','product_id','related_id');
    }
}
