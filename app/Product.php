<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable=[
        'category_id','product_name','product_description','product_name','mrp','discount_available','image1','image2','image3','image4','image5','product_available','quantity','status',
        
    ];
    public function Productcategories()
    {
        return $this->hasMany(Productcategorie::class);
    }
    
     
}

