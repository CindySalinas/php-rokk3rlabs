<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

    public function shoppingcarts()
    {
        return $this->belongsToMany('App\Shoppingcart')->withPivot(['quantity'])->withTimestamps();
    }
}
