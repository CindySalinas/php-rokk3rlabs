<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products(Request $request)
    {
        return $this->belongsToMany('App\Product')->withPivot(['quantity'])->withTimestamps();
    }
}
