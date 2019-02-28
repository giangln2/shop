<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function category()
    {
        return $this->belongsToMany('App\Category', 'product_category', 'product_id',
            'category_id');
    }
}
