<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
class Productdesc extends Controller
{
    public function index(Request $request,$id)
    {
        
    $pid=  Product::select('category_id')->where('product_id',base64_decode($id))->get();
  
              $alldata['alldata'] = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
    ->where('products.product_id',base64_decode($id))
                               ->where('products.status','1')
    ->get();

              $alldata['similars'] = DB::table('products')
    ->select('products.product_id','products.category_id','products.product_name','products.product_description','products.mrp','products.discount_available','products.product_available','products.image1','products.image2','products.image3','products.image4','products.image5','products.status','productcategories.category_name','productcategories.category_description')
    ->join('productcategories', 'productcategories.category_id', '=', 'products.category_id')
    ->whereNotIn('products.product_id',[base64_decode($id)])
                      ->where('products.category_id',$pid['0']->category_id)
                               ->where('products.status','1')
                       ->orderBy('products.product_id','DESC')
                                   ->limit('5')
    ->get();
              
   return view('customer.product_desc',$alldata);
    }
}
