<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productcategorie extends Model
{
    protected $primaryKey = 'category_id';
    //
     protected $fillable = [
        'category_name', 'category_description', 'cat_image','status',
    ];
     public function Products()
    {
        return $this->hasMany(Product::class);
    }
   public function getid()
    {
            return $this->hasMany('App\Productcategorie','category_id');

    }
}
