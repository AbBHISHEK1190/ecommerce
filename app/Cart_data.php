<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_data extends Model
{
   protected $primaryKey = 'cart_id';
    protected $fillable=['user_id','product_id','quantity',];
}
